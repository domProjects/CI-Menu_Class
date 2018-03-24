<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>domProjects &bull; CI-Menu_Class</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha256-LA89z+k9fjgMKQ/kq4OO2Mrf8VltYml/VES+Rg0fh20=" crossorigin="anonymous">
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
					<div class="col-md-12">

<?php echo $menu; ?>

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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha256-uz0BcnPtSHZ02XZthAHPRYIoWWrcwMOmAk9ErnFQkNs=" crossorigin="anonymous"></script>
	</body>
</html>