$(document).ready(function(){




//CHANGE_BG_HOME #################################################################

  $(window).bind('scroll', function() {
    var distance = 180;
    if ($(window).scrollTop() > distance) {
      $('.home').addClass('scrolled');
    }
    else {
      $('.home').removeClass('scrolled');
    }
  });


//CHANGE_COLOR HEADER ##############################################################

    $(window).bind('scroll', function() {
        var distance = 180;

        if ($(window).scrollTop() > distance) {
            $('header').addClass('changeHeader');
        }
          else {
      $('header').removeClass('changeHeader');
    }
    });



//WORK_THUMBNAILS #################################################################

$(".main").mouseover(function(){
        var posTop = Math.random() * 400;
        console.log(posTop)

        $(".image").show();
        $(".image").css('top', posTop + 'px');
        $(".image").css('margin-left', posTop + 'px');
    });

    $(".main").mouseout(function(){
        $(".image").hide();
    });
});





//MODAL_WORK ######################################################################

$('.thumb').on('click', function() {
    console.log('CLICK');

        $('.modal').addClass('modal-isOpen');
        $('body').css({
            'overflow-y': 'hidden'
        });
});

    $('.modal-close').on('click', function() {
        $('.modal').removeClass('modal-isOpen');
        $('body').css({
            'overflow-y' : 'auto'
        });
    });






//MODAL_WORK ######################################################################

//$('.thumb').on('click', function() {
//    console.log('CLICK');
//
//        $('.modal').addClass('modal-isOpen');
//        $('body').css({
//            'overflow-y': 'hidden'
//        });
//
//});
//
//    $('.modal-close').on('click', function() {
//        $('.modal').removeClass('modal-isOpen');
//        $('body').css({
//            'overflow-y' : 'auto'
//        });
//    });




//$(".main").mouseover(function(){
//    $(".dateProject").css("display", "inline");
//});
//
// $(".main").mouseout(function(){
//        $(".dateProject").css("display", "none");
//    });




$(".main").hover(
    function() {
        $(".dateProject").css("margin-left", '0');
    },
    function () {
        $(".dateProject").css( "margin-left", '-50' + 'px' );
    }
);




//OBJECT >> SCROLL ######################################################################

$(document).ready(function () {
    var $horizontal = $('#horizontal');

    $(window).scroll(function () {
        var s = $(this).scrollTop(),
            d = $(document).height(),
            c = $(this).height();

        scrollPercent = (s / (d - c));

        var position = (scrollPercent * ($(document).width() - $horizontal.width()));

        $horizontal.css({
            'left': position
        });
    });
});






console.log("HELLO")   
