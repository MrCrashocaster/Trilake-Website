/*jshint unused: false, undef:false, latedef: false */
/*jshint unused: false, undef:false, latedef: false */
/*jshint unused: false, undef:false, latedef: false */

// $(window).on('load', function () {
//     // page is fully loaded, including all frames, objects and images
//     $('body').addClass('display');
// });

$(document).ready(function() {

    // FORM
    if($('body').is('.page-template-page-contact')){
    gform.addFilter( 'gform_datepicker_options_pre_init', function( optionsObj, formId, fieldId ) {
        if ( formId == 1 && fieldId == 13 ) {
        optionsObj.minDate = '+1 D';
        optionsObj.maxDate = '+6 M';
        }
        return optionsObj;
        } );
    }

    jQuery(function($) {
        var path = window.location.href; 
        // because the 'href' property of the DOM element is the absolute path
        $('#nav a').each(function() {
          if (this.href === path) {
            $(this).addClass('active');
          }
        });
      });

      jQuery(function($) {
        var path = window.location.href; 
        // because the 'href' property of the DOM element is the absolute path
        $('#mobileMenu a').each(function() {
          if (this.href === path) {
            $(this).addClass('active');
          }
        });
      });

    var scrollTop = $(window).scrollTop();
    overlayButton = document.getElementById("overlay-button"); 
    overlay = document.getElementById("overlay");   

       $('#overlay-button').click(function(){
        if ($("#overlay-button").hasClass("checked")) {
            overlay.classList.remove('visibility-visible');
            overlayButton.classList.remove("checked");
            document.body.classList.remove('navOverflowHidden');
            $("html, body").animate({ scrollTop: 0 }, "fast");
        } 
        else {
            $('#overlay-button').addClass('checked');
            $('body').addClass('navOverflowHidden');
            $('#mobileMenu #overlay').addClass('visibility-visible');
            $("html, body").animate({ scrollTop: 0 }, "fast");
        }
    });
    
    $(window).resize(function() {
        
    });

    // SLIDER

    $('.imagesContainer').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        fade: true,
        cssEase: 'linear',
        arrows: 'false',
        autoplay: 'true',
        autoplaySpeed: 3000,
        pauseOnHover: false
      });
    
    // WINDOW SCROLL
    $(window).on('scroll', function(){
        scrollTop = $(window).scrollTop();
        
        var currentDark = $('.changeBackgroundToDark');

        if (currentDark.visible( true )) {
            $('body').addClass('background-transition');
            $('body').removeClass('background-transition-out');
            $('body').addClass('bg-dark');
            $('body').removeClass('bg-white');
            $('p').addClass('white');
            $('.h2').addClass('white');
            $('.btnContent').addClass('btnBorderWhite');
            $('#packageSection .btnContent').removeClass('btnBorderWhite');
            $('#unparalledService .btnContent').removeClass('btnBorderDark');
            $('#packageSectionAbout .btnContent').removeClass('btnBorderDark');
        }

        else {
            $('body').addClass('background-transition-out');
            $('body').addClass('bg-white');
            $('body').removeClass('background-transition');
            $('body').removeClass('bg-dark');
            $('p').removeClass('white');
            $('.h2').removeClass('white');
            $('.btnContent').addClass('btnBorderDark');
        }

        // var currentRed = $('.changeBackgroundToRed');

        // if (currentRed.visible( true )) {
        //     $('body').addClass('background-transition');
        //     $('body').removeClass('background-transition-out');
        //     $('body').addClass('bg-red');
        //     $('p').addClass('white');
        //     $('#servicesSection .h2').addClass('white');
        //     $('.h1').addClass('dark');
        //     $('.btnContent').addClass('btnBorderWhite');
        //     $('#packageSection .btnContent').removeClass('btnBorderWhite');
        //     $('#unparalledService .btnContent').removeClass('btnBorderDark');
        // }

        // else {
        //     $('body').addClass('background-transition-out');
        //     $('body').addClass('bg-white');
        //     $('body').removeClass('background-transition');
        //     $('body').removeClass('bg-red');
        //     $('p').removeClass('white');
        //     $('.h1').removeClass('dark');
        //     $('#servicesSection .h2').removeClass('white');
        //     $('.btnContent').addClass('btnBorderDark');
        // }
        
       
        $('.fade-up, .fade-down, .fade-right, .fade-left').each(function() {
            var crrnt = $(this);
            if (crrnt.visible( true )) {
                crrnt.addClass('show');
            }
            else if (!crrnt.visible( true )) {
                crrnt.removeClass('show');
            }
        });  

    });

    $('.unparalledCopy .btn a').click(function(){
        var clicked = $(this);
        var clickedClass = $('#packageSection');

        $('html, body').stop().animate({'scrollTop': clickedClass.offset().top - 0});
    });

    $('#scrollButton').click(function(){
        var clicked = $(this);
        var clickedClass = $('#scrollButton');

        $('html, body').stop().animate({'scrollTop': clickedClass.offset().top - 0});
    });

    // $(function () {
    //     $(document).scroll(function () {
    //         var $nav = $(".nav");
    //         var $navItems = $(".navItems");
    //         var $backButton = $(".backButton");
    //         $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    //         $nav.toggleClass('scrolledOff', $(this).scrollTop() <= $nav.height());

    //         $navItems.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    //         $navItems.toggleClass('scrolledOff', $(this).scrollTop() <= $nav.height());

    //         $backButton.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    //         $backButton.toggleClass('scrolledOff', $(this).scrollTop() <= $nav.height());
    //     });
    //   });

    $(function() {
        ParallaxScroll.init();
    });
    
    var ParallaxScroll = {
        /* PUBLIC VARIABLES */
        showLogs: false,
        round: 1000,
    
        /* PUBLIC FUNCTIONS */
        init: function() {
            this._log("init");
            if (this._inited) {
                this._log("Already Inited");
                this._inited = true;
                return;
            }
            this._requestAnimationFrame = (function(){
              return  window.requestAnimationFrame       || 
                      window.webkitRequestAnimationFrame || 
                      window.mozRequestAnimationFrame    || 
                      window.oRequestAnimationFrame      || 
                      window.msRequestAnimationFrame     || 
                      function(/* function */ callback, /* DOMElement */ element){
                          window.setTimeout(callback, 1000 / 60);
                      };
            })();
            this._onScroll(true);
        },
    
        /* PRIVATE VARIABLES */
        _inited: false,
        _properties: ['x', 'y', 'z', 'rotateX', 'rotateY', 'rotateZ', 'scaleX', 'scaleY', 'scaleZ', 'scale'],
        _requestAnimationFrame:null,
    
        /* PRIVATE FUNCTIONS */
        _log: function(message) {
            if (this.showLogs) console.log("Parallax Scroll / " + message);
        },
        _onScroll: function(noSmooth) {
            var scroll = $(document).scrollTop();
            var windowHeight = $(window).height();
            this._log("onScroll " + scroll);
            $("[data-parallax]").each($.proxy(function(index, el) {
                var $el = $(el);
                var properties = [];
                var applyProperties = false;
                var style = $el.data("style");
                if (style == undefined) {
                    style = $el.attr("style") || "";
                    $el.data("style", style);
                }
                var datas = [$el.data("parallax")];
                var iData;
                for(iData = 2; ; iData++) {
                    if($el.data("parallax"+iData)) {
                        datas.push($el.data("parallax-"+iData));
                    }
                    else {
                        break;
                    }
                }
                var datasLength = datas.length;
                for(iData = 0; iData < datasLength; iData ++) {
                    var data = datas[iData];
                    var scrollFrom = data["from-scroll"];
                    if (scrollFrom == undefined) scrollFrom = Math.max(0, $(el).offset().top - windowHeight);
                    scrollFrom = scrollFrom | 0;
                    var scrollDistance = data["distance"];
                    var scrollTo = data["to-scroll"];
                    if (scrollDistance == undefined && scrollTo == undefined) scrollDistance = windowHeight;
                    scrollDistance = Math.max(scrollDistance | 0, 1);
                    var easing = data["easing"];
                    var easingReturn = data["easing-return"];
                    if (easing == undefined || !$.easing|| !$.easing[easing]) easing = null;
                    if (easingReturn == undefined || !$.easing|| !$.easing[easingReturn]) easingReturn = easing;
                    if (easing) {
                        var totalTime = data["duration"];
                        if (totalTime == undefined) totalTime = scrollDistance;
                        totalTime = Math.max(totalTime | 0, 1);
                        var totalTimeReturn = data["duration-return"];
                        if (totalTimeReturn == undefined) totalTimeReturn = totalTime;
                        scrollDistance = 1;
                        var currentTime = $el.data("current-time");
                        if(currentTime == undefined) currentTime = 0;
                    }
                    if (scrollTo == undefined) scrollTo = scrollFrom + scrollDistance;
                    scrollTo = scrollTo | 0;
                    var smoothness = data["smoothness"];
                    if (smoothness == undefined) smoothness = 30;
                    smoothness = smoothness | 0;
                    if (noSmooth || smoothness == 0) smoothness = 1;
                    smoothness = smoothness | 0;
                    var scrollCurrent = scroll;
                    scrollCurrent = Math.max(scrollCurrent, scrollFrom);
                    scrollCurrent = Math.min(scrollCurrent, scrollTo);
                    if(easing) {
                        if($el.data("sens") == undefined) $el.data("sens", "back");
                        if(scrollCurrent>scrollFrom) {
                            if($el.data("sens") == "back") {
                                currentTime = 1;
                                $el.data("sens", "go");
                            }
                            else {
                                currentTime++;
                            }
                        }
                        if(scrollCurrent<scrollTo) {
                            if($el.data("sens") == "go") {
                                currentTime = 1;
                                $el.data("sens", "back");
                            }
                            else {
                                currentTime++;
                            }
                        }
                        if(noSmooth) currentTime = totalTime;
                        $el.data("current-time", currentTime);
                    }
                    this._properties.map($.proxy(function(prop) {
                        var defaultProp = 0;
                        var to = data[prop];
                        if (to == undefined) return;
                        if(prop=="scale" || prop=="scaleX" || prop=="scaleY" || prop=="scaleZ" ) {
                            defaultProp = 1;
                        }
                        else {
                            to = to | 0;
                        }
                        var prev = $el.data("_" + prop);
                        if (prev == undefined) prev = defaultProp;
                        var next = ((to-defaultProp) * ((scrollCurrent - scrollFrom) / (scrollTo - scrollFrom))) + defaultProp;
                        var val = prev + (next - prev) / smoothness;
                        if(easing && currentTime>0 && currentTime<=totalTime) {
                            var from = defaultProp;
                            if($el.data("sens") == "back") {
                                from = to;
                                to = -to;
                                easing = easingReturn;
                                totalTime = totalTimeReturn;
                            }
                            val = $.easing[easing](null, currentTime, from, to, totalTime);
                        }
                        val = Math.ceil(val * this.round) / this.round;
                        if(val==prev&&next==to) val = to;
                        if(!properties[prop]) properties[prop] = 0;
                        properties[prop] += val;
                        if (prev != properties[prop]) {
                            $el.data("_" + prop, properties[prop]);
                            applyProperties = true;
                        }
                    }, this));
                }
                if (applyProperties) {
                    if (properties["z"] != undefined) {
                        var perspective = data["perspective"];
                        if (perspective == undefined) perspective = 800;
                        var $parent = $el.parent();
                        if(!$parent.data("style")) $parent.data("style", $parent.attr("style") || "");
                        $parent.attr("style", "perspective:" + perspective + "px; -webkit-perspective:" + perspective + "px; "+ $parent.data("style"));
                    }
                    if(properties["scaleX"] == undefined) properties["scaleX"] = 1;
                    if(properties["scaleY"] == undefined) properties["scaleY"] = 1;
                    if(properties["scaleZ"] == undefined) properties["scaleZ"] = 1;
                    if (properties["scale"] != undefined) {
                        properties["scaleX"] *= properties["scale"];
                        properties["scaleY"] *= properties["scale"];
                        properties["scaleZ"] *= properties["scale"];
                    }
                    var translate3d = "translate3d(" + (properties["x"] ? properties["x"] : 0) + "px, " + (properties["y"] ? properties["y"] : 0) + "px, " + (properties["z"] ? properties["z"] : 0) + "px)";
                    var rotate3d = "rotateX(" + (properties["rotateX"] ? properties["rotateX"] : 0) + "deg) rotateY(" + (properties["rotateY"] ? properties["rotateY"] : 0) + "deg) rotateZ(" + (properties["rotateZ"] ? properties["rotateZ"] : 0) + "deg)";
                    var scale3d = "scaleX(" + properties["scaleX"] + ") scaleY(" + properties["scaleY"] + ") scaleZ(" + properties["scaleZ"] + ")";
                    var cssTransform = translate3d + " " + rotate3d + " " + scale3d + ";";
                    this._log(cssTransform);
                    $el.attr("style", "transform:" + cssTransform + " -webkit-transform:" + cssTransform + " " + style);
                }
            }, this));
            if(window.requestAnimationFrame) {
                window.requestAnimationFrame($.proxy(this._onScroll, this, false));
            }
            else {
                this._requestAnimationFrame($.proxy(this._onScroll, this, false));
            }
        }
    };
});