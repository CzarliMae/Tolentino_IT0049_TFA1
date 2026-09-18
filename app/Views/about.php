<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Solei</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body class="content-page">
    <header class="topbar">
        <div class="brand">Solei</div>
        <nav class="main-nav">
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('about') ?>" class="active">About</a>
            <a href="<?= base_url('customers') ?>">Customers</a>
            <a href="<?= base_url('users') ?>">Users</a>
        </nav>
    </header>

    <main class="page-shell narrow-shell">
        <section class="content-card about-card">
            <div class="section-heading">
                <span class="eyebrow">Our story</span>
                <h1>About Solei</h1>
            </div>

            <p class="about-text">
                Solei is a simple point-of-sale system designed to make daily sales,
                customer management, and staff tracking more organized and easier to use.
            </p>

            <div class="info-grid">
                <div class="info-box">
                    <h2>What we do</h2>
                    <p>Track customers, manage user access, and keep sales information clear and accessible.</p>
                </div>
                <div class="info-box">
                    <h2>Why it works</h2>
                    <p>Our design keeps the experience clean, focused, and easy for everyday operations.</p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>