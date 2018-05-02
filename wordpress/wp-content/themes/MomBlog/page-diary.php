

<?php
/*
 * Template name: Дневник
 */

?>
<?php get_header(); ?>
<html> <head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type='text/javascript'>
                 
                        function showhideBlocks(val){
                                if (val!=1 && val!=2){
                                    
                                    document.getElementById('i1').style.display='none';
                                      
                                    
                                }
                                else{
                               
                                   document.getElementById('i'+val).style.display='block';  
                                }  
                        }
                        
                </script>
     <style type='text/css'>
                        #i1,#i2{display:none}       
                </style>
    <title>Тег FORM</title> </head>
<div class="main-heading">
	<h1><?php the_title(); ?></h1>
</div>
   
 <?php get_sidebar(); ?>

 <?php

               global $user_ID, $user_identity;

               get_currentuserinfo();

               if (!$user_ID):

           ?><div><h3>Войдите в систему или зарегистрируйтесь для использования дневника питания</h3></div><?php else: ?>
<form method="POST" id="MyForm"accept-charset="utf-8">
   
         <p>

  
       <select name="opti" onchange="document.getElementById('MyForm').submit()">
       
	<?php for ($i=1;$i<12;$i++){ ?>
	<option >
        <?php
        $email = $wpdb->get_var("SELECT category FROM wp_categories WHERE id=$i");
    echo $email;}?>
     </option>
</select>
    Категория
    </p> 


<?php 
    $c=$_POST['opti'];
    if ($c=="Овощи"){
   ?>
    <p>
       
    <select onchange="showhideBlocks(this.value)" name="opt" >       
	<?php for ($i=1;$i<16;$i++){ ?>
	<option >
    <?php
    $email = $wpdb->get_var("SELECT product FROM wp_products WHERE id=$i ");
    echo $email;}
            
        ?>
        </option>
         <option value="1">Другое</option>
    </select> Продукт</p><?php } 
     if ($c=="Фрукты"){
   ?>
        <p>
   
    <select onchange="showhideBlocks(this.value)" name="opt">       
	<?php for ($i=16;$i<32;$i++){ ?>
	<option  >
    <?php
    $email = $wpdb->get_var("SELECT product FROM wp_products WHERE id=$i");
    echo $email;}?>
        </option>
         <option value="1">Другое</option>
    </select>
          Продукт
    </p><?php } 
     if ($c=="Мясо"){
   ?> <p>
    
    <select onchange="showhideBlocks(this.value)" name="opt" >       
	<?php for ($i=32;$i<45;$i++){ ?>
	<option   >
    <?php
    $email = $wpdb->get_var("SELECT product FROM wp_products WHERE id=$i");
    echo $email;}?>
        </option>
         <option value="1">Другое</option>
    </select> Продукт</p><?php } 
     if ($c=="Каши"){
   ?> <p>

    <select  onchange="showhideBlocks(this.value)" name="opt" >       
	<?php for ($i=45;$i<51;$i++){ ?>
	<option >
    <?php
    $email = $wpdb->get_var("SELECT product FROM wp_products WHERE id=$i");
    echo $email;}?>
        </option>
         <option value="1">Другое</option>
    </select>    Продукт</p><?php } 
     if ($c=="Молочные детские смеси"){
   ?> <p>
    
    <select onchange="showhideBlocks(this.value)" name="opt" >       
	<?php for ($i=51;$i<58;$i++){ ?>
	<option >
    <?php
    $email = $wpdb->get_var("SELECT product FROM wp_products WHERE id=$i");
    echo $email;}?>
        </option>
         <option value="1">Другое</option>
    </select>
    Продукт</p><?php } 
     if ($c=="Молочные продукты"){
   ?> <p>
   
    <select onchange="showhideBlocks(this.value)" name="opt" >       
	<?php for ($i=58;$i<69;$i++){ ?>
	<option >
    <?php
    $email = $wpdb->get_var("SELECT product FROM wp_products WHERE id=$i");
    echo $email;}?>
        </option>
         <option value="1">Другое</option>
    </select> Продукт</p><?php } 
      if ($c=="Напитки"){
   ?> <p>
   
    <select onchange="showhideBlocks(this.value)" name="opt" >       
	<?php for ($i=69;$i<76;$i++){ ?>
	<option >
    <?php
    $email = $wpdb->get_var("SELECT product FROM wp_products WHERE id=$i");
    echo $email;}?>
        </option>
          <option value="1">Другое</option>
    </select> Продукт</p><?php } 
     if ($c=="Сладкое"){
   ?> <p>
    
    <select onchange="showhideBlocks(this.value)" name="opt" >       
	<?php for ($i=76;$i<84;$i++){ ?>
	<option >
    <?php
    $email = $wpdb->get_var("SELECT product FROM wp_products WHERE id=$i");
    echo $email;}?>
        </option>
         <option value="1">Другое</option>
    </select>
    Продукт</p><?php } 
    if ($c=="Ягоды"){
   ?> <p>
    
    <select onchange="showhideBlocks(this.value)" name="opt">       
	<?php for ($i=84;$i<94;$i++){ ?>
	<option >
    <?php
    $email = $wpdb->get_var("SELECT product FROM wp_products WHERE id=$i");
    echo $email;}?>
        </option>
          <option value="1">Другое</option>
    </select>
    Продукт</p><?php } 
     if ($c=="Рыба"){
   ?> <p>
    
    <select onchange="showhideBlocks(this.value)" name="opt">       
	<?php for ($i=94;$i<118;$i++){ ?>
	<option >
    <?php
    $email = $wpdb->get_var("SELECT product FROM wp_products WHERE id=$i");
    echo $email;}?>
        </option>
         <option value="1">Другое</option>
    </select>
    Продукт</p><?php } 
    
         if ($c=="Другое"){
   ?> <p>
   
    <select onchange="showhideBlocks(this.value)" name="opt" >       
	<?php for ($i=118;$i<130;$i++){ ?>
	<option >
    <?php
    $email = $wpdb->get_var("SELECT product FROM wp_products WHERE id=$i");
    echo $email;}?>
        </option>
         <option value="1">Другое</option>
    </select> Продукт</p><?php } 
    ?> <div id="i1"> <input name="another" placeholder="Введите свой продукт" /></div>
   
    <label> 
         <p> 
    <input name="gramm" type="text" value="">
  </label>Количество продукта(г)
   </p>
      
      
    
   <!--  <p>
