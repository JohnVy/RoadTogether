<?php
session_start();
require('inc/connect.php');
include('inc/head.php');
include('inc/header.php');

if (!empty($_POST)){
    $valid = true;
    $email = htmlspecialchars(trim($_POST['email']));
    $pseudo = htmlspecialchars(ucfirst(trim($_POST['pseudo'])));
    $password = trim($_POST['password']);
    $passwordConfirmation = trim($_POST['PasswordConfirmation']);

    if(empty($email)){
        $valid = false;
        echo "email vide";
    }
    if(!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){
        $valid = false;
        echo "Email non conforme";
    }

    if(empty($pseudo)){
        $valid = false;
        echo "Pseudo vide";
    }
    if(empty($password)){
        $valid = false;
        echo "Mot de passe vide";
    }
    if(empty($passwordConfirmation)){
        $valid = false;
        echo "Vérification du mot de passe vide";
    }
    if($password != $passwordConfirmation){
        $valid = false;
        echo "La confirmation est différente !";
    }

    elseif($password == $passwordConfirmation){

        
        $sql = $conn->prepare("INSERT INTO users (pseudo_user, email_user, password_user) VALUES (:pseudo, :email, :password)");
        $sql->execute(array(
            "pseudo" => $pseudo,
            "email" => $email,
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ));
        header('Location: signin.php');
    }
}
?>




<div id="block-signup" class="container">
    <div class="row site-section">
        <div class="col-md-6">
          <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Bienvenue</span>
              <h2 class="heading white">On attend plus que vous !</h2>
                <?php
		            // if(isset($_SESSION['flash'])){
                    //     foreach($_SESSION['flash'] as $type => $message): 
                    ?>
				        <div id="alert" class="alert alert-<?= $type; ?> infoMessage"><a class="close"></a>
                  
				        </div>

			        <?php
			            // endforeach;
			            // unset($_SESSION['flash']);
			        // }
                ?>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4 block-sign">
            <form method="post" action="signup.php">
                <div class="form-group">
                    <label for="inputPseudo">Pseudo</label>
                    <?php
						if(isset($error_pseudo)){
							echo $error_pseudo."<br/>";
						}
					?>
                    <input type="text" name="pseudo" class="form-control" id="inputPseudo" placeholder="Votre pseudo"
                    value="<?php if (isset($pseudo)) echo $pseudo; ?>" maxlength="20" required="required">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Adresse email</label>
                    <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Votre adresse email"
                    value="<?php if (isset($email)) echo $email; ?>" required="required">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Mot de passe</label>
                    <?php
						if(isset($error_password)){
							echo $error_password."<br/>";
						}
					?>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Votre mot de passe"
                    value="<?php if (isset($password)) echo $password; ?>" required="required">
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

<?php include('inc/footer-scripts.php'); ?>