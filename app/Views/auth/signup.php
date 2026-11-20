<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | My Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/auth.css') ?>">
</head>

<body class="auth-page">

<div class="auth-card">

    <h1 class="auth-title">Create account</h1>
    <p class="auth-subtitle">
        Buat akun baru untuk bergabung.
    </p>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="auth-alert auth-alert-danger">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <div><?= esc($error) ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('signup') ?>" method="POST">
        <?= csrf_field() ?>

        <div class="auth-field">
            <label class="auth-label">Nama Lengkap</label>
            <input
                type="text"
                name="name"
                class="auth-input"
                placeholder="Nama lengkap"
                value="<?= esc(old('name') ?? '') ?>"
                required
            >
        </div>

        <div class="auth-field">
            <label class="auth-label">Username</label>
            <input
                type="text"
                name="username"
                class="auth-input"
                placeholder="Buat username"
                value="<?= esc(old('username') ?? '') ?>"
                required
            >
        </div>

        <div class="auth-field">
            <label class="auth-label">Email</label>
            <input
                type="email"
                name="email"
                class="auth-input"
                placeholder="nama@email.com"
                value="<?= esc(old('email') ?? '') ?>"
                required
            >
        </div>

        <div class="auth-field">
            <label class="auth-label">Password</label>
            <input
                type="password"
                name="password"
                class="auth-input"
                placeholder="Minimal 8 karakter"
                required
            >
        </div>

        <div class="auth-field">
            <label class="auth-label">Konfirmasi Password</label>
            <input
                type="password"
                name="confirm_password"
                class="auth-input"
                placeholder="Ulangi password"
                required
            >
        </div>

        <button type="submit" class="auth-button">
            Create Account
        </button>
    </form>

    <div class="auth-footer">
        Sudah punya akun?
        <a href="<?= site_url('login') ?>">Login di sini</a>
        <br><br>
        <a href="<?= site_url('/') ?>">← Kembali ke portfolio</a>
    </div>

</div>

</body>
</html>
