<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex7</title>
</head>
<body>
    <form method="post">
        <input type="text" name="n">
        <input type="checkbox" name="task">
        <input type="submit" value="create">
    </form>
    <?php include "/var/www/html/lab1PHP/library/funcs.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = $_POST['n'];
        if($_POST['task'] == true)
        {
            createTable($n);
        }
        else
        {
            createBlocks($n);
        }
    }
    ?>
</body>
</html>