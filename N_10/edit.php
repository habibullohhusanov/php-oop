<?php
require_once("config/bootstrap.php");
$id = $_GET["id"];
$post = Post::getById($id);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["PUT"])) {
    $title = $_POST["title"];
    $body = $_POST["body"];
    $id = $_POST["id"];
    $result = Post::update($title, $body, $id);
    if ($result) {
        $_SESSION["succes"] = "Post updated";
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
        <input type="hidden" name="PUT">
        <input type="hidden" name="id" value="<?= $post->id?>">
        <input type="text" name="title" value="<?= $post->title?>">
        <input type="text" name="body" value="<?= $post->body?>">
        <button type="submit">Update</button>
    </form>
</body>
</html>