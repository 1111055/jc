
/*================================================
[  Table of contents  ]
==================================================
 1. Newsletter Popup
 2. Mobile Menu Activation
 3 Checkout Page Activation
 4. NivoSlider Activation
 5. New Products Activation
 6. New Upsell Product Activation
 7. Side Product Activation
 8. Best Seller Activation
 9. Hand Tool Activation
 10. Brand Banner Activation
 11. Blog Activation
 12. Blog two Activation
 13. WOW Js Activation
 14. ScrollUp Activation
 15. Sticky-Menu Activation
 16. Price Slider Activation
 17. Testimonial Slick Carousel
 18. Best Seller Activation
 19. Best Product Activation
 20. Blog Realted Post activation
 21.Best Seller  Unique Activation



================================================*/

(function ($) {
    "use Strict";
    /*--------------------------
    1. Newsletter Popup
    ---------------------------*/
    setTimeout(function () {
        $('.popup_wrapper').css({
            "opacity": "1",
            "visibility": "visible"
        });
        $('.popup_off').on('click', function () {
            $(".popup_wrapper").fadeOut(500);
        })
    }, 2500);

    /*----------------------------
    2. Mobile Menu Activation
    -----------------------------*/
    jQuery('.mobile-menu nav').meanmenu({
        meanScreenWidth: "991",
    });

    /*----------------------------
    3 Checkout Page Activation
    -----------------------------*/
     $('.categorie-title').on('click', function () {
    $('.vertical-menu-list').slideToggle();
    });

    $('#showlogin').on('click', function () {
        $('#checkout-login').slideToggle();
    });
    $('#showcoupon').on('click', function () {
        $('#checkout_coupon').slideToggle();
    });
    $('#cbox').on('click', function () {
        $('#cbox_info').slideToggle();
    });
    $('#ship-box').on('click', function () {
        $('#ship-box-info').slideToggle();
    });

    /*----------------------------
    4. NivoSlider Activation
    -----------------------------*/
    $('#slider').nivoSlider({
        effect: 'random',
        animSpeed: 300,
        pauseTime: 5000,
        directionNav: true,
        manualAdvance: true,
        controlNavThumbs: false,
        pauseOnHover: true,
        controlNav: true,
        prevText: "<img src='/public/img/left.png' style='max-width: 7%;'>",
        nextText: "<img src='/public/img/right.png'  style='max-width: 7%;'>"
    });

    /*----------------------------------------------------
    5. New Products Activation
    -----------------------------------------------------*/
    $('.new-pro-active').owlCarousel({
            loop: false,
            nav: true,
            dots: false,
            smartSpeed: 1000,

            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            margin: 30,
            responsive: {
                0: {
                    items: 1,
                    autoplay:true
                },
                480: {
                    items: 2
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }

        })
    /*----------------------------------------------------
    6. New Upsell Product Activation
    -----------------------------------------------------*/
    $('.new-upsell-pro').owlCarousel({
            loop: false,
            nav: true,
            dots: false,
            smartSpeed: 1000,

            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            margin: 30,
            responsive: {
                0: {
                    items: 1,
                    autoplay:true
                },
                480: {
                    items: 2
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }

        })

    /*----------------------------------------------------
    7. Side Product Activation
    -----------------------------------------------------*/
    $('.side-product-list-active')
        .on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target)
                .find('.owl-item').removeClass('last')
                .eq(event.item.index + event.page.size - 1).addClass('last');
        }).owlCarousel({
            loop: false,
            nav: true,
            dots: false,
            smartSpeed: 1500,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            margin: 1,
            responsive: {
                0: {
                    items: 1,
                    autoplay:true
                },
               480: {
                    items: 2
                },
                768: {
                    items: 2
                },
                991: {
                    items: 1
                }
            }
        })

    /*----------------------------------------------------
    8. Best Seller Activation
    -----------------------------------------------------*/
    $('.best-seller-pro-active')
        .on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target)
                .find('.owl-item').removeClass('last')
                .eq(event.item.index + event.page.size - 1).addClass('last');
        }).owlCarousel({
            loop: false,
            nav: true,
            dots: false,
            smartSpeed: 1200,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            margin: 1,
            responsive: {
                0: {
                    items: 1,
                    autoplay:true
                },
                480: {
                    items: 2
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        })

    /*----------------------------------------------------
    9. Hand Tool Activation
    -----------------------------------------------------*/
    $('.hand-tool-active').owlCarousel({
            loop: false,
            nav: true,
            dots: false,
            smartSpeed: 1200,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            margin: 30,
            responsive: {
                0: {
                    items: 1,
                    autoplay:true
                },
                480: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
    })
    /*----------------------------------------------------
    10. Brand Banner Activation
    -----------------------------------------------------*/
$('.brand-banner').on('changed.owl.carousel initialized.owl.carousel', function (event) {
        $(event.target)

                .find('.owl-item').removeClass('last')
                .eq(event.item.index + event.page.size - 1).addClass('last');

            $(event.target)
                .find('.owl-item').removeClass('first')
                .eq(event.item.index).addClass('first')


        }).owlCarousel({
        loop: false,
        nav: false,
        dots: false,
        smartSpeed: 1200,
        margin: 1,
        responsive: {
            0: {
                items: 1,
                autoplay:true
            },
            480: {
                items: 3
            },
            768: {
                items: 4
            },
            1000: {
                items: 5
            }
        }
    })

    /*----------------------------------------------------
    11. Blog Activation
    -----------------------------------------------------*/
    $('.blog-active').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        smartSpeed: 1000,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        margin: 30,
        responsive: {
            0: {
                items: 1,
                autoplay:true
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    /*----------------------------------------------------
    12. Blog two Activation
    -----------------------------------------------------*/
    $('.blog-active2').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        smartSpeed: 1000,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        margin: 30,
        responsive: {
            0: {
                items: 1,
                autoplay:true
            },
            768: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    })
    /*----------------------------
    13. WOW Js Activation
    -----------------------------*/
    new WOW().init();

    /*----------------------------
    14. ScrollUp Activation
    -----------------------------*/
    $.scrollUp({
        scrollName: 'scrollUp', // Element ID
        topDistance: '550', // Distance from top before showing element (px)
        topSpeed: 1000, // Speed back to top (ms)
        animation: 'fade', // Fade, slide, none
        scrollSpeed: 900,
        animationInSpeed: 1000, // Animation in speed (ms)
        animationOutSpeed: 1000, // Animation out speed (ms)
        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element
        activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });

    /*----------------------------
    15. Sticky-Menu Activation
    ------------------------------ */
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 150) {
            $('.header-sticky').addClass("sticky");
        } else {
            $('.header-sticky').removeClass("sticky");
        }
    });

    /*----------------------------
    16. Price Slider Activation
    -----------------------------*/
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 80,
        values: [0, 74],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[0] + "  $" + ui.values[1]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        "  $" + $("#slider-range").slider("values", 1));

    /*--------------------------------
    17. Testimonial Slick Carousel
    -----------------------------------*/
    $('.testext_active').owlCarousel({
        loop: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        margin: 15,
        smartSpeed: 1000,
        nav: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    /*----------------------------------------------------
    18. Best Seller Activation
    -----------------------------------------------------*/
    $('.best-seller-pro').on('changed.owl.carousel initialized.owl.carousel', function (event) {
        $(event.target)
                .find('.owl-item').removeClass('last')
                .eq(event.item.index + event.page.size - 1).addClass('last');
        }).owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        smartSpeed: 1000,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        margin: 0,
        responsive: {
            0: {
                items: 1,
                autoplay:true
            },
            480: {
                items: 2
            },
            768: {
                items: 2
            },
            1000: {
                items: 1
            }
        }
    })
    /*----------------------------------------------------
    19. Best Product Activation
    -----------------------------------------------------*/
    $('.best-seller-pro-two')
        .owlCarousel({
            loop: false,
            nav: false,
            dots: false,
            smartSpeed: 1200,
            margin: 0,
            responsive: {
                0: {
                    items: 1,
                    autoplay:true
                },
                768: {
                    items: 3
                },
                1000: {
                    items: 1
                }
            }
        })
    
    /*-------------------------------------
    20. Blog Realted Post activation
    --------------------------------------*/
    $('.blog-related-post-active').owlCarousel({
        loop: false,
        margin: 30,
        smartSpeed: 1000,
        nav: false,
        dots: false,
        items: 2,
        responsive: {
            0: {
                items: 1,
                autoplay:true
            },
            480: {
                items: 1
            },
            768: {
                items: 2
            },
            992:{
                margin: 29,
                items: 2
            },
            1200: {
                items: 2
            }
        }
    })
    
    /*----------------------------------------------------
    21.Best Seller  Unique Activation
    -----------------------------------------------------*/
    $('.best-seller-unique').on('changed.owl.carousel initialized.owl.carousel', function (event) {
        $(event.target)
                .find('.owl-item').removeClass('last')
                .eq(event.item.index + event.page.size - 1).addClass('last');
        }).owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        smartSpeed: 1000,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        margin: 0,
        responsive: {
            0: {
                items: 1,
                autoplay:true
            },
            768: {
                items: 2
            },
            1000: {
                items: 1
            }
        }
    })
     

