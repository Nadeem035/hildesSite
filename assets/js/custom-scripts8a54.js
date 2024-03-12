/* eslint-disable */
(function () {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });

  // Hide Header on Scroll Down & Show on Scroll Up
  var doc = document.documentElement;
  var w = window;

  var prevScroll = w.scrollY || doc.scrollTop;
  var curScroll;
  var direction = 0;
  var prevDirection = 0;

  var header = document.getElementById("site-header");

  var checkScroll = function () {
    /*
     ** Find the direction of scroll
     ** 0 - initial, 1 - up, 2 - down
     */

    curScroll = w.scrollY || doc.scrollTop;
    if (curScroll > prevScroll) {
      //scrolled up
      direction = 2;
    } else if (curScroll < prevScroll && curScroll > 72) {
      //scrolled down
      direction = 1;
    } else if (curScroll < 72) {
      //scrolled up & top
      direction = 0;
    }

    if (direction !== prevDirection) {
      toggleHeader(direction, curScroll);
    }

    prevScroll = curScroll;
  };

  var toggleHeader = function (direction, curScroll) {
    if (direction === 2 && curScroll > 72) {
      header.classList.add("hide");
      header.classList.remove("scrolled-top");
      prevDirection = direction;
    } else if (direction === 1) {
      header.classList.remove("hide");
      prevDirection = direction;
    } else if (direction === 0) {
      header.classList.add("scrolled-top");
      prevDirection = direction;
    }
  };

  if (typeof header != "undefined" && header != null) {
    window.addEventListener("scroll", checkScroll);
  }
})();

