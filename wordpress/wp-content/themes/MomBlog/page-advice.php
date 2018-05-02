<?php 
/*
    Template Name: Беременность
*/
?>
<?php get_header(); ?>
<div class="main-heading">
	<h1><?php the_title(); ?></h1>
</div>
 <?php get_sidebar(); ?>
 <table class="berem">
<tr>
    <td>   <div id="uhod" class="ber"><a href="<?php echo get_permalink(244); ?>">Уход за новорожденными</a></div></td> 

    <td>  <div id="kulinar" class="ber"><a href="<?php echo get_permalink(245); ?>">Кулинария</a></div></td> 

    <td> <div id="health" class="ber"><a href="<?php echo get_permalink(247); ?>">Здоровье мамы и малыша</a></div></td> 

    <td>   <div id="podg" class="ber"><a href="<?php echo get_permalink(249); ?>">Подготовка к беременности</a></div></td> 
        </tr>
            </table>

<div class="main-heading1">
<h1>Новое</h1>
</div>
    <div class="grid"><?php echo do_shortcode("[post_grid id='263']"); ?></div>


<?php get_footer(); ?>