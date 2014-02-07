<?php

/**
 * @author Студия WS | Красовский Евгений | sarws.ru
 * @copyright 2014
 */

?>
<!DOCTYPE html>
<html>
<head>
	
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?php if(isset($this->title)) echo $this->title;?></title>
    
    <meta name="description" content="<?php if(isset($this->description)) echo $this->description;?>" />
    <meta name="keywords" content="<?php if(isset($this->keywords)) echo $this->keywords;?>" />
  
    <link rel="stylesheet" type="text/css" href="<?=$urlStyle;?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=$urlStyle;?>css/adapts.css" />
    <link rel="stylesheet" href="<?=$urlStyle;?>font/font.css" type="text/css" />
        
    
    <script src="<?=$urlStyle;?>js/modernizr.js" ></script>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>    
    
</head>

<body>


	<!-- Body -->
	
		<!-- Header -->
		<div class="htop">
            <a href="http://test7days.ru/"><img src="<?=$urlStyle;?>img/logo.png" /></a> 
           
            <a href="#login_form" class="panel" id="login_pop">Войти</a>
          
            <a href="https://plus.google.com/u/0/108574420692522452245/posts" class="google" title="Google+"></a>
            <a href="https://twitter.com/pre7days" class="twitter" title="Twitter"></a>
            <a href="skype:?chat&blob=-Si3D06noGMJ1ZO7VmKc6ItK5zURCPROB6J-DfLluU7L4xQj020DwNuN5UWmg_8ldXb0" class="skype" title="DeviantArt"></a>
            <a href="http://vk.com/" class="vimeo" title="Last.fm"></a>
                        
		</div>
        <?php if(empty($_GET['url'])){?>
        <header></header>
        <br />
        <nav class="clearfix">
    		<ul class="clearfix">
                <?php include_once 'menu.php';?>	
    		</ul>
    		<a href="#" id="pull">Меню</a>
    	</nav>
        <?php } elseif($_GET['url'] === 'index') {?>
        <header class="header"></header>
        <br />
        <nav class="clearfix">
    		<ul class="clearfix">
                <?php include_once 'menu.php';?>	
    		</ul>
    		<a href="#" id="pull">Меню</a>
    	</nav>
        <?php } elseif($_GET['url'] != 'index' || empty($_GET['url'])) {?>
        <h2><?php if(isset($this->title)) echo $this->title;?></h2>
            <nav class="clearfix">
        		<ul class="clearfix">
                    <?php include_once 'menu.php';?>	
        		</ul>
        		<a href="#" id="pull">Меню</a>
        	</nav>
       <?php }?>  
       <!-- Форма №1 для модального окна -->
        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popup">
            <h2>Здравствуй, Гость!</h2>
            <p>Вводи свой псевдоним и пароль</p>
            <div>
                <label for="login">Псевдоним</label>
                <input type="text" id="login" value="" />
            </div>
            <div>
                <label for="password">Пароль</label>
                <input type="password" id="password" value="" />
            </div>
            <input type="button" value="Войти" />

            <a class="close" href="#close"></a>
        </div>      
