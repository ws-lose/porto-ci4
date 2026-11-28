<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- font awesome -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bitcount+Grid+Single:wght@100..900&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&family=Lavishly+Yours&display=swap" rel="stylesheet">
    <!-- asli -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/components.css') ?>">
</head>
<body class="intro-lock">
    <div id="intro" aria-hidden="true">
        <svg viewBox="0 0 900 220" class="intro-svg">
            <text x="450" y="115" text-anchor="middle" class="intro-text">Mohamad Zainal Arifin</text>
            <path class="intro-line" d="M150 160 C 300 205, 600 120, 750 165" />
        </svg>
        <p class="intro-sub">Portfolio</p>
    </div>

    <div class="site-main container-fluid bg-light p-2">
    <!--NAVBAR -->
        <div class="container-fluid rounded-pill bg-light mb-3 col border-bottom border-secondary fixed-top" style="height: 60px;"> 
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-1 mb-2 "> 
            <p class="text-primary fs-3 " style="position: relative; left: 30px; top: 10px; font-family: Lavishly Yours, cursive; ">Mohamad Zainal Arifin</p>        
            <ul class="nav col-6 col-md-auto mb-4 justify-content-center mb-md-0 "> 
                        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li> 
                        <li><a href="#portofolio" class="nav-link px-2">Portofolio</a></li> 
                        <li><a href="#contact" class="nav-link px-2">Contact</a></li> 
                        <li><a href="#about" class="nav-link px-2">About</a></li> 
                    </ul> 
                    <div class=""> 
                        <?php if (session()->get('isLoggedIn')): ?>
                            <span class="" style="position: relative; right: 20px; top: 8px;">
                                Halo, <?= esc(session()->get('name')) ?>
                            </span>
                            <a href="<?= site_url('logout') ?>" class="btn btn-primary" style="margin-right: 20px;">Logout</a> 

                        <?php else: ?>
                            <a href="<?= site_url('login') ?>" class="btn btn-outline-primary me-2">Login</a> 
                            <a href="<?= site_url('signup') ?>" class="btn btn-primary" style="margin-right: 20px;">Sign-up</a> 
                        <?php endif; ?>
                    </div> 
                </header> 
                    </div>

        
        <!-- MAIN CONTENT -->
        <div class="container ">
            <!-- CAROUSEL -->
        <div class="mt-5 mb-5 scroll-reveal">
            <div class="fan" id="fanCarousel">
                <div class="fan-stage">
                    <div class="fan-card" data-title="Divisi Humas" data-desc="Dokumentasi kegiatan dan kerja sama tim Divisi Humas."><img src="<?= base_url('assets/images/carousel1.png') ?>" alt="gambar1"></div>
                    <div class="fan-card" data-title="Divisi Humas" data-desc="Momen kebersamaan dan publikasi acara kampus."><img src="<?= base_url('assets/images/carousel2.png') ?>" alt="gambar2"></div>
                    <div class="fan-card" data-title="Kelompok 4 PBO" data-desc="Project kelompok mata kuliah Pemrograman Berorientasi Objek."><img src="<?= base_url('assets/images/carousel3.jpeg') ?>" alt="gambar3"></div>
                </div>
                <button class="fan-btn fan-prev" type="button" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="fan-btn fan-next" type="button" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
                <div class="fan-meta">
                    <h3 class="fan-title"></h3>
                    <p class="fan-desc"></p>
                </div>
            </div>
        </div>

        <!-- About Us -->
        <div class="container mt-5 bg-secondary bg-light pb-4 pt-1rem rounded-4 scroll-reveal"
     id="about">
            <div class="section-head"><h2 class="section-title">About Us</h2></div>
            <div class="container1 mt-5 mb-32">
        <div class="paragraf mb-8">  
            <p class="text mt-4 fs-2 fw-bold">Hii There!!<br>Welcome to My First Website</p>
            <p class="text fw-normal fs-6">Saya Arifin, mahasiswa semester V di Institut Teknologi Mojosari, ini adalah website portofolio pertama saya. Saya sedang belajar bahasa pemrogaman PHP.</p>
            <a type="button" href="https://wa.me/6285784533942" class="btn btn-outline-primary mt-4 align-items-center">Contact me</a>
            <p class="text-center text-socmed" style="position: relative; right: 90px;">Follow My Social Media</p>
            <div class="social-icons mt-1 d-flex gap-3 ">
            <a href="https://www.instagram.com/by_rips/" class="btn  mt-2" target="_blank"><i class="fa-brands fa-instagram icons icons-ig" ></i></a>
            <a href="https://www.facebook.com/profile.php?id=100040670052182" class="btn mt-2" target="_blank"><i class="fa-brands fa-facebook icons icons-fb"></i></a>
            <a href="https://github.com/ws-lose/" class="btn  mt-2" target="_blank"><i class="fa-brands fa-github icons icons-tT" ></i></a>
            <a href="https://wa.me/6285784533942" class="btn  mt-2" target="_blank"><i class="fa-brands fa-whatsapp icons icons-wa" ></i></a>
            </div>
        </div>

        <div class="img-profile">
            <div class="lanyard" id="lanyard">
                <svg class="lanyard-strap" aria-hidden="true"><path d="" /></svg>
                <div class="lanyard-card" tabindex="0" aria-label="Kartu profil, tarik untuk mengayunkan">
                    <div class="lanyard-clip"></div>
                    <div class="lanyard-hole"></div>
                    <img src="<?= base_url('assets/images/img-profile.png') ?>" alt="Profile Image" draggable="false">
                    <div class="lanyard-info">
                        <strong>Mohamad Zainal Arifin</strong>
                        <span>Web Developer &middot; IT Mojosari</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        <!-- What We Do -->
        <div class="porto sec container pb-5 scroll-reveal">
        <div class="section-head"><h2 class="section-title">What We Do</h2><p class="section-sub">Hal-hal yang bisa saya kerjakan, arahkan kursor ke tiap panel untuk melihat detailnya.</p></div>
        <div class="aperture">
            <div class="aperture-panel active" style="--bg: linear-gradient(135deg,#ff7a18,#af002d);" tabindex="0">
                <span class="aperture-index">01</span>
                <span class="aperture-label">Web Development</span>
                <div class="aperture-content">
                    <div class="aperture-icons"><i class="fa-brands fa-html5"></i><i class="fa-brands fa-css3-alt"></i><i class="fa-brands fa-js"></i></div>
                    <h3>Web Development</h3>
                    <p>Membangun website responsif yang cepat dan rapi, dari landing page sampai aplikasi web lengkap.</p>
                    <ul class="aperture-tags"><li>Landing Page</li><li>Company Profile</li><li>Web App</li><li>Responsive</li></ul>
                </div>
            </div>
            <div class="aperture-panel" style="--bg: linear-gradient(135deg,#1d976c,#0b4f6c);" tabindex="0">
                <span class="aperture-index">02</span>
                <span class="aperture-label">Backend Development</span>
                <div class="aperture-content">
                    <div class="aperture-icons"><i class="fa-brands fa-php"></i><i class="fa-solid fa-server"></i></div>
                    <h3>Backend Development</h3>
                    <p>Membuat logika server dengan PHP dan CodeIgniter 4: autentikasi, form, validasi, dan CRUD.</p>
                    <ul class="aperture-tags"><li>PHP</li><li>CodeIgniter 4</li><li>Login System</li><li>REST API</li></ul>
                </div>
            </div>
            <div class="aperture-panel" style="--bg: linear-gradient(135deg,#0f9b8e,#0b3b8c);" tabindex="0">
                <span class="aperture-index">03</span>
                <span class="aperture-label">Database Management</span>
                <div class="aperture-content">
                    <div class="aperture-icons"><i class="fa-solid fa-database"></i></div>
                    <h3>Database Management</h3>
                    <p>Merancang dan mengelola basis data MySQL, mulai dari ERD, tabel, relasi, hingga migrasi dan query.</p>
                    <ul class="aperture-tags"><li>MySQL</li><li>ERD</li><li>Migration</li><li>Query</li></ul>
                </div>
            </div>
            <div class="aperture-panel" style="--bg: linear-gradient(135deg,#8e2de2,#4a00e0);" tabindex="0">
                <span class="aperture-index">04</span>
                <span class="aperture-label">UI/UX Design</span>
                <div class="aperture-content">
                    <div class="aperture-icons"><i class="fa-solid fa-paint-brush"></i><i class="fa-brands fa-figma"></i></div>
                    <h3>UI/UX Design</h3>
                    <p>Mendesain antarmuka yang bersih dan nyaman dipakai, dari wireframe sampai prototype interaktif.</p>
                    <ul class="aperture-tags"><li>Wireframe</li><li>Prototype</li><li>Figma</li><li>Design System</li></ul>
                </div>
            </div>
        </div>
        </div>

        <!-- card my tech -->
        <div class="tech sec container rounded-4 pb-4 scroll-reveal">
            <div class="section-head"><h2 class="section-title">My Tech</h2><p class="section-sub">Teknologi dan tools yang saya pelajari dan gunakan.</p></div>
            <div class="tech-grid">
                <div class="tech-group">
                    <h3><i class="fa-solid fa-display"></i>Frontend</h3>
                    <div class="tech-chips">
                        <span class="tech-chip"><i class="fa-brands fa-html5" style="color:#e44d26"></i>HTML5</span>
                        <span class="tech-chip"><i class="fa-brands fa-css3-alt" style="color:#264de4"></i>CSS3</span>
                        <span class="tech-chip"><i class="fa-brands fa-js" style="color:#f0c000"></i>JavaScript</span>
                        <span class="tech-chip"><i class="fa-brands fa-bootstrap" style="color:#7952b3"></i>Bootstrap</span>
                        <span class="tech-chip"><i class="fa-brands fa-react" style="color:#00b4d8"></i>React</span>
                    </div>
                </div>
                <div class="tech-group">
                    <h3><i class="fa-solid fa-server"></i>Backend</h3>
                    <div class="tech-chips">
                        <span class="tech-chip"><i class="fa-brands fa-php" style="color:#777bb3"></i>PHP</span>
                        <span class="tech-chip"><i class="fa-solid fa-fire" style="color:#ee4623"></i>CodeIgniter</span>
                        <span class="tech-chip"><i class="fa-brands fa-java" style="color:#e76f00"></i>Java</span>
                        <span class="tech-chip"><i class="fa-brands fa-python" style="color:#3776ab"></i>Python</span>
                        <span class="tech-chip"><i class="fa-brands fa-node-js" style="color:#3c873a"></i>Node.js</span>
                    </div>
                </div>
                <div class="tech-group">
                    <h3><i class="fa-solid fa-database"></i>Database</h3>
                    <div class="tech-chips">
                        <span class="tech-chip"><i class="fa-solid fa-database" style="color:#00758f"></i>MySQL</span>
                        <span class="tech-chip"><i class="fa-solid fa-table" style="color:#f89c0e"></i>phpMyAdmin</span>
                        <span class="tech-chip"><i class="fa-solid fa-code" style="color:#0d6efd"></i>SQL</span>
                    </div>
                </div>
                <div class="tech-group">
                    <h3><i class="fa-solid fa-screwdriver-wrench"></i>Tools & Design</h3>
                    <div class="tech-chips">
                        <span class="tech-chip"><i class="fa-brands fa-git-alt" style="color:#f05032"></i>Git</span>
                        <span class="tech-chip"><i class="fa-brands fa-github" style="color:#111827"></i>GitHub</span>
                        <span class="tech-chip"><i class="fa-solid fa-code" style="color:#007acc"></i>VS Code</span>
                        <span class="tech-chip"><i class="fa-brands fa-figma" style="color:#a259ff"></i>Figma</span>
                        <span class="tech-chip"><i class="fa-brands fa-linux" style="color:#333333"></i>Linux</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Project -->
    <div class="project sec rounded-4 text-center" id="portofolio" style="padding: 0px 24px 32px 24px;">
        <div class="section-head"><h2 class="section-title">Portofolio</h2><p class="section-sub">This is my project description of my latest work.</p></div>
    <div class="pslider" id="pslider">
        <div class="ps-track">
            <a class="ps-card" href="<?= site_url('praktikum1') ?>" target="_blank">
                <div class="ps-thumb"><div class="ps-dots"><i></i><i></i><i></i></div><img src="<?= base_url('assets/images/P1.png') ?>" alt="Praktikum 1" draggable="false"></div>
                <div class="ps-body">
                    <span class="ps-num">01</span>
                    <h5>Praktikum 1</h5>
                    <p>Create a simple text input fields.</p>
                    <span class="ps-link">Lihat Project <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a class="ps-card" href="<?= site_url('praktikum2') ?>" target="_blank">
                <div class="ps-thumb"><div class="ps-dots"><i></i><i></i><i></i></div><img src="<?= base_url('assets/images/P2.png') ?>" alt="Praktikum 2" draggable="false"></div>
                <div class="ps-body">
                    <span class="ps-num">02</span>
                    <h5>Praktikum 2</h5>
                    <p>Create a simple calculator.</p>
                    <span class="ps-link">Lihat Project <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a class="ps-card" href="<?= site_url('praktikum3') ?>" target="_blank">
                <div class="ps-thumb"><div class="ps-dots"><i></i><i></i><i></i></div><img src="<?= base_url('assets/images/P3.png') ?>" alt="Praktikum 3" draggable="false"></div>
                <div class="ps-body">
                    <span class="ps-num">03</span>
                    <h5>Praktikum 3</h5>
                    <p>Create a checkbox input fields.</p>
                    <span class="ps-link">Lihat Project <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a class="ps-card" href="<?= site_url('praktikum4') ?>" target="_blank">
                <div class="ps-thumb"><div class="ps-dots"><i></i><i></i><i></i></div><img src="<?= base_url('assets/images/P4.png') ?>" alt="Praktikum 4" draggable="false"></div>
                <div class="ps-body">
                    <span class="ps-num">04</span>
                    <h5>Praktikum 4</h5>
                    <p>Create form with a combobox.</p>
                    <span class="ps-link">Lihat Project <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a class="ps-card" href="<?= site_url('praktikum5') ?>" target="_blank">
                <div class="ps-thumb"><div class="ps-dots"><i></i><i></i><i></i></div><img src="<?= base_url('assets/images/P5.png') ?>" alt="Praktikum 5" draggable="false"></div>
                <div class="ps-body">
                    <span class="ps-num">05</span>
                    <h5>Praktikum 5</h5>
                    <p>Create a simple form with a textarea.</p>
                    <span class="ps-link">Lihat Project <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a class="ps-card" href="<?= site_url('praktikum6') ?>" target="_blank">
                <div class="ps-thumb"><div class="ps-dots"><i></i><i></i><i></i></div><img src="<?= base_url('assets/images/P6.png') ?>" alt="Praktikum 6" draggable="false"></div>
                <div class="ps-body">
                    <span class="ps-num">06</span>
                    <h5>Praktikum 6</h5>
                    <p>Create a simple completely form.</p>
                    <span class="ps-link">Lihat Project <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a class="ps-card" href="<?= site_url('praktikum7') ?>" target="_blank">
                <div class="ps-thumb"><div class="ps-dots"><i></i><i></i><i></i></div><img src="<?= base_url('assets/images/F7LOGIN.png') ?>" alt="Praktikum 7" draggable="false"></div>
                <div class="ps-body">
                    <span class="ps-num">07</span>
                    <h5>Praktikum 7</h5>
                    <p>Create a simple login form.</p>
                    <span class="ps-link">Lihat Project <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a class="ps-card" href="<?= site_url('praktikum8') ?>" target="_blank">
                <div class="ps-thumb"><div class="ps-dots"><i></i><i></i><i></i></div><img src="<?= base_url('assets/images/F8SIGNUP.png') ?>" alt="Praktikum 8" draggable="false"></div>
                <div class="ps-body">
                    <span class="ps-num">08</span>
                    <h5>Praktikum 8</h5>
                    <p>Create a simple signup form.</p>
                    <span class="ps-link">Lihat Project <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a class="ps-card" href="<?= site_url('utsksi') ?>" target="_blank">
                <div class="ps-thumb"><div class="ps-dots"><i></i><i></i><i></i></div><img src="<?= base_url('assets/images/P9PORTO.png') ?>" alt="Praktikum 9" draggable="false"></div>
                <div class="ps-body">
                    <span class="ps-num">09</span>
                    <h5>Praktikum 9</h5>
                    <p>Create a simple app criptografi.</p>
                    <span class="ps-link">Lihat Project <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
        </div>
    </div>
    </div>
        
    <div class="flex-shrink-0 border" id="contact">
        <!-- Contact Me Page-->
        <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5 scroll-reveal">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">We're  appreciate it</h1>
                    <p class="lead fw-normal text-muted mb-0">We'd love to hear from you</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    
                    <form id="contactForm" method="POST"
                    action="<?= site_url('contact') ?>">

                    <?= csrf_field() ?>
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="username" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                        </div>

                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                        </div>

                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phoneNumber" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                        </div>

                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                        </div>

                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary" id="submitButton" name="submitButton" type="submit">Submit</button></div>

                        <!-- Submit success message-->
                        <?php if (session()->getFlashdata('success')): ?>
                            <div class="alert alert-success">
                                <?= esc(session()->getFlashdata('success')) ?>
                            </div>
                        <?php endif; ?>

                        <!-- Submit error message-->
                        <?php if (session()->getFlashdata('errors')): ?>
                            <div class="alert alert-danger">
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <p class="mb-0"><?= esc($error) ?></p>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
</div>
    <!-- Footer (reveal) -->
    <footer class="reveal-footer" id="revealFooter">
        <div class="rf-inner container">
            <div class="rf-top">
                <div>
                    <p class="rf-kicker">Let's connect</p>
                    <h2 class="rf-title">Punya ide atau project?<br>Ayo ngobrol.</h2>
                    <a class="rf-cta" href="https://wa.me/6285784533942" target="_blank"><i class="fa-brands fa-whatsapp"></i> Hubungi via WhatsApp</a>
                </div>
                <nav class="rf-cols">
                    <div>
                        <h6>Menu</h6>
                        <a href="#">Home</a><a href="#about">About</a><a href="#portofolio">Portofolio</a><a href="#contact">Contact</a>
                    </div>
                    <div>
                        <h6>Social</h6>
                        <a href="https://www.instagram.com/by_rips/" target="_blank">Instagram</a>
                        <a href="https://www.facebook.com/profile.php?id=100040670052182" target="_blank">Facebook</a>
                        <a href="https://github.com/ws-lose/" target="_blank">GitHub</a>
                        <a href="https://wa.me/6285784533942" target="_blank">WhatsApp</a>
                    </div>
                </nav>
            </div>
            <div class="rf-word" aria-hidden="true">ARIFIN</div>
            <div class="rf-bottom">
                <span>Copyright &copy; Mohamad Zainal Arifin 2026</span>
                <span><a href="#!">Privacy</a> &middot; <a href="#!">Terms</a></span>
                <a href="#" class="rf-top-btn">Kembali ke atas <i class="fa-solid fa-arrow-up"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script src="<?= base_url('assets/js/components.js') ?>"></script>
</body>
</html>