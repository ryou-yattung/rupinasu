//
//花の動き
//
let flower=$('.flower');
var a = anime.timeline({
     targets: '.flower',
     duration: 1000,
     loop: true 
   });

   a
     .add({
     rotate: 15,
     translateX: {
          value: 22,
          // duration: 800
        },
     delay: 2
   })

   a
     .add({
     rotate: -15,
     translateX: {
          value: -22,
        },
     delay: 2
})





//
//logo btn
//
$(function() {
  $('.btn_1').mouseover(
    function(e) {
      anime({
      targets: '.btn_1',
      duration: 800,
      width: '250px',
      height: '70px',
      borderRadius:"20px",
      easing: 'easeOutQuart',
      loop: false
      });
    }
  );

  $('.btn_1').mouseout(
    function(e) {
      anime({
      targets: '.btn_1',
      duration: 800,
      width: '140px',
      height: '140px',
      borderRadius:"100px",
      easing: 'easeOutQuart',
      loop: false
      });
    }
  );
});

$(function() {
  $('.btn_2').mouseover(
    function(e) {
      anime({
      targets: '.btn_2',
      duration: 800,
      width: '250px',
      height: '70px',
      borderRadius:"20px",
      easing: 'easeOutQuart',
      loop: false
      });
    }
  );

  $('.btn_2').mouseout(
    function(e) {
      anime({
      targets: '.btn_2',
      duration: 800,
      width: '140px',
      height: '140px',
      borderRadius:"100px",
      easing: 'easeOutQuart',
      loop: false
      });
    }
  );
});

//サイトに飛ばす
const create = $(".acc_create");
console.log(create);

create.on("click", (event)=>{
  window.location = "registration.php";
});

const login = $(".acc_login");
console.log(login);

login.on("click", (event)=>{
  window.location = "login.php";
});
