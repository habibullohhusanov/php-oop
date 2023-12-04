<?php
require_once("config/bootstrap.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $body = $_POST["body"];
    $result = Post::store($title, $body);
    if ($result) {
        $_SESSION["succes"] = "Post created";
        header("Location: index.php");
        exit;
    } else {
        $_SESSION["error"] = "Error !!!";
        header("Location: index.php");
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
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="title" id="">
        <input type="text" name="body">
        <button type="submit">Create</button>
    </form>
</body>
</html>