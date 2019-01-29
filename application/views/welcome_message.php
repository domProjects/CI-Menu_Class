<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>domProjects &bull; CI-Menu_Class</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha256-azvvU9xKluwHFJ0Cpgtf0CYzK7zgtOznnzxV4924X1w=" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.3/metisMenu.min.css" integrity="sha256-h/76VfocIFZUZihLOhNgPXg/wzQVptPo0oBa9ZqTQ7s=" crossorigin="anonymous">
		<style>
			html {
				position: relative;
				min-height: 100%;
			}
			body {
				padding-top: 3.5rem;
				margin-bottom: 4.5rem;
			}
			.footer {
				position: absolute;
				bottom: 0;
				width: 100%;
				height: 3.5rem;
				line-height: 3.5rem;
			}

			/* metisMenu */
			.sidebar-nav {
				background: #212529;
			}
			.sidebar-nav ul {
				padding: 0;
				margin: 0;
				list-style: none;
				background: #343a40;
			}
			.sidebar-nav .metismenu {
				background: #212529;
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				-webkit-box-orient: vertical;
				-webkit-box-direction: normal;
				-ms-flex-direction: column;
				flex-direction: column;
			}
			.sidebar-nav .metismenu li + li {
				margin-top: 5px;
			}
			.sidebar-nav .metismenu li:first-child {
				margin-top: 5px;
			}
			.sidebar-nav .metismenu li:last-child {
				margin-bottom: 5px;
			}
			.sidebar-nav .metismenu > li {
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				-webkit-box-orient: vertical;
				-webkit-box-direction: normal;
				-ms-flex-direction: column;
				flex-direction: column;
				position: relative;
			}
			.sidebar-nav .metismenu a {
				position: relative;
				display: block;
				padding: 13px 15px;
				color: #adb5bd;
				outline-width: 0;
				transition: all .3s ease-out;
			}
			.sidebar-nav .metismenu ul a {
				padding: 10px 15px 10px 30px;
			}
			.sidebar-nav .metismenu ul ul a {
				padding: 10px 15px 10px 45px;
			}
			.sidebar-nav .metismenu a:hover,
			.sidebar-nav .metismenu a:focus,
			.sidebar-nav .metismenu a:active {
				color: #f8f9fa;
				text-decoration: none;
				background: #0b7285;
			}
		</style>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-dark bg-dark fixed-top">
				<div class="container">
					<a class="navbar-brand" href="./">domProjects</a>
				</div>
			</nav>
		</header>

		<main role="main">
			<div class="jumbotron">
				<div class="container">
					<h1 class="display-3">CI-Menu_Class</h1>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<?php echo $menu_1; ?>
					</div>
					<div class="col-md-4">
						<?php echo $menu_2; ?>
					</div>
					<div class="col-md-4">
						<nav class="sidebar-nav">
							<?php echo $menu_3; ?>
						</nav>
					</div>
				</div>
			</div>
		</main>

		<footer class="footer navbar navbar-light bg-light">
			<div class="container">
				<span>Page rendered in <strong>{elapsed_time}</strong> seconds. CodeIgniter Version <strong><?php echo CI_VERSION; ?></strong></span>
			</div>
		</footer>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha256-MSYVjWgrr6UL/9eQfQvOyt6/gsxb6dpwI1zqM5DbLCs=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.3/metisMenu.min.js" integrity="sha256-BNyjlkvjHfyJ3v5fTLcrkPCJlW0WxY/aa0c8XzIUVR8=" crossorigin="anonymous"></script>
		<script>
			$("#metismenu").metisMenu();
		</script>
	</body>
</html>