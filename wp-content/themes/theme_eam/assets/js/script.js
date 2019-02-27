$(document).ready(function() {
  
  // Cambiar header al hacer scroll (sticky)
  $(window).on('scroll', function() {
    if ($(window).scrollTop()){
        $('nav').addClass('sticky navbar-fixed-top');
        $('#big-logo').attr("src", "http://localhost:8080/wp-content/themes/theme_eam/assets/img/logo-sm-w.png")
    }
    else {
      $('nav').removeClass('sticky navbar-fixed-top');
      $('#big-logo').attr("src", "http://localhost:8080/wp-content/themes/theme_eam/assets/img/logo.png")
    }
  })


  // Lightbox


  //Funcionamiento de error al enviar mensaje de contacto
  $(document).on('click', '#send-btn', function() {

    var name = $('#exampleInputName2').val();
    var email = $('#exampleInputEmail1').val();
    var message = $('#contactTextArea').val();

    if (name == "") {
      $('#name_error').removeClass('hidden');
    }
    if (email == "") {
      $('#mail_error').removeClass('hidden');

    }
    if (message == "") {
      $('#message_error').removeClass('hidden');
    }



    //Borrar mensaje de error
    $(document).on('click', '.validate', function() {
      $(this).parents('.form-group').children('.error').addClass('hidden');


    });

  });



});
