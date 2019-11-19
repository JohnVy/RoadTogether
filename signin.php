<?php
session_start();
include_once('inc/include.php');

if(isset($_SESSION['pseudo'])){
	header('Location: home.php');
	exit;
}

if(!empty($_POST)){
	extract($_POST);
	$valid = true;
	
	$Email = htmlspecialchars(trim($Email));
	$Password = trim($Password);
		
	if(empty($Email)){
		$valid = false;
		$_SESSION['flash']['danger'] = "Veuillez renseigner votre adresse email !";
	}
	
	if(empty($Password)){
		$valid = false;
		$error_password = "Veuillez renseigner votre mot de passe !";
	}
	
	
	$req = $DB->query('Select * from user where email = :email and password = :password', array('email' => $Email, 'password' => crypt($Password, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t')));
	$req = $req->fetch();
	var_dump($Email);
		
	if(!$req['email']){
		$valid = false;
		$_SESSION['flash']['danger'] = "Votre adresse email ou votre mot de passe ne correspondent pas";
	}
	
	
	if($valid){
		
		$_SESSION['id'] = $req['id_user'];
		$_SESSION['pseudo'] = $req['pseudo'];
		$_SESSION['email'] = $req['email'];
		$_SESSION['password'] = $req['password'];
		
		$_SESSION['flash']['info'] = "Bonjour" . $_SESSION['pseudo'];
		header('Location: home.php');
		exit;
		var_dump ('email');
			
	}
	
}
require('inc/head.php');
?>


<!------------------------------------->
<!-- SignIn [ Section 0.1 ]-->
<!-------------------------------------------------------------------------->


<!-- Title - [ Section 0.1 ] -->
<!------------------------------------->
<div class="container">
    <div class="row site-section">
        <div class="col-md-12">
          <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Bonjour</span>
              <h2 class="heading">Connectez-vous !</h2>
                <?php 
		            if(isset($_SESSION['flash'])){ 
		                foreach($_SESSION['flash'] as $type => $message): ?>
				        <div id="alert" class="alert alert-<?= $type; ?> infoMessage"><a class="close"></a>
					        <?= $message; ?>
				        </div>	
		    
			        <?php
			            endforeach;
			            unset($_SESSION['flash']);
			        }
		        ?>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <form method="post" action="">
                <div class="form-group">
                    <label for="inputEmail">Adresse email</label>
                    <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Votre adresse email"
                    value="<?php if (isset($Email)) echo $Email; ?>" required="required">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Mot de passe</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Votre mot de passe"
                    value="<?php if (isset($Password)) echo $Password; ?>" required="required">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="Check">
                    <label class="form-check-label" for="Check">Se souvenir de moi</label>
                </div>
                <br>
                <br>
                <button type="submit" name="submit-signin" class="btn btn-primary">Connexion</button>
            </form>
        </div>

    </div>
</div>
