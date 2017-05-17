<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$page = basename(__FILE__, ".php");
		include("modules/header.php");

	?>
</head>

<body>

<?php include("modules/navbar.php"); ?>

<div class="jumbotron" id="header">
  <div class="container text-center">
    <h1>The Realm Of The Geek</h1>
    <p><small>Only a little bit of awesomeness here.<br><a href="http://s.therotg.com/twitter?source=rotgwebsite" target="_blank">Twitter</a> | <a href="http://s.therotg.com/youtube?source=rotgwebsite" target="_blank">YouTube</a> | <a href="http://s.therotg.com/trello?source=rotgwebsite">Trello</a> | <a href="http://s.therotg.com/github?source=rotgwebsite">GitHub</a></small></p>
  </div>
</div>
<div class="jumbotron" id="about">
  <div class="container text-left">
    <h1>About The Realm of The Geek</h1>
    <p><small>The Realm of The Geek, Also Known As Kento, is a teenaged YouTube programmer that mainly focuses on creating helpful, inspiring coding tutorials. He also does LiveCoding, while practicing Scrum and Agile methods like TDD, Mob Programming, Pair Programming, and more. He has been programming for years, and knowledgable in Java, Bukkit API, HTML/CSS, Bootstrap, JQuery, JavaScript, PHP, and more. The videos are always on a strict schedule of daily at 7am. If you would like to watch some of these, please visit yt.therotg.com!</small></p>
  </div>
</div>

<div id="plugins">
<div class="container-fluid bg-3 text-center" id="main">
	<?php include("modules/tid.html"); ?>
</div>
</div>
<div class="jumbotron" id="gig">
  <div class="container text-left">
    <h1>FREELANCE / Hire Me</h1>
      <p>So, you want a Spigot / Bukkit plugin, right? Well, you've come to the right place. I can create anything* for $10 flat, cheaper than any other creator here, AND IN TWO DAYS**!. Other than doing three packages, I have decided to just do $10 for anything* you can possibly imagine. The reason these are so cheap, is because everyone else is overpriced</p>
      <a href="http://s.therotg.com/fiverr?source=rotgwebsite"><button class="button btn-lg btn-success">Hire me ($10/per plugin)</button></a><br><br>
  </div>
</div>
<div class="jumbotron" id="plugins">
  <div class="container text-left">
    <h1>Contact Kento</h1>
    <p>You Can Get In Touch With Me In Multiple Ways:<br><small>email: contact@therotg.com<br>DM me on Twitter: <a href="http://s.therotg.com/twitter?source=rotgwebsite">@kvizdos</a></small></p>
  </div>
</div>

<?php include("modules/footer.php"); ?>
</body>
</html>
