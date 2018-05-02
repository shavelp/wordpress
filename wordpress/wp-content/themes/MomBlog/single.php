<?php get_header();?>
<div class="main-heading">
	<h1><?php the_title(); ?></h1>
</div>
<?php get_sidebar();?>
<section class="zapis">
	<?php while (have_posts()): the_post();?>
		<?php the_content();?>
		<?php
    
     if (!$user_ID):

           ?><div><h3>Войдите в систему или зарегистрируйтесь для доступа к комментариям.</h3></div><?php else: 
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			} endif; ?> 
	
	<?php endwhile; ?>
</section>
<?php get_footer(); ?>