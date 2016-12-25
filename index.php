<?php
$page = empty($_GET["path"]) ? "home" : $_GET["path"];
$page = file_exists(dirname(__FILE__) . '/content/' . $page . ".html") ? $page : "home";

if(!preg_match("/^([a-z0-9\/]+)/i", $page)){
	$page = "home";
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Thomas \"SubSide\" van den Bulk">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
	<link href="/KoTH/css/style.css" rel="stylesheet" type="text/css">
	<title>KoTH info page</title>
</head>
<body>
<div class="wrapper">
	<aside>
		<div>
			<a href="/KoTH/">Home</a>
		</div>
		<br />
		<div class="menu-item">
			<span class="menu-control">Commands</span>
			<div class="menu">
				<a href="/KoTH/commands/basic">Basic commands</a>
				<a href="/KoTH/commands/control">Control commands</a>
				<div class="menu-item">
					<span class="menu-control">Editor commands</span>
					<div class="menu">
						<a href="/KoTH/commands/editor/basic">Basic editor commands</a>
						<a href="/KoTH/commands/editor/edit">Koth editor commands</a>
						<a href="/KoTH/commands/editor/loot">Loot commands</a>
						<a href="/KoTH/commands/editor/schedule">Schedule commands</a>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-item">
			<span class="menu-control">Config</span>
			<div class="menu">
				<a href="/KoTH/config/config">config.yml explained</a>
				<a href="/KoTH/config/koths">Koths.json explained</a>
				<a href="/KoTH/config/loot">Loot.json explained</a>
				<a href="/KoTH/config/schedule">Schedule.json explained</a>
				<a href="/KoTH/config/cache">cache.json explained</a>
				<a href="/KoTH/config/lang">Lang.json</a>
			</div>
		</div>
		<br />
		<div>
			<a href="./javadocs/">Developers API</a>
		</div>
	</aside>
	<main>
		<?php
		include_once(dirname(__FILE__) . '/content/' . $page . ".html");
		?>
	</main>
</div>
</body>
</html>