// Attach a submit handler to the form
$( "#searchForm" ).submit(function( event ) {
 
  // Stop form from submitting normally
  event.preventDefault();
 
  // Get some values from elements on the page:
  var $form = $( this ),
    term = $form.find( "input[name='email']" ).val(),
    crf = $form.find( "input[name='crf']" ).val(),
    url = $form.attr( "action" );

   erro=false;

   if(term === "" && erro == false){
      erro = true;
      $form.find( "input[name='email']" ).focus();
      $("#alerterro").fadeIn();
      $("#alerterro").html("<p> Erro - Campo Obrigatório </p>");

      setTimeout(function(){
              $("#alerterro").fadeOut();
            }, 2000);
   }

  if(!isEmail(term) && erro == false){
      erro = true;
      $form.find( "input[name='email']" ).focus();
      $("#alerterro").fadeIn();
      $("#alerterro").html("<p> Erro - Formato incorrecto de email. </p>");

       setTimeout(function(){
              $("#alerterro").fadeOut();
            }, 2000);
   }

   if(!$('#politica').is(':checked') && erro == false){

      erro=true;
      $('#politica').focus();
      $("#alerterro").fadeIn();
      $("#alerterro").html("<p> Erro - Obrigatório aceitar a poticia e privacidade da empresa. </p>");


           setTimeout(function(){
              $("#alerterro").fadeOut();
            }, 2000);
   }



     
   if(erro == false){
          var posting = $.post( url, { email: term, _token: crf } );

          posting.done(function( data ) {
            if(data['done'] == 1){
                $("#searchForm")[0].reset();
                $('#alerterro').removeClass('alert alert-danger').addClass('alert alert-success');
                $("#alerterro").fadeIn();
                $("#alerterro").html("<p> Submetido com sucesso. </p>");
                setTimeout(function(){
                   $("#alerterro").fadeOut();
                }, 2000);
            }else{
                $("input[name='email']").focus();
                $("#alerterro").fadeIn();
                $("#alerterro").html("<p> Erro - Email já existente. </p>");
            }
          });

    }
});

