/** SNG Common Javascript **/

var flags = {
  isMobile:false
}

/*
 * when page scrolls, check if scrolling has reached threshold
 * if page is beyond threshold, fix fluidNavbar to top of page
 * else leave fluidNavbar below topNavbar
 */
function scrollFn(threshold, fluidNavbar, content) {
  var y_pos = window.pageYOffset;
  if (y_pos > threshold) {
    if (fluidNavbar.style.position != "fixed") {
      fluidNavbar.style.position = "fixed";
      content.style.marginTop = $(fluidNavbar).height() + "px";
    }
  } else {
    if (fluidNavbar.style.position != "relative") {
      fluidNavbar.style.position = "relative";
      content.style.marginTop = "0px";
    }
  }
}

function manageLogo() {
  var threshold = $(".top-navbar").height();
  var fluidNavbar = $(".fluid-navbar")[0];
  var content = $(".content")[0];
  $(window).scroll(function() {
    scrollFn(threshold, fluidNavbar, content);
  });
}

function manageCalendar() {
  $(".whats-hot li").each(function() {
    var date = this.children[0];
    var spacing = this.children[1];
    var event = this.children[2];
    var width = this.clientWidth - date.clientWidth - event.clientWidth - 12;
    
    spacing.style.width = width + "px";
  });
}

var interviewOptions = {
  touchDrag:true,
  responsive:{
    0:{
      items:3
    },
    600:{
      items:5
    },
    1000:{
      items:6
    }
  }
};

/**
 * openInterviews()
 * ----------------
 * The owl.carousel.js seems to have problems resizing. If you
 * need to resize the carousel, just delete and rebuild. Otherwise,
 * the carousel will have weird errors.
 */
var interview;
var interviewClone;
var interviewContainer;
function openInterviews() {
  interviewContainer.removeChild(interview);
  interview = interviewClone.cloneNode(true);
  interviewContainer.appendChild(interview);

  var carousel = $("#interview-carousel");
  carousel.owlCarousel(interviewOptions);
}

/*
 * if the window changes to mobile, call manageLogo
 * if the window changes to desktop, remove extra styles added by bootstrap
 * and call manageLogo
 * NOTE: bootstrap will add style="height:0;" to .collapse
 */
$(window).resize(function() {
  if ($(window).width() < 768) {
    if (!flags.isMobile) {
      flags.isMobile = true;
      manageLogo();
    }
  } else {
    if (flags.isMobile) {
      flags.isMobile = false;

      // .collapse gets height = "0" in mobile mode,
      // so you must undo that css in desktop mode
      var collapsibles = $(".collapse");
      for (var i = 0; i < collapsibles.size(); i++) {
        collapsibles[i].style.height = "";
      }

      manageLogo();
    }
  }
});

$(document).ready(function() {
  // check if mobile
  if ($(window).width() < 768) {
    flags.isMobile = true;
  }

  manageLogo();
});

$(document).ready(function(){
  $(".hide-contact").on("click",function(){
    $(this).removeClass("hide-contact");
  });

  $(".rotate-fa-180-deg").on('click',function () {
    if($(this).children(".fa").hasClass('carret-up'))
    {
      $(this).children(".fa").removeClass('carret-up');
    }else
    {
      $(this).children(".fa").addClass('carret-up');
    }
  })
});

/** OFF CANVAS **/
$(document).ready(function () {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });
});