<?php get_header(); ?>
	    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-news.css" type="text/css" rel="stylesheet" />
		<title>
			Parquet Courts
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
<?php get_footer(); ?>