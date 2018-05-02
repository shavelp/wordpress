<?php
/*
 * Template name: Шаблон профиля пользователя
 */?>
<?php get_header(); ?>
<html> <head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>Тег FORM</title> </head>
<div class="main-heading">
	<h1><?php the_title(); ?></h1>
    
</div>
      
 <?php get_sidebar(); 
global $user_ID;
 
// если пользователь не авторизован, отправляем его на страницу входа
 if (!$user_ID):

           ?><div><h3>Войдите в систему или зарегистрируйтесь! </h3></div><?php else: 
	$userdata = get_user_by( 'id', $user_ID );?>

<html>
<body>
<?php
// после сохранения профиля и смены пароля понадобятся уведомления
// если уведомлений больше двух, то оптимальнее их будет вывести через switch
if( isset($_GET['status']) ) :
	switch( $_GET['status'] ) :
		case 'ok':{
			echo '<div class="success">Сохранено.</div>';
			break;
		}
		case 'exist':{
			echo '<div class="error">Пользователь с указанным email уже существует.</div>';
			break;
		}
		case 'short':{
			echo '<div class="error">Пароль слишком короткий.</div>';
			break;
		}
		case 'mismatch':{
			echo '<div class="error">Пароли не совпадают.</div>';
			break;
		}
		case 'wrong':{
			echo '<div class="error">Старый пароль неверен.</div>';
			break;
		}
		case 'required':{
			echo '<div class="error">Пожалуйста, заполните все обязательные поля.</div>';
			break;
		}
	endswitch;
endif;
 
// profile-update.php - это файл, который находится в папке с темой и обрабатывает сохранение, его содержимое будет в следующем шаге
?>
<form action="<?php echo get_stylesheet_directory_uri() ?>/profile-update.php" method="POST">
	<input type="text" name="first_name" placeholder="Имя" value="<?php echo $userdata->first_name ?>" /><br>
	<input type="text" name="last_name" placeholder="Фамилия" value="<?php echo $userdata->last_name ?>" /><br>
	<input type="text" name="city" placeholder="Город" value="<?php echo get_user_meta($user_ID, 'city', true ) ?>" /><br>
	<input type="email" name="email" placeholder="Email" value="<?php echo $userdata->user_email ?>" /><br>
 
	<input type="password" name="pwd1" placeholder="Старый пароль" /><br>
	<input type="password" name="pwd2" placeholder="Новый пароль" /><br>
	<input type="password" name="pwd3" placeholder="Повторите новый пароль" /><br>
 
	<button>Сохранить</button>
</form>
    <?php endif; ?>
</body>
</html>