$(document).ready(function(){
  $('.welcome-section a').hover(
    function() {
      $('.welcome-section a').css({
          "color": "#fff",
          "border": "2px solid #fff",
          "background": "none"
        });
    },
    function() {
      $('.welcome-section a').css({
          "color": "#E87323",
          "background": "#fff",
          "border": "2px solid #fff"
        });
    });

    $('.more-courses').hover(
      function() {
        $('.more-courses').css({
          "color": "#414141",
          "background": "none",
          "border": "2px solid #414141"
        });
      },
      function() {
        $('.more-courses').css({
          "color": "#fff",
          "background": "#414141",
          "border": "2px solid #414141"
        });
      });
    $('.more-book').hover(
      function() {
        $('.more-book').css({
          "color": "#414141",
          "background": "none",
          "border": "2px solid #414141"
        });
      },
      function() {
        $('.more-book').css({
          "color": "#fff",
          "background": "#414141",
          "border": "2px solid #414141"
        });
      });
      $('.more-blogs').hover(
        function() {
          $('.more-blogs').css({
            "color": "#414141",
            "background": "none",
            "border": "2px solid #414141"
          });
        },
        function() {
          $('.more-blogs').css({
            "color": "#fff",
            "background": "#414141",
            "border": "2px solid #414141"
          });
        });
    $('.register-now').hover(
      function() {
        $('.register-now').css({
          "color": "#414141",
          "background": "none",
          "border": "2px solid #414141"
        });
      },
      function() {
        $('.register-now').css({
          "color": "#fff",
          "background": "#414141",
          "border": "2px solid #414141"
        });
      });
});
