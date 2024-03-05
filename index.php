<?php
// Šis fails ir, lai izvadītu datus no datubāzes uz
// lapu 
require "functions.php";
require "Database.php";

$config = require("config.php");

$query = "SELECT * FROM posts";
$params = [];
if (isset($_GET["id"]) && $_GET["id"] != "") {
  $id = $_GET["id"];
  $query = $query. " WHERE id=:id";
  $params = [":id" => $id];
}
echo "<form>";
echo "<input name='id'/>";
echo "<button>Submit</button>";
echo "</form>";

$db = new Database($config);
$posts = $db
          ->execute($query, $params)
          ->fetchAll();


echo "<form>";
echo "<input name='id'/>";
echo "<button>Submit</button>";
echo "</form>";

echo "<h1>Posts</h1>";

echo "<ul>";
foreach($posts as $post) {
  echo "<li>" . $post["title"] . "</li>";
}
echo "</ul>";