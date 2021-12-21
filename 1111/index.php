<?php 
 
 setcookie("rednw", $sem1, time()+3600,"/");
require "internal_part/serv/config.php";
$pag=  $_GET['pag'];
$dim =  $_GET['dim'];
$sem1;
if($pag=='7'){

   
  $new_url = 'internal_part/engen/logaud.php';
header('Location: '.$new_url);
}
try {
  $sem=  $_GET['sem'];
$sem1 = $sem;
  $edt =  $_GET['edt'];

      setcookie("chan", $sem, time()+3600,"/"); 
} catch (Exception $e) {
  
}
 setcookie("indtx", $dim, time()+3600,"/"); 
    
?>

<!DOCTYPE html>
<html lang="ru">

<head>
<meta charset="utf-8">
<title>Форум космонавтики</title>
<meta name="description" content="Форум космонавтики">
<meta name="keywords" content="Форум космонавтики">



    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/favicon.ico">


    <link href="/templates/SD/css/ssg.css" type="text/css" rel="stylesheet">
    <link href="/templates/SD/css/bootstrap.css" type="text/css" rel="stylesheet">
  <link href="/templates/SD/css/s.css" type="text/css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container tb">
        <nav class="navbar navbar-expand-lg navbar-light  mr-0" id="nst">  <!-- sticky-top -->

    
    	<a class="navbar-brand text-uppercase" href="/">
            <i class="fas fa-user-astronaut"></i>
            ВЕБ-ФОРУМ ПОСВЯЩЁННОГО КОСМОНАВТИКЕ<small class="text-info">.ru</small>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
       	<ul class="navbar-nav">
            <li class="nav-item p-0 mr-1 btn btn-sm btn-outline-light"><a class="nav-link" href="/?pag=9">Главная</a></li>
            <li class="nav-item p-0 mr-1 btn btn-sm btn-outline-light"><a class="nav-link" href="/?pag=">Форум</a></li>
             <?php 
             if(isset($_COOKIE["idpu"])){?>
               <li class="nav-item p-0 mr-1 btn btn-sm btn-outline-light"><a class="nav-link" href="/?pag=13">Пользователи</a></li>
               <?php } ?>





       
             <!-- <li class="nav-item p-0 mr-1 btn btn-sm btn-outline-light"><a class="nav-link" href="/index.php?do=search&full_search=1">Поиск</a></li> -->

        </ul>
        <?php  
        if(!isset($_COOKIE['idpu'])){
         ?>
        <ul class="navbar-nav ml-auto">
            
            
            <li class="nav-item p-0 mr-1 btn btn-sm btn-outline-light dropdown">
                <a class="nav-link" href="/?pag=2" id="navbarDropdown" role="button" data-toggle="modal" data-target="#exampleModalCenter">
                    Вход / Регистрация
                </a>
            </li>
            
        </ul>
          <?php } else{ ?><p class="mb-0 text-center"> <?php echo $_COOKIE['nik']; ?>

 <ul class="navbar-nav ml-auto">
            
            
            <li class="nav-item p-0 mr-1 btn btn-sm btn-outline-light dropdown">
                <a class="nav-link" href="/?pag=7" id="navbarDropdown" role="button" data-toggle="modal" data-target="#exampleModalCenter">
                    Выход
                </a>
            </li>
            
        </ul>


           <?php   }  ?>
    </div>
</nav>


        <div class="wrap">
            <div class="row">
                <div class="col-md-9">
                   <div id='dle-content'>

<?php 

if($pag==''){

  require "internal_part/engen/kag.php";

}

if($pag=='1'){

  require "internal_part/engen/part1.php";
}
if($pag=='2'){
  if(isset($_COOKIE["idpu"])){
    setcookie("idpu","", time()-3600,"/");   
    setcookie("nik","", time()-3600,"/"); 
      }
 
  require "internal_part/engen/regist.php";
}

if($pag=='4'){
$chan = $_COOKIE['chan'];

$articless = mysqli_query($connection, "DELETE FROM `messages` WHERE id ='$sem'");
  require "internal_part/engen/part1.php";
}