// Attach a submit handler to the form
$( "#orcamentosend" ).submit(function( event ) {
      
 

  // Stop form from submitting normally
  event.preventDefault();

  // Get some values from elements on the page:
   var $form   = $( this ),
    nome      = $form.find( "input[name='nome']" ).val(),
    email     = $form.find( "input[name='email']" ).val(),
    url       = "orcamentos";

    erro = false;

   if(nome === ""){

      erro = true;
      $form.find( "input[name='nome']" ).focus();
      $("#erronome").fadeIn();
      $("#erronome").html("<p> Erro - Campo Obrigatório </p>");

      setTimeout(function(){
          $("#erronome").fadeOut();
      }, 2000);

   } 

   if(email === "" && erro == false){
      erro = true;
      $form.find( "input[name='email']" ).focus();
      $("#erroemail").fadeIn();
      $("#erroemail").html("<p> Erro - Campo Obrigatório </p>");

           setTimeout(function(){
              $("#erroemail").fadeOut();
            }, 2000);
   }

  if(!isEmail(email) && erro == false){
      erro = true;
      $form.find( "input[name='email']" ).focus();
      $("#erroemail").fadeIn();
      $("#erroemail").html("<p> Erro - Formato incorrecto de email. </p>");

       setTimeout(function(){
              $("#erroemail").fadeOut();
            }, 2000);
   }

   if(!$('#termos').is(':checked') && erro == false){

      erro=true;
      $('#termos').focus();
      $("#errotermos").fadeIn();
      $("#errotermos").html("<p> Erro - Obrigatório aceitar os termos e condições. </p>");


      setTimeout(function(){
              $("#errotermos").fadeOut();
            }, 2000);
   }



   if(erro == false){

       $("#orcametosubmit").fadeOut();
       $("#loaderorca").fadeIn(); 

        var formData = new FormData(this);

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            success: function(data) {
                if(data['done'] == 1){
                    $("#loaderorca").fadeOut();
                    $("#enviosucesso").fadeIn();

                    $("#enviosucesso").html("<p> Submetido com sucesso. </p>");
                     $("#orcamentosend")[0].reset();
                    setTimeout(function(){
                       $("#enviosucesso").fadeOut();
                       $("#orcametosubmit").fadeIn();
                    }, 3000);

                }
            },
            cache: false,
            contentType: false,
            processData: false,
            xhr: function() { // Custom XMLHttpRequest
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                    myXhr.upload.addEventListener('progress', function() {
                        /* faz alguma coisa durante o progresso do upload */
                    }, false);
                }
                return myXhr;
            }
        });
    }
   
});