<label>
    <select onchange="showhideBlocks(this.value)" name="optio">
       
	<?php //for ($i=1;$i<7;$i++){ ?>
	<option >
        <?php
      //  $email = $wpdb->get_var("SELECT reaction_name FROM wp_reaction WHERE id=$i");
 //   echo $email;}?>
     </option>
        <option value="2">Другое</option>
</select> <span>Реакция</span>
         <div id="i2"> <input name="re" placeholder="Введите свою реакцию" /></div></label>
    </p>
    -->
     <label>
         <p>
    <input name="date" type="date" value="2018-01-01">
  </label> Дата
   </p>
    <label>
         <p> 
    <input name="age" type="text" value="">
  </label>Возраст ребенка
   </p>

 

 <input type="submit" name="nazvanie" value="Добавить" /><br><br></form>
 <?php

if( isset( $_POST['nazvanie'] ) ){
   global $wpdb;
    $user = new WP_User(get_current_user_id());
$d= $user->user_login;
	$table_name = $wpdb->prefix.$d;
    if ($_POST['optio']=="2")
    {
        $j=$_POST['re'];
    }
    else
    {
        $j=$_POST['optio'];
    }
 if ($_POST['opt']=="1" ){
    $wpdb->insert( 'wp_skaskevich', array('id' => NULL,'nick'=>$d, 'product' =>$_POST['another'], 'reaction' => $j, 'date' =>$_POST['date'],  'age' => $_POST['age'],  'kolvo' => $_POST['gramm']), array( '%d', '%s','%s' ,'%s' ,'%s' ,'%s' ,'%d') );}
    else
    {
        $wpdb->insert( 'wp_skaskevich', array('id' => NULL,'nick'=>$d, 'product' =>$_POST['opt'], 'reaction' => $j, 'date' =>$_POST['date'],  'age' => $_POST['age'],  'kolvo' => $_POST['gramm']), array( '%d', '%s','%s' ,'%s' ,'%s' ,'%s' ,'%d') );
    }
    



}

global $wpdb;
   $user = new WP_User(get_current_user_id());
$d= $user->user_login;
$newtable = $wpdb->get_results( "SELECT id,nick, product, reaction, date, age, kolvo FROM wp_skaskevich WHERE nick='$d'");
$k = count($newtable);
;
?>
 <div class="prokrutka">
<table class="pit">
  <tr class="verh">
    <th>Продукт</th>
       <!--<th>Реакция ребенка</th> -->
       <th>Дата</th>
       <th>Возраст ребенка</th>
       <th>Количество продукта (г)</th> 
      
  </tr>
    
    <?php 
          $k = count($newtable);
          for($i=$k-1;$i>0;$i--){?>
      <tr>
          
       <td><?php echo $newtable[$i]->product; ?></td>
     <!--  <td><?php //echo $newtable[$i]->reaction; ?></td> -->
       <td><?php echo $newtable[$i]->date; ?></td>
       <td><?php echo $newtable[$i]->age; ?></td>
       <td><?php echo $newtable[$i]->kolvo;  ?></td>
      
  </tr>
    <?php } ?><?php endif; ?> 
</table> </div>
</html>