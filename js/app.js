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

var t1 = new TimelineMax({paused: true});

t1.to(".one", 0.8, {y: 6, rotation: 45, ease:Expo.easeInOut});
t1.to(".two", 0.8, {y: -6, rotation: -45, ease:Expo.easeInOut, delay: -0.8});

t1.to(".menuContent", 1, {top: "0%", ease: Expo.easeInOut, delay: -1})

t1.staggerFrom(".menuContent ul li", 1, {x: -200, opacity: 0, ease:Expo.easeInOut}, .2);

t1.reverse();
$(document).on("click", ".toggle-btn", function(){
t1.reversed(!t1.reversed());//toggles the orientation
});
$(document).on("click", "a", function(){
t1.reversed(!t1.reversed());//sets the orientation to reversed
});
