
<?php 
if ($_GET['member'] === 'false') {
    header('Location: signup.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
</head>
<body>
    <?php require __DIR__ . "/includes/navigation.php"; ?>
    <h1>Welcome Movie Club Member!</h1>
</body>
</html>