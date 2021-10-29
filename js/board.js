$(function(){
     var banner = $(".bannerWrap");
     console.log(banner);

     $(window).scroll(function(e){
          var scroll = banner.offset().top;
          // console.log(scroll);
          if (scroll > 1500) {
               banner.css({"opacity": "0"});
          } else {
               banner.css({"opacity": "1"})
          }
     });

});