$(document).ready(function () {
  AOS.init({
    disable: function () {
      var maxWidth = 768;
      return window.innerWidth < maxWidth;
    },
  });

  $(document).on(
    "click",
    ".vend_accordion_img_changer>.accordion-item",
    function () {
      console.log("Accordion!");
      let current_img = $(this).data("accordion-img"),
        img_src = $(this).closest("section").find(".vend_accordion_img>img");
      img_src.attr("src", current_img);
    }
  );

  let $window = $(window),
    isTab,
    isMobile;

  const checkWidth = () => {
    let windowsize = $window.width();
    if (windowsize < 992) {
      isTab = true;
    } else if (windowsize < 768) {
      isMobile = true;
    } else {
      (isMobile = false), (isTab = false);
    }
  };
  // Execute on load
  checkWidth();
  // Bind event listener
  $(window).on("resize", checkWidth);

  let current = 1,
    current_step,
    next_step,
    steps;

  steps = $(".step").length;

  const contactCTA = $(".contact-cta>.ubermenu-target");
  contactCTA
    .attr("data-bs-toggle", "modal")
    .attr("data-bs-target", contactCTA.attr("href"));

  const contactModalContainer = document.getElementById("contact_cta");

  const contactModal = new bootstrap.Modal(contactModalContainer, {
    keyboard: true,
  });

  contactModalContainer.addEventListener("show.bs.modal", function (event) {
    $(".ubermenu-responsive-toggle-open").trigger("click");
    $(".step").hide();
    $(".step").eq(0).show();
  });

  $(document).on("click", ".back-to-contact-cta", function () {
    current_step = $(this).closest(".step");
    next_step = $(this).closest(".step").prev();
    next_step.css("display", "flex");
    current_step.hide();
  });

  $(document).on("click", ".contact-cta-form", function () {
    current_step = $(this).closest(".step");
    next_step = $(this).closest(".step").siblings(".step-contact-form");
    next_step.css("display", "flex");
    current_step.hide();
  });

  $(document).on("click", ".contact-cta-team", function () {
    const cta_url = $(this).data("url");
    window.open(cta_url, "_blank");
    contactModal.hide();
  });

  $(document).on("click", ".modal-custom-close", function () {
    contactModal.hide();
  });

  const cardCarousel = $(".vend_card_carousel");
  cardCarousel.owlCarousel({
    items: 4,
    margin: 0,
    nav: false,
    dots: false,
    startPosition: 0,
    autoplay: false,
    nav: true,
    navText: [
      '<span class="material-icons">west</span>',
      '<span class="material-icons">east</span>',
    ],
    navContainer: ".vend_card_carousel_nav",
    mouseDrag: false,
    responsive: {
      0: {
        items: 1,
        margin: 24,
        stagePadding: 32,
      },
      576: {
        items: 2,
        stagePadding: 0,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      },
    },
  });

  const cardCarousel2 = $(".vend_card_carousel_2");
  cardCarousel2.owlCarousel({
    items: 3,
    margin: 40,
    nav: false,
    dots: false,
    startPosition: 0,
    autoplay: false,
    nav: true,
    navText: [
      '<span class="material-icons">west</span>',
      '<span class="material-icons">east</span>',
    ],
    navContainer: ".vend_card_carousel_2_nav",
    mouseDrag: false,
    responsive: {
      0: {
        items: 1,
        margin: 24,
      },
      576: {
        items: 2,
        margin: 24,
      },
      768: {
        items: 3,
      },
      992: {
        items: 3,
      },
    },
  });

  const titleCarousel = $(".title-carousel");
  titleCarousel.owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    nav: false,
    dots: false,
    animateOut: "slideOutUp",
    animateIn: "slideInUp",
  });

  // Find all items to loop through
  var techItems = $(".card-square");

  // Initialize max dimension variables to 0
  var maxWidth = 0;
  var maxHeight = 0;

  // Loop through each item to find the largest dimension
  techItems.each(function () {
    var width = $(this).parent().width() - 32;
    var height = $(this).parent().height() - 32;

    if (width > maxWidth) {
      maxWidth = width;
    }

    if (height > maxHeight) {
      maxHeight = height;
    }
  });

  // Set the width and height of each item to be the largest dimension
  techItems.width(maxHeight);
  techItems.height(maxHeight);

  const centerCarousel = $(".center-carousel");

  centerCarousel.owlCarousel({
    items: 4,
    nav: true,
    navText: [
      '<span class="material-icons">west</span>',
      '<span class="material-icons">east</span>',
    ],
    navContainer: ".center_carousel_nav",
    dots: false,
    margin: 40,
    loop: false,
    autoWidth: false,
    // center: true,
    mousewheel: true,
    responsive: {
      0: {
        items: 1,
        margin: 24,
        stagePadding: 100,
        center: false,
      },
      576: {
        items: 2,
        margin: 24,
        stagePadding: 70,
        center: false,
        mousewheel: false,
      },
      768: {
        items: 3,
        center: false,
      },
      992: {
        items: 4,
        center: true,
      },
    },
    onTranslated: function (event) {
      // Check if the last item is visible
      if (isTab !== true) {
        $(document)
          .find(".center-carousel-cta")
          .removeClass("show animated slideInRight");
        var lastVisibleItemIndex = event.item.index + event.page.size - 1;
        var totalItems = event.item.count;
        if (lastVisibleItemIndex === totalItems - 1) {
          // Remove the mousewheel event handler
          $(".owl-stage").off("mousewheel.owl.carousel");
          $(document)
            .find(".center-carousel-cta")
            .addClass("show animated slideInRight");
        }
      }
    },
  });

  centerCarousel.on("changed.owl.carousel", function (event) {
    var currentSlideIndex = event.relatedTarget.relative(event.item.index);
    var firstItem = event.relatedTarget.$stage.children().eq(0);
    $(this)
      .closest("#recent_work")
      .find(".section-content")
      .removeClass("recent_work_heading");
    if (currentSlideIndex == 0) {
      $(this)
        .closest("#recent_work")
        .find(".section-content")
        .addClass("recent_work_heading");
    }
  });
  // console.log('isMobile => ', !isMobile);
  if (isTab !== true) {
    centerCarousel.on("mousewheel", ".owl-stage", function (e) {
      console.log("e.deltaY => ", e.deltaY);
      if (e.deltaY > 0) {
        centerCarousel.trigger("prev.owl");
        $(document)
          .find(".center-carousel-cta")
          .addClass("animated slideOutRight");
      } else {
        centerCarousel.trigger("next.owl");
        $(document)
          .find(".center-carousel-cta")
          .removeClass("animated slideOutRight");
      }
      e.preventDefault();
    });
  }

  // handle links with @href started with '#' only
  $(document).on("click", ".scroll-to-section", function (e) {
    e.stopPropagation();
    let id;
    if ($(this).data("href") !== undefined || $(this).data("href") !== "") {
      id = $(this).data("href");
    } else {
      id = $(this).attr("href");
    }

    // target element
    var $id = $(id);
    if ($id.length === 0) {
      return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $id.offset().top;

    // animated top scrolling
    $("body, html").animate({ scrollTop: pos });
  });

  $(".partners-marquee").show();
  $(".partners-marquee").webTicker({
    startEmpty: false,
    duplicate: true,
    hoverpause: true,
    transition: "linear",
    height: "66px",
    speed: 80,
  });

  $(".clients-marquee").show();
  $(".clients-marquee").webTicker({
    startEmpty: false,
    duplicate: true,
    hoverpause: true,
    transition: "linear",
    height: "70px",
    speed: 60,
    rssfrequency: 0,
    transition: "ease",
  });

  $(".awards-certifications-marquee").show();
  $(".awards-certifications-marquee").webTicker({
    startEmpty: false,
    duplicate: true,
    hoverpause: true,
    transition: "linear",
    height: "150px",
    speed: 80,
    rssfrequency: 0,
    transition: "ease",
  });

  $(window)
    .scroll(function () {
      var $window = $(window),
        $body = $("body"),
        $section = $("section");

      var scroll = $window.scrollTop() + $window.height() / 3;

      $section.each(function () {
        var $this = $(this);
        if (
          $this.position().top <= scroll &&
          $this.position().top + $this.height() > scroll
        ) {
          $body.removeClass(function (index, css) {
            return (css.match(/(^|\s)bg-\S+/g) || []).join(" ");
          });
          $body.addClass("bg-" + $(this).data("color"));
        }
      });
    })
    .scroll();

  const testimonialCarousel = $(".testimonial-slider-top");
  const testimonialCarouselBottom = $(".testimonial-slider-bottom");
  const slideDuration = 4400;
  const delayOutDuration = slideDuration - 700;
  const classAnimate = "animate__animated";
  const classDelay = "animate__delay-3s";
  const classDelayMilliseconds = 3000;
  const classImgVisibility = "v-hidden";
  const contentContainer = "testimonial__content";
  const animationIn = "animate__slideInUp";
  const animationOut = "animate__slideOutDown";
  const settings = {
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    autoplay: true,
    autoplaySpeed: slideDuration,
    pauseOnHover: false,
    dots: false,
    prevArrow: false,
    nextArrow: false,
  };

  const animationTwoSlide = (currentSlide, isInit = false, isSliderBottom) => {
    // for two slide
    const selectorForElement =
      isSliderBottom === "bottom" ? "data-anim-bottom" : "data-anim";
    //2 elems
    let elm = [];
    const animFun = () => {
      for (let i = 0; i < 2; i++) {
        elm.push(
          document.querySelector(
            `[${selectorForElement}-${i}='${currentSlide}']`
          )
        );
      }
    };
    animFun();
    const addAnimation = () => {
      const isOdd = currentSlide % 2 == 1;

      for (let index = 0; index < 2; index++) {
        //if odd slideOut
        if (isOdd) {
          elm[index].classList.remove(
            classImgVisibility,
            classAnimate,
            classDelay,
            animationOut
          );
          elm[index].classList.add(classAnimate, classDelay, animationOut);
          elm[index].addEventListener("animationend", () => {
            elm[index].classList.remove(classAnimate, classDelay, animationOut);
            elm[index].classList.add(classImgVisibility);
            setTimeout(() => {
              elm[index].classList.remove(classImgVisibility);
            }, 1200);
          });
        } else {
          //if even slide in
          elm[index].classList.remove(classAnimate, classDelay, animationIn);

          setTimeout(() => {
            elm[index].classList.remove(classImgVisibility);
          }, classDelayMilliseconds);

          elm[index].classList.add(classAnimate, classDelay, animationIn);
          elm[index].addEventListener("animationend", () => {
            elm[index].classList.remove(classAnimate, classDelay, animationIn);
            setTimeout(() => {
              elm[index].classList.add(classImgVisibility);
            }, 1000);
          });
        }
      }
    };
    addAnimation();
  };

  //top slider
  $(testimonialCarousel).on("init", function (event, slick) {
    //called on init
    animationTwoSlide(0, true);
  });
  $(testimonialCarousel).on(
    "afterChange",
    function (event, slick, currentSlide, nextSlide) {
      animationTwoSlide(currentSlide, false);
    }
  );
  $(testimonialCarousel).slick(settings);

  setTimeout(() => {
    //bottom slider
    $(testimonialCarouselBottom).on("init", function (event, slick) {
      //called on init
      animationTwoSlide(0, true, "bottom");
    });

    $(testimonialCarouselBottom).on(
      "afterChange",
      function (event, slick, currentSlide, nextSlide) {
        animationTwoSlide(currentSlide, false, "bottom");
      }
    );

    $(testimonialCarouselBottom).slick(settings);
  }, 1200);

  $(".mobile-testimonial-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    pauseOnHover: false,
    dots: false,
    prevArrow: false,
    nextArrow: false,
    centerMode: true,
    focusOnSelect: true,
    infinite: false,
    variableWidth: true,
  });

  imageSlider = $(".image-slider");

  imageSlider.owlCarousel({
    items: 1,
    loop: true,
    lazyLoad: true,
    stagePadding: 120,
    dots: false,
    nav:false,
    responsive: {
      0: {
        items: 1,
        nav: true,
        navText: [
          '<span class="material-icons">west</span>',
          '<span class="material-icons">east</span>',
        ],
        navContainer: ".vend_image_carousel_nav",
        stagePadding: 0
      },
      576: {
        items: 1,
        nav: true,
        navText: [
          '<span class="material-icons">west</span>',
          '<span class="material-icons">east</span>',
        ],
        navContainer: ".vend_image_carousel_nav",
        stagePadding: 0
      },
      768: {
        items: 1,
        nav: true,
        navText: [
          '<span class="material-icons">west</span>',
          '<span class="material-icons">east</span>',
        ],
        navContainer: ".vend_image_carousel_nav",
        stagePadding: 0,
      },
      992: {
        items: 1,
        nav: false,
      },
    },
  });
  
  imageSliderv2 = $(".image-sliderv2");

  imageSliderv2.owlCarousel({
    items: 1,
    margin: 40,
    stagePadding: 0,
    dots: false,
    startPosition: 0,
    autoplay: false,
    nav: true,
    navText: [
      '<span class="material-icons">west</span>',
      '<span class="material-icons">east</span>',
    ],
    navContainer: ".vend_fourcard_carousel_nav2",
    mouseDrag: true,
    responsive: {
      0: {
        items: 1.3,
        margin: 24,
      },
      576: {
        items: 1.3,
        margin: 24,
      },
      768: {
        items: 1.3,
        margin: 24,
      },
      992: {
        items: 1,
      },
    },
  });

  imageSlider.on("changed.owl.carousel", function (property) {
    let current_item = property.item.index,
      next_index = $(property.target)
        .find(".owl-item")
        .eq(current_item)
        .next()
        .find(".slide_item")
        .attr("data-slide-index"),
      next_img = $(property.target)
        .find(".owl-item")
        .eq(current_item)
        .next()
        .find(".slide_item")
        .attr("data-slide-img"),
      next_text = $(property.target)
        .find(".owl-item")
        .eq(current_item)
        .next()
        .find(".slide_item")
        .attr("data-slide-title");

    $(".slide-next")
      .find(".slide-next-img")
      .css("background-image", "url(" + next_img + ")");
    $(".slide-next").find("h6").text(next_text);
    $(".slide-next").find(".slide-next-index").text(next_index);
    $(".slide_content").removeClass("show");
    $(property.target)
      .find(".owl-item")
      .eq(current_item)
      .find(".slide_content")
      .addClass("show");
  });

  $(document).on("click", ".slide-next", function () {
    imageSlider.trigger("next.owl");
  });

  const fourcardCarouselv3 = $(".vend_fourcard_carouselv3");
  fourcardCarouselv3.owlCarousel({
    items: 3,
    margin: 40,
    stagePadding: 32,
    dots: false,
    startPosition: 0,
    autoplay: false,
    nav: true,
    navText: [
      '<span class="material-icons">west</span>',
      '<span class="material-icons">east</span>',
    ],
    navContainer: ".vend_fourcard_carousel_nav3",
    mouseDrag: false,
    responsive: {
      0: {
        items: 1,
        margin: 24,
      },
      576: {
        items: 2,
        margin: 24,
      },
      768: {
        items: 3,
      },
      992: {
        items: 3,
      },
    },
  });

  //our work services
  const fourcardCarousel = $(".vend_fourcard_carousel");
  fourcardCarousel.owlCarousel({
    items: 3,
    margin: 40,
    stagePadding: 32,
    dots: false,
    startPosition: 0,
    autoplay: false,
    nav: true,
    navText: [
      '<span class="material-icons">west</span>',
      '<span class="material-icons">east</span>',
    ],
    navContainer: ".vend_fourcard_carousel_nav",
    mouseDrag: false,
    responsive: {
      0: {
        items: 1,
        margin: 24,
      },
      576: {
        items: 2,
        margin: 24,
      },
      768: {
        items: 3,
      },
      992: {
        items: 3,
      },
    },
  });

  //our work services
  const teamCardCarousel = $(".vend_team_carousel");
  teamCardCarousel.owlCarousel({
    items: 3,
    margin: 40,
    stagePadding: 32,
    dots: false,
    startPosition: 0,
    autoplay: false,
    nav: true,
    navText: [
      '<span class="material-icons">west</span>',
      '<span class="material-icons">east</span>',
    ],
    navContainer: ".vend_team_carousel_nav",
    mouseDrag: false,
    responsive: {
      0: {
        items: 1,
        margin: 24,
      },
      576: {
        items: 2,
        margin: 24,
      },
      768: {
        items: 3,
      },
      992: {
        items: 3,
      },
    },
  });
  
  // our commitments
  const venturediveGlanceCardCarousel = $(".vend_glance_carousel");
  venturediveGlanceCardCarousel.owlCarousel({
    items: 3,
    margin: 40,
    stagePadding: 32,
    dots: false,
    startPosition: 0,
    autoplay: false,
    nav: true,
    navText: [
      '<span class="material-icons">west</span>',
      '<span class="material-icons">east</span>',
    ],
    navContainer: ".vend_glance_nav",
    mouseDrag: false,
    responsive: {
      0: {
        items: 1,
        margin: 24,
      },
      576: {
        items: 2,
        margin: 24,
      },
      768: {
        items: 3,
      },
      992: {
        items: 3,
      },
    },
  });
  
  // our commitments
  const ourCommitmentsCardCarousel = $(".vend_our_commitments_carousel");
  ourCommitmentsCardCarousel.owlCarousel({
    items: 3,
    margin: 40,
    stagePadding: 32,
    dots: false,
    startPosition: 0,
    autoplay: false,
    nav: true,
    navText: [
      '<span class="material-icons">west</span>',
      '<span class="material-icons">east</span>',
    ],
    navContainer: ".vend_our_commitments_carousel_nav",
    mouseDrag: false,
    responsive: {
      0: {
        items: 1,
        margin: 24,
      },
      576: {
        items: 2,
        margin: 24,
      },
      768: {
        items: 3,
      },
      992: {
        items: 3,
      },
    },
  });

  // join us
  const joinUsCardCarousel = $(".vend_join_us_carousel");
  joinUsCardCarousel.owlCarousel({
    items: 3,
    margin: 40,
    stagePadding: 32,
    dots: false,
    startPosition: 0,
    autoplay: false,
    nav: true,
    navText: [
      '<span class="material-icons">west</span>',
      '<span class="material-icons">east</span>',
    ],
    navContainer: ".vend_join_us_carousel_nav",
    mouseDrag: false,
    responsive: {
      0: {
        items: 1,
        margin: 24,
      },
      576: {
        items: 2,
        margin: 24,
      },
      768: {
        items: 3,
      },
      992: {
        items: 3,
      },
    },
  });

  // Meet our team
  const ourTeam = $(".vend_meet_our_team");
  ourTeam.owlCarousel({

    items: 3,
    margin: 24,
    stagePadding: 32,
    dots: false,
    startPosition: 0,
    autoplay: false,
    nav: true,
    navText: [
      '<span class="material-icons">west</span>',
      '<span class="material-icons">east</span>',
    ],
    navContainer: ".vend_team_carousel_nav",
    mouseDrag: false,
    responsive: {
      0: {
        items: 1,
        margin: 24,
        mouseDrag: true,
      },
      576: {
        items: 2,
        margin: 24,
      },
      768: {
        items: 3,
        mouseDrag: false,
      },
      992: {
        items: 3,
      },
    },
  });
  
  const vend_carousel_with_controls = $(".vend_carousel_with_controls");
  vend_carousel_with_controls.owlCarousel({
    items: 1,
    margin: 40,
    stagePadding: 0,
    dots: true,
    startPosition: 0,
    autoplay: false,
    nav: true,
    navText: [
      '<span class="material-icons">west</span>',
      '<span class="material-icons">east</span>',
    ],
    navContainer: ".vend_carousel_with_controls_nav",
    mouseDrag: false,
  });

  const vend_carousel_with_dot_nav = $(".vend_carousel_with_dot_nav");
  vend_carousel_with_dot_nav.owlCarousel({
    items: 1,
    margin: 0,
    loop: true,
    autoplay: true,
    autoplaySpeed: 500,
    mouseDrag: false,
    dots: true,
    nav: false,
  });

  // Clients slider
  const clientSlider = $('.clients_slider');
  clientSlider.owlCarousel({
    items:1,
    loop: true,
    autoplay: true,
    autoplaySpeed: 500,
    nav: false,
    dots: true,
    dotsData: true,
    // navContainer: '.nav_container',
    // navText: [
    //   '<span class="material-icons">chevron_left</span>',
    //   '<span class="material-icons">chevron_right</span>',
    // ],
    dotsContainer: '.dots_container',
  });

  $(document).on("click", ".client-slide-prev", function () {
    clientSlider.trigger("prev.owl");
  });

  $(document).on("click", ".client-slide-next", function () {
    clientSlider.trigger("next.owl");
  });
  
    const dataServicesSlider = $(".data-services-slider").owlCarousel({
    slideSpeed: 2000,
    paginationSpeed: 2000,
    singleItem: true,
    navigation: true,
    items: 1,
    autoplay:true,
    loop:true,
    autoplayTimeout:5000,
    dotsContainer: '.data-services-slider-dots',
    responsive:{
      0:{
          items:1
      },
      767:{
          items:1,
      }
    }
});

}); //document ready close

