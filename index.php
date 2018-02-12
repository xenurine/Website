<!DOCTYPE html>
<html lang="en">
<head>
	<title>TRPS | Home</title>
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
	<section class="top">
		<div class="body-outter">

			<div class="body-inner-dark">

				<h1 id="1"> Welcome To That Raspberry Pi Server </h1>
				<a class="next-button" href="index.php#2" title="next"> &#8681; </a>
				<p> The Raspberry Pi web server, which hosts my minetest
						mods along with having guides to help people learn how to set-up
						a raspberry pi and use GNU/Linux. </p>
		<!--	<p> Welcome to TRPS, the web server running on a raspberry pi </p> -->

			</div>
		</div>
	</section>
	<main>
		<section class="body">

			<div class="body-outter">
				<h1> Welcome </h1>
				<span> To That Raspberry Pi server </span>
				<div class="body-inner-light ">
				<!--	<h2>  What Is TRPS</h2>
							<p> That Rs Pi Server is a site which is used to host my minetest
							mods along with having guides to help people learn how to set-up
							a raspberry pi and use GNU/Linux.</p> -->

					<br />
					<h2> What’s a Raspberry PI? </h2>
					<p> A raspberry pi is a range of small pocket sized single-board
						 Computers build and developed by the raspberry pi foundation.
						 The original aim of the Raspberry pi is to help people learn
						 how program and use GNU/Linux. Due to the low price and somewhat
						 powerful computer the raspberry pi can be used for projects or
						 as a home server. </p>
				 <p> The Raspberry pi foundation has a large range of fun activities
						 which you can do with your Pi. However if you want to do
						 something useful with your pi you can choose one of the guides
						 below. </p>
				<p> If you are interested in getting one you can get one for the
						Raspberry Pi Website. </p>
				<a class="button" href="https://www.raspberrypi.org/products/"> Get a Pi Now </a>
						<p> * Links to www.raspberrypi.org </p>

					<br />
				</div>


		</section>
		<section class="info">
			<div class="body-outter">

				<div class="body-inner-dark">
					<br />
					<h1 id="2"> Get Started </h1>
					<a class="next-button" href="index.php#3" title="next"> &#8681; </a>
					<p> before you start you will need to setup your raspbery pi. Below
							are some guides to help you do this. </p>

					<?php 	include 'php-files/top-guides-01.php'; ?>

				</div>

			</div>
		</section>
		<section class="body">
			<div class="body-outter">
				<h1>Basics </h1>
				<span> Learn The Basics and Setup </span>
				<div class="body-inner-light">

					<p> Learn the basics, and find out how to get your raspbery pi up and
							running. </p>
					<p><b> This Will Cover </b> </p>
					<dl>
						<dt> &#8227; Setting up your Pi </dt>
							<dd> Find out what you need and how to get everything ready
							 	 for the Pi  </dd> <br />
						<dt> &#8227; Configure the OS on your Pi </li>
							<dd> How to configure the Operating System on your Raspbery pi
							</dd> <br />
						<dt> &#8227; The Basics </dt>
							 <dd> Find out how to get around the GNU/Linux Operating System
							 </dd><br />

					</dl>
					<a class="button" href="guides.php#1"> More on This </a>




					<!-- <h2> Setting Things up </h2>
					<p> before you start you will need to setup your raspbery pi. Below
						are some guides to help you do this. </p> -->
				</div>
			</div>
		</section>
		<section class="guid">
				<div class="body-outter">

					<div class="body-inner-dark">
						<h1 id="3"> Linux and Servers </h1>
						<a class="next-button" href="index.php#1" title="top"> &#8682; </a>
						<p> When everything has been setup you can now put it to use. Below
								are some guides to help you do this. </p>

						<?php 	include 'php-files/top-guides-02.php'; ?>

					</div>
				</div>
		</section>
		<section class="body">
			<div class="body-outter">
				<br />
				<h1>Projects </h1>
				<span> Install Software for the server </span>
				<div class="body-inner-light">
					<p> Learn the how to turn your Pi into a cheap Server. </p>
					<p><b> This Will Cover </b> </p>
					<dl>
						<dt> &#8227; Setting Up Apache2 </dt>
							<dd> Turn your Raspbery pi into a web server so you can make your
						  			own website </dd> <br />
						<dt> &#8227; Samba File Server </li>
							<dd> Access any files on your network with your Raspbery Pi
							</dd> <br />
						<dt> &#8227; Linux Commands </dt>
							 <dd> More on commands for the GNU/Linux Operating System
							 </dd><br />

					</dl>
					<p> You Can See more on our Guides Page. </p>
					<a class="button" href="guides.php#2"> Guides Page </a>
				</div>
			</div>
		</section>
	</main>

</body>
</html>