if($pag=='5'){

  require "internal_part/engen/part1.php";
}
if($pag=='9'){

  require "internal_part/engen/gl.php";

}
if($pag=='12'){
require "internal_part/engen/ospart.php";
  

}
if($pag=='13'){
require "internal_part/engen/ban.php";
  

}
if($pag=='78'){

 
  $articless = mysqli_query($connection, "DELETE FROM `user` WHERE id ='$dim'");
require "internal_part/engen/ban.php";
  

}
if($pag=='79'){

 
  $articless = mysqli_query($connection, " UPDATE `user` SET `sytys` = '1' WHERE `user`.`id` = '$dim'");
require "internal_part/engen/ban.php";
  

}
if($pag=='80'){

    $articless = mysqli_query($connection, " UPDATE `user` SET `sytys` = NULL WHERE `user`.`id` = '$dim'");
require "internal_part/engen/ban.php";
}
?>

                    </div>
                   
                <div class="col-md-3">
                   <?php  if(!isset($_COOKIE["idpu"])){    ?>
                    <div class="ywed">
<div class="card-body p-2">
<div class="alert alert-success m-0" role="alert">
  <h4 class="alert-heading">Привет!</h4>
    <p>Дорогой <b>Гость</b>, чат доступен только для зарегистрированных пользователей.</p>
  <hr>
  <p class="mb-0 text-center"> <a class="btn btn-success btn-sm btn-rounded" href="/?pag=2" id="navbarDropdown" role="button" data-toggle="modal" data-target="#exampleModalCenter">Вход / Регистрация</a> </p>
</div>

</div>
</div>
 <?php } else { echo $_COOKIE["nik"];} ?>



<div id="jquery-accordion-menu" class="jquery-accordion-menu mb-5">
  <div class="card w-100">
    <div class="card-body p-2">
        <div class="nice-nav">

            <ul>
                <li class="child-menu" id="cat9">
                    <a class="child-menu-head" href="/kerbal-space-program/"><span> menu <i class="fas fa-space-shuttle catimg" style="color: var(--cyan);"></i></span> </a>
                    <ul class="child-menu-ul" style="display: block;">
                       
                        <li class="child-menu" id="cat23">
                            <a href="/kerbal-space-program/news-ksp/"><span> Новости</span> </a>
                        </li>
                        <li class="child-menu" id="cat2">
                            <a href="/kerbal-space-program/mods-ksp/"><span> История </span> </a>
                        </li>
                        <li class="child-menu" id="cat3">
                            <a href="/kerbal-space-program/guides-ksp/"><span> Творчество</span> </a>
                        </li>
                    </ul>
                </li>
                
               
            </ul>
        </div>

    </div>
</div>


</div>

<div class="card mb-5 f90">
  <h6 class="card-header">Последние комментарии</h6>

	

	<a href="/index.php?do=lastcomments" class="list-group-item list-group-item-action" style="padding: 10px;">
	<div class="media">
	  <img class="d-flex mr-2" src="/templates/SD/images/coms.svg" style="width: 24px;height: 24px;object-fit: cover;margin: 0 5px 0 0;">
	  <div class="media-body text-muted" style="font-size: 84%;overflow: auto;">
	    <div class="mt-0"><b style="font-family: arial;"><i class="fa fa-share" aria-hidden="true"></i> Все комментарии..</b></div>
	    Полный список последних комментариев
	  </div>
	</div>
	</a>
	</div> 
</div>

<div class="card mb-5 f90">
  <h6 class="card-header">Последние сообщения с форума</h6>

	



<div class="card w-100 mb-5 text-white bgpath bg-secondary f09">
	<div class="card-body">
		<div class="spinner-grow spinner-grow-sm float-right" role="status">
  			<span class="sr-only">Loading...</span>
		</div>
		<p class="m-0"> Нашли ошибку? <br>
  Вы можете сообщить об этом администрации.<br>
  Выделив текст нажмите Alt+Ctrl</p>
	</div>