function initOwl() {
  if (typeof jQuery == 'function') {
    jQuery('.responsive-carousel').each(function () {
      var el = jQuery(this);
      if (jQuery(window).width() <= 991) {
        el.addClass('owl-carousel');
        jQuery(this).owlCarousel({
          items: 2,
          stagePadding: 0,
          loop: false,
          margin: 24,
          dots: false,
          nav: true,
          navText: [
            '<span class="material-icons">west</span>',
            '<span class="material-icons">east</span>',
          ],
          navContainer: ".vend_responsive_carousel_nav",
          responsive: {
            0: {
              items: 1,
              stagePadding: 44,
            },
            576: {
              items: 2,
              stagePadding: 0,
            },
          }
        });
      } else {
        jQuery(el).owlCarousel('destroy');
      }
    })
    jQuery('.responsive-carousel-2').each(function () {
      var el = jQuery(this);
      if (jQuery(window).width() <= 991) {
        el.addClass('owl-carousel');
        jQuery(this).owlCarousel({
          items: 1,
          stagePadding: 0,
          loop: false,
          margin: 0,
          dots: false,
          nav: true,
          navText: [
            '<span class="material-icons">west</span>',
            '<span class="material-icons">east</span>',
          ],
          navContainer: ".vend_responsive_carousel_nav_2"
        });
      } else {
        jQuery(el).owlCarousel('destroy');
      }
    })
    jQuery('.responsive-carousel-3').each(function () {
      var el = jQuery(this);
      if (jQuery(window).width() <= 991) {
        el.addClass('owl-carousel');
        jQuery(this).owlCarousel({
          items: 3,
          loop: false,
          margin: 0,
          dots: false,
          nav: false,
          autoWidth: true,
          // center: true,
          startPosition: 0
          // navText: [
          //   '<span class="material-icons">west</span>',
          //   '<span class="material-icons">east</span>',
          // ],
          // navContainer: ".vend_responsive_carousel_nav_2"
        });
      } else {
        jQuery(el).owlCarousel('destroy');
      }
    })
  }
}

