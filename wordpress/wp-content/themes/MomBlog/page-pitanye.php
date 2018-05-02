<?php
/*
 * Template name: Питание
 */

?>
<?php get_header(); ?>
<html> <head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>Тег FORM</title> </head>
<div class="main-heading">
	<h1><?php the_title(); ?></h1>
</div>
      
 <?php get_sidebar(); ?>

    <div class="full">
            <input class="d-but"type="submit" value="Дневник питания" onclick=" location.href='<?php echo get_permalink(83);?>'  "> 

    <table class="kateg">
<tr>
    <td>   <div id="veg" class="badge"><a href="<?php echo get_permalink(139); ?>">Овощи</a></div></td> 

    <td>  <div id="fruit" class="badge"><a href="<?php echo get_permalink(147); ?>">Фрукты</a></div></td> 

    <td> <div id="meat" class="badge"><a href="<?php echo get_permalink(155); ?>">Мясо</a></div></td> 

    <td>   <div id="por" class="badge"><a href="<?php echo get_permalink(159); ?>">Каши</a></div></td> 
        </tr>
            </table>
     <table class="sec">
        <tr >
   <td class="second" ></td>
            <td >  <div id="milk" class="badge"><a href="<?php echo get_permalink(165); ?>">Молочные продукты</a></div></td>            
            <td>  <div id="drink" class="badge"><a href="<?php echo get_permalink(170); ?>">Напитки</a></div></td>
            <td>  <div id="fish" class="badge"><a href="<?php echo get_permalink(176); ?>">Рыба</a></div></td>
            <td>  <div id="berry" class="badge"><a href="<?php echo get_permalink(184); ?>">Ягоды</a></div></td>
            <td>  <div id="slad" class="badge"><a href="<?php echo get_permalink(189); ?>">Сладкое</a></div></td>
        </tr>
            </table>
    
    </div>
    
    <div class="planshet">
        <input type="submit" value="Дневник питания" onclick=" location.href='<?php echo get_permalink(83);?>'  "> 
    <table class="kateg">
        <tr>
          <td>   <div id="veg" class="badge"><a href="<?php echo get_permalink(139); ?>">Овощи</a></div></td> 
          <td>  <div id="fruit"  class="badge"><a href="<?php echo get_permalink(147); ?>">Фрукты</a></div></td> 
        </tr>
        <tr>
         <td> <div id="meat" class="badge"><a href="<?php echo get_permalink(155); ?>">Мясо</a></div></td> 
         <td>   <div id="por" class="badge"><a href="<?php echo get_permalink(159); ?>">Каши</a></div></td> 
        </tr>
        <tr>
         <td >  <div id="milk" class="badge"><a href="<?php echo get_permalink(165); ?>">Молочные продукты</a></div></td>            
            <td>  <div id="drink" class="badge"><a href="<?php echo get_permalink(170); ?>">Напитки</a></div></td>
        </tr>
        
        </table >
        <table class="kateg1">
        <tr>
            <td>  <div id="fish" class="badge"><a href="<?php echo get_permalink(176); ?>">Рыба</a></div></td>
            <td>  <div id="berry" class="badge"><a href="<?php echo get_permalink(184); ?>">Ягоды</a></div></td>
            <td>  <div id="slad"class="badge"><a href="<?php echo get_permalink(189); ?>">Сладкое</a></div></td>
            </tr>
        
        </table>
    
    
    </div>
    
  
    
    
    
    
    