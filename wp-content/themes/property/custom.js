
  $(window).on("load", function() {
          $("#fullscreen-slider").slider();
          $("#demo1").slider({
            speed : 500,
            delay : 2500
          });
          $("#demo2").slider({
            width : '1280px',
            speed : 500,
            autoplay : false,
            responsive : false
          });
        });
        $("#demo3").slider({
          speed : 500,
          delay: 2500,
          paginationType : 'thumbnails'
        });
        $(document).ready(function () {
            GetLatestReleaseInfo();
        });  


        //Counter

         

