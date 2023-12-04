<?php

class Post
{
    public static $pdo;
    public $id;
    public $title;
    public $body;
    public $create_at;
    public static function getAll()
    {
        $stmt = self::$pdo->prepare("SELECT * FROM posts");
        $stmt->setFetchMode(PDO::FETCH_CLASS,"Post");
        $stmt->execute();
        $posts = $stmt->fetchAll();

        return $posts;

    }
    public static function getById($id)
    {
        $stmt = self::$pdo->prepare("SELECT * FROM posts WHERE id=?");
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Post");
        $stmt->execute([$id]);
        $posts = $stmt->fetch();

        return $posts;

    }
    public static function store($title, $body) {
        $stmt = self::$pdo->prepare("INSERT INTO posts (title, body) VALUE (:title, :body)");
        $stmt->execute([
            "title" => $title,
            "body"=> $body,
        ]);
        $row = $stmt->rowCount();
        return $row;
    }
    public static function update($title, $body, $id) {
        $stmt = self::$pdo->prepare("UPDATE posts SET title=:title, body=:body WHERE id=:id");
        $stmt->execute([
            "title" => $title,
            "body"=> $body,
            "id"=> $id,
        ]);
        $row = $stmt->rowCount();
        return $row;
    }
    public static function destroy($id) {
        $stmt = self::$pdo->prepare("DELETE FROM posts WHERE id=?");
        $stmt->execute([$id]);
        $row = $stmt->rowCount();
        return $row;
    }
}