(function () {
  /* ---------- 1) Aperture Accordion ---------- */
  document.querySelectorAll('.aperture').forEach(function (root) {
    var panels = root.querySelectorAll('.aperture-panel');
    function activate(p) {
      panels.forEach(function (x) { x.classList.toggle('active', x === p); });
    }
    panels.forEach(function (p) {
      p.addEventListener('mouseenter', function () {
        if (window.matchMedia('(hover: hover)').matches) activate(p);
      });
      p.addEventListener('click', function () { activate(p); });
      p.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); activate(p); }
      });
    });
  });

  /* ---------- 2) Fan Carousel ---------- */
  document.querySelectorAll('.fan').forEach(function (root) {
    var cards = Array.from(root.querySelectorAll('.fan-card'));
    var title = root.querySelector('.fan-title');
    var desc = root.querySelector('.fan-desc');
    var n = cards.length, cur = 0, timer;
    var mobile = function () { return window.innerWidth <= 768; };

    function render() {
      var gap = mobile() ? 110 : 235;
      cards.forEach(function (c, i) {
        var o = i - cur;
        if (o > n / 2) o -= n;
        if (o < -n / 2) o += n;
        var abs = Math.abs(o);
        var x = o * gap, rot = o * 9, y = abs * 28, s = 1 - abs * 0.08;
        c.style.transform = 'translateX(' + x + 'px) translateY(' + y + 'px) rotate(' + rot + 'deg) scale(' + s + ')';
        c.style.zIndex = 10 - abs;
        c.style.opacity = abs > 2 ? 0 : 1;
        c.style.pointerEvents = abs > 2 ? 'none' : 'auto';
        c.style.filter = abs === 0 ? 'none' : 'brightness(0.92)';
      });
      title.textContent = cards[cur].dataset.title;
      desc.textContent = cards[cur].dataset.desc;
    }
    function go(d) { cur = (cur + d + n) % n; render(); restart(); }
    function restart() { clearInterval(timer); timer = setInterval(function () { go(1); }, 4500); }

    root.querySelector('.fan-prev').addEventListener('click', function () { go(-1); });
    root.querySelector('.fan-next').addEventListener('click', function () { go(1); });
    cards.forEach(function (c, i) { c.addEventListener('click', function () { cur = i; render(); restart(); }); });
    root.addEventListener('mouseenter', function () { clearInterval(timer); });
    root.addEventListener('mouseleave', restart);

    var sx = null, stage = root.querySelector('.fan-stage');
    stage.addEventListener('pointerdown', function (e) { sx = e.clientX; });
    stage.addEventListener('pointerup', function (e) {
      if (sx !== null && Math.abs(e.clientX - sx) > 50) go(e.clientX < sx ? 1 : -1);
      sx = null;
    });
    window.addEventListener('resize', render);
    render(); restart();
  });

})();

/* ---------- 4) Lanyard ID Card (pendulum physics) ---------- */
(function () {
  var root = document.getElementById('lanyard');
  if (!root) return;
  var card = root.querySelector('.lanyard-card');
  var band = document.createElementNS('http://www.w3.org/2000/svg', 'path');
  var stripe = document.createElementNS('http://www.w3.org/2000/svg', 'path');
  band.setAttribute('class', 'band'); stripe.setAttribute('class', 'stripe');
  var svg = root.querySelector('.lanyard-strap');
  var old = svg.querySelector('path'); if (old) old.remove();
  svg.appendChild(band); svg.appendChild(stripe);

  var L = 190, G = 0.55, DAMP = 0.992;
  var W = function () { return root.clientWidth; };
  var ax = W() / 2, ay = -30;
  var x = ax + 60, y = ay + L - 10, px = x - 2, py = y; // posisi & posisi sebelumnya
  var angle = 0, dragging = false, gx = 0, gy = 0, running = false, visible = false;

  function constrain() {
    var dx = x - ax, dy = y - ay, d = Math.sqrt(dx * dx + dy * dy) || 1;
    if (d > L) { x = ax + dx / d * L; y = ay + dy / d * L; }
    var minY = ay + L * 0.35; // kartu tidak boleh terayun lebih tinggi dari ~70 derajat
    if (y < minY) {
      y = minY;
      var half = Math.sqrt(Math.max(L * L - (y - ay) * (y - ay), 0));
      x = ax + (x >= ax ? half : -half);
    }
  }
  function step() {
    ax = W() / 2;
    if (dragging) { px += (x - px) * 0.3; py += (y - py) * 0.3; } else {
      var vx = (x - px) * DAMP, vy = (y - py) * DAMP, v = Math.sqrt(vx * vx + vy * vy);
      if (v > 10) { vx *= 10 / v; vy *= 10 / v; }
      px = x; py = y; x += vx; y += vy + G;
    }
    constrain();
    var target = -Math.atan2(x - ax, y - ay) * 180 / Math.PI;
    angle += (target - angle) * 0.35;
    card.style.transform = 'translate(' + (x - card.offsetWidth / 2) + 'px,' + y + 'px) rotate(' + angle + 'deg)';
    var mx = (ax + x) / 2 + (x - ax) * 0.0, my = (ay + y) / 2;
    var sag = Math.min(14, Math.abs(x - px) * 3);
    var d = 'M' + ax + ',' + ay + ' Q' + (mx - sag) + ',' + my + ' ' + x + ',' + (y + 2);
    band.setAttribute('d', d); stripe.setAttribute('d', d);
  }
  function loop() { if (!visible) { running = false; return; } step(); requestAnimationFrame(loop); }
  function start() { if (!running) { running = true; requestAnimationFrame(loop); } }

  new IntersectionObserver(function (e) { visible = e[0].isIntersecting; if (visible) start(); }).observe(root);

  function pos(e) { var r = root.getBoundingClientRect(); return { x: e.clientX - r.left, y: e.clientY - r.top }; }
  card.addEventListener('pointerdown', function (e) {
    dragging = true; card.classList.add('dragging'); card.setPointerCapture(e.pointerId);
    var p = pos(e); gx = p.x - x; gy = p.y - y;
  });
  card.addEventListener('pointermove', function (e) {
    if (!dragging) return; var p = pos(e); x = p.x - gx; y = p.y - gy;
  });
  function release() { dragging = false; card.classList.remove('dragging'); }
  card.addEventListener('pointerup', release);
  card.addEventListener('pointercancel', release);
  step();
})();

