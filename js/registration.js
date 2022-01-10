$(function(){
     for (var i = 1980; i <= 2021; i++) {
          $('#year').append('<option value="' + i + '">' + i + '</option>');
      }

      for (var j = 1; j <= 12; j++) {
          $('#month').append('<option value="' + j + '">' + j + '</option>');
      }
  
      for (var k = 1; k <= 31; k++) {
          $('#date').append('<option value="' + k + '">' + k + '</option>');
      }

      for(var a = 10; a <= 20; a++){
           $("#age").append('<option value="' + a + '">' + a + '</option>');
      }



      $('.toggle-pass').on('click', function() {
          $(this).toggleClass('fa-eye fa-eye-slash');
          var input = $(this).prev('input');
          if (input.attr('type') == 'text') {
            input.attr('type','password');
          } else {
            input.attr('type','text');
          }
        });
});
