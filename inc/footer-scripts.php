<!-- Scripts -->
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