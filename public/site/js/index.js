$(document).ready(function () {
    $(".navbar-toggle").on("click", function () {
        $(this).toggleClass("active");
    });



    /**
     * Home page OWL carousel
     */
    $('.owl-carousel').owlCarousel({
        margin: 10,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

});


jQuery('.online_button').click(function () {
    jQuery('.chat_wrapper').toggleClass('active_chat');
    jQuery('.online_button').toggleClass('online_button_active');
    jQuery('.bottom_chat').toggleClass('active_chat_');

});

jQuery('body').on('click','.times_close_tab',function () {
    var data_id =   jQuery(this).closest('.chat_example').data('id');
   jQuery(this).closest('.chat_example').remove();
   jQuery('.activeTab').each(function () {
      if(jQuery(this).data('id') == data_id){
          jQuery(this).removeClass('activeTab');
      }
   })

});