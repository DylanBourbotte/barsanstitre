// /* ==============================
//    VARIABLES
//    ============================== */
//    var ticking = false,
//    isFirefox = (/Firefox/i.test(navigator.userAgent)),
//    isIe = (/MSIE/i.test(navigator.userAgent)) || (/Trident.*rv\:11\./i.test(navigator.userAgent)),
//    scrollSensitivitySetting = 30, // Increase/decrease this number to change sensitivity to trackpad gestures (up = less sensitive; down = more sensitive)
//    slideDurationSetting = 1600, // Amount of time for which slide is "locked"
//    currentSlideNumber = 0,
//    totalSlideNumber = document.querySelectorAll("section").length;

// /* ==============================
//   DETERMINE DELTA/SCROLL DIRECTION
//   ============================== */
// function parallaxScroll(evt) {
//    if (isFirefox) {
//        // Set delta for Firefox
//        delta = evt.detail * (-120);
//    } else if (isIe) {
//        // Set delta for IE
//        delta = -evt.deltaY;
//    } else {
//        // Set delta for all other browsers
//        delta = evt.wheelDelta;
//    }

//    if (ticking != true) {
//        if (delta <= -scrollSensitivitySetting) {
//            // Down scroll
//            ticking = true;
//            if (currentSlideNumber !== totalSlideNumber - 1) {
//                currentSlideNumber++;
//                nextItem();
//            }
//            slideDurationTimeout(slideDurationSetting);
//        }
//        if (delta >= scrollSensitivitySetting) {
//            // Up scroll
//            ticking = true;
//            if (currentSlideNumber !== 0) {
//                currentSlideNumber--;
//            }
//            previousItem();
//            slideDurationTimeout(slideDurationSetting);
//        }
//    }
// }

// /* ==============================
//   SET TIMEOUT TO TEMPORARILY "LOCK" SLIDES
//   ============================== */
// function slideDurationTimeout(slideDuration) {
//    setTimeout(function() {
//        ticking = false;
//    }, slideDuration);
// }

// /* ==============================
//   ADD EVENT LISTENER
//   ============================== */
// var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
// window.addEventListener(mousewheelEvent, _.throttle(parallaxScroll, 60), false);

// /* ==============================
//   SLIDE MOTION
//   ============================== */
// function nextItem() {
//    var $previousSlide = document.querySelectorAll("section")[currentSlideNumber - 1];
//    $previousSlide.classList.remove("up-scroll");
//    $previousSlide.classList.add("down-scroll");
// }

// function previousItem() {
//    var $currentSlide = document.querySelectorAll("section")[currentSlideNumber];
//    $currentSlide.classList.remove("down-scroll");
//    $currentSlide.classList.add("up-scroll");
// }



// /*---------------------------------------------------------------------
// -----------------       Using Vanilla JS        -----------------------
// -----------------------------------------------------------------------
// */
// document.querySelector(".hamburguer").addEventListener("click", function () {
//    document.querySelector(".full-menu").classList.toggle("active");
//    document.querySelector(".hamburguer").classList.toggle("close-hamburguer");
// });

$(window).scroll(function(){
    var scrolledFromTop = $(window).scrollTop() + $(window).height();
    $(".appear").each(function(){
      var distanceFromTop = $(this).offset().top;
      if(scrolledFromTop >= distanceFromTop+100){
        console.log(this);
        var delaiAnim = $(this).data("delai");
        $('.appear').delay(delaiAnim).animate({
          top:0,
          opacity:1
        });
      }
    });
  });

  $(document).ready(function(){
    // au clic sur un lien
    $('a').on('click', function(evt){
       // bloquer le comportement par défaut: on ne rechargera pas la page
       evt.preventDefault(); 
       // enregistre la valeur de l'attribut  href dans la variable target
 var target = $(this).attr('href');
       /* le sélecteur $(html, body) permet de corriger un bug sur chrome 
       et safari (webkit) */
 $('html, body')
       // on arrête toutes les animations en cours 
       .stop()
       /* on fait maintenant l'animation vers le haut (scrollTop) vers 
        notre ancre target */
       .animate({scrollTop: $(target).offset().top}, 1000 );
    });
});
