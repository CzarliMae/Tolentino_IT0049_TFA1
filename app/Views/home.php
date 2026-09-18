<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solei | Home</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body class="home-page">
    <header class="topbar">
        <div class="brand">Solei</div>
        <nav class="main-nav">
            <a href="<?= base_url('/') ?>" class="active">Home</a>
            <a href="<?= base_url('about') ?>">About</a>
            <a href="<?= base_url('customers') ?>">Customers</a>
            <a href="<?= base_url('users') ?>">Users</a>
        </nav>
    </header>

    <main class="page-shell">
        <section class="hero">
            <div class="hero-copy">
                <span class="eyebrow">Retail made simple</span>
                <h1>Manage sales with less hassle.</h1>
                <p>
                    A clean and easy-to-use point-of-sale system for tracking customers,
                    staff, and daily transactions from one place.
                </p>
                <div class="cta-row">
                    <a href="<?= base_url('customers') ?>" class="primary-btn">View Customers</a>
                    <a href="<?= base_url('users') ?>" class="secondary-btn">Manage Users</a>
                </div>
            </div>

            <div class="hero-panel">
                <div class="panel-card">
                    <div class="panel-header">
                        <span>Daily sales</span>
                        <span class="trend up">+12.5%</span>
                    </div>
                    <div class="amount">₱24,580</div>
                    <div class="mini-stats">
                        <div>
                            <strong>158</strong>
                            <span>Orders</span>
                        </div>
                        <div>
                            <strong>26</strong>
                            <span>New</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <article class="feature-card">
                <div class="feature-icon">01</div>
                <h2>Fast checkout</h2>
                <p>Process sales quickly with a straightforward dashboard.</p>
            </article>

            <article class="feature-card">
                <div class="feature-icon">02</div>
                <h2>Customer focus</h2>
                <p>Keep customer records organized and easy to access.</p>
            </article>

            <article class="feature-card">
                <div class="feature-icon">03</div>
                <h2>Team access</h2>
                <p>Manage users and roles in a simple, secure layout.</p>
            </article>
        </section>
    </main>
</body>
</html>