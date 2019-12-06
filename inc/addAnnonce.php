<?php

if(!empty($_POST)){
    $valid = true;
        $start_date_annonce = $_POST['checkin_date'];
        $end_date_annonce = $_POST['checkout_date'];
        $active = $_POST['active'];
        $price_annonce = $_POST['checkin_price'];
        $transport_annonce = $_POST['checkin_transport'];
        $categorie_annonce = $_POST['checkin_continent'];
        $country_annonce = $_POST['checkin_country'];
        $city_annonce = $_POST['checkin_city'];
        $text_annonce = $_POST['checkin_text'];
    

    if(empty($start_date_annonce)){
        $valid = false;
        echo "Date de départ vide";
    }
    if(empty($end_date_annonce)){
        $valid = false;
        echo "Date de fin vide";
    }
    if(empty($active)){
        $valid = false;
        echo "Nbr de place disponibles vide";
    }
    if(empty($price_annonce)){
        $valid = false;
        echo "Prix vide";
    }
    if(empty($transport_annonce)){
        $valid = false;
        echo "Moyen de transport vide";
    }
    if(empty($categorie_annonce)){
        $valid = false;
        echo "Continent vide";
    }
    if(empty($country_annonce)){
        $valid = false;
        echo "Pays vide";
    }
    if(empty($city_annonce)){
        $valid = false;
        echo "Ville vide";
    }
    if(empty($text_annonce)){
        $valid = false;
        echo "Commentaire vide";
    }
    
    if ($valid = true) {
        $sql = $conn->prepare("INSERT INTO annonces (text_article, categorie_article, active, start_date_article, end_date_article, price_article, city_article, country_article, road_article) VALUES (:text_article, :categorie, :active, :start_date_article, :end_date_article, :price, :city, :country, :road)");
        $sql->execute(array(
            "text_article" => $text_annonce,
            "categorie" => $categorie_annonce,
            "active" => $active,
            "start_date_article" => $start_date_annonce,
            "end_date_article" => $end_date_annonce,
            "price" => $price_annonce,
            "city" => $city_annonce,
            "country" => $country_annonce,
            "road" => $transport_annonce
        ));
        header('Location: profil.php');
    }
}

?>


<div class="block-back block-back-sm item" style="background-image: url('img/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2">
                <div class="vcard d-flex mb-6">
                    <div class="image align-self-center"><img src="img/person_6.jpg" alt="Person here"></div>
                </div>
            </div>
            <div class="col-md-6">
                <span class="subheading-sm">Profil</span>
                <h2 class="heading">
                <?php echo $_SESSION['username']; ?></h2>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="block-search">
                <form method="post" action="profil.php">
                
                <!-- row 1 -->
                    <div class="row mb-3">
                        <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                            <label for="checkin">Du</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="far fa-calendar"></span></div>
                                <input type="text" name="checkin_date" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                            <label for="checkin">Au</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="far fa-calendar"></span></div>
                                <input type="text" name="checkout_date" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                            <div class="row">

                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="checkin">Nbr</label>
                                    <div class="field-icon-wrap">
                                        <div class="icon">
                                            <span class="fas fa-angle-down"></span>
                                        </div>
                                        <select name="active" id="" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4 +">4+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="checkin">Prix</label>
                                    <div class="field-icon-wrap">
                                    <div class="icon">
                                        <span class="fas fa-euro-sign"></span>
                                    </div>
                                    <input type="text" name="checkin_price" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                            <label for="checkin">Transport</label>
                            <div class="field-icon-wrap">
                                <div class="icon">
                                    <span class="fas fa-angle-down"></span>
                                </div>
                                <select name="checkin_transport" class="form-control">
                                <option value="Pédestre">Pédestre</option>
                                <option value="Voiture">Voiture</option>
                                <option value="Autocar">Autocar</option>
                                <option value="Bâteau">Bateau</option>
                                <option value="Avion">Avion</option>
                                </select>
                            </div>
                        </div>

                    </div> 
                <!-- row 2 -->
                    <div class="row">
                        
                        <div class="col-md-4 mb-3">
                        <label for="checkin">Continent</label>
                            <div class="field-icon-wrap">
                                <div class="icon">
                                    <span class="fas fa-angle-down"></span>
                                </div>
                                <select name="checkin_continent" class="form-control">
                                    <option value="Europe">Europe</option>
                                    <option value="Asie">Asie</option>
                                    <option value="Océanie">Océanie</option>
                                    <option value="Afrique">Afrique</option>
                                    <option value="Amérique">Amérique</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3 mb-md-0">
                            <label for="checkin">Pays</label>
                            <div class="field-icon-wrap">
                                <div class="icon">
                                    <span class="fas fa-globe-africa"></span>
                                </div>
                                <input type="text" name="checkin_country" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4 mb-3 mb-md-0">
                            <label for="checkin">Ville</label>
                            <div class="field-icon-wrap">
                                <div class="icon">
                                    <span class="fas fa-map-marker-alt"></span>
                                </div>
                                <input type="text" name="checkin_city" class="form-control">
                            </div>
                        </div>

                    </div>
                <!-- row 3 -->
                    <div class="row">

                        <div class="col-md-8">
                            <label for="checkin">Pose quelques lignes</label>
                            <div class="field-icon-wrap">
                                <div class="icon">
                                    <span class="fas fa-comment"></span>
                                </div>
                                <textarea class="form-control" name="checkin_text" cols="3" row="1"></textarea>
                            </div>
                        </div>

                        <div class="col-md-4 align-self-end">
                            <button type="submit" name="submit_annonce" class="btn btn-primary btn-block"><span class="fab fa-telegram-plane"></span>Poster</button>
                        </div>

                    </div>

                </form>

                
            </div>
        </div>
    </div>
</div>