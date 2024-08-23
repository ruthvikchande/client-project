<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $transporterEntry = [
        'TCode' => $_POST['tcode'],
        'TransporterName' => $_POST['transporter_name'],
        'Address' => $_POST['address'],
        'City' => $_POST['city'],
        'PhoneNo' => $_POST['phone_no'],
        'Series' => $_POST['series'],
    ];

    $_SESSION['transporters'][] = $transporterEntry;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Transporter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container mt-5 d-flex justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4 text-center">Create Transporter</h1>
            <form method="post" action="transporter.php">
                <div class="mb-3">
                    <label class="form-label">TCode</label>
                    <input type="text" name="tcode" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Transporter Name</label>
                    <input type="text" name="transporter_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">City</label>
                    <input type="text" name="city" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone No</label>
                    <input type="text" name="phone_no" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Series</label>
                    <input type="text" name="series" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Save</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