window.addEventListener('DOMContentLoaded', function () {
  initOwl();
});

window.addEventListener('resize', function () {
  initOwl();
});


// Data Services Section
document.addEventListener("DOMContentLoaded", function() {
  var children = document.querySelectorAll(".vd-data-card");
  var parent = document.querySelector(".data-section");

  children.forEach(function(child) {
    child.addEventListener("mouseenter", function() {
      var imageUrl = child.getAttribute("data-card-img");
      parent.style.backgroundImage = "url('" + imageUrl + "')";
    });
  });
});

// Data Services Section - Responsive
document.addEventListener("DOMContentLoaded", function() {
  var children = document.querySelectorAll("#vend_accordion_data_card .accordion-item");
  var parent = document.querySelector(".data-section");

  children.forEach(function(child) {
    child.addEventListener("click", function() {
      var imageUrl = child.getAttribute("data-card-img");
      parent.style.backgroundImage = "url('" + imageUrl + "')";
    });
  });
});

// array of the links in the toc (table of content) block
var toc;
// array of content (links are refers to the content)
var content = [];

// call prepare function for while page is loaded complete
document.addEventListener('DOMContentLoaded', function () {
    prepare();
    sync();
}, false);

/**
 * this function get all toc (table of content) links and content 
 * and save theme
 */
