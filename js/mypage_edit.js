$('.img_font').on('change', function (e) {
     var reader = new FileReader();
     reader.onload = function (e) {
         $(".icon_img ").attr('src', e.target.result);
     }
     reader.readAsDataURL(e.target.files[0]);
 });