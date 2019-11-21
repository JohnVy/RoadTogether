<?php
session_start();
require('inc/connect.php');
include('inc/head.php');

if(!empty($_POST)){
    $valid = true;

    $email = htmlspecialchars(trim($_POST['email']));
    $password = trim($_POST['password']);
    
    if(empty($email)){
        $valid = false;
        echo "email vide";
    }
    if(!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){
        $valid = false;
        echo "Email non conforme";
    }

    if(empty($password)){
        $valid = false;
        echo "Mot de passe vide";
    }

    $sql = $conn->prepare("SELECT * from users WHERE email_user = :email");
    $sql->execute(array('email' => $email));
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    if($sql->rowCount() > 0){
        if(password_verify($password, $row['password_user'])){
            $test = password_verify($password, $row['password_user']);
            var_dump($test);
            header('Location: home.php');
        }
    }
}
?>



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