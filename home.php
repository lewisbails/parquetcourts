<!doctype html>
<html lang="en">
	<head>
 		<meta charset="utf-8">
 		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- Bootstrap -->
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-news.css" type="text/css" rel="stylesheet" />
		<title>
			Parquet Courts - News
		</title>
	</head>
	<body class="d-flex flex-column">
		<section id="news" class="container-fluid">
			<div id="nav" class="row">
				<nav class="col-xs-8 navbar">
				  	<ul class="d-flex">
				  		<li class="nav-item">
					      <a class="nav-link" href="/wordpress">Parquet Courts...</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link" href="/wordpress/bio">Bio</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link" href="/wordpress/shows">Shows</a>
					    </li>
				  	</ul>
				</nav>
			</div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="row news-item">
					<div class="offset-xl-1 offset-lg-0 offset-md-1 col-xl-4 col-lg-4 col-md-6 col-12 news-image-wrapper">
						<img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="news-image"/>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-5 col-12 news-text"><p><?php the_content(); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</section>
		<img id="monastic" class="img-fluid fixed-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/monastic-living.jpg">
		<footer>
			<div class="container-fluid">
				<div class="row d-flex">
					<div class="offset-lg-1 col-lg-4 offset-md-0 col-md-5 col-12">
						<p>parkayquarts@gmail.com<br>Press: Jacob Daneman/Pitch Perfect<br>Booking:<br>N. AMERICA / S. AMERICA Timmy Hefner/Ground Control<br>REST OF WORLD Russell Warby/WME</p>					
					</div>
					<div class="col-lg-3 col-md-3 col-6">
						<p><br>Rough Trade MGMT<br>What's Your Rupture<br>Dull Tools</p>
					</div>
					<form class="col-lg-4 col-md-4 col-6 d-flex align-items-center">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Join our mailing list...</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					  </div>
					  <button type="submit" class="btn btn-primary">Do it!</button>
					</form>
				</div>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>