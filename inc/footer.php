<!-- FOOTER -->
<!------------------------------------->
<!-- Info -->
<!-------------------------------------------------------------------------->
<footer class="footer">
    <div class="container">
      <div class="row mb-5">

        <div class="col-md-6 col-lg-6">
            <h3 class="heading-section">Contact</h3>
              <ul>
                <li><span class="text">Bordeaux (Fr)</span></li>
                <li><a href="#">contact[at]roadtriptogether.com</a></li>
              </ul>
        </div>

        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Nous</h3>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt.</p>
        </div>
    </div>

      <div class="row pt-5">
        <div class="col-md-12 text-left">
          <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Spirit.vÿ
          </p>
        </div>
      </div>
</footer>

<!-- LINKS -->
<!-------------------------------------------------------------------------->
<!-- Jquery -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<!-- Owl Carousel -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/aos.js"></script>
<!-- My Js -->
<script src="js/main.js"></script>

<script>
    console.log('Ca marche!');
    $('#AjaxReservation').on('click', function(){
        console.log('bouton click ok');
        ajaxAnnonce = $('input[name="annonceID"]').val();
        ajaxUser = $('input[name="userID"]').val();
        ajaxNbr = $('select option:selected').val();
        console.log('Nombre de places sélectionnées : '+ajaxNbr);

        $.ajax({
            method: "POST",
            url: "ajax/ajax-reservation.php",
            data: {
                annonce: ajaxAnnonce,
                user: ajaxUser,
                nbr: ajaxNbr
            }
        })
        .done(function( response ) {
            $('#modal-reservation .modal-body').html('OK OK OK');
            $('#modal-reservation .modal-footer').hide();
        });
    });
    $('.supprimer-annonce').on('click', function(){
        idAnnonce = $(this).attr('value');
        console.log(idAnnonce);


        $.ajax({
            method: "POST",
            url: "ajax/ajax-delete.php",
            data: {
                annonce: idAnnonce
            }
        })
        .done(function( response ) {
            alert(response);
        });




    });
</script>
</body>
</html>