/* ---------- 5) Intro lock + Reveal footer height ---------- */
(function () {
  setTimeout(function () {
    document.body.classList.remove('intro-lock');
    var i = document.getElementById('intro'); if (i) i.remove();
  }, 4500);

  var f = document.getElementById('revealFooter');
  if (!f) return;
  function setH() { document.documentElement.style.setProperty('--footer-h', f.offsetHeight + 'px'); }
  setH();
  if (window.ResizeObserver) new ResizeObserver(setH).observe(f);
  window.addEventListener('resize', setH);
  window.addEventListener('load', setH);
})();

/* ---------- 6) Portfolio Slider (geser otomatis, loop) ---------- */
(function () {
  var root = document.getElementById('pslider');
  if (!root) return;
  var track = root.querySelector('.ps-track');
  var originals = Array.from(track.children);
  originals.forEach(function (c) {
    var k = c.cloneNode(true); k.setAttribute('aria-hidden', 'true'); k.tabIndex = -1; track.appendChild(k);
  });
  var SPEED = 0.6, pos = 0, paused = false, visible = false, down = false, moved = false, sx = 0, sl = 0, raf = null;
  var half = function () { return track.scrollWidth / 2; };
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function loop() {
    raf = null;
    if (!visible) return;
    if (!paused && !down && !reduce) {
      pos += SPEED;
      if (pos >= half()) pos -= half();
      track.scrollLeft = pos;
    }
    raf = requestAnimationFrame(loop);
  }
  function kick() { if (!raf) raf = requestAnimationFrame(loop); }
  new IntersectionObserver(function (e) { visible = e[0].isIntersecting; if (visible) kick(); }).observe(root);

  root.addEventListener('mouseenter', function () { paused = true; });
  root.addEventListener('mouseleave', function () { paused = false; pos = track.scrollLeft; });
  track.addEventListener('touchstart', function () { paused = true; }, { passive: true });
  track.addEventListener('touchend', function () { setTimeout(function () { pos = track.scrollLeft; paused = false; }, 1200); }, { passive: true });

  track.addEventListener('pointerdown', function (e) {
    if (e.pointerType !== 'mouse') return;
    down = true; moved = false; sx = e.clientX; sl = track.scrollLeft;
  });
  window.addEventListener('pointermove', function (e) {
    if (!down) return;
    var dx = e.clientX - sx;
    if (Math.abs(dx) > 5) { moved = true; track.classList.add('dragging'); }
    if (moved) {
      var v = sl - dx, h = half();
      if (v < 0) { v += h; sl += h; } else if (v >= h) { v -= h; sl -= h; }
      track.scrollLeft = v; pos = v;
    }
  });
  window.addEventListener('pointerup', function () {
    if (!down) return; down = false; pos = track.scrollLeft; track.classList.remove('dragging');
  });
  track.addEventListener('click', function (e) { if (moved) { e.preventDefault(); moved = false; } }, true);
})();
