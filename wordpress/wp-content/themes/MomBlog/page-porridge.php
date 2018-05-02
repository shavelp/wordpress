<?php 
/*
    Template Name: Каши
    */
?>
<?php get_header(); ?>
<div class="main-heading">
	<h1><?php the_title(); ?></h1>
</div>
 <?php get_sidebar(); ?>
    <article>
 
        <?php // Display blog posts on any page @ http://m0n.co/l
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
     query_posts( array( 'cat' =>9, 'paged' => get_query_var('paged') ) ); ?>
      <div class="anons"><?php  while ($wp_query->have_posts())  :  ?><?php $wp_query->the_post(); ?>
     <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
<?php the_post_thumbnail(array(150,150), array('class' => 'alignleft'));?>
<?php the_excerpt() ?>
<a href="<?php the_permalink(); ?>">Читать далее</a><br><br><br><br><br><br>
        
       
 
        <?php endwhile; ?></div>
 
       <?php 
        //wp_pagenavi();
  paginate_links(); 
        the_posts_pagination( $args );
        
        $args = array(
	'show_all'     => false, // показаны все страницы участвующие в пагинации
	'end_size'     => 1,     // количество страниц на концах
	'mid_size'     => 1,     // количество страниц вокруг текущей
	'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
	'prev_text'    => __('« Previous'),
	'next_text'    => __('Next »'),
	'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
	'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
	'screen_reader_text' => __( 'Posts navigation' ),
);
        

        
        ?>
        <?php wp_reset_postdata(); ?>
 
    </article>


<?php get_footer(); ?>