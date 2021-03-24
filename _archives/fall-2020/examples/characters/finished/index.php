<?php
include("includes/config.php");


$game_type = "Video Game";
$page_title = "Classic $game_type Character Class Archetypes";
var_dump($page_titles);

include("includes/head.php");
?>

<header>
  <h1><?php echo $page_titles['home']; ?></h1>
</header>
<main>
  <p>This list is curated from Wikipedia: <a href="https://en.wikipedia.org/wiki/Character_class#Class_archetypes">Character classes</a>.</p>
</main>  
<?php
include("includes/footer.php");
?>