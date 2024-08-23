
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Transporters</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container mt-5">
        <h1 class="mb-4 text-center">Stored Transporter Data</h1>
        <?php if (isset($_SESSION['transporters']) && !empty($_SESSION['transporters'])): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>TCode</th>
                        <th>Transporter Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Phone No</th>
                        <th>Series</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['transporters'] as $transporter): ?>
                        <tr>
                            <td><?= $transporter['TCode'] ?></td>
                            <td><?= $transporter['TransporterName'] ?></td>
                            <td><?= $transporter['Address'] ?></td>
                            <td><?= $transporter['City'] ?></td>
                            <td><?= $transporter['PhoneNo'] ?></td>
                            <td><?= $transporter['Series'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center">No transporter data found.</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
