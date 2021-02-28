$(document).ready(function(){

  function input_mask() {
    var winwidth = $(window).width();

    $(".js-phone-inputmask").inputmask("+7 (999) 999-9999");
    $(".js-phone-inputmask").on(
      {
        keydown: function(e) { if (e.which === 32 || e.which === 37 || e.which === 39 || e.which === 38 || e.which === 40) return false; },
        change: function() { this.value = this.value.replace(/\s/g, ""); }
      });

      if (winwidth > 1000) {
        $(".js-email-inputmask").inputmask("email");
        $(".js-email-inputmask").on(
          {
            keydown: function(e) { if (e.which === 32 || e.which === 37 || e.which === 39 || e.which === 38 || e.which === 40) return false; },
            change: function() { this.value = this.value.replace(/\s/g, ""); }
          });
        }
      }
      input_mask();




      // Открытие попап окна
      $(document).on('click', '.js-popup-open', function(e) {
        e.preventDefault();

        var popup_class = $(this).attr('data-popup-name');
        $('.popup_block').removeClass('visible');

        $('.popup_bgr').addClass('visible');
        $('.' + popup_class).addClass('visible');

      });

      // Закрытие попап окна
      $(document).on('click', '.js-popup-close', function(e) {
        e.preventDefault();

        $('.popup_bgr').removeClass('visible');
        $('.popup_block').removeClass('visible');
      });


      // Закрытие попап окна
      $(document).on('click', '.js-order-more-label', function(e) {
        e.preventDefault();

        $('.more_info_label').removeClass('visible');
        var label = $(this).parents('td').find('.more_info_label');
        label.addClass('visible');
      });


      // Открытие меню

      $(document).on('click', '.js-show-catalog-menu', function(e) {
        e.preventDefault();

        $(this).toggleClass('active');
        $('.hover_menu_block').toggleClass('visible');
      });

      // Переключение подменю 1 в каталоге в шапке
      $(document).on('click', '.js-submenu-toggle', function(e) {
        e.preventDefault();

        $(this).toggleClass('active');
        $(this).parent('li').find('.spoiler_level_1').toggleClass('visible');
      });

      // Переключение подменю 2 в каталоге в шапке
      $(document).on('click', '.js-subsubmenu-toggle', function(e) {
        e.preventDefault();

        $(this).toggleClass('active');
        $(this).parent('li').find('.spoiler_level_2').toggleClass('visible');
      });

      // Переключение подменю 1 в фильтре
      $(document).on('click', '.js-submenu-catalog-toggle', function(e) {
        e.preventDefault();

        $(this).toggleClass('active');
        $(this).parents('.category_list_item_box').toggleClass('active');
        $(this).parents('.category_list_item_box').find('.spoiler_level_1').toggleClass('visible');

        console.log(111);
      });

      // Переключение подменю 2 в фильтре
      $(document).on('click', '.js-subsubmenu-catalog-toggle', function(e) {
        e.preventDefault();

        $(this).toggleClass('active');
        $(this).parent('li').toggleClass('active');
        $(this).parent('li').find('.spoiler_level_2').toggleClass('visible');

        console.log(222);
      });




      $(document).on('click', '.bottom_menu_block, .middle_menu_block, section', function(e) {
        if($('.hover_menu_block').hasClass('visible')) {
          $('.js-show-catalog-menu').removeClass('active');
          $('.hover_menu_block').removeClass('visible');
        }
      });






      // Открытие попап окна
      $(document).on('click', '.js-filters-show', function(e) {
        e.preventDefault();

        $('.filter_block').addClass('visible');
      });

      // Закрытие попап окна
      $(document).on('click', '.js-filters-hide', function(e) {
        e.preventDefault();

        $('.filter_block').removeClass('visible');
      });



      function disabledInputs() {
        if($('.ordering')) {

          $('.ordering').find('.input_text').each(function(){
            $(this).attr('disabled',true)

            var parent = $(this).parents('.hidden_block');
            if(parent.hasClass('visible')) {
              $(this).removeAttr('disabled');
            }
          })
        }
      }

      disabledInputs();



      $(".checkout_type").on('change', function(){
        var name = $(this).attr('name');
        var id = $(this).attr('id');

        if(name == 'order_type') {
          $('.order_type').removeClass('visible');
          $('#content_'+id).addClass('visible');
        } else if (name == 'delivery_type') {
          $('.delivery_type').removeClass('visible');
          $('#content_'+id).addClass('visible');
        }

        disabledInputs();
      });










      // Валидация телефона

      $('.js-phone-validate').on('input', function() {

        var phone = $(this).val();

        var parent = $(this).parents('.input_box');
        var re = /^(\+{0,})(\d{0,})([(]{1}\d{1,3}[)]{0,}){0,}(\s?\d+|\+\d{2,3}\s{1}\d+|\d+){1}[\s|-]?\d+([\s|-]?\d+){1,2}(\s){0,}$/gm;

        if(!re.test(phone)) {
          parent.addClass('warning');
        } if (re.test(phone)) {
          parent.removeClass('warning');
        }


      });


      // валидация почты
      $('.js-email-validate').on('input', function() {

        var mail = $(this).val();

        if(mail.length > 5) {
          var parent = $(this).parents('.input_box');
          var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

          if(!re.test(mail)) {
            parent.addClass('warning');
          } if (re.test(mail)) {
            parent.removeClass('warning');
          }
        }


      });





      // залипание общей инфо о заказе
      function result_block_pos() {
        var scroll = parseInt($(window).scrollTop());
        var winwidth = $(window).width();
        var winheight = $(window).height();
        if($('section').hasClass('ordering')) {
          var start_point = $('.ordering .title').offset().top;
          var delta = 0;

          if ((scroll > start_point)) {
            delta = scroll - start_point;
          } else {
            delta = 0;
          }


          if(winwidth < 680) {

          } else {
            // $('.odrer_summary').css('transform','translateY('+ delta +'px)');
          }

        }
      }
      $(document).ready(result_block_pos);
      $(window).scroll(result_block_pos);
      $(window).resize(result_block_pos);





      var stars;

      $('#js-rating-review').mousemove(function(evt) {
        var x = evt.pageX - $('#js-rating-review').offset().left;
        var elWidth = $('#js-rating-review').width();
        var percent = null;

        if ((x > 0) && (x < elWidth)) {
          percent = x / elWidth * 100;
        } else {
          $('#js-rating-review').find('.rating_star').removeClass('rating_star--full').addClass('rating_star--empty');
        }

        $('#js-rating-review').find('.rating_star').removeClass('rating_star--full').addClass('rating_star--empty');

        stars = Math.floor(percent / 20) + 1;

        for (var i = 0; i < stars; i++) {
          $('#js-rating-review').find('.rating_star').eq(i).removeClass('rating_star--empty').addClass('rating_star--full');
        }

      });

      $('#js-rating-review').mouseleave(function(e) {
        var selectedRating = parseInt($('#selected_rating').attr('value'));

        if(selectedRating) {
          for (var i = 0; i < selectedRating; i++) {
            $('#js-rating-review').find('.rating_star').eq(i).removeClass('rating_star--empty').addClass('rating_star--full');
          }
        } else {
          $('#js-rating-review').find('.rating_star').removeClass('rating_star--full').addClass('rating_star--empty');
        }
      });

      $(document).on('click', '#js-rating-review', function(e) {
        $('#selected_rating').attr('value',stars);
      });



      function getBasketTabs() {
        if($('section').hasClass('basket')) {
          var url = document.location.hash;
          var ind = null;
          if(url == '#basket') {
            ind = 0;
          } else if(url == '#favorite') {
            ind = 1;
          }

          $('.tabs_head_item').removeClass('active');
          $('.tabs_head_item').eq(ind).addClass('active');

          $('.tabs_body_item').removeClass('active');
          $('.tabs_body_item').eq(ind).addClass('active');
        }
      };

      getBasketTabs();





      // Переключение табов в характеристиках

      $(document).on('click', '.tabs_head_item', function(e) {
        e.preventDefault();

        var index = $(this).index();
        $('.tabs_head_item').removeClass('active');
        $('.tabs_body_item').removeClass('active');
        $(this).addClass('active');
        $('.tabs_body_item').eq(index).addClass('active');

      });




      $('.select').on('click','.select_head', function () {
        $('.select_head').addClass('open');
        $('.select_list').fadeIn(100);
        $(this).addClass('open');
        $(this).next().fadeIn(100);
      });

      $('.select').on('click','.select_item', function () {
        $('.select_head').removeClass('open');
        $(this).parent().fadeOut(100);
        $(this).parent().prev().text($(this).text());
        $(this).parent().prev().prev().val($(this).attr('data-value'));
      });

      $(document).click(function (e) {
        if (!$(e.target).closest('.select').length) {
          $('.select_head').removeClass('open');
          $('.select_list').fadeOut(100);
        }
      });






      $(document).on('click', '.js-menu-open', function(e) {
        e.preventDefault();
        $('.menu_wrapper').addClass('visible');
      });

      $(document).on('click', '.js-menu-close', function(e) {
        e.preventDefault();
        $('.menu_wrapper').removeClass('visible');
      });





      $(document).on('click', '.menu_section_link', function(e) {
        winWidth = $(window).width()

        if (winWidth < 680) {
          e.preventDefault();
          $(this).parents('.menu_link_box').toggleClass('opened');
        }
      })



    });
