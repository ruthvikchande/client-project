<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $entry = [
        'EntryNo' => uniqid(),
        'AccountName' => $_POST['account_name'],
        'GroupName' => $_POST['group_name'],
        'Address' => $_POST['address'],
        'City' => $_POST['city'],
        'Pin' => $_POST['pin'],
        'AccountState' => $_POST['account_state'],
        'Country' => $_POST['country'],
        'Phone' => $_POST['phone'],
    ];

    $_SESSION['accounts'][] = $entry;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="w-100" style="max-width: 600px;">
            <h1 class="mb-4 text-center">Create Company</h1>
            <form method="post" action="index.php">
                <div class="mb-3">
                    <label class="form-label">Account Name</label>
                    <input type="text" name="account_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Group Name</label>
                    <input type="text" name="group_name" class="form-control" required>
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
                    <label class="form-label">Pin</label>
                    <input type="text" name="pin" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Account State</label>
                    <input type="text" name="account_state" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Country</label>
                    <input type="text" name="country" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
