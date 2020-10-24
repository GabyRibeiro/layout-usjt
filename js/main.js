AOS.init({
    duration: 800,
    easing: 'slide'
});

new WOW().init();

(function($) {

    "use strict";

    // $(window).stellar({
    //   responsive: true,
    //   parallaxBackgrounds: true,
    //   parallaxElements: true,
    //   horizontalScrolling: false,
    //   hideDistantElements: false,
    //   scrollProperty: 'scroll'
    // });

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#paciente_endereco").val("");
        $("#paciente_bairro").val("");
        $("#paciente_cidade").val("");
        $("#paciente_uf").val("");
    }

    //Quando o campo cep perde o foco.
    $("#paciente_cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#paciente_endereco").val("...");
                $("#paciente_bairro").val("...");
                $("#paciente_cidade").val("...");
                $("#paciente_uf").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#paciente_endereco").val(dados.logradouro);
                        $("#paciente_bairro").val(dados.bairro);
                        $("#paciente_cidade").val(dados.localidade);
                        $("#paciente_uf").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });

    var fullHeight = function() {

        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function() {
            $('.js-fullheight').css('height', $(window).height());
        });

    };
    fullHeight();

    // loader
    var loader = function() {
        setTimeout(function() {
            if ($('#ftco-loader').length > 0) {
                $('#ftco-loader').removeClass('show');
            }
        }, 1);
    };
    loader();

    // // Scrollax
    //  $.Scrollax();

    //Esconde ou mostra o formulário
    $(".show-doutor").click(function() {
        $('#section-counter .container').hide();
        $('#formulario_doutor').show();
    });

    $(".show-paciente").click(function() {
        $('#section-counter .container').hide();
        $('#formulario_paciente').show();
    });

    $("#show_loginPaciente").click(function() {
        $('#section-counter .container').hide();
        $('#login_paciente').show();
    });

    $("#show_loginDoutor").click(function() {
        $('#section-counter .container').hide();
        $('#login_doutor').show();
    });

    var carousel = function() {
        $('.home-slider').owlCarousel({
            loop: true,
            autoplay: true,
            margin: 0,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: false,
            autoplayHoverPause: false,
            items: 1,
            navText: ["<span class='ion-md-arrow-back'></span>", "<span class='ion-chevron-right'></span>"],
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
        });
        $('.carousel-testimony').owlCarousel({
            autoplay: true,
            center: true,
            loop: true,
            items: 1,
            margin: 30,
            stagePadding: 0,
            nav: false,
            navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
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
        });

    };
    carousel();

    $('nav .dropdown').hover(function() {
        var $this = $(this);
        // 	 timer;
        // clearTimeout(timer);
        $this.addClass('show');
        $this.find('> a').attr('aria-expanded', true);
        // $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
        $this.find('.dropdown-menu').addClass('show');
    }, function() {
        var $this = $(this);
        // timer;
        // timer = setTimeout(function(){
        $this.removeClass('show');
        $this.find('> a').attr('aria-expanded', false);
        // $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
        $this.find('.dropdown-menu').removeClass('show');
        // }, 100);
    });


    $('#dropdown04').on('show.bs.dropdown', function() {
        console.log('show');
    });

    // scroll
    var scrollWindow = function() {
        $(window).scroll(function() {
            var $w = $(this),
                st = $w.scrollTop(),
                navbar = $('.ftco_navbar'),
                sd = $('.js-scroll-wrap');

            if (st > 150) {
                if (!navbar.hasClass('scrolled')) {
                    navbar.addClass('scrolled');
                }
            }
            if (st < 150) {
                if (navbar.hasClass('scrolled')) {
                    navbar.removeClass('scrolled sleep');
                }
            }
            if (st > 350) {
                if (!navbar.hasClass('awake')) {
                    navbar.addClass('awake');
                }

                if (sd.length > 0) {
                    sd.addClass('sleep');
                }
            }
            if (st < 350) {
                if (navbar.hasClass('awake')) {
                    navbar.removeClass('awake');
                    navbar.addClass('sleep');
                }
                if (sd.length > 0) {
                    sd.removeClass('sleep');
                }
            }
        });
    };
    scrollWindow();


    // var counter = function() {
    //
    // 	$('#section-counter').waypoint( function( direction ) {
    //
    // 		if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
    //
    // 			var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
    // 			$('.number').each(function(){
    // 				var $this = $(this),
    // 					num = $this.data('number');
    // 					console.log(num);
    // 				$this.animateNumber(
    // 				  {
    // 				    number: num,
    // 				    numberStep: comma_separator_number_step
    // 				  }, 7000
    // 				);
    // 			});
    //
    // 		}
    //
    // 	} , { offset: '95%' } );
    //
    // }
    // counter();

    // var contentWayPoint = function() {
    // 	var i = 0;
    // 	$('.ftco-animate').waypoint( function( direction ) {
    //
    // 		if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
    //
    // 			i++;
    //
    // 			$(this.element).addClass('item-animate');
    // 			setTimeout(function(){
    //
    // 				$('body .ftco-animate.item-animate').each(function(k){
    // 					var el = $(this);
    // 					setTimeout( function () {
    // 						var effect = el.data('animate-effect');
    // 						if ( effect === 'fadeIn') {
    // 							el.addClass('fadeIn ftco-animated');
    // 						} else if ( effect === 'fadeInLeft') {
    // 							el.addClass('fadeInLeft ftco-animated');
    // 						} else if ( effect === 'fadeInRight') {
    // 							el.addClass('fadeInRight ftco-animated');
    // 						} else {
    // 							el.addClass('fadeInUp ftco-animated');
    // 						}
    // 						el.removeClass('item-animate');
    // 					},  k * 50, 'easeInOutExpo' );
    // 				});
    //
    // 			}, 100);
    //
    // 		}
    //
    // 	} , { offset: '95%' } );
    // };
    // contentWayPoint();


    // magnific popup
    // $('.image-popup').magnificPopup({
    //   type: 'image',
    //   closeOnContentClick: true,
    //   closeBtnInside: false,
    //   fixedContentPos: true,
    //   mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
    //    gallery: {
    //     enabled: true,
    //     navigateByImgClick: true,
    //     preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    //   },
    //   image: {
    //     verticalFit: true
    //   },
    //   zoom: {
    //     enabled: true,
    //     duration: 300 // don't foget to change the duration also in CSS
    //   }
    // });
    //
    // $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    //   disableOn: 700,
    //   type: 'iframe',
    //   mainClass: 'mfp-fade',
    //   removalDelay: 160,
    //   preloader: false,
    //
    //   fixedContentPos: false
    // });


    $('.appointment_date').datepicker({
        'format': 'dd/mm/yyyy',
        'language': 'pt',
        'autoclose': true
    });

    $('.appointment_time').timepicker();




})(jQuery);
