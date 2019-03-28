<?php /* Template Name: Shows */ ?>
<?php get_header(); ?>
	    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-dates.css" type="text/css" rel="stylesheet" />
		<title>
			Parquet Courts
		</title>
	</head>
	<body class="d-flex flex-column">
		<section id="dates" class="container-fluid">
			<div id="nav" class="row">
				<nav class="navbar col-sm-12">
				  	<ul class="d-flex">
					    <li class="nav-item">
					      <a class="nav-link" href="/wordpress">Home</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link" href="/wordpress/bio">Bio</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link" href="/wordpress/news">News</a>
					    </li>
				  	</ul>
				</nav>
			</div>
			<div class="row">
				<ul class="dates-list col-xl-3 offset-xl-1 offset-lg-1 col-lg-4 offset-md-0 col-md-4 col-sm-8 offset-sm-2 col-10 offset-1">
					<?php
					$loop = new WP_Query( array(
					    'post_type' => 'show',
					    'posts_per_page' => 8,
					    'orderby' => 'date',
					    'order' => 'ASC',					  )
					);
					?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					  <!-- do stuff -->
					<li><?php the_content(); ?></li>
					<?php endwhile; wp_reset_query(); ?>
				</ul>
				<div class="dates-img-wrapper offset-xl-1 col-xl-7 offset-lg-0 col-lg-7 offset-md-0 col-md-8 offset-sm-0 col-sm-12 col-10 offset-1"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/desk_edit.jpg" alt="Violence!">
				</div>
			</div>
		</section>
<?php get_footer(); ?>