<?php
$_GET['link'];

$Link = isset($_GET['link']) ?
$_GET['link'] : null;

$Err = $Link;

if (file_exists('php-files/page/' . $Link . '.php')) {

} else {
  $Link = '404_not_found';
}

$fileDir = 'php-files/page/' . $Link . '.php';

$Link = preg_replace('/[^a-zA-Z0-9]+/', ' ', $Link);
$Err = preg_replace('/[^a-zA-Z0-9]+/', ' ', $Err);

include $fileDir;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo'<title>TRPS | ' . $Link . '</title>' ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" media="only screen and (max-width: 710px)" href="css/small.css" />
</head>
<body>
	<header>
		<h1> That Raspberry Pi Server </h1>
		<nav>
				<?php include 'php-files/nav.php'; ?>
		</nav>
	</header>
	<section class="top2">
		<div class="body-outter">

			<div class="body-inner-dark">
			<?php echo'<h1>' . $Title . '</h1>' ?>

		<!--	<p> Welcome to TRPS, the web server running on a raspberry pi </p> -->
			</div>
		</div>
	</section>
	<main>
		<section class="body">

			<div class="body-outter">
				<?php echo '<h1>' . $Header . '</h1> <span>' . $SubHead . '</span>' ?>
				<div class="body-inner-light ">

<?php
  if (  $Link == '404 not found'){
    echo'<h2> Oh No! </h2>';
    echo '<h3> We could not find "' . $Err . '"</h3>';

  }
  body();



?>

</div>


</section>
</main>

</body>
</html>
