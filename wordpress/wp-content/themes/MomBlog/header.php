<!doctype html>
<html>
<head>
    <script src="/js/css3-mediaqueries.min.js"></script>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
    
   


</head>
<body <?php body_class(); ?>>
<div class="wrapper">
	<header>
        
		<a class="logo" href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php echo __('MomBlog logo', 'MomBlog'); ?>"></a> <?php get_search_form(); ?> <br><br>
       <div class="kabinet"> <a class="profile" href="<?php echo get_permalink(53); ?>">Личный кабинет</a>
        <a class="diary" href="<?php echo get_permalink(83); ?>">Дневник питания</a>
           </div>
		

  
  <?php    global $user_ID;
 
// если пользователь не авторизован, отправляем его на страницу входа
 if (!$user_ID):

           ?><div class="enter">
    <a href="#modal" class="button_openModal">Регистрация</a></div>
    <div id="modal" class="modal">
    <div> 
       <div class="text"><?php custom_registration_function(); ?></div>
        <a href="#close" title="Закрыть">Закрыть</a>
    </div>        
</div><?php endif; ?>
  
    <div> <?php

               global $user_ID, $user_identity;

               get_currentuserinfo();

               if (!$user_ID):

           ?></div>
    <div class="enter1">
<a href="#modal1" class="button_openModal">Вход</a></div>
       <div id="modal1" class="modal">
    <div>
       <div class="text">
         <form name="loginform" id="autoriz" action="<?php echo get_settings('siteurl'); ?>/wp-login.php" method="post">

             <div class="left">

                 <input type="text" name="log" placeholder="Логин" value="" id="login" />

             </div> <div>

                 <input type="password" name="pwd" placeholder="Пароль" value="" id="password" />

                 <input type="submit" name="submit" value="Войти" id="enter" /><br/>

             </div> <div>

                 <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />

                  <a href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=lostpassword">Забыли пароль?</a>

                 <a href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=register">Регистрация</a> 

             </div> </form> 
      </div>
        <a href="#close" title="Закрыть">Закрыть</a>
    </div>        
</div>
         

           <?php else: ?>
<div class="hi">
           <h5 class="smile">Добро пожаловать, <?php echo $user_identity; ?>.</h5>
    <a href="http://localhost/wordpress/wp-login.php?action=logout&amp;redirect_to=http://localhost/wordpress/?page_id=211">Выйти?</a></div>
           <?php endif; ?> 

           <?php if (current_user_can('level_10')){ ?><br/>

             <div class="left">


             </div>

             <div class="right" style="text-align:right">

              

             </div> <?php } ?> 
        
    <body>


    </body>
  
	</header>
	<nav class="main-navigation">
		<?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
        
	</nav>
