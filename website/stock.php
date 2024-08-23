<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stockEntry = [
        'Quality' => $_POST['quality'],
        'GroupName' => $_POST['group_name'],
        'ItemSize' => $_POST['item_size'],
        'Shape' => $_POST['shape'],
        'Unit' => $_POST['unit'],
        'opStock' => $_POST['op_stock'],
        'godownNo' => $_POST['godown_no'],
    ];

    $_SESSION['stocks'][] = $stockEntry;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Stock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container mt-5 d-flex justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4 text-center">Create Stock</h1>
            <form method="post" action="stock.php">
                <div class="mb-3">
                    <label class="form-label">Quality</label>
                    <input type="text" name="quality" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Group Name</label>
                    <input type="text" name="group_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Item Size</label>
                    <input type="text" name="item_size" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Shape</label>
                    <input type="text" name="shape" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Unit</label>
                    <input type="text" name="unit" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Opening Stock</label>
                    <input type="number" name="op_stock" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Godown Number</label>
                    <input type="text" name="godown_no" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Save</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
