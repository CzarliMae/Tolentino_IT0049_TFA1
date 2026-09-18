<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Accounts | Solei</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body class="content-page">
    <header class="topbar">
        <div class="brand">Solei</div>
        <nav class="main-nav">
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('about') ?>">About</a>
            <a href="<?= base_url('customers') ?>" class="active">Customers</a>
            <a href="<?= base_url('users') ?>">Users</a>
        </nav>
    </header>

    <main class="page-shell narrow-shell">
        <section class="content-card">
            <div class="section-heading">
                <span class="eyebrow">Directory</span>
                <h1>Customer Accounts</h1>
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($customers as $customer): ?>
                            <tr>
                                <td><?= esc($customer['full_name']) ?></td>
                                <td><?= esc($customer['email']) ?></td>
                                <td><?= esc($customer['phone']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>