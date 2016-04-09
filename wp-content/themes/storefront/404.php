<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>TMDT</title>
		<!-- Bootstrap CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/page-404.css" rel="stylesheet">
	</head>
	<body>
		<div id="wrapper">
			<section id="page-404">
				<div class="container">
				    <div class="row">
				        <div class="col-md-12">
				            <div class="error-template">
				                <h1>
				                	<a href="<?php echo get_site_url() ?>">
				                		<img src="<?php echo get_template_directory_uri(); ?>/images/silvermart.png" alt="">
				                	</a>
				                </h1>
				                <h2>
				                    404 Not Found</h2>
				                <div class="error-details">
				                    Sorry, an error has occured, Requested page not found!
				                </div>
				                <div class="error-actions">
				                    <a href="<?php echo get_site_url() ?>" class="btn btn-primary btn-lg">
				                    	<span class="glyphicon glyphicon-home"></span>
				                        Take Me Home </a>
				                    <a href="<?php echo get_site_url() ?>/lien-he/" class="btn btn-default btn-lg">
				                    	<span class="glyphicon glyphicon-envelope"></span> 
				                    Contact Support </a>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
			</section>

		</div><!--end wrapper-->
	</body>
</html>