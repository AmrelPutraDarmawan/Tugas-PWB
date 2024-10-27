<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Detail</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-white">
        <h1 class="my-4">User Detail</h1>
        <p>ID: <?php echo $user['id']; ?></p>
        <p>Name: <?php echo $user['name']; ?></p>
        <p>Email: <?php echo $user['email']; ?></p>
        <a href="index.php" class="btn btn-primary">Back to User List</a>
    </div>
    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
