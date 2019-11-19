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

	$Email = htmlspecialchars(trim($_POST['email']));
	$Pseudo = htmlspecialchars(ucfirst(trim($_POST['pseudo'])));
	$Password = trim($_POST['password']);
	$PasswordConfirmation = trim($_POST['PasswordConfirmation']);
	
var_dump($Email, $Pseudo, $Password);

	if(empty($Pseudo)){
		$valid = false;
        $_SESSION['flash']['danger'] = "Veuillez renseigner votre pseudo !";
    }

	if(empty($Email)){
		$valid = false;
		$_SESSION['flash']['danger'] = "Veuillez renseigner votre adresse email !";
	}

	$req = $DB->query('Select email from user where email = :email', array('email' => $Email));
	$req = $req->fetch();

	if(!empty($Email) && $req['email']){
		$valid = false;
		$_SESSION['flash']['danger'] = "Cet adresse email existe déjà";

	}

	if(!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $Email)){
		$valid = false;
		$_SESSION['flash']['danger'] = "Veuillez renseigner un email conforme !";
	}

	if(empty($Password)){
		$valid = false;
		$_SESSION['flash']['danger'] = "Veuillez renseigner votre mot de passe !";

	}elseif($Password && empty($PasswordConfirmation)){
		$valid = false;
		$_SESSION['flash']['danger'] = "Veuillez confirmer votre mot de passe !";

	}elseif(!empty($Password) && !empty($PasswordConfirmation)){
		if($Password != $PasswordConfirmation){

			$valid = false;
			$_SESSION['flash']['danger'] = "La confirmation est différente !";
		}

	}

	if($valid){

		$id_user = uniqid();

		$DB->insert('Insert into user (pseudo, email, password, id_user) values (:pseudo, :email, :password, :id_user)', array('pseudo' => $Pseudo, 'email' => $Email, 'password' => crypt($Password, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t'), 'id_user' => $id_user));


		$_SESSION['flash']['success'] = "Votre inscription a bien été prise en compte, connectez-vous !";
		header('Location: signin.php');
		exit;

	}
}
require('inc/head.php');

?>

<!-- SignUp [ Section 0.2 ]-->
<!-------------------------------------------------------------------------->


<!-- Title - [ Section 0.2 ] -->
<!------------------------------------->
<div class="container">
    <div class="row site-section">
        <div class="col-md-6">
          <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Bienvenue</span>
              <h2 class="heading">On attend plus que vous !</h2>
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
            <form method="post" action="signup.php">
                <div class="form-group">
                    <label for="inputPseudo">Pseudo</label>
                    <?php
						if(isset($error_pseudo)){
							echo $error_pseudo."<br/>";
						}
					?>
                    <input type="text" name="pseudo" class="form-control" id="inputPseudo" placeholder="Votre pseudo"
                    value="<?php if (isset($Pseudo)) echo $Pseudo; ?>" maxlength="20" required="required">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Adresse email</label>
                    <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Votre adresse email"
                    value="<?php if (isset($Email)) echo $Email; ?>" required="required">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Mot de passe</label>
                    <?php
						if(isset($error_password)){
							echo $error_password."<br/>";
						}
					?>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Votre mot de passe"
                    value="<?php if (isset($Password)) echo $Password; ?>" required="required">
                </div>
                <div class="form-group">
                    <label for="InputPasswordConfirm">Confirmez votre mot de passe</label>
                    <?php
						if(isset($error_passwordConf)){
							echo $error_passwordConf."<br/>";
						}
					?>
                    <input type="password" name="PasswordConfirmation" class="form-control" id="InputPasswordConfirm" placeholder="Votre mot de passe">
                </div>
                <br>
                <button type="submit" name="submit-signup" class="btn btn-primary">Inscription</button>
            </form>

        </div>
    
    </div>
</div>