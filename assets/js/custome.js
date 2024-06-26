// custome-js

$.fn.isOnScreen = function(){
var win = $(window);
var viewport = {
top : win.scrollTop(),
left : win.scrollLeft()
};
viewport.right = viewport.left + win.width();
viewport.bottom = viewport.top + win.height();
var bounds = this.offset();
bounds.right = bounds.left + this.outerWidth();
bounds.bottom = bounds.top + this.outerHeight();
return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};
$(window).bind("load resize", function() {
  var headerHeight = $(".header_main").height();
  $(".header-height").height(headerHeight);
})

//header fix
$(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 100) {
        jQuery("body").addClass("fixed_header");
    } else {
        jQuery("body").removeClass("fixed_header");
    }
$('body').bind('DOMMouseScroll', function(e){
     if(e.originalEvent.detail > 0) {
    jQuery("body").removeClass("top_header_show").addClass("top_header_hide");
     }else {
     jQuery("body").addClass("top_header_show").removeClass("top_header_hide");
     }
 });
 $('body').bind('mousewheel', function(e){
        if(e.originalEvent.wheelDelta > 0) {
       jQuery("body").addClass("top_header_show").removeClass("top_header_hide");
        }
        else{
    jQuery("body").removeClass("top_header_show").addClass("top_header_hide");
        }
    });
});
$('.res_menu_icon').on('click', function (e) {
  $('.res_menu_icon').toggleClass('active');
  $('body').toggleClass('show_menu_body');
  
  $('.navbar-collapse.left_main').removeClass('in');
   $('a[aria-expanded=true]').attr('aria-expanded', 'false');
   e.preventDefault();
   });



// home-page
$('.cart-slider-area').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
}

  );


$('.featured-area').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  centerMode: false,  
  autoplaySpeed: 2000,
  arrows: true,
  dots: true,
  responsive:[
      {
          breakpoint:1440,
          settings:{
            slidesToShow: 3,
            slidesToScroll: 1,
          }
      },
      {
        breakpoint:768,
        settings:{
          slidesToShow: 2,
          slidesToScroll: 1,
        }
    },
{
        breakpoint:480,
        settings:{
          slidesToShow: 1,
          slidesToScroll: 1,
        }
    }
  ]
});


$('.best-seller-area').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  centerMode: false,  
  autoplaySpeed: 2000,
  arrows: true,
  dots: true,
  responsive:[
      {
          breakpoint:1440,
          settings:{
            slidesToShow: 3,
            slidesToScroll: 1,
          }
      },
      {
        breakpoint:768,
        settings:{
          slidesToShow: 2,
          slidesToScroll: 1,
        }
    },
{
        breakpoint:480,
        settings:{
          slidesToShow: 1,
          slidesToScroll: 1,
        }
    }
  ]
});


$('.review-area').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  centerMode: false,  
  autoplaySpeed: 2000,
  arrows: true,
  dots: false,
  responsive:[
      {
          breakpoint:1440,
          settings:{
            slidesToShow: 3,
            slidesToScroll: 1,
          }
      },
      {
        breakpoint:768,
        settings:{
          slidesToShow: 2,
          slidesToScroll: 1,
        }
    },
{
        breakpoint:480,
        settings:{
          slidesToShow: 1,
          slidesToScroll: 1,
        }
    }
  ]
});

$('.insta-box-area').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  centerMode: false,  
  autoplaySpeed: 2000,
  arrows: true,
  dots: false,
  responsive:[
      {
          breakpoint:1440,
          settings:{
            slidesToShow: 3,
            slidesToScroll: 1,
          }
      },
      {
        breakpoint:768,
        settings:{
          slidesToShow: 2,
          slidesToScroll: 1,
        }
    },
{
        breakpoint:480,
        settings:{
          slidesToShow: 1,
          slidesToScroll: 1,
        }
    }
  ]
});



$('.alview-product-slid').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  centerMode: false,  
  autoplaySpeed: 2000,
  arrows: true,
  dots: false,
  responsive:[
      {
          breakpoint:1440,
          settings:{
            slidesToShow: 3,
            slidesToScroll: 1,
          }
      },
      {
        breakpoint:768,
        settings:{
          slidesToShow: 2,
          slidesToScroll: 1,
        }
    },
{
        breakpoint:480,
        settings:{
          slidesToShow: 1,
          slidesToScroll: 1,
        }
    }
  ]
});



//header fix
$(window).scroll(function() {    
    // var scroll = jQuery(window).scrollTop();
    // if (scroll >= 200) {
    //     jQuery("body").addClass("fixed_header");
    // } else {
    //     jQuery("body").removeClass("fixed_header");
    // }
    
    if (scroll >= 700) {
        $(".gotoTop").fadeIn("slow");
    } else {
        $(".gotoTop").fadeOut("slow");
    }
}); 

// megamenu
$(document).ready(function() {
	$(".megamenu").on("click", function(e) {
		e.stopPropagation();
	});
	
	$('.search_icon').click(function(){		
	$(this).parent().toggleClass('open');
	})
	$(document).on('click',function(e){
		if(!$('.search-nav').is(e.target) && !$('.search-nav').has(e.target).length){
			$('.search-nav').removeClass('open')
		}
	})


});


$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
$(".list-li").click(function(){
  $(".featured-box.product-list-box").removeClass("col-lg-3 col-md-4 col-sm-6");
  $(".featured-box.product-list-box").addClass("listViewAdd");
  $(this).addClass("active");
   $(".grid-li").removeClass("active");

});

  
  $(".grid-li").click(function(){
   if($(".featured-box.product-list-box").hasClass("listViewAdd")) {
      $(".featured-box.product-list-box").removeClass("listViewAdd");
      $(".featured-box.product-list-box").addClass("col-lg-3 col-md-4 col-sm-6");
      $(this).addClass("active");
      $(".list-li").removeClass("active");

    }
  });
});
// home-page


// allview
 $('.product-details-img-area').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.product-details-small-view',
  
});
$('.product-details-small-view').slick({
  slidesToShow: 4,  
  slidesToScroll: 1,
  asNavFor: '.product-details-img-area',
  dots: false,
  vertical: false,
  arrows: true,  
  focusOnSelect: true,  
  responsive:[  
  {
        breakpoint:767,
        settings:{  
        slidesToShow: 3,  
        slidesToScroll: 1,        
          vertical:false, 
          infinite: true,
        }
    },    
{
        breakpoint:480,
        settings:{   
          slidesToShow: 3,  
          slidesToScroll: 1,       
          vertical:false,          
        }
    }
  ]

});






// toggle-left-menu
$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
console.log("document is ready");
  
  
    $('[data-toggle="offcanvas"], #navToggle').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
  
  
// document ready  
});


window.onload = function() {
 // executes when complete page is fully loaded, including all frames, objects and images
console.log("window is loaded");
  
  
// window load  
};


//quantity
function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}

String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});