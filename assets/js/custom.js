function order_now_value(objButton, packid=1){
    x = objButton.name;
    $('#packages').val($('#packages').find('[pack="'+packid+'"]').attr('value'));
    try{
        document.getElementById('lead_area_popup1').value = x;
        document.getElementById('lead_text').innerHTML = x;
    }catch(ex){}
  }

    
  $('.platform_slider').slick({
    dots: false,
    infinite: false,
    speed: 200,
    arrows: false,
    centermode:true,
    autoplay: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1600,
        settings: {
          slidesToShow: 7,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
      }
  
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
      }
  
      },
      {
        breakpoint: 450,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
      }
  
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  
  $('.book_slider').slick({
    dots: false,
    infinite: false,
    speed: 200,
    arrows: false,
    centermode:true,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1370,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 1250,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
      }
  
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
      }
  
      },
      {
        breakpoint: 450,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
      }
  
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  
  $('.review_slider').slick({
    dots: false,
    infinite: false,
    speed: 200,
    arrows: false,
    centermode:true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1370,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 1250,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
      }
  
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
      }
  
      },
      {
        breakpoint: 450,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
      }
  
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  
  $('.services_slider').slick({
    dots: false,
    infinite: false,
    speed: 200,
    arrows: false,
    centermode:true,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1370,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 1100,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
      }
  
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
      }
  
      },
      {
        breakpoint: 450,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
      }
  
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  
  $('.become__book_slider').slick({
    dots: false,
    infinite: false,
    speed: 200,
    arrows: false,
    centermode:false,
    autoplay: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1370,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 1100,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
      }
  
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
      }
  
      },
      {
        breakpoint: 450,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
      }
  
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  
  $('.services_logo_slider').slick({
    dots: false,
    infinite: false,
    speed: 200,
    arrows: false,
    centermode:true,
    autoplay: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1370,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 1100,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
      }
  
      },
      {
        breakpoint: 650,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
      }
  
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
      }
  
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  
  
  const stats = document.querySelectorAll(".counter");
  
  stats.forEach(stat => {
    // pattern used to seperate input number from html into an array of numbers and non numbers. EX $65.3M -> ["$65.3M", "$", "65", ".", "3", "M"]
    const patt = /(\D+)?(\d+)(\D+)?(\d+)?(\D+)?/;
    const time = 1000;
    let result = [...patt.exec(stat.textContent)];
    let fresh = true;
    let ticks;
  
    // Remove first full match from result array (we dont need the full match, just the individual match groups).
    result.shift();
    // Remove undefined values from result array where they didnt have a match in one of the optional regex groups
    result = result.filter(res => res != null);
  
    while (stat.firstChild) {
      stat.removeChild(stat.firstChild);
    }
  
    for (let res of result) {
      if (isNaN(res)) {
        stat.insertAdjacentHTML("beforeend", `<span>${res}</span>`);
      } else {
        for (let i = 0; i < res.length; i++) {
          stat.insertAdjacentHTML(
            "beforeend",
            `<span data-value="${res[i]}">
              <span>&ndash;</span>
              ${Array(parseInt(res[i]) + 1)
                .join(0)
                .split(0)
                .map(
                  (x, j) => `
                <span>${j}</span>
              `
                )
                .join("")}
            </span>`
          );
        }
      }
    }
  
    ticks = [...stat.querySelectorAll("span[data-value]")];
  
    let activate = () => {
      let top = stat.getBoundingClientRect().top;
      let offset = window.innerHeight * 0.8;
  
      setTimeout(() => {
        fresh = false;
      }, time);
  
      if (top < offset) {
        setTimeout(() => {
          for (let tick of ticks) {
            let dist = parseInt(tick.getAttribute("data-value")) + 1;
            tick.style.transform = `translateY(-${dist * 100}%)`;
          }
        }, fresh ? time : 0);
        window.removeEventListener("scroll", activate);
      }
    };
    window.addEventListener("scroll", activate);
    activate();
  });
  
  $('.banner__services__slider').slick({
    dots: false,
    infinite: false,
    speed: 200,
    arrows: false,
    centermode:true,
    autoplay: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1370,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 1100,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
      }
  
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
      }
  
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  
  
  (function ($) {
    "use strict";
    let device_width = window.innerWidth;
    $.exists = function (selector) {
      return $(selector).length > 0;
    };
  
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);
  
    var rtsJs = {
      m: function (e) {
        rtsJs.d();
        rtsJs.methods();
      },
      d: function (e) {
        (this._window = $(window)),
          (this._document = $(document)),
          (this._body = $("body")),
          (this._html = $("html"));
      },
      methods: function (e) {
        rtsJs.gsapAnimationImageScale();
      },
  
      gsapAnimationImageScale: function (e) {
        $(document).ready(function () {
          let growActive = document.getElementsByClassName("grow");
          if (growActive.length) {
            const growTl = gsap.timeline({
              scrollTrigger: {
                trigger: ".grow",
                scrub: 1,
                start: "top center",
                end: "+=1000",
                ease: "power1.out",
              },
            });
            growTl.to(".grow", {
              duration: 1,
              scale: 1,
            });
          }
        });
      },
    };
  
    rtsJs.m();
  })(jQuery, window);
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  $('.mobile-nav-btn').click(function() {
  
      $('.mobile-nav-btn, .mobile-nav, .app-container').toggleClass('active');
  
  });
  
  
  
  
  
  $('.firstlevel li a').click(function() {
  
      if ($(this).hasClass('active')) {
  
          $(this).removeClass('active');
  
          $(this).siblings('ul').slideUp();
  
      } else {
  
          $('.firstlevel li a').removeClass('active');
  
          $(this).addClass('active');
  
          $('.dropdown').slideUp();
  
          $(this).siblings('ul').slideDown();
  
      }
  
  });
  
  
  
  $('.mainnav > li > a').click(function() {
  
      if ($(this).hasClass('active')) {
  
          $(this).removeClass('active');
  
          $(this).parents('li').children('.firstlevel').slideUp();
  
      } else {
  
          $(this).addClass('active');
  
          $(this).parents('li').children('.firstlevel').slideDown();
  
          $(this).parents('li').siblings('li').children('a').removeClass('active');
  
          $(this).parents('li').siblings('li').children('.firstlevel').slideUp();
  
      }
  
  });
  
  
  
  // WOW ANIMATION
  
    new WOW().init();
  
  // WOW ANIMATION
  
  
  
  
  
  
   // intel Tel Input
  let ip; 
  let ip_value;
   $("#phone-country,#phone-coun,#phone-order").intlTelInput({
       
        allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: "body",
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
      geoIpLookup: function(callback) {
              $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
                ip=resp.ip;
              
                
              });
            },
         initialCountry: "auto",
         nationalMode: true,
         separateDialCode: true,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
       // utilsScript: "<?php echo $basesurl;?>js/utils.js"
      });
  
  setTimeout(function(){
      $('input[name="pc"]').val($('.selected-dial-code').text());
      $('input[name="cip"]').val(ip);
      $('input[name="ctry"]').val( $('.country-list .country.active .country-name').text());
  }, 3000);
  
  
  $('body').delegate('.country','click',function(){
  $('input[name="pc"]').val($(this).find('.dial-code').text());
  $('input[name="cip"]').val(ip);
  $('input[name="ctry"]').val($(this).closest("form").find('.country-list .country.active .country-name').text());
  
  /*var oldString2=$('.selected-flag').attr('title').toUpperCase();
    var newString12 = oldString2.split(':',1)[0];
                 $('input[name="ctry"]').val(newString12);*/
   });
  
  
  
   if($(window).innerWidth() <= 751) {
    $('.portfolio_slid').slick({
         dots: true,
         infinite: true,
         autoplay:true,
         speed: 300,
         arrows:false,
         slidesToShow: 1,
         adaptiveHeight: true
      });
   }
  
  //*****************************
  
  // Mobile Navigation
  
  //*****************************
  function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    if (sidebar.style.width === '0px' || sidebar.style.width === '') {
        sidebar.style.width = '250px';
    } else {
        sidebar.style.width = '0px';
    }
}
function openTab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();