<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
<nav>
<a href="index.php">Main<a>
<a href="/about.php">About us<a>
<a href="/story.php">Story💩<a>
</nav>
    </header>
<form>
<input name='id' value='<?php  ($_GET["id"] ?? "") ?>'/>
<button>Filter by ID</button>
</form>

<form>
<input name='category' value='<?php ($_GET["category"] ?? "")  ?>'/>
<button>Filter by category</button>
</form>

<form>
Category:
<select name='category'>
<option value='sport'>Sport</option>
<option value='music'>Music</option>
<option value='food'>Food</option>
</select>
<br>
<button>Submit</button>
</form>

<h1>Posts</h1>

<ul>

<?php
foreach($posts as $post) { ?>
<li> <?= $post["title"]?></li>
<?php } ?>
</ul>

<?php require "components/footer.php"?>
</body>
</html>
