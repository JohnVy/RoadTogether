<?php
session_start();
include_once('include.php');
	echo $_SESSION['id'];
?>
<?php require('inc/head.php');?>
<?php include('inc/navbar.php');?>

<!-- Slide - Section 0 -->
<!------------------------------------->
<div class="block-back block-back-sm item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
<div class="container">
  
  <div class="row align-items-center">
  <!-- UserCom - Section 2.1 --> 
  <div class="col-md-2">

          <div class="vcard d-flex mb-6">
            <div class="image align-self-center"><img src="images/person_6.jpg" alt="Person here"></div>
          </div>

    </div>

    <div class="col-md-6">
      <span class="subheading-sm">Profil</span>
        <?php
            if(!isset($_SESSION['id'])){
                echo "vous n'êtes pas connecté !";
            }else{
                 echo $_SESSION[`<h2 class="heading">'pseudo'</h2>`];
                
            }
        ?>
    </div>
  </div>


</div>
</div>
