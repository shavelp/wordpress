
<?php
function enter{

               global $user_ID, $user_identity;

               get_currentuserinfo();

               if (!$user_ID):

           ?>

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

             </div> </form>  <?php } ?>