$( "#contact-form" ).submit(function( event ) {
      
 

  // Stop form from submitting normally
  event.preventDefault();


   var $form   = $( this ),

    nome      = $form.find( "input[name='nome']" ).val(),
    email     = $form.find( "input[name='email']" ).val(),
    assunto   = $form.find( "input[name='subject']" ).val(),
    url       = "contactos";
    
    erro = false;

   if(nome === ""){

      erro = true;
      $form.find( "input[name='nome']" ).focus();
      $("#erronome").fadeIn();
      $("#erronome").html("<p> Erro - Campo Obrigatório </p>");

      setTimeout(function(){
          $("#erronome").fadeOut();
      }, 2000);

   } 

   if(email === "" && erro == false){
      erro = true;
      $form.find( "input[name='email']" ).focus();
      $("#erroemail").fadeIn();
      $("#erroemail").html("<p> Erro - Campo Obrigatório </p>");

      setTimeout(function(){
              $("#erroemail").fadeOut();
            }, 2000);
   }

  if(!isEmail(email) && erro == false){
      erro = true;
      $form.find( "input[name='email']" ).focus();
      $("#erroemail").fadeIn();
      $("#erroemail").html("<p> Erro - Formato incorrecto de email. </p>");

       setTimeout(function(){
              $("#erroemail").fadeOut();
            }, 2000);
   }

   if(nome === "" && erro == false){

      erro = true;
      $form.find( "input[name='subject']" ).focus();
      $("#erroassunto").fadeIn();
      $("#erroassunto").html("<p> Erro - Campo Obrigatório </p>");

      setTimeout(function(){
          $("#erroassunto").fadeOut();
      }, 2000);

   } 

   if(!$('#termos').is(':checked') && erro == false){

      erro=true;
      $('#termos').focus();
      $("#errotermos").fadeIn();
      $("#errotermos").html("<p> Erro - Obrigatório aceitar os termos e condições. </p>");


           setTimeout(function(){
              $("#errotermos").fadeOut();
            }, 2000);
   }


   if(erro == false){

       $("#sendcontact").fadeOut();
       $("#loaderorca").fadeIn(); 

        var formData = new FormData(this);

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            success: function(data) {
                if(data['done'] == 1){
                    $("#loaderorca").fadeOut();
                    $("#enviosucesso").fadeIn();

                    $("#enviosucesso").html("<p> Submetido com sucesso. </p>");
                    $("#contact-form")[0].reset();
                    setTimeout(function(){
                       $("#enviosucesso").fadeOut();
                       $("#sendcontact").fadeIn();
                       
                    }, 3000);

                        
                }
            },
            cache: false,
            contentType: false,
            processData: false,
            xhr: function() { // Custom XMLHttpRequest
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                    myXhr.upload.addEventListener('progress', function() {
                        /* faz alguma coisa durante o progresso do upload */
                    }, false);
                }
                return myXhr;
            }
        });
    }
   
});



function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}


$(function() {
  $("#orcamentosend").submit(function(e) {
    e.preventDefault();
    console.log("Hi!!!")
  });

  // You should probably put the rest of your Javascript in here too, so it doesn't run until the DOM is fully ready.
});


    $(function() {
        $("#selcororc").change(function(){
            var option = $('option:selected', this).attr('cor');
            $("#selcororc").css("background-color", option);
            
        });
    });

$('#sort').change(function(){
    var val = $(this).val();
    var cat = $('#categoria').val();

    window.location.href = '/public/shop/'+cat+'?sort='+val;
});



})(jQuery);

