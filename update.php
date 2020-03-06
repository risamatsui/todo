<?php

//ファイルの読みこみ
require_once("dbconnect.php");
require_once("function.php");

//データの受け取り
$title = $_post["title"];
$contents = $_post["contents"];
$id = $POST["id"];

//DBのデータ更新
$stmt = $dbh->prepare("UPDATE tasks SET title = ?, contents = ? WHERE id = ?");
$stmt->execute($title,$contents,$id);

//リダイレクト
header("location:index.php");
