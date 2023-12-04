<?php

require_once("config/bootstrap.php");

$posts = Post::getAll();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["DELETE"])) {
    $id = $_POST["id"];
    $result = Post::destroy($id);
    if ($result) {
        $_SESSION["succes"] = "Post deleted";
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
    <title>OOP POSTS</title>
</head>
<body>
    <?php if(isset($_SESSION["succes"])): ?>
    <h1><?= $_SESSION["succes"] ?></h1>
    <?php
    endif;
    unset($_SESSION["succes"]);
    ?>
    <?php if(isset($_SESSION["error"])): ?>
    <h1><?= $_SESSION["error"] ?></h1>
    <?php
    endif;
    unset($_SESSION["error"]);
    ?>
    <a href="create.php">Create</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created at</th>
                <th>Settings</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($posts as $post):?>
            <tr>
                <th><?= $post->id;?></th>
                <th><a href="show.php?id=<?= $post->id;?>"><?= $post->title;?></a></th>
                <th><?= $post->body;?></th>
                <th><?= $post->created_at;?></th>
                <th>
                    <a href="edit.php?id=<?= $post->id?>">Edit</a>
                    <form action="" method="POST">
                        <input type="hidden" name="DELETE">
                        <input type="hidden" name="id" value="<?= $post->id?>">
                        <button type="submit">Delete</button>
                    </form>
                </th>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>