</div>



                </div>
            </div>
        </div>
                 
  <!-- Footer -->
<footer class="footer p-0">

  <!-- Footer Links -->
  <div class="container p-3 text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
              

           




  <input type="hidden" name="vote_action" value="vote">
  <input type="hidden" name="vote_id" id="vote_id" value="28">


</div>
    
    

</div>

                </div>
   
              

               
                </div>
                
              
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>
                      
          
    <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Есть аккаунт?</h5>
    </li>
    <li class="list-inline-item">
                      <a class="btn btn-danger btn-rounded" href="#" id="navbarDropdown" role="button" data-toggle="modal" data-target="#exampleModalCenter">
Авторизируйся!</a>
    </li>
    <li class="list-inline-item">
      <h5 class="mb-1"> или создай его <a href="/index.php?do=register" class="btn btn-danger btn-rounded">сейчас</a></h5>
    </li>
      
      
  </ul>
  <!-- Call to action -->  

 <hr>
  <!-- Copyright -->
  <div class="text-center py-2">Никакие права не защищены ¯\_(ツ)_/¯
      <br>
 <!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t12.3;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")
//--></script><!--/LiveInternet-->



    

    
    
    
</footer>
<!-- Footer -->                      
    </div>
</body>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                




    <div class="col-md-5 p-3">
        <h5 class="card-title text-center">Авторизация</h5>
        <hr>
<form class="px-4 py-3" role="form" method="post" action="">
            <div class="form-group">
                <input class="form-control" style="width: 100%;" type="text" id="inputEmail" name="login_name" placeholder="Логин" />
            </div>
            <div class="form-group">
                <input class="form-control" style="width: 100%;" type="password" id="inputPassword" name="login_password" placeholder="Пароль" />
            </div>

            <div class="custom-control custom-switch mb-4">
                <input type="checkbox" value="1" name="login_not_save" class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">Не запоминать данные</label>
            </div>


            <button type="submit" class="btn btn-primary btn-block mb-2"> Войти</button>
            <input class="form-control" name="login" type="hidden" id="login" value="submit" />
        </form>
        <a class="btn btn-secondary btn-block mb-2" href="">Я забыл свой пароль</a>

    </div>
</div>


            </div>
        </div>
    </div>
</div>


<!-- ===============SCRIPTS=============== -->



<link href="/engine/classes/min/index.php?f=engine/editor/css/default.css&amp;v=27" rel="stylesheet" type="text/css">

<!-- ===============SCRIPTS=============== -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/v4-shims.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="/templates/SD/css/animate.css">
<link rel="stylesheet" href="/templates/SD/css/magnific-popup.css">

<link href="/engine/classes/min/index.php?f=engine/editor/css/default.css&amp;v=27" rel="stylesheet" type="text/css">
<script src="/engine/classes/min/index.php?g=general&amp;v=27"></script>
<script src="/engine/classes/min/index.php?f=engine/classes/js/jqueryui.js,engine/classes/js/dle_js.js&amp;v=27" defer></script>
    
 
    
   


<script>
    //  $(window).scroll(function() {
    //      if ($(this).scrollTop() > 26) {
    //         $('.navbar').removeClass('navbar-light');
    //          $('.navbar').addClass('navbar-dark bg-dark2 rounded-0');
    //      } else {
    //          $('.navbar').removeClass('navbar-dark bg-dark2 rounded-0');
    //          $('.navbar').addClass('navbar-light');
    //      }
    //  });

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    $(function() {
        $('[data-toggle="popover"]').popover()
    })
    $(document).ready(function() {
        $("#gcom").click(function() {
            $('.toast').toast('show');
        });
    });
</script>
<script>
<!--

jQuery(function($){
FastSearch();
});
//-->
</script>

<!-- ===============SCRIPTS END=============== -->

</html>
<!-- DataLife Engine Copyright SoftNews Media Group (http://dle-news.ru) -->
