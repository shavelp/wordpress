<?php
/*
 * Template name: Главная
 */

?>
<?php get_header(); ?>
	<div class="main-heading">
	<h1><?php the_title(); ?></h1>
    
</div>
 <?php get_sidebar(); ?>
<div class="priv"><h3 >Здравствуйте! Вас приветствует информационный портал MomBlog! Здесь вы можете найти интересную и полезную информацию о беременности, воспитании ребенка, подготовке к родам, питании во время грудного вскармливания, прикорме ребенка, его развитии и многое другое. </h3></div>
<div class="grid"><?php echo do_shortcode("[post_grid id='219']"); ?></div>
<?php get_footer(); ?>