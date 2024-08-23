<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container mt-5">
        <h1 class="mb-4">Stored Account Data</h1>
        <?php if (isset($_SESSION['accounts']) && !empty($_SESSION['accounts'])): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Entry No</th>
                        <th>Account Name</th>
                        <th>Group Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Pin</th>
                        <th>Account State</th>
                        <th>Country</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['accounts'] as $account): ?>
                        <tr>
                            <td><?= $account['EntryNo'] ?></td>
                            <td><?= $account['AccountName'] ?></td>
                            <td><?= $account['GroupName'] ?></td>
                            <td><?= $account['Address'] ?></td>
                            <td><?= $account['City'] ?></td>
                            <td><?= $account['Pin'] ?></td>
                            <td><?= $account['AccountState'] ?></td>
                            <td><?= $account['Country'] ?></td>
                            <td><?= $account['Phone'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No data found.</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
