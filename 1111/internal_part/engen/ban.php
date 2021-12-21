<?php
    
          $maxpost = 5;
          $post=0;
$articless = mysqli_query($connection,"SELECT * FROM `user`");

if( mysqli_num_rows($articless) == 0 )
{
  
} else

while (($cat = mysqli_fetch_assoc($articless)))
 
 {?>
   
      
<div class="card  mb-5">


  <div class="card-body p-3">
  
    <div class="row"> 
        <div class="col-md-4 p-0"> 
            <a href="">
              <h4 class="shtitle m-0"><a href=""> <?php echo $cat['nickname'];?></a></h4>
                
            </a>
        </div>


        <div class="col-md-8 pl-md-2">

        </div>
        
    </div>
  </div>



  <div class="card-footer p-1 pl-2 pr-2">
    <ul class="list-inline m-0 text-muted f90_n isize">
       
    
    <?php 
    $qfss = $_COOKIE['idpu'];
$articless1 = mysqli_query($connection,"SELECT `groyp` FROM `user` WHERE id = ' $qfss'");
$cat1 = mysqli_fetch_assoc($articless1);

    if($_COOKIE['idpu']==$cat['autor'] || $cat1['groyp']==2){?>
        <li class="list-inline-item float-right">
           <a href="/?pag=78&dim=<?php echo $cat['id'];?>"><i class="faseth" aria-hidden="true"></i> </a>
        </li>
          <li class="list-inline-item float-right mr-1">
          <a href="/?pag=79&dim=<?php echo $cat['id'];?>"><i class="fasedinban" aria-hidden="true"></i></a>
         </li>
          <li class="list-inline-item float-right mr-1">
          <a href="/?pag=80&dim=<?php echo $cat['id'];?>"><i class="fasedinunban" aria-hidden="true"></i></a>
         </li>
          <?php }?>
    </ul>
  </div>




</div>
<?php
}
?>
<?php
if($_COOKIE['idpu']=='2'){
?>
<div class="convaddcom">

  <form action="../internal_part/engen/add.php/" method="get" class=" forav">
   
    <textarea  name="message" id="vB_Editor_QR_textarea" rows="10" cols="60" style="width:100%; height:150px" tabindex="1" dir="ltr"><?php if (isset($sem)){
$articless = mysqli_query($connection,"SELECT message FROM `messages` WHERE id = '$sem'");
      $cat = mysqli_fetch_assoc($articless);
      echo $cat['message'];
    }?>
</textarea>
<button class="btn btn-success"  type ="submit" >Отправить</button>
  </form>
</div>

<?php
}
?>






<div class="card w-100 mb-5">
  <div class="card-body p-2">
<ul class="pagination text-center m-0">


<li><span><i class="fa fa-chevron-left" aria-hidden="true"></i></span></li>
<?php
          $maxpost = 5;
          $post=0;
$articless = mysqli_query($connection,"SELECT COUNT(*) FROM `canvas`");

if( mysqli_num_rows($articless) == 0 )
{
  echo 'Pizdec';
} else
$cat = mysqli_fetch_assoc($articless);

for ( $r=1;$r< ($cat['name']%$maxpost);$r++)
 
 {?>


<?php echo $cat['name'];?>
 
  <li class="hidden-xs"><span>1</span> 



  <?php
}
?>  <li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
</ul>
    </div></div></div>
                    
                    
