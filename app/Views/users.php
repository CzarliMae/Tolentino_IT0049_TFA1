<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts | Solei</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body class="content-page">
    <header class="topbar">
        <div class="brand">Solei</div>
        <nav class="main-nav">
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('about') ?>">About</a>
            <a href="<?= base_url('customers') ?>">Customers</a>
            <a href="<?= base_url('users') ?>" class="active">Users</a>
        </nav>
    </header>

    <main class="page-shell narrow-shell">
        <section class="content-card">
            <div class="section-heading">
                <span class="eyebrow">Team</span>
                <h1>User Accounts</h1>
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Role</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= esc($user['username']) ?></td>
                                <td><?= esc($user['full_name']) ?></td>
                                <td><?= esc($user['role']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>