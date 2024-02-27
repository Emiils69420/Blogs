<?php
require "functions.php";
require "Database.php";

$db = new Database();
$posts = $db
    ->execute("SELECT * FROM posts");
    ->fetchAll(PDO::FETCH_ASSOC);
    dd($posts)
echo "<ul>";
foreach($posts as $post){
    
    echo "<li>" .$post["title"] . "</li>";
}
echo"</ul>";
