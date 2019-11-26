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
                <form action="post">
                
                <!-- row 1 -->
                    <div class="row mb-3">
                        <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                            <label for="checkin">Du</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="far fa-calendar"></span></div>
                                <input type="text" id="checkin_date" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                            <label for="checkin">Au</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="far fa-calendar"></span></div>
                                <input type="text" id="checkout_date" class="form-control">
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
                                        <select name="" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="checkin">Prix</label>
                                    <div class="field-icon-wrap">
                                    <div class="icon">
                                        <span class="fas fa-euro-sign"></span>
                                    </div>
                                    <input type="text" id="checkin_price" class="form-control">
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
                <!-- row 2 -->
                    <div class="row">
                        
                        <div class="col-md-4 mb-3">
                        <label for="checkin">Continent</label>
                            <div class="field-icon-wrap">
                                <div class="icon">
                                    <span class="fas fa-angle-down"></span>
                                </div>
                                <select name="" id="" class="form-control">
                                    <option value="">Europe</option>
                                    <option value="">Asie</option>
                                    <option value="">Océanie</option>
                                    <option value="">Afrique</option>
                                    <option value="">Amérique</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3 mb-md-0">
                            <label for="checkin">Pays</label>
                            <div class="field-icon-wrap">
                                <div class="icon">
                                    <span class="fas fa-globe-africa"></span>
                                </div>
                                <input type="text" id="checkin_adress" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4 mb-3 mb-md-0">
                            <label for="checkin">Ville</label>
                            <div class="field-icon-wrap">
                                <div class="icon">
                                    <span class="fas fa-map-marker-alt"></span>
                                </div>
                                <input type="text" id="checkin_city" class="form-control">
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
                                <textarea class="form-control" id="checkin_text" cols="3" row="1"></textarea>
                            </div>
                        </div>

                        <div class="col-md-4 align-self-end">
                            <button class="btn btn-primary btn-block"><span class="fab fa-telegram-plane"></span>Poster</button>
                        </div>

                    </div>

                </form>

                
            </div>
        </div>
    </div>
</div>