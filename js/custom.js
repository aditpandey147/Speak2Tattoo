// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();


 // Spinner
 var spinner = function () {
  setTimeout(function () {
      if ($('#spinner').length > 0) {
          $('#spinner').removeClass('show');
      }
  }, 1);
};
spinner();

//  owl carousel script
$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    navText: [

    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        991: {
            items: 2
        }
    }
});

// lightbox
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({
        alwaysShowClose: true,
    });
    
});


/** google_map js **/
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});



//image_slider
console.clear();

class Carousel_image {
	constructor (config) {
  	this.target = config.target;
    this.items = config.items;
    this.active = 0;
    this.animating = false;
    
    this.populate();
  }
  
  slide (forward) {
  	const delay = 50;
    
    this.elements.items.out.classList.add('static');
    
  	switch (forward) {
   		case true: 
      	setTimeout(() => {
        	this.elements.items.out.classList.add('carousel__item--right');
        	this.elements.items.out.classList.remove('carousel__item--left');
          
          setTimeout(() => {
          	this.elements.items.out.classList.remove('static');
          	
            setTimeout(() => {
              this.elements.items.left.classList.add('carousel__item--out');
              
              this.elements.items.center.classList.remove('carousel__item--center');
              this.elements.items.center.classList.add('carousel__item--left');
              
              this.elements.items.right.classList.remove('carousel__item--right');
              this.elements.items.right.classList.add('carousel__item--center');
              
              this.elements.items.out.classList.remove('carousel__item--out');
            }, delay);
          }, delay);
        }, delay);
      break;
      
      case false:
      	setTimeout(() => {
        	this.elements.items.out.classList.add('carousel__item--left');
        	this.elements.items.out.classList.remove('carousel__item--right');
          
          setTimeout(() => {
          	this.elements.items.out.classList.remove('static');
          
            setTimeout(() => {
              this.elements.items.right.classList.add('carousel__item--out');

              this.elements.items.center.classList.remove('carousel__item--center');
              this.elements.items.center.classList.add('carousel__item--right');

              this.elements.items.left.classList.remove('carousel__item--left');
              this.elements.items.left.classList.add('carousel__item--center');

              this.elements.items.out.classList.remove('carousel__item--out');
            }, delay);
          }, delay);
        }, delay);      
      break;
    }  
              
    setTimeout(() => {
      this.elements.items.left = this.target.querySelector('.carousel__item--left:not(.carousel__item--out)');
      this.elements.items.center = this.target.querySelector('.carousel__item--center');
      this.elements.items.right = this.target.querySelector('.carousel__item--right:not(.carousel__item--out)');
      this.elements.items.out = this.target.querySelector('.carousel__item--out');
      
      this.animating = false;
    }, delay * 4);
  }
  
  updateValues (forward) {
  	if (!this.animating) {
    	this.animating = true;
      
      let newItem = 0;

			switch (forward) {
        case true:
          if (this.active < this.items.length - 1) {
            ++this.active;
          } else {
            this.active = 0;
          }

          newItem = this.active + 1 <= this.items.length - 1 ? this.active + 1 : 0;
        break;
        
        case false:
          if (this.active > 0) {
            --this.active;
          } else {
            this.active = this.items.length - 1;
          }

          newItem = this.active - 1 >= 0 ? this.active - 1 : this.items.length - 1;
        break;
      }

      this.elements.items.out.style.backgroundImage = `url('${this.items[newItem].image}')`;

      this.slide(forward);
    }
  }
  
  eventListeners () {
  	this.elements.arrows.left.addEventListener('click', this.updateValues.bind(this, false));
  	this.elements.arrows.right.addEventListener('click', this.updateValues.bind(this, true));
  }
  
  populate () {
    function append (obj, target) {
      for (const el in obj) {
        if (obj[el].nodeName) {
          target.appendChild(obj[el]);
        } else {
          append(obj[el], target);
        }
      }
    }

  	this.elements = {};
    this.elements.items = {};
    this.elements.arrows = {};
    
    this.elements.items.left = document.createElement('div');
    this.elements.items.center = document.createElement('div');
    this.elements.items.right = document.createElement('div');
    this.elements.items.out = document.createElement('div');
    this.elements.arrows.left = document.createElement('div');
    this.elements.arrows.right = document.createElement('div');
    
    this.elements.items.left.classList.add('carousel__item');
    this.elements.items.center.classList.add('carousel__item');
    this.elements.items.right.classList.add('carousel__item');
    this.elements.items.out.classList.add('carousel__item');
    this.elements.items.left.classList.add('carousel__item--left');
    this.elements.items.center.classList.add('carousel__item--center');
    this.elements.items.right.classList.add('carousel__item--right');
    this.elements.items.out.classList.add('carousel__item--right');
    this.elements.items.out.classList.add('carousel__item--out');
    this.elements.arrows.left.classList.add('carousel__arrow');
    this.elements.arrows.right.classList.add('carousel__arrow');
    this.elements.arrows.left.classList.add('carousel__arrow--left');
    this.elements.arrows.right.classList.add('carousel__arrow--right');
    
    this.elements.items.left.style.backgroundImage = `url('${this.items[this.items.length - 1].image}')`;
    this.elements.items.center.style.backgroundImage = `url('${this.items[0].image}')`;
    this.elements.items.right.style.backgroundImage = `url('${this.items[1].image}')`;
    
    append(this.elements, this.target);
    
    this.eventListeners();
  }
}

new Carousel_image({
	target: document.querySelector('.carousel_image'),
  items: [
  	{
    	image: "images/slide_img_1.jpg"
    },
  	{
    	image: "images/slide_img_2.jpg"
    },
  	{
    	image: "images/slide_img_3.jpg"
    },
  	{
    	image: "images/slide_img_4.jpg"
    },
  	{
    	image: "images/slide_img_5.jpg"
    }
  ]
});

// Testimonial carousel

$(".testimonial-carousel").owlCarousel({
  autoplay: true,
  smartSpeed: 1500,
  center: true,
  dots: true,
  loop: true,
  margin: 0,
  nav : true,
  navText: false,
  responsiveClass: true,
  responsive: {
      0:{
          items:1
      },
      576:{
          items:1
      },
      768:{
          items:2
      },
      992:{
          items:3
      }
  }
});




  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
        $("header").addClass('sticky-top shadow-sm');
    } else {
        $("header").removeClass('sticky-top shadow-sm');
    }
});