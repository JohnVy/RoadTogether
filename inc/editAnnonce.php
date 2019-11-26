<div class="site-section bg-light">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md-7 section-heading">
                <span class="subheading-sm">Vos annonces</span>
                <h2 class="heading">Vous êtes prêt ?</h2>
            </div>
        </div>

        <div class="col-md-12 mb-5">
            <div class="block-postb d-md-flex">
                <div class="image" style="background-image: url('img/img_2.jpg');"></div>

                <div class="text">
                    <h2 class="heading">Espagne,<br> Madrid </h2>
                    <div class="price">
                        <span class="number">120</span>
                        <sup>€</sup>
                        <sub>/ pers.</sub>
                    </div>

                    <ul class="specs">
                    <li><strong>Nrb de place :</strong> + 1</li>
                    <li><strong>Départ :</strong> 23 . 01 .19</li>
                    <li><strong>Retour :</strong> 26 . 01 .19</li>
                    <li><strong>Transport :</strong> Bus</li>
                    <li><strong>Trajet :</strong> Bordeaux (Fr) <strong> > </strong> Madrid (Es)</li>
                    <li><strong>Logement :</strong> Airbnb Talence</li>
                    </ul>

                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#postmodal1">Editer</button>
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-5">
            <div class="block-postb d-md-flex">
                <div class="image order-2" style="background-image: url('img/img_3.jpg');"></div>

                <div class="text order-1">
                    <h2 class="heading">Italie,<br> Reschensee </h2>
                    <div class="price">
                        <span class="number">70</span>
                        <sup>€</sup>
                        <sub>/ pers.</sub>
                    </div>

                    <ul class="specs">
                    <li><strong>Nrb de place :</strong> + 3</li>
                    <li><strong>Départ :</strong> 30 . 01 .19</li>
                    <li><strong>Retour :</strong> 02 . 02 .19</li>
                    <li><strong>Transport :</strong> Bus</li>
                    <li><strong>Trajet :</strong> Strasbourg (Fr) <strong> > </strong> Innsbruck (Au)</li>
                    <li><strong>Logement :</strong> Airbnb Merane</li>
                    </ul>

                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#postmodal1">Editer</button>
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-5">
            <div class="block-postb d-md-flex">
                <div class="image" style="background-image: url('img/img_4.jpg');"></div>

                <div class="text">
                    <h2 class="heading">Pologne,<br> Varsovie </h2>
                    <div class="price">
                        <span class="number">525</span>
                        <sup>€</sup>
                        <sub>/ pers.</sub>
                    </div>

                    <ul class="specs">
                    <li><strong>Nrb de place :</strong> + 1</li>
                    <li><strong>Départ :</strong> 10 . 02 .19</li>
                    <li><strong>Retour :</strong> 18 . 02 .19</li>
                    <li><strong>Transport :</strong> Avion</li>
                    <li><strong>Trajet :</strong> Bordeaux (Fr) <strong> > </strong> Varsovie (Pol)</li>
                    <li><strong>Logement :</strong> Airbnb Varsovie</li>
                    </ul>

                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#postmodal1">Editer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal -->

<div class="modal fade bd-post-modal-lg" id="postmodal1" tabindex="-1" role="dialog" aria-labelledby="postmodal1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                
    <div class="modal-content">
      <div class="modal-body">
        <div class="modal-header">
          <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Supprimer</button>
          <button type="button" class="btn btn-primary btn-lg">Sauvegarder</button>
        </div>
        
            <div class="block-postb d-md-flex">
                          
                <div class="image order-2" style="background-image: url('img/img_2.jpg'); "></div>
                    
                  <div class="text order-1">
                    <h2 class="heading">Espagne,<br> Madrid </h2>
                    
                    <form action="#">
                        <div class="row">
  
                          <div class="col-md-6">
                            <label for="checkin">Du</label>
                            <div class="field-icon-wrap">
                              <div class="icon"><span class="far fa-calendar"></span></div>
                              <input type="text" id="checkin_date" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label for="checkin">Au</label>
                            <div class="field-icon-wrap">
                              <div class="icon"><span class="far fa-calendar"></span></div>
                              <input type="text" id="checkout_date" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label for="checkin">Nbr</label>
                            <div class="field-icon-wrap">
                              <div class="icon"><span class="fas fa-angle-down"></span></div>
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
                              <div class="icon"><span class="fas fa-euro-sign"></span></div>
                              <input type="text" id="checkin_price" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label for="checkin">Transport</label>
                            <div class="field-icon-wrap">
                              <div class="icon"><span class="fas fa-angle-down"></span></div>
                              <select name="" id="" class="form-control">
                                <option value="">Pédestre</option>
                                <option value="">Voiture</option>
                                <option value="">Autocar</option>
                                <option value="">Bateau</option>
                                <option value="">Avion</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="checkin">Logement</label>
                            <div class="field-icon-wrap">
                              <div class="icon"><span class="fas fa-campground"></span></div>
                              <input type="text" id="checkin_adress" class="form-control">
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="checkin">Pose quelques lignes</label>
                            <div class="field-icon-wrap">
                              <div class="icon"><span class="far fa-comment"></span></div>
                              <textarea class="form-control" id="checkin_text" rows="3"></textarea>
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="checkin">Photo</label>
                            <div class="field-icon-wrap"></div>
                                <input type="file" class="form-control-file" id="checkin_img">
                          </div>
                        </div>
                    </form>
                    
                  </div>
                
  
                </div>
  
    </div>
    
  </div>
  </div>
  
  </div>