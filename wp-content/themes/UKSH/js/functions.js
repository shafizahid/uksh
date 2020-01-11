/* global screenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

(function($) {
  var body,
    masthead,
    menuToggle,
    siteNavigation,
    socialNavigation,
    siteHeaderMenu,
    resizeTimer;

  function initMainNavigation(container) {
    // Add dropdown toggle that displays child menu items.
    var dropdownToggle = $("<button />", {
      class: "dropdown-toggle",
      "aria-expanded": false
    }).append(
      $("<span />", {
        class: "screen-reader-text",
        text: screenReaderText.expand
      })
    );

    container.find(".menu-item-has-children > a").after(dropdownToggle);

    // Toggle buttons and submenu items with active children menu items.
    container.find(".current-menu-ancestor > button").addClass("toggled-on");
    container.find(".current-menu-ancestor > .sub-menu").addClass("toggled-on");

    // Add menu items with submenus to aria-haspopup="true".
    container.find(".menu-item-has-children").attr("aria-haspopup", "true");

    container.find(".dropdown-toggle").click(function(e) {
      var _this = $(this),
        screenReaderSpan = _this.find(".screen-reader-text");

      e.preventDefault();
      _this.toggleClass("toggled-on");
      _this.next(".children, .sub-menu").toggleClass("toggled-on");

      // jscs:disable
      _this.attr(
        "aria-expanded",
        _this.attr("aria-expanded") === "false" ? "true" : "false"
      );
      // jscs:enable
      screenReaderSpan.text(
        screenReaderSpan.text() === screenReaderText.expand
          ? screenReaderText.collapse
          : screenReaderText.expand
      );
    });
  }
  initMainNavigation($(".main-navigation"));

  masthead = $("#masthead");
  menuToggle = masthead.find("#menu-toggle");
  siteHeaderMenu = masthead.find("#site-header-menu");
  siteNavigation = masthead.find("#site-navigation");
  socialNavigation = masthead.find("#social-navigation");

  // Enable menuToggle.
  (function() {
    // Return early if menuToggle is missing.
    if (!menuToggle.length) {
      return;
    }

    // Add an initial values for the attribute.
    menuToggle
      .add(siteNavigation)
      .add(socialNavigation)
      .attr("aria-expanded", "false");

    menuToggle.on("click.twentysixteen", function() {
      $(this)
        .add(siteHeaderMenu)
        .toggleClass("toggled-on");

      // jscs:disable
      $(this)
        .add(siteNavigation)
        .add(socialNavigation)
        .attr(
          "aria-expanded",
          $(this)
            .add(siteNavigation)
            .add(socialNavigation)
            .attr("aria-expanded") === "false"
            ? "true"
            : "false"
        );
      // jscs:enable
    });
  })();

  // Fix sub-menus for touch devices and better focus for hidden submenu items for accessibility.
  (function() {
    if (!siteNavigation.length || !siteNavigation.children().length) {
      return;
    }

    // Toggle `focus` class to allow submenu access on tablets.
    function toggleFocusClassTouchScreen() {
      if (window.innerWidth >= 910) {
        $(document.body).on("touchstart.twentysixteen", function(e) {
          if (!$(e.target).closest(".main-navigation li").length) {
            $(".main-navigation li").removeClass("focus");
          }
        });
        siteNavigation
          .find(".menu-item-has-children > a")
          .on("touchstart.twentysixteen", function(e) {
            var el = $(this).parent("li");

            if (!el.hasClass("focus")) {
              e.preventDefault();
              el.toggleClass("focus");
              el.siblings(".focus").removeClass("focus");
            }
          });
      } else {
        siteNavigation
          .find(".menu-item-has-children > a")
          .unbind("touchstart.twentysixteen");
      }
    }

    if ("ontouchstart" in window) {
      $(window).on("resize.twentysixteen", toggleFocusClassTouchScreen);
      toggleFocusClassTouchScreen();
    }

    siteNavigation
      .find("a")
      .on("focus.twentysixteen blur.twentysixteen", function() {
        $(this)
          .parents(".menu-item")
          .toggleClass("focus");
      });
  })();

  // Add the default ARIA attributes for the menu toggle and the navigations.
  function onResizeARIA() {
    if (window.innerWidth < 910) {
      if (menuToggle.hasClass("toggled-on")) {
        menuToggle.attr("aria-expanded", "true");
      } else {
        menuToggle.attr("aria-expanded", "false");
      }

      if (siteHeaderMenu.hasClass("toggled-on")) {
        siteNavigation.attr("aria-expanded", "true");
        socialNavigation.attr("aria-expanded", "true");
      } else {
        siteNavigation.attr("aria-expanded", "false");
        socialNavigation.attr("aria-expanded", "false");
      }

      menuToggle.attr("aria-controls", "site-navigation social-navigation");
    } else {
      menuToggle.removeAttr("aria-expanded");
      siteNavigation.removeAttr("aria-expanded");
      socialNavigation.removeAttr("aria-expanded");
      menuToggle.removeAttr("aria-controls");
    }
  }

  // Add 'below-entry-meta' class to elements.
  function belowEntryMetaClass(param) {
    if (
      body.hasClass("page") ||
      body.hasClass("search") ||
      body.hasClass("single-attachment") ||
      body.hasClass("error404")
    ) {
      return;
    }

    $(".entry-content")
      .find(param)
      .each(function() {
        var element = $(this),
          elementPos = element.offset(),
          elementPosTop = elementPos.top,
          entryFooter = element.closest("article").find(".entry-footer"),
          entryFooterPos = entryFooter.offset(),
          entryFooterPosBottom =
            entryFooterPos.top + (entryFooter.height() + 28),
          caption = element.closest("figure"),
          figcaption = element.next("figcaption"),
          newImg;

        // Add 'below-entry-meta' to elements below the entry meta.
        if (elementPosTop > entryFooterPosBottom) {
          // Check if full-size images and captions are larger than or equal to 840px.
          if ("img.size-full" === param || ".wp-block-image img" === param) {
            // Create an image to find native image width of resized images (i.e. max-width: 100%).
            newImg = new Image();
            newImg.src = element.attr("src");

            $(newImg).on("load.twentysixteen", function() {
              if (newImg.width >= 840) {
                // Check if an image in an image block has a width attribute; if its value is less than 840, return.
                if (
                  ".wp-block-image img" === param &&
                  element.is("[width]") &&
                  element.attr("width") < 840
                ) {
                  return;
                }

                element.addClass("below-entry-meta");

                if (caption.hasClass("wp-caption")) {
                  caption.addClass("below-entry-meta");
                  caption.removeAttr("style");
                }

                if (figcaption) {
                  figcaption.addClass("below-entry-meta");
                }
              }
            });
          } else {
            element.addClass("below-entry-meta");
          }
        } else {
          element.removeClass("below-entry-meta");
          caption.removeClass("below-entry-meta");
        }
      });
  }

  $(document).ready(function() {

    body = $(document.body);

    $(window)
      .on("load.twentysixteen", onResizeARIA)
      .on("resize.twentysixteen", function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
          belowEntryMetaClass("img.size-full");
          belowEntryMetaClass("blockquote.alignleft, blockquote.alignright");
          belowEntryMetaClass(".wp-block-image img");
        }, 300);
        onResizeARIA();
      });

    belowEntryMetaClass("img.size-full");
    belowEntryMetaClass("blockquote.alignleft, blockquote.alignright");
    belowEntryMetaClass(".wp-block-image img");

    // Preloader
    // $(window).on("load", function() {
    //   if ($("#preloader").length) {
    //     $("#preloader")
    //       .delay(100)
    //       .fadeOut("slow", function() {
    //         $(this).remove();
    //       });
    //   }
    // });

    // Anchor ID Scroll
    $("#intro a[href^='#']").click(function(e) {
      e.preventDefault();
      var position = $("#intro").height();
      $("html, body")
        .css({ height: "auto" })
        .animate(
          {
            scrollTop: position
          },
          500
        );
    });

    AOS.init();

    //a) initialize paroller.js
    $(".paralax-ffect").paroller();

    // Client Carousel

    $(".carousel-client").slick({
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      rows: 1,
      nextArrow: '<i class="custom-next-arrows"></i>',
      prevArrow: '<i class="custom-prev-arrows"></i>',
      responsive: [
        {
          breakpoint: 680,
          settings: {
            slidesPerRow: 1,
            rows: 1,
            dots: true
          }
        }
      ]
    });

    // $(".owl-carousel-client").owlCarousel({
    //   nav: true,
    //   dots: false,
    //   loop: false,
    //   rewind: true,
    //   // autoWidth: true,
    //   stagePadding: 0,
    //   margin: 4,
    //   checkVisibility: true,
    //   navElement: "div",
    //   responsive: {
    //     0: {
    //       items: 1,
    //       slideBy: 1
    //     },
    //     768: {
    //       items: 2,
    //       slideBy: 2
    //     },
    //     1024: {
    //       items: 3,
    //       slideBy: 3
    //     },
    //     1280: {
    //       items: 4,
    //       slideBy: 4
    //     },
    //     1440: {
    //       items: 7,
    //       slideBy: 1
    //     }
    //   }
    // });
  });
})(jQuery);

/*Blog Slider*/
(function($) {
  $(function() {
    var delayTime = 1000;
    var fadeTime = 500;
    var activeSlide = $("#blog-slider").find(".slide");
    if (!$(activeSlide).hasClass("active")) {
      activeSlide = $("#blog-slider").find(".slide:first-child");
      $(activeSlide).addClass("active");
    }
    $(activeSlide)
      .find(".right-section")
      .animate({ opacity: 1 }, { duration: fadeTime });
    $(activeSlide)
      .find(".left-section")
      .animate({ opacity: 1 }, { duration: fadeTime + delayTime });
  });
  $("#blog-slider .controls > .next, #blog-slider .controls>.prev").on(
    "click",
    function() {
      console.log("C");
      var slider = $("#blog-slider");
      var next_slide = "";
      var delayTime = 1000;
      var fadeTime = 500;
      var current_slide = $("#blog-slider .slide.active");
      $(current_slide)
        .find(".right-section")
        .animate({ opacity: 0 }, { duration: fadeTime });
      $(current_slide)
        .find(".left-section")
        .animate({ opacity: 0 }, { duration: fadeTime + delayTime });

      if ($(this).hasClass("next")) {
        next_slide =
          $(current_slide).next(".slide").length > 0
            ? $(current_slide).next(".slide")
            : $("#blog-slider").find(".slide:first-child");
      } else if ($(this).hasClass("prev")) {
        next_slide =
          $(current_slide).prev(".slide").length > 0
            ? $(current_slide).prev(".slide")
            : $("#blog-slider").find(".slide:last-child");
      }
      setTimeout(function() {
        $(current_slide).removeClass("active");
        $(current_slide)
          .siblings()
          .find(".left-section,.right-section")
          .css({ opacity: 0 });
        $(next_slide).addClass("active");
        $(next_slide)
          .find(".right-section")
          .animate({ opacity: 1 }, { duration: fadeTime });
        $(next_slide)
          .find(".left-section")
          .animate({ opacity: 1 }, { duration: fadeTime + delayTime });
      }, fadeTime + delayTime);
    }
  );

  $("#toTop").click(function() {
    $("html, body").animate({ scrollTop: 0 }, 1000);
  });
})(jQuery);

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
