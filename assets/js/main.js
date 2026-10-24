(function ($) {
  "use strict";

  /*
  |=====================================================================
  | TABLE OF CONTENTS:
  |=====================================================================
  |
  | 01. Mobile Menu
  | 02. Sticky Header
  | 03. Dynamic Background
  | 04. Swiper Slider
  | 05. Language Select
  | 06. Counter Animation
  | 07. Modal Video
  | 08. Review
  | 09. Tabs
  | 10. Lightgallery
  | 11. Accordian
  | 12. Product Filter
  | 13. Scroll Up
  | 14. Product Filter Sidebar (off-canvas)
  | 15. Ecommerce
  | 16. Price Range Slider
  | 17. Pricing Toggle — monthly / yearly billing switch
  | 18. Work Process Steps
  | 19. Community Topic Filter
  | 20. Range Output
  | 21. Dashboard Sidebar
  | 22. Dashboard Chart
  | 23. User Dropdown
  | 24. Dashboard Modal
  | 25. Number Stepper
  | 26. Leaderboard Profile Modal
  | 27. Area Chart
  | 28. Donut Chart
  | 29. Message Search
  | 30. Profile Edit
  | 31. Course Catalog
  | 32. Course Edit Modal
  | 33. Live Class Modal
  | 34. Student Directory
  | 35. Student Modal
  | 36. Review Rating Select
  | 37. Video Fallback
  | 38. Preloader
  | 39. AOS (Animate On Scroll)
  |
  */

  /*====================================================================
    Scripts initialization
  ======================================================================*/
  $.exists = function (selector) {
    return $(selector).length > 0;
  };

  $(function () {
    mainNav();
    stickyHeader();
    subnavSticky();
    dynamicBackground();
    swiperInit();
    languageSwitch();
    counterInit();
    modalVideo();
    review();
    tabs();
    lightGallery();
    accordian();
    productFilterInit();
    scrollUp();
    filterSidebar();
    shopInit();
    priceRangeSlider();
    pricingToggle();
    workProcessSteps();
    communityTopicFilter();
    rangeOutput();
    dashboardSidebar();
    dashboardChart();
    userDropdown();
    dashboardModal();
    numberStepper();
    leaderboardProfileModal();
    areaChart();
    donutChart();
    messageSearch();
    profileEdit();
    courseCatalog();
    courseEditModal();
    liveClassModal();
    studentDirectory();
    studentModal();
    reviewRatingSelect();
    videoFallback();
    preloader();
    aosInit();
    // Nice Select
    $(".nice_select, .cs_event_booking_card select").niceSelect();

    // Dynamic year as footer text
    if ($.exists(".cs_getting_year")) {
      const date = new Date();
      $(".cs_getting_year").text(date.getFullYear());
    }
  });
  /*=============================================================
   Run on window Scroll
  ===============================================================*/
  $(window).on("scroll resize", function () {
    stickyHeader();
    subnavSticky();
    showScrollUp();
  });

  /*=============================================================
    01. Mobile Menu
  ===============================================================*/
  function mainNav() {
    $(".cs_nav").append('<span class="cs_menu_toggle"><span></span></span>');
    $(".menu-item-has-children").append(
      '<span class="cs_menu_dropdown_toggle"><span></span></span>',
    );
    function openMobileNav() {
      $(".cs_nav_list_wrapper").addClass("active");
      $(".cs_menu_toggle").addClass("active");
      $(".cs_sidenav_overlay").addClass("active");
      $("body").addClass("cs_no_scroll");
    }

    function closeMobileNav() {
      $(".cs_nav_list_wrapper").removeClass("active");
      $(".cs_menu_toggle").removeClass("active");
      $(".cs_sidenav_overlay").removeClass("active");
      $("body").removeClass("cs_no_scroll");
    }

    $(".cs_menu_toggle").on("click", function () {
      if ($(this).hasClass("active")) {
        closeMobileNav();
      } else {
        openMobileNav();
      }
    });

    $(".cs_close_nav, .cs_sidenav_overlay").on("click", closeMobileNav);

    $(".cs_menu_dropdown_toggle").on("click", function () {
      $(this).toggleClass("active").siblings("ul").slideToggle();
      $(this).parent().toggleClass("active");
    });
    $(window).on("resize", function () {
      if (window.innerWidth > 1199) closeMobileNav();
    });
  }
  /*=============================================================
    02. Sticky Header
  ===============================================================*/
  function stickyHeader() {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
      $(".cs_sticky_header").addClass("cs_sticky_active");
    } else {
      $(".cs_sticky_header").removeClass("cs_sticky_active");
    }
  }
  /*===========================================================
    Subnav Sticky Controller
  ===============================================================*/
  function subnavSticky() {
    var $stickyNavs = $(".cs_unid_sticky_nav, .cs_course_sticky_nav");
    if (!$stickyNavs.length) return;

    var $header = $(".cs_site_header");
    var headerH = $header.length ? $header.outerHeight() : (window.innerWidth <= 991 ? 70 : 80);

    $stickyNavs.each(function () {
      var $nav = $(this);
      $nav.css("top", headerH + "px");

      var rect = this.getBoundingClientRect();
      if (rect.top <= headerH + 2) {
        $nav.addClass("cs_is_stuck");
      } else {
        $nav.removeClass("cs_is_stuck");
      }
    });
  }

  /*===========================================================
    03. Dynamic Background
  =============================================================*/
  function dynamicBackground() {
    $("[data-src]").each(function () {
      var src = $(this).attr("data-src");
      $(this).css({
        "background-image": "url(" + src + ")",
      });
    });
  }
  /*===========================================================
    04. Swiper Slider
  =============================================================*/
  function swiperInit() {
    // Thumbs gallery
    function resolveThumbs($mainEl, selector) {
      if (!selector) return null;
      // Product Thumb
      if (selector === 1 || selector === "1" || selector === true) {
        return $mainEl
          .closest(".cs_product_gallery")
          .find(".cs_product_gallery_thumbs")
          .first();
      }
      var $t = $(selector).first();
      if (!$t.length) {
        var $scope = $mainEl.closest(".slider-section");
        if ($scope.length) $t = $scope.find(selector).first();
      }
      return $t;
    }

    // Build the thumbnail Swiper
    function buildThumbsSwiper($thumbsEl) {
      if (!$thumbsEl || !$thumbsEl.length) return null;
      if (!$thumbsEl.find(".swiper-wrapper").length) return null;

      if ($thumbsEl[0].swiper) {
        $thumbsEl[0].swiper.destroy(true, true);
      }

      var base = parseInt($thumbsEl.data("slides-per-view")) || 4;
      var gap = parseInt($thumbsEl.data("gap")) || 24;
      var thumbsLoop = Boolean(parseInt($thumbsEl.data("loop"), 10));

      // Per-breakpoint count; falls back to the base value when not set.
      function tier(attr) {
        return parseInt($thumbsEl.data(attr)) || base;
      }

      // Vertical Derection
      var isVertical = $thumbsEl.data("direction") === "vertical";
      $thumbsEl
        .toggleClass("cs_thumbs_vertical", isVertical)
        .closest(".cs_product_gallery")
        .toggleClass("cs_gallery_thumbs_vertical", isVertical);

      // A vertical strip with auto height
      if (isVertical) {
        var slideH =
          $thumbsEl.find(".swiper-slide").first().outerHeight() || 135;
        $thumbsEl.css({
          height: base * slideH + (base - 1) * gap + "px",
          overflow: "hidden",
        });
      } else {
        $thumbsEl.css({ height: "", overflow: "" });
      }

      // Slider Arrow Button.
      var showThumbArrows = parseInt($thumbsEl.data("pagination")) === 1;
      var $thumbPrev = null;
      var $thumbNext = null;
      if (showThumbArrows) {
        // Remove any arrows from a previous.
        $thumbsEl.children(".cs_thumbs_arrow").remove();
        $thumbPrev = $(
          '<button type="button" class="cs_thumbs_arrow cs_thumbs_prev" aria-label="Previous thumbnails"></button>',
        );
        $thumbNext = $(
          '<button type="button" class="cs_thumbs_arrow cs_thumbs_next" aria-label="Next thumbnails"></button>',
        );
        $thumbsEl.append($thumbPrev, $thumbNext);
      }

      var thumbsOptions = {
        direction: isVertical ? "vertical" : "horizontal",
        slidesPerView: base,
        spaceBetween: gap,
        loop: thumbsLoop,
        freeMode: true,
        watchSlidesProgress: true,
        watchOverflow: true,
        breakpoints: {
          0: { slidesPerView: tier("xsm-slides"), spaceBetween: gap },
          450: { slidesPerView: tier("sm-slides"), spaceBetween: gap },
          575: { slidesPerView: tier("smd-slides"), spaceBetween: gap },
          768: { slidesPerView: tier("md-slides"), spaceBetween: gap },
          991: { slidesPerView: tier("lg-slides"), spaceBetween: gap },
          1200: { slidesPerView: tier("xlg-slides"), spaceBetween: gap },
          1400: { slidesPerView: tier("xxlg-slides"), spaceBetween: gap },
        },
      };

      if (showThumbArrows) {
        thumbsOptions.navigation = {
          prevEl: $thumbPrev[0],
          nextEl: $thumbNext[0],
        };
      }

      return new Swiper($thumbsEl[0], thumbsOptions);
    }
    // Thumb Controller hides
    var thumbsTargets = [];
    $(".swiper[data-thumbs]").each(function () {
      var $main = $(this);
      var thumbsAttr = $main.attr("data-thumbs");
      var hideThumbs = !thumbsAttr || thumbsAttr === "0";
      // Thumbnail strip alongside gallery
      var $t = hideThumbs
        ? $main
            .closest(".cs_product_gallery")
            .find(".cs_product_gallery_thumbs")
            .first()
        : resolveThumbs($main, thumbsAttr);

      if ($t && $t.length) {
        thumbsTargets.push($t[0]);
        $t.toggleClass("cs_thumbs_hidden", hideThumbs);
      }
    });

    $(".swiper").each(function () {
      var $swiperEl = $(this);

      // Skip thumbnail strips.
      if ($.inArray(this, thumbsTargets) !== -1) return;

      var $wrapper = $swiperEl.find(".swiper-wrapper");
      var $slides = $wrapper.find(".swiper-slide");
      var totalSlides = $slides.length;

      if (!$wrapper.length) return;

      // ===== DATA ATTRIBUTES =====
      var autoplayVal = Boolean(parseInt($swiperEl.data("autoplay"), 10));
      var loopVal = Boolean(parseInt($swiperEl.data("loop"), 10));
      var centerVal = Boolean(parseInt($swiperEl.data("center"), 10));
      var variableVal = Boolean(parseInt($swiperEl.data("variable-width"), 10));
      var speedVal = parseInt($swiperEl.data("speed")) || 600;
      var isResponsiveMode = $swiperEl.data("slides-per-view") === "responsive";
      var isSingleSlideMode = parseInt($swiperEl.data("slides-per-view")) === 1;

      var slidesPerView = !isResponsiveMode
        ? parseInt($swiperEl.data("slides-per-view")) || 1
        : 1;

      var effect = $swiperEl.data("effect") || "slide";
      var spaceBetween = parseInt($swiperEl.data("gap")) || 24;
      var autoHeight = parseInt($swiperEl.data("auto-height")) === 1;
      var keyboardEnabled = parseInt($swiperEl.data("keyboard")) === 1;
      var mousewheelEnabled = parseInt($swiperEl.data("mousewheel")) === 1;
      var marqueeVal = Boolean(parseInt($swiperEl.data("marquee"), 10));
      var parallaxVal = Boolean(parseInt($swiperEl.data("parallax"), 10));
      var directionVal =
        $swiperEl.data("direction") === "vertical" ? "vertical" : "horizontal";

      // ===== THUMBS GALLERY =====
      var thumbsSwiper = $swiperEl.data("thumbs")
        ? buildThumbsSwiper(resolveThumbs($swiperEl, $swiperEl.data("thumbs")))
        : null;

      // ===== RESPONSIVE VALUES =====
      var xsmSlides = parseInt($swiperEl.data("xsm-slides")) || 1;
      var smSlides = parseInt($swiperEl.data("sm-slides")) || xsmSlides;
      var smdSlides = parseInt($swiperEl.data("smd-slides")) || 2;
      var mdSlides = parseInt($swiperEl.data("md-slides")) || smdSlides;
      var lgSlides = parseInt($swiperEl.data("lg-slides")) || 3;
      var xlgSlides = parseInt($swiperEl.data("xlg-slides")) || lgSlides;
      var xxlgSlides = parseInt($swiperEl.data("xxlg-slides")) || xlgSlides;

      var xsmGap = parseInt($swiperEl.data("xsm-gap")) || spaceBetween;
      var smGap = parseInt($swiperEl.data("sm-gap")) || spaceBetween;
      var smdGap = parseInt($swiperEl.data("smd-gap")) || spaceBetween;
      var mdGap = parseInt($swiperEl.data("md-gap")) || spaceBetween;
      var lgGap = parseInt($swiperEl.data("lg-gap")) || spaceBetween;
      var xlgGap = parseInt($swiperEl.data("xlg-gap")) || spaceBetween;
      var xxlgGap = parseInt($swiperEl.data("xxlg-gap")) || spaceBetween;

      // ===== NAVIGATION =====
      var $prevBtn = $swiperEl.find(".slider-prev");
      var $nextBtn = $swiperEl.find(".slider-next");

      if (!$prevBtn.length) {
        $prevBtn = $swiperEl.siblings(".slider-prev").length ? $swiperEl.siblings(".slider-prev") : $swiperEl.closest(".slider-section, .cs_uni_slider_wrapper").find(".slider-prev");
      }
      if (!$nextBtn.length) {
        $nextBtn = $swiperEl.siblings(".slider-next").length ? $swiperEl.siblings(".slider-next") : $swiperEl.closest(".slider-section, .cs_uni_slider_wrapper").find(".slider-next");
      }

      // ===== PAGINATION =====
      var $pagination = $swiperEl.find(".swiper-pagination");
      var paginationType = $swiperEl.data("pagination-type") || "fraction";
      var showPagination = parseInt($swiperEl.data("pagination")) !== 0;

      if (!$pagination.length) {
        $pagination = $swiperEl.siblings(".swiper-pagination");
      }

      // ===== VARIABLE WIDTH =====
      var enableVariableWidth = variableVal === true;

      // ===== OVERRIDE FOR SINGLE SLIDE MODE =====
      if (isSingleSlideMode) {
        isResponsiveMode = false;
      }

      // ===== FIXED slidesPerView =====
      var finalSlidesPerView;

      if (isResponsiveMode && !isSingleSlideMode) {
        finalSlidesPerView = enableVariableWidth ? "auto" : xsmSlides;
      } else {
        finalSlidesPerView = 1;
      }

      // ===== BREAKPOINTS =====
      var breakpointsObj = {};

      if (isResponsiveMode && !isSingleSlideMode) {
        breakpointsObj = enableVariableWidth
          ? {
              0: { slidesPerView: "auto", spaceBetween: xsmGap },
              450: { slidesPerView: "auto", spaceBetween: smGap },
              575: { slidesPerView: "auto", spaceBetween: smdGap },
              768: { slidesPerView: "auto", spaceBetween: mdGap },
              991: { slidesPerView: "auto", spaceBetween: lgGap },
              1200: { slidesPerView: "auto", spaceBetween: xlgGap },
              1400: { slidesPerView: "auto", spaceBetween: xxlgGap },
            }
          : {
              0: { slidesPerView: xsmSlides, spaceBetween: xsmGap },
              450: { slidesPerView: smSlides, spaceBetween: smGap },
              575: { slidesPerView: smdSlides, spaceBetween: smdGap },
              768: { slidesPerView: mdSlides, spaceBetween: mdGap },
              991: { slidesPerView: lgSlides, spaceBetween: lgGap },
              1200: {
                slidesPerView: xlgSlides,
                spaceBetween: xlgGap,
              },
              1400: {
                slidesPerView: xxlgSlides,
                spaceBetween: xxlgGap,
              },
            };
      } else {
        breakpointsObj = {
          0: { slidesPerView: 1, spaceBetween: xsmGap },
          450: { slidesPerView: 1, spaceBetween: smGap },
          575: { slidesPerView: 1, spaceBetween: smdGap },
          768: { slidesPerView: 1, spaceBetween: mdGap },
          991: { slidesPerView: 1, spaceBetween: lgGap },
          1200: { slidesPerView: 1, spaceBetween: xlgGap },
          1400: { slidesPerView: 1, spaceBetween: xxlgGap },
        };
      }

      // ===== OPTIONS =====
      var swiperOptions = {
        slidesPerView: finalSlidesPerView,
        spaceBetween: spaceBetween,
        direction: directionVal,
        speed: speedVal,
        loop: loopVal,
        autoHeight: autoHeight,
        centeredSlides: centerVal,
        effect: effect,
        parallax: parallaxVal,
        grabCursor: true,
        watchOverflow: true,
        watchSlidesProgress: true,
        breakpoints: breakpointsObj,

        autoplay: autoplayVal
          ? {
              delay: 3000,
              disableOnInteraction: false,
            }
          : false,
      };

      // ===== DYNAMIC EFFECT CONFIG (data-effect) =====
      switch (effect) {
        case "fade":
          swiperOptions.fadeEffect = { crossFade: true };
          break;
        case "coverflow":
          swiperOptions.coverflowEffect = {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
          };
          break;
        case "flip":
          swiperOptions.flipEffect = { slideShadows: true };
          break;
        case "cube":
          swiperOptions.cubeEffect = {
            shadow: true,
            slideShadows: true,
            shadowOffset: 20,
            shadowScale: 0.94,
          };
          break;
        case "cards":
          swiperOptions.cardsEffect = { slideShadows: true };
          break;
        case "creative":
          swiperOptions.creativeEffect = {
            prev: { shadow: true, translate: [0, 0, -400] },
            next: { translate: ["100%", 0, 0] },
          };
          break;
      }

      // ===== THUMBS =====
      if (thumbsSwiper) {
        swiperOptions.thumbs = { swiper: thumbsSwiper };
      }

      // ===== NAVIGATION =====
      if ($prevBtn.length && $nextBtn.length) {
        swiperOptions.navigation = {
          nextEl: $nextBtn[0],
          prevEl: $prevBtn[0],
        };
      }

      // ===== PAGINATION =====
      if (showPagination && $pagination.length) {
        swiperOptions.pagination = {
          el: $pagination[0],
          clickable: true,
          type:
            paginationType === "fraction"
              ? "fraction"
              : paginationType === "progressbar"
                ? "progressbar"
                : "bullets",
          // Slider Controller Index.
          formatFractionCurrent: function (number) {
            return number < 10 ? "0" + number : number;
          },
          formatFractionTotal: function (number) {
            return number < 10 ? "0" + number : number;
          },
        };
      }

      // ===== MARQUEE (continuous horizontal marquee slider)
      if (marqueeVal) {
        swiperOptions.loop = true;
        swiperOptions.slidesPerView = "auto";
        swiperOptions.allowTouchMove = true;
        // Higher speed = slower, smoother sweep. Paired with a linear
        // transition-timing-function (see _partner.scss) for a true marquee.
        swiperOptions.speed = speedVal;
        var prefersReducedMotion =
          window.matchMedia &&
          window.matchMedia("(prefers-reduced-motion: reduce)").matches;
        swiperOptions.autoplay = prefersReducedMotion
          ? false
          : {
              delay: 0,
              disableOnInteraction: false,
              pauseOnMouseEnter: true,
            };
        swiperOptions.navigation = false;
        swiperOptions.pagination = false;
      }

      // ===== DESTROY OLD =====
      if ($swiperEl[0].swiper) {
        $swiperEl[0].swiper.destroy(true, true);
      }

      // ===== VARIABLE WIDTH CSS =====
      if (enableVariableWidth && !isSingleSlideMode) {
        $slides.css({
          width: "auto",
          flexShrink: 0,
        });
        $wrapper.css("display", "flex");
      }

      // ===== INIT =====
      var swiperInstance = new Swiper($swiperEl[0], swiperOptions);

      // ===== MARQUEE: constant (linear) movement =====
      if (marqueeVal) {
        $wrapper.css("transition-timing-function", "linear");
      }

      // ===== ARROW VISIBILITY =====
      function updateArrows() {
        if (!$prevBtn.length || !$nextBtn.length) return;

        if (loopVal) {
          $prevBtn.show();
          $nextBtn.show();
          return;
        }

        var currentView = finalSlidesPerView;

        if (isResponsiveMode && !enableVariableWidth && !isSingleSlideMode) {
          var w = window.innerWidth;

          if (w >= 1400) currentView = xxlgSlides;
          else if (w >= 1200) currentView = xlgSlides;
          else if (w >= 991) currentView = lgSlides;
          else if (w >= 768) currentView = mdSlides;
          else if (w >= 575) currentView = smdSlides;
          else if (w >= 450) currentView = smSlides;
          else currentView = xsmSlides;
        } else if (isSingleSlideMode) {
          currentView = 1;
        }

        if (totalSlides > currentView) {
          $prevBtn.show();
          $nextBtn.show();
        } else {
          $prevBtn.hide();
          $nextBtn.hide();
        }
      }

      setTimeout(function () {
        swiperInstance.update();
        updateArrows();
      }, 100);

      swiperInstance.on("resize breakpoint slideChange", function () {
        updateArrows();
      });
    });
  }
  /*===========================================================
    05. Language Select
  =============================================================*/
  function languageSwitch() {
    $(".cs_language_switcher").on("click", function () {
      $(".cs_language_dropdown").slideToggle(250);
    });

    $(".cs_language_dropdown button").on("click", function () {
      const selectedLang = $(this).data("lang");
      $(".cs_language").text(selectedLang);
      $(".cs_language_dropdown").slideUp(250);
    });
    $(document).on("click", function (e) {
      if (
        !$(e.target).closest(".cs_language_switcher, .cs_language_dropdown")
          .length
      ) {
        $(".cs_language_dropdown").slideUp(250);
      }
    });
  }
  /*===========================================================
    06. Counter Animation
  =============================================================*/
  function counterInit() {
    if (!$.exists(".odometer")) return;

    const observer = new IntersectionObserver(
      function (entries, observer) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            const el = $(entry.target);
            el.html(el.data("count-to"));
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.3,
      },
    );

    $(".odometer").each(function () {
      observer.observe(this);
    });
  }
  /*===========================================================
    07. Modal Video
  =============================================================*/
  function modalVideo() {
    if ($.exists(".cs_video_open")) {
      $("body").append(`
        <div class="cs_video_popup">
          <div class="cs_video_popup-overlay"></div>
          <div class="cs_video_popup-content">
            <div class="cs_video_popup-layer"></div>
            <div class="cs_video_popup_container">
              <div class="cs_video_popup-align">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="about:blank"></iframe>
                </div>
              </div>
              <div class="cs_video_popup_close"></div>
            </div>
          </div>
        </div>
      `);
      $(document).on("click", ".cs_video_open", function (e) {
        e.preventDefault();
        var video = $(this).attr("href");

        $(".cs_video_popup_container iframe").attr("src", `${video}`);

        $(".cs_video_popup").addClass("active");
      });
      $(".cs_video_popup_close, .cs_video_popup-layer").on(
        "click",
        function (e) {
          $(".cs_video_popup").removeClass("active");
          $("html").removeClass("overflow-hidden");
          $(".cs_video_popup_container iframe").attr("src", "about:blank");
          e.preventDefault();
        },
      );
    }
  }
  /*===========================================================
    08. Review
  =============================================================*/
  function review() {
    $(".cs_rating").each(function () {
      var review = $(this).data("rating");
      var reviewVal = review * 20 + "%";
      $(this).find(".cs_rating_percentage").css("width", reviewVal);
    });
  }
  /*===========================================================
    09. Tabs
  =============================================================*/
  function tabs() {
    $(".cs_tab_links > li > a").on("click", function (e) {
      var currentAttrValue = $(this).attr("href");
      //Tab and slider both activation code
      $(".cs_tabs " + currentAttrValue)
        .addClass("active")
        .siblings()
        .removeClass("active");
      $(this).parents("li").addClass("active").siblings().removeClass("active");
      e.preventDefault();
    });
  }
  /*===========================================================
    10. Lightgallery
  =============================================================*/
  function lightGallery() {
    $(".cs_lightgallery").each(function () {
      $(this).lightGallery({
        selector: ".cs_gallery_item",
        subHtmlSelectorRelative: false,
        thumbnail: true,
        mousewheel: true,
      });
    });
  }
  /*===========================================================
    11. Accordian
  =============================================================*/
  function accordian() {
    $(".cs_accordian").children(".cs_accordian_body").hide();
    $(".cs_accordian.active").children(".cs_accordian_body").show();
    $(".cs_accordian_head").on("click", function () {
      $(this)
        .parent(".cs_accordian")
        .siblings()
        .children(".cs_accordian_body")
        .slideUp(250);
      $(this).siblings().slideDown(400);
      $(this)
        .parents(".col-lg-6")
        .siblings()
        .find(".cs_accordian_body")
        .slideUp(250);
      /* Accordian Active Class */
      $(this).parents(".cs_accordian").addClass("active");
      $(this).parent(".cs_accordian").siblings().removeClass("active");
      $(this)
        .parents(".col-lg-6")
        .siblings()
        .find(".cs_accordian")
        .removeClass("active");
    });
  }
  /*===========================================================
    12. Product Filter
  =============================================================*/
  function productFilterInit() {
    // Discover Collections Filter (grid, data-category)
    $(".cs_filter_nav").each(function () {
      var $nav = $(this);
      var $btns = $nav.find(".cs_filter_btn");
      var $grid = $nav
        .closest(".cs_products_filter_tabs")
        .find(".cs_discover_grid");
      var $items = $grid.find(".cs_filter_item");

      $btns.on("click", function () {
        var $btn = $(this);
        if ($btn.hasClass("active")) return;

        var filter = $btn.attr("data-filter");
        $btns.removeClass("active");
        $btn.addClass("active");

        if (filter === "all") {
          $items.show();
        } else {
          $items.hide();
          $items.filter('[data-category~="' + filter + '"]').show();
        }
      });
    });

    // Filterable Product Slider
    $(".data_filter").each(function () {
      var $section = $(this);
      var $slider = $section.find(".cs_product_filter_slider");
      if (!$slider.length) return;

      var $wrapper = $slider.find(".swiper-wrapper");
      var $buttons = $section.find(".cs_filter_btn");
      var allSlides = $wrapper.children(".swiper-slide").toArray();

      $buttons.on("click", function () {
        var $btn = $(this);
        if ($btn.hasClass("active")) return;

        var filter = $btn.attr("data-filter");
        $buttons.removeClass("active");
        $btn.addClass("active");

        var swiper = $slider[0].swiper;
        // How many slides fit in the visible area at the current breakpoint.
        var perView =
          swiper && typeof swiper.params.slidesPerView === "number"
            ? swiper.params.slidesPerView
            : 1;
        var minToSlide = Math.ceil(perView) + 1;
        // Split slides into the ones matching the active category and the rest.
        var matching = [];
        var others = [];
        allSlides.forEach(function (slide) {
          if (filter === "all" || $(slide).attr("data-category") === filter) {
            matching.push(slide);
          } else {
            others.push(slide);
          }
        });

        // Rebuild the wrapper: matching slides first, then fill from other
        $wrapper.children(".swiper-slide").detach();
        matching.forEach(function (slide) {
          $wrapper.append(slide);
        });
        for (
          var i = 0;
          i < others.length && matching.length + i < minToSlide;
          i++
        ) {
          $wrapper.append(others[i]);
        }

        // Let Swiper recalculate the filtered items
        if (swiper) {
          // Rebuild loop duplicates for the new set of slides
          if (swiper.params.loop && swiper.loopDestroy) {
            swiper.loopDestroy();
            swiper.loopCreate();
          }
          swiper.update();
          swiper.slideTo(0, 0);
          if (swiper.navigation) swiper.navigation.update();

          // Marquee/autoplay stops after the DOM rebuild
          if (swiper.autoplay) {
            swiper.autoplay.stop();
            swiper.autoplay.start();
          }
        }
      });
    });
  }
  /*===========================================================
    13. Scroll Up
  =============================================================*/
  function scrollUp() {
    $(".cs_scrollup_btn").on("click", function (e) {
      e.preventDefault();
      $("html,body").animate(
        {
          scrollTop: 0,
        },
        0,
      );
    });
  }
  /* For Scroll Up */
  function showScrollUp() {
    let scroll = $(window).scrollTop();
    if (scroll >= 350) {
      $(".cs_scrollup_btn").addClass("show");
    } else {
      $(".cs_scrollup_btn").removeClass("show");
    }
  }
  /*===========================================================
    14. Product Filter Sidebar (off-canvas)
  =============================================================*/
  function filterSidebar() {
    var $sidebar = $("#productFilterSidebar, #courseFilterSidebar");
    if (!$sidebar.length) return;

    var $overlay = $(".cs_filter_overlay");
    var $toggle = $(".shopFilterToggleBtn, .courseFilterToggleBtn");
    var $sidebarToggle = $(".sidebarToggleBtn");

    function openSidebar() {
      $sidebar.addClass("active").attr("aria-hidden", "false");
      $overlay.addClass("active");
      $("body").addClass("cs_no_scroll");
      $toggle.attr("aria-expanded", "true");
    }

    function closeSidebar() {
      $sidebar.removeClass("active").attr("aria-hidden", "true");
      $overlay.removeClass("active");
      $("body").removeClass("cs_no_scroll");
      $toggle.attr("aria-expanded", "false");
    }

    $toggle.on("click", openSidebar);
    $(".cs_filter_close, .cs_filter_overlay").on("click", closeSidebar);
    $(document).on("keydown", function (e) {
      if (e.key === "Escape" && $sidebar.hasClass("active")) closeSidebar();
    });
    // Panel goes back inline above 991px — drop the open state with it
    $(window).on("resize", function () {
      if (window.innerWidth > 991 && $sidebar.hasClass("active"))
        closeSidebar();
    });
    $sidebarToggle.on("click", function () {
      $(
        ".cs_product_filter_sidebar, .cs_filter_close, .cs_filter_overlay",
      ).toggleClass("active");
    });
  }
  /*===========================================================
    15. Ecommerce
  =============================================================*/
  function shopInit() {
    // Star Rating Input
    $(".cs_input_rating i").on("click", function () {
      // Clicked star + all previous: fill them
      $(this)
        .add($(this).prevAll())
        .removeClass("ri-star-line")
        .addClass("ri-star-fill");

      // All following stars: empty them
      $(this).nextAll().removeClass("ri-star-fill").addClass("ri-star-line");
    });
    // Check All
    $("#checkAll").change(function () {
      var isChecked = $(this).prop("checked");
      $('table input[type="checkbox"]').prop("checked", isChecked);
    });
    // Counter
    $(".cs_increment").click(function () {
      var countElement = $(this).siblings(".cs_quantity_input");
      var count = parseInt(countElement.text());
      count++;
      countElement.text(count);
    });

    $(".cs_decrement").click(function () {
      var countElement = $(this).siblings(".cs_quantity_input");
      var count = parseInt(countElement.text());
      if (count > 1) {
        count--;
        countElement.text(count);
      }
    });

    // Add Progress Bar
    $(".cs_progress").each(function () {
      var progressPercentage = $(this).data("progress") + "%";
      $(this).find(".cs_progress_in").css("width", progressPercentage);
    });
  }
  /*=====================================================
    16. Price Range Slider
  =======================================================*/
  function priceRangeSlider() {
    $(".cs_price_slider").each(function () {
      var $slider = $(this);
      var $track = $slider.find(".cs_price_slider_track");
      var $range = $slider.find(".cs_price_slider_range");
      var $minHandle = $slider.find(".cs_price_slider_handle_min");
      var $maxHandle = $slider.find(".cs_price_slider_handle_max");
      if (!$track.length || !$minHandle.length || !$maxHandle.length) return;

      // Bounds & defaults (overridable via data-* attributes).
      var min = parseFloat($slider.data("min"));
      var max = parseFloat($slider.data("max"));
      if (isNaN(min)) min = 10;
      if (isNaN(max)) max = 2000;
      var step = parseFloat($slider.data("step")) || 10;
      var currency = $slider.data("currency");
      if (currency === undefined || currency === null) currency = "$";

      var from = parseFloat($slider.data("from"));
      var to = parseFloat($slider.data("to"));
      if (isNaN(from)) from = min;
      if (isNaN(to)) to = max;

      // The value label lives outside the slider, in the group footer.
      var $group = $slider.closest(".cs_filter_group");
      var $value = $group.find(".cs_price_slider_value");
      // Split labels, for layouts that print the two bounds separately.
      var $minValue = $group.find(".cs_price_slider_min_value");
      var $maxValue = $group.find(".cs_price_slider_max_value");

      function format(num) {
        return currency + Math.round(num).toLocaleString("en-US");
      }

      function clamp(num) {
        return Math.min(max, Math.max(min, num));
      }

      function snap(num) {
        var snapped = min + Math.round((num - min) / step) * step;
        return clamp(snapped);
      }

      function percent(num) {
        return ((num - min) / (max - min)) * 100;
      }

      function render() {
        var minPct = percent(from);
        var maxPct = percent(to);
        $minHandle.css("left", minPct + "%");
        $maxHandle.css("left", maxPct + "%");
        // Each handle is bounded by the other one, per the ARIA slider pattern.
        $minHandle.attr({
          "aria-valuemin": min,
          "aria-valuemax": to,
          "aria-valuenow": from,
          "aria-valuetext": format(from),
        });
        $maxHandle.attr({
          "aria-valuemin": from,
          "aria-valuemax": max,
          "aria-valuenow": to,
          "aria-valuetext": format(to),
        });
        $range.css({ left: minPct + "%", right: 100 - maxPct + "%" });
        if ($value.length) {
          $value.text("Price: " + format(from) + " — " + format(to));
        }
        if ($minValue.length) {
          $minValue.text(format(from));
        }
        if ($maxValue.length) {
          $maxValue.text(format(to));
        }
        $slider.trigger("cs:pricechange", [from, to]);
      }

      // Convert a pointer's page X position to a value within [min, max].
      function valueFromEvent(e) {
        var rect = $track[0].getBoundingClientRect();
        var clientX =
          e.touches && e.touches.length ? e.touches[0].clientX : e.clientX;
        var ratio = rect.width ? (clientX - rect.left) / rect.width : 0;
        ratio = Math.min(1, Math.max(0, ratio));
        return snap(min + ratio * (max - min));
      }

      function startDrag($handle, isMin) {
        return function (e) {
          e.preventDefault();
          $handle.addClass("cs_dragging");

          function onMove(ev) {
            var val = valueFromEvent(ev);
            if (isMin) {
              from = Math.min(val, to);
            } else {
              to = Math.max(val, from);
            }
            render();
          }

          function onUp() {
            $handle.removeClass("cs_dragging");
            $(document)
              .off("mousemove touchmove", onMove)
              .off("mouseup touchend touchcancel", onUp);
          }

          $(document)
            .on("mousemove touchmove", onMove)
            .on("mouseup touchend touchcancel", onUp);
        };
      }

      $minHandle.on("mousedown touchstart", startDrag($minHandle, true));
      $maxHandle.on("mousedown touchstart", startDrag($maxHandle, false));

      // Clicking the track moves the nearest handle to that point.
      $track.on("mousedown touchstart", function (e) {
        if ($(e.target).is($minHandle) || $(e.target).is($maxHandle)) return;
        var val = valueFromEvent(e);
        if (Math.abs(val - from) <= Math.abs(val - to)) {
          from = Math.min(val, to);
        } else {
          to = Math.max(val, from);
        }
        render();
      });

      render();
    });
  }
  /*=====================================================
    17. Pricing Toggle — monthly / yearly billing switch
  =====================================================*/
  function pricingToggle() {
    var $toggles = $(".cs_billing_toggle");
    if (!$toggles.length) return;

    $toggles.each(function () {
      var $toggle = $(this);
      var $scope = $toggle.closest(".cs_pricing_section");

      $toggle.on("click", ".cs_billing_option", function () {
        var $option = $(this);
        var plan = $option.attr("data-billing-plan");
        if (!plan || $option.hasClass("active")) return;

        $option.addClass("active").siblings().removeClass("active");
        $toggle.attr("data-billing", plan);

        $scope.find(".cs_pricing_price").each(function () {
          var $price = $(this);
          var amount = $price.attr("data-" + plan + "-price");
          var note = $price.attr("data-" + plan + "-note");
          if (amount) $price.find(".cs_pricing_amount").text(amount);
          if (note) $price.find(".cs_pricing_note_text").text(note);
        });
      });
    });
  }
  /*=====================================================
    18. Work Process Steps
  =====================================================*/
  function workProcessSteps() {
    var $processes = $(".cs_work_process_steps");
    if (!$processes.length) return;

    $processes.each(function () {
      var $process = $(this);
      var $steps = $process.find(".cs_work_step_1");
      var currentStep = 0;
      var stepTimer;

      function showStep(index) {
        $steps.removeClass("active completed");
        $steps.each(function (stepIndex) {
          if (stepIndex < index) $(this).addClass("completed");
        });
        $steps.eq(index).addClass("active");
      }

      function startSequence() {
        if (stepTimer) return;
        showStep(currentStep);

        if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
          $steps.removeClass("active").addClass("completed");
          return;
        }

        stepTimer = window.setInterval(function () {
          currentStep = (currentStep + 1) % $steps.length;
          showStep(currentStep);
        }, 3000);
      }

      if ("IntersectionObserver" in window) {
        var observer = new IntersectionObserver(
          function (entries) {
            if (entries[0].isIntersecting) {
              startSequence();
              observer.disconnect();
            }
          },
          { threshold: 0.25 },
        );
        observer.observe($process[0]);
      } else {
        startSequence();
      }
    });
  }
  /*=====================================================
    19. Community Topic Filter
  =====================================================*/
  function communityTopicFilter() {
    var $community = $(".cs_community_section");
    if (!$community.length) return;

    var $filters = $community.find(".cs_community_topics [data-topic]");
    var $discussions = $community.find(".cs_discussion_card[data-topic]");
    var $empty = $community.find(".cs_discussion_empty");
    var $filterName = $community.find(".cs_discussion_filter_name");

    $filters.on("click", function () {
      var $filter = $(this);
      var topic = $filter.attr("data-topic");
      var label = $.trim($filter.text());
      var visibleCount = 0;

      $filters.removeClass("active").attr("aria-pressed", "false");
      $filter.addClass("active").attr("aria-pressed", "true");

      $discussions.each(function () {
        var $discussion = $(this);
        var matches =
          topic === "all" || $discussion.attr("data-topic") === topic;
        $discussion.toggle(matches);
        if (matches) visibleCount += 1;
      });

      $filterName.text(topic === "all" ? "" : "— " + label);
      $empty.toggle(visibleCount === 0);
    });
  }
  /*=====================================================
    20. Range Output
  =====================================================*/
  function rangeOutput() {
    var $ranges = $("input[type='range'][data-range-output]");
    if (!$ranges.length) return;

    $ranges.each(function () {
      var $range = $(this);
      var $output = $("#" + $range.attr("data-range-output"));
      if (!$output.length) return;

      function render() {
        var value = parseInt($range.val(), 10) || 0;
        $output.text(value < 10 ? "0" + value : String(value));
      }

      $range.on("input change", render);
      render();
    });
  }
  /*=====================================================
    21. Dashboard Sidebar
  =====================================================*/
  function dashboardSidebar() {
    var $sidebar = $("#dashboardSidebar");
    if (!$sidebar.length) return;

    var $overlay = $(".cs_dashboard_sidebar_overlay");
    var $toggle = $(".sidebarToggleBtn");

    function toggleSidebar() {
      $sidebar.toggleClass("active");
      $overlay.toggleClass("active");
      $toggle.toggleClass("active");
      $("body").toggleClass("cs_no_scroll", $sidebar.hasClass("active"));
    }

    function closeSidebar() {
      $sidebar.removeClass("active");
      $overlay.removeClass("active");
      $toggle.toggleClass("active");
      $("body").removeClass("cs_no_scroll");
    }

    $toggle.on("click", toggleSidebar);
    $(".sidebarCloseBtn, .cs_dashboard_sidebar_overlay").on(
      "click",
      closeSidebar,
    );
    $(document).on("keydown", function (e) {
      if (e.key === "Escape" && $sidebar.hasClass("active")) closeSidebar();
    });
    $(window).on("resize", function () {
      if (window.innerWidth > 1199 && $sidebar.hasClass("active"))
        closeSidebar();
    });
  }
  /*=====================================================
    22. Dashboard Chart
  =====================================================*/
  function dashboardChart() {
    $(".cs_progress_value").each(function () {
      var $value = $(this);
      var progress = $value.siblings(".cs_progress").attr("data-progress");
      if (progress === undefined) return;
      $value.text(progress + "%");
    });

    $(".cs_progress[data-color]").each(function () {
      this.style.setProperty(
        "--cs-bar-color",
        "var(--" + $(this).attr("data-color") + "-color)",
      );
    });

    if (!$.exists(".cs_bar_chart")) return;

    $(".cs_bar_chart").each(function () {
      var chart = this;
      var $chart = $(chart);
      var $items = $chart.find(".cs_bar_chart_data > li");
      if (!$items.length) return;

      var unit = $chart.attr("data-chart-unit") || "";
      var step = parseFloat($chart.attr("data-chart-step")) || 2;
      var max = parseFloat($chart.attr("data-chart-max"));

      // No ceiling given? Round the tallest value up to the next whole step.
      if (!max) {
        var highest = 0;
        $items.each(function () {
          highest = Math.max(
            highest,
            parseFloat($(this).attr("data-value")) || 0,
          );
        });
        max = Math.ceil(highest / step) * step || step;
      }

      var yAxis = "";
      var grid = "";
      for (var tick = max; tick >= 0; tick -= step) {
        yAxis += "<li>" + Math.round(tick * 100) / 100 + "</li>";
        grid += "<li></li>";
      }

      var bars = "";
      var xAxis = "";
      $items.each(function () {
        var $item = $(this);
        var label = $item.attr("data-label") || "";
        var value = parseFloat($item.attr("data-value")) || 0;
        var height = Math.min((value / max) * 100, 100);
        bars +=
          '<li><span class="cs_chart_bar" data-height="' +
          height +
          '" title="' +
          label +
          ": " +
          value +
          unit +
          '"></span></li>';
        xAxis += "<li>" + label + "</li>";
      });

      chart.style.setProperty("--cs-chart-count", $items.length);
      $chart.append(
        '<div class="cs_bar_chart_in">' +
          '<ul class="cs_chart_y_axis cs_fs_14 cs_mp_0">' +
          yAxis +
          "</ul>" +
          '<div class="cs_chart_area">' +
          '<div class="cs_chart_plot">' +
          '<ul class="cs_chart_grid cs_mp_0">' +
          grid +
          "</ul>" +
          '<ul class="cs_chart_bars cs_mp_0">' +
          bars +
          "</ul>" +
          "</div>" +
          '<ul class="cs_chart_x_axis cs_fs_14 cs_mp_0">' +
          xAxis +
          "</ul>" +
          "</div>" +
          "</div>",
      );

      // Grow the bars on the next frame so the CSS transition has a start height
      var $bars = $chart.find(".cs_chart_bar");
      window.requestAnimationFrame(function () {
        $bars.each(function () {
          $(this).css("height", $(this).attr("data-height") + "%");
        });
      });
    });
  }
  /*=====================================================
    23. User Dropdown
  =====================================================*/
  function userDropdown() {
    var $toggle = $(".cs_user_toggle");
    if (!$toggle.length) return;

    var $dropdown = $(".cs_user_dropdown");

    function closeDropdown() {
      $dropdown.stop(true, true).slideUp(250);
      $toggle.attr("aria-expanded", "false");
    }

    $toggle.on("click", function () {
      var isOpen = $dropdown.is(":visible");
      $dropdown.stop(true, true).slideToggle(250);
      $toggle.attr("aria-expanded", isOpen ? "false" : "true");
    });

    // Close when clicking anywhere outside the account menu
    $(document).on("click", function (e) {
      if (!$(e.target).closest(".cs_header_user").length) closeDropdown();
    });

    $(document).on("keydown", function (e) {
      if (e.key === "Escape" && $dropdown.is(":visible")) closeDropdown();
    });
  }
  /*=====================================================
    24. Dashboard Modal
  =====================================================*/
  function dashboardModal() {
    var MODALS = ".cs_modal";
    var $modal = $(MODALS);
    if (!$modal.length) return;

    // Each opener names its modal through data-modal="#someModalId"
    $(document).on("click", "[data-modal]", function (e) {
      e.preventDefault();
      var $target = $($(this).attr("data-modal"));
      if (!$target.length) return;

      $target.addClass("active").attr("aria-hidden", "false");
      $("body").addClass("cs_no_scroll");
      $target.find("input, select, textarea").first().trigger("focus");
    });

    function closeModal($el) {
      $el.removeClass("active").attr("aria-hidden", "true");
      $("body").removeClass("cs_no_scroll");
    }

    $modal.on("click", ".modalCloseBtn, .cs_modal_overlay", function () {
      closeModal($(this).closest(MODALS));
    });

    $(document).on("keydown", function (e) {
      if (e.key !== "Escape") return;
      closeModal($modal.filter(".active"));
    });
  }
  /*=====================================================
    25. Number Stepper
  =====================================================*/
  function numberStepper() {
    var $fields = $(".cs_number_field");
    if (!$fields.length) return;

    $fields.on("click", ".numberStepBtn", function () {
      var $input = $(this)
        .closest(".cs_number_field")
        .find("input[type='number']");
      if (!$input.length) return;

      var step = parseFloat($input.attr("step")) || 1;
      var min = $input.attr("min");
      var max = $input.attr("max");
      var value = parseFloat($input.val());
      if (isNaN(value)) value = parseFloat(min) || 0;

      value += $(this).attr("data-step") === "down" ? -step : step;
      if (min !== undefined && value < parseFloat(min)) value = parseFloat(min);
      if (max !== undefined && value > parseFloat(max)) value = parseFloat(max);

      $input.val(value).trigger("change");
    });
  }
  /*=====================================================
    26. Leaderboard Profile Modal
  =====================================================*/
  function leaderboardProfileModal() {
    var $modal = $(".cs_profile_modal");
    if (!$modal.length) return;

    // Each opener carries the profile values it should paint into the dialog
    $(document).on("click", ".leaderboardInfoBtn", function (e) {
      e.preventDefault();
      var data = $(this).data();

      $modal.find("[data-field]").each(function () {
        var value = data[$(this).attr("data-field")];
        if (value !== undefined) $(this).text(value);
      });

      $modal.addClass("active").attr("aria-hidden", "false");
      $("body").addClass("cs_no_scroll");
      $modal.find(".cs_modal_close").trigger("focus");
    });

    function closeModal() {
      $modal.removeClass("active").attr("aria-hidden", "true");
      $("body").removeClass("cs_no_scroll");
    }

    $modal.on("click", ".profileModalCloseBtn, .cs_modal_overlay", function () {
      closeModal();
    });

    $(document).on("keydown", function (e) {
      if (e.key !== "Escape") return;
      if ($modal.hasClass("active")) closeModal();
    });
  }
  /*=====================================================
    27. Area Chart
  =====================================================*/
  function areaChart() {
    if (!$.exists(".cs_area_chart")) return;

    var gradientId = 0;

    $(".cs_area_chart").each(function () {
      var $chart = $(this);
      var $items = $chart.find(".cs_area_chart_data > li");
      if (!$items.length) return;

      var step = parseFloat($chart.attr("data-chart-step")) || 2;
      var max = parseFloat($chart.attr("data-chart-max"));
      var prefix = $chart.attr("data-chart-prefix") || "";
      var suffix = $chart.attr("data-chart-suffix") || "";
      var labels = [];
      var values = [];
      var highest = 0;

      $items.each(function () {
        var value = parseFloat($(this).attr("data-value")) || 0;
        labels.push($(this).attr("data-label") || "");
        values.push(value);
        highest = Math.max(highest, value);
      });

      // No ceiling given? Round the tallest value up to the next whole step.
      if (!max) max = Math.ceil(highest / step) * step || step;

      // The plot is drawn in a 100x100 box and stretched to fit, so the shape
      // survives any resize without a redraw. Strokes opt out of that scaling.
      var yAxis = "";
      var grid = "";
      for (var tick = max; tick >= 0; tick -= step) {
        var gridY = 100 - (tick / max) * 100;
        yAxis +=
          "<li>" + prefix + Math.round(tick * 100) / 100 + suffix + "</li>";
        grid +=
          '<line class="cs_chart_grid_line" x1="0" y1="' +
          gridY +
          '" x2="100" y2="' +
          gridY +
          '" vector-effect="non-scaling-stroke"></line>';
      }

      var span = values.length - 1;
      var points = [];
      var xAxis = "";
      for (var i = 0; i < values.length; i++) {
        var x = span ? (i / span) * 100 : 50;
        points.push({
          x: x,
          y: 100 - (Math.min(values[i], max) / max) * 100,
        });
        xAxis += '<li style="left:' + x + '%">' + labels[i] + "</li>";
      }

      // Flat tangents at both ends of every segment - the curve used in the design
      var line = "M" + points[0].x + " " + points[0].y;
      for (var c = 1; c < points.length; c++) {
        var from = points[c - 1];
        var to = points[c];
        var pull = (to.x - from.x) / 3;
        line +=
          "C" +
          (from.x + pull) +
          " " +
          from.y +
          "," +
          (to.x - pull) +
          " " +
          to.y +
          "," +
          to.x +
          " " +
          to.y;
      }

      gradientId++;
      var fillId = "csAreaFill" + gradientId;
      var chartLabel = $chart.attr("data-chart-label") || "Area chart";

      // Feeds the plot's min-width, so a narrow screen scrolls instead of
      // crushing the points together
      this.style.setProperty("--cs-chart-count", values.length);

      $chart.find(".cs_area_chart_in").remove();
      $chart.append(
        '<div class="cs_area_chart_in">' +
          '<ul class="cs_chart_y_axis cs_mp_0">' +
          yAxis +
          "</ul>" +
          '<div class="cs_chart_area">' +
          '<div class="cs_chart_plot">' +
          '<svg class="cs_chart_svg" viewBox="0 0 100 100" preserveAspectRatio="none" role="img" aria-label="' +
          chartLabel +
          '">' +
          "<defs>" +
          '<linearGradient id="' +
          fillId +
          '" x1="0" y1="0" x2="0" y2="1">' +
          '<stop offset="5%" stop-color="var(--primary-color)" stop-opacity="0.18"></stop>' +
          '<stop offset="95%" stop-color="var(--primary-color)" stop-opacity="0"></stop>' +
          "</linearGradient>" +
          "</defs>" +
          grid +
          '<path class="cs_chart_fill" d="' +
          line +
          'L100 100L0 100Z" fill="url(#' +
          fillId +
          ')"></path>' +
          '<path class="cs_chart_line" d="' +
          line +
          '" vector-effect="non-scaling-stroke"></path>' +
          "</svg>" +
          "</div>" +
          '<ul class="cs_chart_x_axis cs_mp_0">' +
          xAxis +
          "</ul>" +
          "</div>" +
          "</div>",
      );

      // Reveal on the next frame so the CSS transition has a start state
      window.requestAnimationFrame(function () {
        $chart.addClass("cs_chart_drawn");
      });
    });
  }
  /*=====================================================
    28. Donut Chart
  =====================================================*/
  function donutChart() {
    if (!$.exists(".cs_donut_chart")) return;

    var SIZE = 150;
    var CENTER = SIZE / 2;

    $(".cs_donut_chart").each(function () {
      var $chart = $(this);
      var $items = $chart.find(".cs_donut_chart_data > li");
      var segments = [];

      // Ring thickness is a share of the 150 unit box, so the chart still
      // scales to whatever width the CSS gives it
      var STROKE = parseFloat($chart.attr("data-stroke")) || 15;
      var RADIUS = (SIZE - STROKE) / 2;
      var TRACK = 2 * Math.PI * RADIUS;

      // A data list draws a multi-segment ring; a bare data-value draws a gauge
      if ($items.length) {
        $items.each(function () {
          var $item = $(this);
          segments.push({
            label: $item.attr("data-label") || "",
            value: parseFloat($item.attr("data-value")) || 0,
            color: $item.attr("data-color") || "primary",
          });
        });
      } else {
        segments.push({
          label: $chart.attr("data-chart-label") || "",
          value: parseFloat($chart.attr("data-value")) || 0,
          color: $chart.attr("data-color") || "primary",
        });
      }

      // Segment lists add up to their own total; a lone gauge is a percentage
      var total = parseFloat($chart.attr("data-total"));
      if (!total) {
        if ($items.length) {
          total = 0;
          for (var t = 0; t < segments.length; t++) total += segments[t].value;
        } else {
          total = 100;
        }
      }
      if (!total) return;

      var arcs = "";
      var offset = 0;
      for (var s = 0; s < segments.length; s++) {
        var length = (segments[s].value / total) * TRACK;
        arcs +=
          '<circle class="cs_donut_segment" cx="' +
          CENTER +
          '" cy="' +
          CENTER +
          '" r="' +
          RADIUS +
          '" fill="none" stroke-width="' +
          STROKE +
          '" style="stroke: var(--' +
          segments[s].color +
          '-color)" stroke-dasharray="0 ' +
          TRACK +
          '" stroke-dashoffset="' +
          -offset +
          '" data-length="' +
          length +
          '"><title>' +
          segments[s].label +
          ": " +
          segments[s].value +
          "</title></circle>";
        offset += length;
      }

      $chart.prepend(
        '<svg viewBox="0 0 ' +
          SIZE +
          " " +
          SIZE +
          '" role="img" aria-label="' +
          ($chart.attr("data-chart-label") || "Donut chart") +
          '">' +
          '<circle class="cs_donut_track" cx="' +
          CENTER +
          '" cy="' +
          CENTER +
          '" r="' +
          RADIUS +
          '" fill="none" stroke-width="' +
          STROKE +
          '"></circle>' +
          arcs +
          "</svg>",
      );

      // Grow each arc on the next frame so the CSS transition has a start length
      var $arcs = $chart.find(".cs_donut_segment");
      window.requestAnimationFrame(function () {
        $arcs.each(function () {
          this.setAttribute(
            "stroke-dasharray",
            $(this).attr("data-length") + " " + TRACK,
          );
        });
      });
    });
  }
  /*=====================================================
    29. Message Search
  =====================================================*/
  function messageSearch() {
    var $toggle = $(".messageSearchToggleBtn");
    var $form = $(".cs_message_search_form");
    if (!$toggle.length || !$form.length) return;

    var $input = $form.find("input");
    var $rows = $(".cs_message_thread .cs_message_row");
    var $empty = $(".cs_message_no_result");

    function filterThread(term) {
      if (!term) {
        $rows.show();
        $empty.removeClass("active");
        return;
      }

      var matches = 0;
      $rows.each(function () {
        var hit = $(this).text().toLowerCase().indexOf(term) !== -1;
        if (hit) matches++;
        $(this).toggle(hit);
      });
      $empty.toggleClass("active", matches === 0);
    }

    function openSearch() {
      $form.addClass("active");
      $toggle.addClass("active").attr("aria-expanded", "true");
      $input.trigger("focus");
    }

    function closeSearch() {
      $form.removeClass("active");
      $toggle.removeClass("active").attr("aria-expanded", "false");
      $input.val("");
      filterThread("");
    }

    $toggle.on("click", function () {
      if ($form.hasClass("active")) closeSearch();
      else openSearch();
    });

    $form.on("click", ".messageSearchCloseBtn", closeSearch);

    $form.on("submit", function (e) {
      e.preventDefault();
    });

    $input.on("input search", function () {
      filterThread($.trim($(this).val()).toLowerCase());
    });

    $(document).on("keydown", function (e) {
      if (e.key === "Escape" && $form.hasClass("active")) closeSearch();
    });
  }
  /*=====================================================
    30. Profile Edit
  =====================================================*/
  function profileEdit() {
    var $btn = $(".profileEditBtn");
    if (!$btn.length) return;

    // The fields are always editable, so the button just drops the caret in the first one
    $btn.on("click", function () {
      $(this)
        .closest(".cs_personal_info")
        .find(".cs_personal_info_form input, .cs_personal_info_form textarea")
        .first()
        .trigger("focus");
    });
  }
  /*===========================================================
    31. Course Catalog
  =============================================================*/
  function courseCatalog() {
    var $catalog = $(".cs_course_catalog");
    if (!$catalog.length) return;

    var $grid = $catalog.find(".cs_courses_grid");
    var $cards = $grid.children(".cs_course_style_3");
    var $search = $catalog.find(".cs_course_catalog_input");
    var $sort = $catalog.find(".cs_course_catalog_select");

    $search.on("input", function () {
      var term = $.trim($(this).val()).toLowerCase();

      $cards.each(function () {
        var $card = $(this);
        var haystack = (
          $card.attr("data-title") +
          " " +
          $card.attr("data-category")
        ).toLowerCase();
        $card.toggle(term === "" || haystack.indexOf(term) !== -1);
      });
    });

    // nice-select mirrors the change onto the original <select>
    $sort.on("change", function () {
      var key = $(this).val();

      var ordered = $cards.toArray().sort(function (a, b) {
        if (key === "title") {
          return $(a).attr("data-title").localeCompare($(b).attr("data-title"));
        }
        // Everything else is a figure, and bigger reads as better
        return (
          parseFloat($(b).attr("data-" + key)) -
          parseFloat($(a).attr("data-" + key))
        );
      });

      $grid.append(ordered);
    });
  }
  /*===========================================================
    32. Course Edit Modal
  =============================================================*/
  function courseEditModal() {
    var $modal = $(".cs_edit_course_modal");
    if (!$modal.length) return;

    function withCommas(value) {
      return String(value).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // The card carries every value the dialog paints into its fields
    $(document).on("click", ".courseEditBtn", function () {
      var $card = $(this).closest(".cs_course_style_3");
      if (!$card.length) return;

      $modal.find("[data-field]").each(function () {
        var $field = $(this);
        var name = $field.attr("data-field");
        var value = $card.attr("data-" + name);
        if (value === undefined) return;

        if (name === "students") value = withCommas(value);
        if (name === "revenue") value = "$" + withCommas(value);

        $field.val(value);
        if ($field.is("select")) $field.niceSelect("update");
      });

      var status = $card.attr("data-status");
      $modal.find(".cs_modal_status input").prop("checked", function () {
        return $(this).val() === status;
      });
    });
  }
  /*===========================================================
    33. Live Class Modal
  =============================================================*/
  function liveClassModal() {
    var $modal = $(".cs_schedule_class_modal");
    if (!$modal.length) return;

    var $fields = $modal.find("[data-field]");
    var $platforms = $modal.find(".cs_modal_platform input");

    function setField($field, value) {
      $field.val(value);
      if ($field.is("select")) $field.niceSelect("update");
    }

    // Scheduling a new class always opens on an empty form
    $(document).on("click", ".liveClassAddBtn", function () {
      $fields.each(function () {
        setField($(this), "");
      });
      $platforms.prop("checked", function (index) {
        return index === 0;
      });
    });

    // The row carries every value the dialog paints into its fields
    $(document).on("click", ".liveClassEditBtn", function () {
      var $row = $(this).closest(".cs_session_row");
      if (!$row.length) return;

      $fields.each(function () {
        var $field = $(this);
        var value = $row.attr("data-" + $field.attr("data-field"));
        if (value === undefined) return;

        setField($field, value);
      });

      var platform = $row.attr("data-platform");
      $platforms.prop("checked", function () {
        return $(this).val() === platform;
      });
    });
  }
  /*===========================================================
    34. Student Directory
  =============================================================*/
  function studentDirectory() {
    var $directory = $(".cs_student_directory");
    if (!$directory.length) return;

    var $rows = $directory.find(".cs_student_row");
    var $empty = $directory.find(".cs_student_empty");
    var $search = $directory.find(".cs_student_search_input");
    var $course = $directory.find("select[name='student-course']");
    var $status = $directory.find("select[name='student-status']");

    // Every control narrows the same list, so they are applied together
    function applyFilters() {
      var term = $.trim($search.val()).toLowerCase();
      var course = $course.val();
      var status = $status.val();
      var visible = 0;

      $rows.each(function () {
        var $row = $(this);
        var haystack = (
          $row.attr("data-name") +
          " " +
          $row.attr("data-email")
        ).toLowerCase();
        var match =
          (term === "" || haystack.indexOf(term) !== -1) &&
          (course === "" || $row.attr("data-course") === course) &&
          (status === "" || $row.attr("data-status") === status);

        $row.toggle(match);
        if (match) visible++;
      });

      $empty.toggle(visible === 0);
    }

    $search.on("input search", applyFilters);

    // nice-select mirrors the change onto the original <select>
    $course.add($status).on("change", applyFilters);

    $directory.on("click", ".studentDeleteBtn", function () {
      var $row = $(this).closest(".cs_student_row");
      $rows = $rows.not($row);
      $row.remove();
      applyFilters();
    });
  }
  /*===========================================================
    35. Student Modal
  =============================================================*/
  function studentModal() {
    var $modal = $(".cs_student_modal");
    if (!$modal.length) return;

    var $fields = $modal.find("[data-field]");
    var $title = $modal.find(".cs_modal_title");
    var $text = $modal.find(".cs_modal_text");
    var $submit = $modal.find(".cs_student_submit_text");

    function setField($field, value) {
      $field.val(value);
      if ($field.is("select")) $field.niceSelect("update");
    }

    function setChrome(title, text, submit) {
      $title.text(title);
      $text.text(text);
      $submit.text(submit);
    }

    // Adding a student always opens on an empty form; a select falls back to
    // its own first option because none of them carry a blank value
    $(document).on("click", ".studentAddBtn", function () {
      $fields.each(function () {
        var $field = $(this);
        setField(
          $field,
          $field.is("select") ? $field.find("option").first().val() : "",
        );
      });
      setChrome("Add Student", "Enter new student details", "Add Student");
    });

    // The row carries every value the dialog paints into its fields
    $(document).on("click", ".studentEditBtn", function () {
      var $row = $(this).closest(".cs_student_row");
      if (!$row.length) return;

      $fields.each(function () {
        var $field = $(this);
        var value = $row.attr("data-" + $field.attr("data-field"));
        if (value === undefined) return;

        setField($field, value);
      });

      setChrome("Edit Student", "Update student details", "Save Changes");
    });
  }
  /*===========================================================
    36. Review Rating Select
  =============================================================*/
  function reviewRatingSelect() {
    var $selects = $(".ratingSelect");
    if (!$selects.length) return;

    // nice-select relays the change to the original select, so the star strip
    // beside the value can follow whatever the user picks
    $selects.on("change", function () {
      var $rating = $(this).closest(".cs_modal_rating").find(".cs_rating");
      if (!$rating.length) return;

      var value = parseFloat($(this).val()) || 0;
      $rating.attr("data-rating", value);
      $rating.find(".cs_rating_percentage").css("width", value * 20 + "%");
    });
  }
  /*===========================================================
    37. Video Fallback
  =============================================================*/
  function videoFallback() {
    if (!$.exists("video[data-fallback]")) return;

    $("video[data-fallback]").each(function () {
      var video = this;
      var $video = $(video);

      var hideVideo = function () {
        $video.addClass("cs_video_missing");
      };

      // capture phase, so a failing <source> child is caught as well as an
      // error raised by the media element itself
      video.addEventListener("error", hideVideo, true);

      // the source may already have given up before this ran
      if (video.networkState === video.NETWORK_NO_SOURCE) hideVideo();
    });
  }
  /*===========================================================
    38. Preloader
  =============================================================*/
  function preloader() {
    if (!$.exists(".cs_preloader")) return;

    var $preloader = $(".cs_preloader");
    var hidePreloader = function () {
      $preloader.addClass("cs_loaded");
    };

    $(window).on("load", hidePreloader);

    // never let a slow or broken asset keep the page hidden
    setTimeout(hidePreloader, 3000);
  }
  /*===========================================================
    39. AOS (Animate On Scroll)
  =============================================================*/
  function aosInit() {
    if (typeof AOS === "undefined") return;

    var reduceMotion =
      window.matchMedia &&
      window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    AOS.init({
      duration: 700,
      easing: "ease-out-cubic",
      offset: 80,
      once: true,
      disable: reduceMotion,
    });

    // images and sliders settle after load and move the trigger points
    $(window).on("load", function () {
      AOS.refresh();
    });
  }
})(jQuery); // End of use strict
