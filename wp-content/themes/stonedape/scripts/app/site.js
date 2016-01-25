define(['vendor/jquery.form.min', 'vendor/bootstrap.min', 'vendor/jquery.bxslider.min'], function() {
  return {
    
    init: function() {    
      var self = this;
         // self.initSliders();

         $(window).scroll(function() {

           // sticky_navigation();
           var scroll_top = $(window).scrollTop(); // our current vertical position from the top
          

           if(scroll_top > 100){
            $('#header-menu').addClass("header-menu-scrolled");
            $('#hidden-logo').show();
           }
           else {
            $('#header-menu').removeClass("header-menu-scrolled");
            $('#hidden-logo').hide();
           
           }
        });

         // var search = document.getElementById('search-icon');
         // var searchbox = document.getElementById('search-box');

         //  search.addEventListener('click', function() {
         //      search.toggle();
         //      searchbox.toggle();
         //  }, false);


        var submitIcon = $('#searchbox-icon');
        var inputBox = $('.searchbox-input');
        var searchBox = $('.searchbox');
        var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            // $(document).mouseup(function(){
            //         if(isOpen == true){
            //             $('.searchbox-icon').css('display','block');
            //             submitIcon.click();
            //         }
            //     });
        // });
            // function buttonUp(){
            //     var inputVal = $('.searchbox-input').val();
            //     inputVal = $.trim(inputVal).length;
            //     if( inputVal !== 0){
            //         $('.searchbox-icon').css('display','none');
            //     } else {
            //         $('.searchbox-input').val('');
            //         $('.searchbox-icon').css('display','block');
            //     }
            //   }

    },




  // initSliders: function () {
  //       $('.news-slider').bxSlider({
  //           slideMargin: 10,
  //           auto: true,
  //           mode: 'fade',
  //           speed: 2000,
  //           pause: 6000,
  //           responsive: true,
  //           easing: 'ease',
  //           touch: true,
  //           controls: false,
  //           captions: true
  //       });
          
// }
};
}); 