function prepare() {
    // get all toc (table of content) links
    toc = document.querySelectorAll('.toc a');
    // get content so that link refer to it
    toc.forEach(function (link) {
        var id = link.getAttribute("href");
        var element = document.querySelector(id);
        content.push(element);
    });
    // sync toc (table of content) whit part of content that is 
    // visible into viewport while user scroll
    window.addEventListener("scroll", sync, false);
}


/**
 * this function check if element is visible in viewport 
 * 
 * @argument {String} element which we need to check it 
 * @returns true if element is visible in viewport else return false 
 */
function isElementInViewport(element) {
    // get element position
    var rect = element.getBoundingClientRect();

    // return true if a partial of the element is visible
    return (rect.bottom >= 0 &&
        rect.top <= (window.innerHeight || document.documentElement.clientHeight));
}

/**
 * this function highlight toc (table of content) links which is visible in viewport
 */
function sync() {
    // check all content 
    for (var i = 0; i < content.length; i++) {
        // if content is visible if viewport highlight it 
        // else remove highlight from it
        if (isElementInViewport(content[i])) {
            toc[i].classList.add('highlight');
        } else {
            toc[i].classList.remove('highlight');
        }
    }
}

$(function() {
  //caches a jQuery object containing the header element
  var header = $(".toc_frist_child");
  $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 570) {
          header.removeClass('toc_frist_child').addClass("toc_frist_child_show");
      } else {
          header.removeClass("toc_frist_child_show").addClass('toc_frist_child');
      }
  });
});