<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Stock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container mt-5">
        <h1 class="mb-4 text-center">Stored Stock Data</h1>
        <?php if (isset($_SESSION['stocks']) && !empty($_SESSION['stocks'])): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Quality</th>
                        <th>Group Name</th>
                        <th>Item Size</th>
                        <th>Shape</th>
                        <th>Unit</th>
                        <th>Opening Stock</th>
                        <th>Godown Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['stocks'] as $stock): ?>
                        <tr>
                            <td><?= $stock['Quality'] ?></td>
                            <td><?= $stock['GroupName'] ?></td>
                            <td><?= $stock['ItemSize'] ?></td>
                            <td><?= $stock['Shape'] ?></td>
                            <td><?= $stock['Unit'] ?></td>
                            <td><?= $stock['opStock'] ?></td>
                            <td><?= $stock['godownNo'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center">No stock data found.</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
