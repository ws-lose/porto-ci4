<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | My Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/auth.css') ?>">
</head>

<body class="auth-page">

<div class="auth-card">

    <h1 class="auth-title">Welcome back!</h1>
    <p class="auth-subtitle">
        Masuk ke akunmu untuk melanjutkan.
    </p>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="auth-alert auth-alert-success">
            <?= esc(session()->getFlashdata('success')) ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="auth-alert auth-alert-danger">
            <?= esc(session()->getFlashdata('error')) ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="auth-alert auth-alert-danger">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <div><?= esc($error) ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('login') ?>" method="POST">
        <?= csrf_field() ?>

        <div class="auth-field">
            <label class="auth-label">Username atau Email</label>
            <input
                type="text"
                name="identity"
                class="auth-input"
                placeholder="Masukkan username atau email"
                value="<?= esc(old('identity') ?? '') ?>"
                required
            >
        </div>

        <div class="auth-field">
            <label class="auth-label">Password</label>
            <input
                type="password"
                name="password"
                class="auth-input"
                placeholder="Masukkan password"
                required
            >
        </div>

        <button type="submit" class="auth-button">
            Sign In
        </button>
    </form>

    <div class="auth-footer">
        Belum punya akun?
        <a href="<?= site_url('signup') ?>">Daftar sekarang</a>
        <br><br>
        <a href="<?= site_url('/') ?>">← Kembali ke portfolio</a>
    </div>

</div>

</body>
</html>
