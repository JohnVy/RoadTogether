
<div class="site-section bg-light">
    <div class="container">
        
        <div class="row mb-5">
            <div class="col-md-7 section-heading">
                <span class="subheading-sm">Les annonces</span>
                <h2 class="heading">L'Europe</h2>
            </div>
        </div>

        <div class="block-section">
            <ul class="nav" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a href="#pills-news" id="pills-news-tab" class="nav-link active" data-toggle="pill" role="tab" aria-control="pills-news" aria-selected="true">Les nouveautés</a>
                </li>
                <li class="nav-item">
                    <a href="#pills-select" id="pills-select-tab" class="nav-link" data-toggle="pill" role="tab" aria-control="pills-select" aria-selected="false">Notre sélections</a>
                </li>
                <li class="nav-item">
                    <a href="#pills-pop" id="pills-pop-tab" class="nav-link" data-toggle="pill" role="tab" aria-control="pills-pop" aria-selected="false">Les populaires</a>
                </li>
            </ul>

            <div class="tab-content">
                
                <div class="tab-pane fade show active" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
                    <div class="row">
                        <div class="col-md-12 block-gallery">
                            <div class="nonloop-block-gallery owl-carousel">

                            <?php
                            $newsAnnonces = $conn->query("SELECT * FROM annonces WHERE categorie_article = 'Europe' ORDER BY annonces . publish_date_article DESC LIMIT 6");
                            
                            while( $rowNewsAnnonce = $newsAnnonces->fetch() ) {

                                $rowUser = array(
                                    'pseudo_user' => "Toto",
                                    'classe_user' => "Barroudeur",
                                    'avatar_user' => "person_1.jpg"
                                );
                            ?>

                                <div class="item">
                                    <div class="block-post">
                                        <div class="col-12">
                                            <div class="block-user">
                                                <div class="vcard d-flex">
                                                    <div class="image align-self-center"><img src="img/<?php echo $rowUser['avatar_user']; ?>" alt="avatar de <?php echo $rowUser['pseudo_user']; ?>"></div>
                                                    <div class="name-text align-self-center">
                                                        <h2 class="heading"><?php echo $rowUser['pseudo_user']; ?></h2>
                                                        <span class="meta"><?php echo $rowUser['classe_user']; ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="icon">
                                                <span class="far fa-hearth"></span>
                                                <span class="fas fa-check"></span>
                                                <span class="fas fa-share-alt"></span>
                                            </div>

                                            <div class="image">
                                                <a href=""><img src="img/<?php echo $rowNewsAnnonce['image_url']; ?>" alt="Image placeholder"></a>
                                            </div>

                                            <div class="text">
                                                <h2 class="heading"><?php echo $rowNewsAnnonce['country_article']; ?>, <?php echo $rowNewsAnnonce['city_article']; ?></h2>
                                                <p><?php echo $rowNewsAnnonce['text_article']; ?></p>
                                                <ul class="specs">
                                                    <li><strong>Secteur :</strong> <?php echo $rowNewsAnnonce['categorie_article']; ?></li>
                                                    <li><strong>Nbr de place :</strong> + <?php echo $rowNewsAnnonce['active']; ?></li>
                                                    <li><strong>Départ :</strong> <?php echo $rowNewsAnnonce['start_date_article']; ?></li>
                                                    <li><strong>Retour :</strong> <?php echo $rowNewsAnnonce['end_date_article']; ?></li>
                                                </ul>

                                                <div class="price">
                                                    <span class="number"><?php echo $rowNewsAnnonce['price_article']; ?></span>
                                                    <sup>€</sup>
                                                    <sub>/ pers</sub>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-select" role="tabpanel" aria-labelledby="pills-select-tab">
                    <div class="row">
                        <div class="col-md-12 block-gallery">
                            <div class="nonloop-block-gallery owl-carousel">

                            <?php
                            $selectAnnonces = $conn->query("SELECT * FROM annonces WHERE categorie_article = 'Europe' ORDER BY annonces . price_article ASC LIMIT 6");


                            while( $rowSelectAnnonce = $selectAnnonces->fetch() ) {

                                $rowUser = array(
                                    'pseudo_user' => "Toto",
                                    'classe_user' => "Barroudeur",
                                    'avatar_user' => "person_1.jpg"
                                );
                            ?>

                                <div class="item">
                                    <div class="block-post">
                                        <div class="col-12">
                                            <div class="block-user">
                                                <div class="vcard d-flex">
                                                    <div class="image align-self-center"><img src="img/<?php echo $rowUser['avatar_user'] ?>" alt="avatar de <?php echo $rowUser['pseudo_user']?>"></div>
                                                    <div class="name-text align-self-center">
                                                        <h2 class="heading"><?php echo $rowUser['pseudo_user']?></h2>
                                                        <span class="meta"><?php echo $rowUser['classe_user']?></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="icon">
                                                <span class="far fa-hearth"></span>
                                                <span class="fas fa-check"></span>
                                                <span class="fas fa-share-alt"></span>
                                            </div>

                                            <div class="image">
                                                <a href=""><img src="img/<?php echo $rowSelectAnnonce['image_url']; ?>" alt="Image placeholder"></a>
                                            </div>

                                            <div class="text">
                                                <h2 class="heading"><?php echo $rowSelectAnnonce['country_article']?>, <?php echo $rowSelectAnnonce['city_article']?></h2>
                                                <p><?php echo $rowSelectAnnonce['text_article']?></p>
                                                <ul class="specs">
                                                    <li><strong>Nbr de place :</strong> + <?php echo $rowSelectAnnonce['active']?></li>
                                                    <li><strong>Départ :</strong> <?php echo $rowSelectAnnonce['start_date_article']?></li>
                                                    <li><strong>Retour :</strong> <?php echo $rowSelectAnnonce['end_date_article']?></li>
                                                </ul>

                                                <div class="price">
                                                    <span class="number"><?php echo $rowSelectAnnonce['price_article']?></span>
                                                    <sup>€</sup>
                                                    <sub>/ pers</sub>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-pop" role="tabpanel" aria-labelledby="pills-pop-tab">
                    <div class="row">
                        <div class="col-md-12 block-gallery">
                            <div class="nonloop-block-gallery owl-carousel">

                            <?php
                            $popAnnonces = $conn->query("SELECT * FROM annonces WHERE categorie_article = 'Europe' ORDER BY annonces . available_article DESC LIMIT 6");

                            while( $rowPopAnnonce = $popAnnonces->fetch() ) {

                                $rowUser = array(
                                    'pseudo_user' => "Toto",
                                    'classe_user' => "Barroudeur",
                                    'avatar_user' => "person_1.jpg"
                                );
                            ?>

                                <div class="item">
                                    <div class="block-post">
                                        <div class="col-12">
                                            <div class="block-user">
                                                <div class="vcard d-flex">
                                                    <div class="image align-self-center"><img src="img/<?php echo $rowUser['avatar_user'] ?>" alt="avatar de <?php echo $rowUser['pseudo_user']?>"></div>
                                                    <div class="name-text align-self-center">
                                                        <h2 class="heading"><?php echo $rowUser['pseudo_user']?></h2>
                                                        <span class="meta"><?php echo $rowUser['classe_user']?></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="icon">
                                                <span class="far fa-hearth"></span>
                                                <span class="fas fa-check"></span>
                                                <span class="fas fa-share-alt"></span>
                                            </div>

                                            <div class="image">
                                                <a href=""><img src="img/<?php echo $rowPopAnnonce['image_url']; ?>" alt="Image placeholder"></a>
                                            </div>

                                            <div class="text">
                                                <h2 class="heading"><?php echo $rowPopAnnonce['country_article']?>, <?php echo $rowPopAnnonce['city_article']?></h2>
                                                <p><?php echo $rowPopAnnonce['text_article']?></p>
                                                <ul class="specs">
                                                    <li><strong>Nbr de place :</strong> + <?php echo $rowPopAnnonce['active']?></li>
                                                    <li><strong>Départ :</strong> <?php echo $rowPopAnnonce['start_date_article']?></li>
                                                    <li><strong>Retour :</strong> <?php echo $rowPopAnnonce['end_date_article']?></li>
                                                </ul>

                                                <div class="price">
                                                    <span class="number"><?php echo $rowPopAnnonce['price_article']?></span>
                                                    <sup>€</sup>
                                                    <sub>/ pers</sub>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>