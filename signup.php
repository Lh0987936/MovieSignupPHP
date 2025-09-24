<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
$name = $_POST['Name'] ?? '';
$favMovie = $_POST['FavMovie'] ?? '';

if (trim($name) === '') {
    $errors['Name'] = 'Name is Required';
}
if (trim($favMovie) === '') {
    $errors['FavMovie'] = 'Movie is Required';
}
if (empty($errors))
{
    $qs = "ok=1&Name=" . urlencode($name) . "&FavMovie=" . urlencode($favMovie);
    header('Location: signup.php?' . $qs);
    exit;
}

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
    
        <?php if (isset($_GET['ok']) && $_GET['ok']==='1'): ?>
            <div class="alert alert-success">
                Thanks <?= $_GET['Name'] ?>, We added your favorite movie <?= $_GET['FavMovie'] ?> to our club list!
            </div>
        <?php endif; ?>
        <?php if (($errors)): ?>
            <div class="alert alert-danger">
                    Please fix:
                    <ul class="mb-0">
                        <?php foreach ($errors as $msg): ?>
                            <li><?= $msg; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>    
        <?php endif; ?>
        
        <?php if($_SERVER['REQUEST_METHOD'] !== 'POST' || $errors): ?>
        <form action="signup.php" method="POST">
        <label for="Name">Name</label>
        <input type="text" name="Name" id="Name" value=<?=$name?>><br>
        <label for="FavMovie">Favorite Movie</label>
        <input type="text" name="FavMovie" id="FavMovie" value=<?=$favMovie?>><br>
        <input type="submit" value="Submit">
        </form> 
        <?php else: ?>
            <h2>Var Dump</h2>
        <pre><?php var_dump($_POST)?></pre>
        <?php endif; ?>
       

    
</body>
</html>