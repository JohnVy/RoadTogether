<?php
$sql = $conn->prepare("SELECT * FROM annonces WHERE email_owner = :emailOwner LIMIT 3");
$sql->execute(array('emailOwner' => $emailOwner));



?>


<div class="site-section bg-light">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md-7 section-heading">
                <span class="subheading-sm">Vos annonces</span>
                <h2 class="heading">Vous êtes prêt ?</h2>
            </div>
        </div>

        <?php 
            while( $row = $sql->fetch(PDO::FETCH_ASSOC)) {
        ?>
        
        <div class="col-md-12 mb-5">
            <div class="block-postb d-md-flex">
                <div class="image" style="background-image: url('img/<?php echo $row['image_url']?>');"></div>

                <div class="text">
                    <h2 class="heading"><?php echo $row['country_article']?>,<br> <?php echo $row['city_article']?> </h2>
                    <div class="price">
                        <span class="number"><?php echo $row['price_article']?></span>
                        <sup>€</sup>
                        <sub>/ pers.</sub>
                    </div>

                    <ul class="specs">
                    <li><strong>Nrb de place :</strong> + <?php echo $row['active']?></li>
                    <li><strong>Départ :</strong> <?php echo $row['start_date_article']?></li>
                    <li><strong>Retour :</strong> <?php echo $row['end_date_article']?></li>
                    <li><strong>Transport :</strong> <?php echo $row['road_article']?></li>
                    <li><strong>Trajet :</strong> <?php echo $row['start_travel_article']?> <strong> > </strong> <?php echo $row['end_travel_article']?></li>
                    <li><strong>Logement :</strong> <?php echo $row['location_article']?></li>
                    </ul>

                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#postmodal<?php echo $row['id']?>">Editer</button>
                </div>
            </div>
        </div>

        <div class="modal fade bd-post-modal-lg" id="postmodal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="postmodal<?php echo $row['id']?>" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    
                    <div class="modal-body">
                        <div class="modal-header">
                            <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Supprimer</button>
                            <button type="button" class="btn btn-primary btn-lg">Sauvegarder</button>
                        </div>
                        <div class="block-postb d-md-flex">
                            
                            

                            <div class="text">
                                <h2 class="heading"><?php echo $row['country_article']?>,<br> <?php echo $row['city_article']?> </h2>
                                
                                <form action="post">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <label for="checkin">Du</label>
                                            <div class="field-icon-wrap">
                                                <div class="icon">
                                                    <span class="far fa-calendar"></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="<?php echo $row['start_date_article']?>"/>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="checkin">Au</label>
                                            <div class="field-icon-wrap">
                                                <div class="icon">
                                                    <span class="far fa-calendar"></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="<?php echo $row['end_date_article']?>"/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="checkin">Nbr</label>
                                            <div class="field-icon-wrap">
                                                <div class="icon">
                                                    <span class="fas fa-angle-down"></span>
                                                </div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                    <option value="">6</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="checkin">Prix</label>
                                            <div class="field-icon-wrap">
                                                <div class="icon">
                                                    <span class="fas fa-euro-sign"></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="<?php echo $row['price_article']?>">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <label for="checkin">Transport</label>
                                            <div class="field-icon-wrap">
                                                <div class="icon">
                                                    <span class="fas fa-angle-down"></span>
                                                </div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Pédestre</option>
                                                    <option value="">Voiture</option>
                                                    <option value="">Autocar</option>
                                                    <option value="">Bateau</option>
                                                    <option value="">Avion</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <label for="checkin">Logement</label>
                                            <div class="field-icon-wrap">
                                                <div class="icon">
                                                    <span class="fas fa-campground"></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="<?php echo $row['location_article']?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <label for="checkin">Pose quelques lignes</label>
                                            <div class="field-icon-wrap">
                                                <div class="icon">
                                                    <span class="far fa-comment"></span>
                                                </div>
                                                <textarea name="" class="form-control" id="" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <label for="checkin">Photo</label>
                                            <div class="field-icon-wrap">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
                                                <input type="file" name="userfile" class="form-control-file"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="field-icon-wrap">
                                                
                                                <input type="submit" class="mt-3 form-control" value="Sauvegarder">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            
                            </div>

                            <div class="image" style="background-image: url('img/<?php echo $row['image_url']?>');"></div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>







            <?php } ?>

    </div>
</div>

<!-- modal -->

