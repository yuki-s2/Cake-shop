$(document).ready(function() {
  $('.drawer').drawer();
});



$(document).ready(function(){
	if (window.matchMedia('(min-width: 768px)').matches) {
    $(document).ready(function(){

      $(".drawer").hide();
      $(function () {
          $(window).scroll(function () {
              if ($(this).scrollTop() > 100) {
                  $('.drawer').fadeIn();
              } else {
                  $('.drawer').stop().fadeOut();
              }
          });
      });
    });
    
	}
});



$(document).ready(function(){
	if (window.matchMedia('(max-width: 767px)').matches) {

var $slide = $(".slide")
  .slick({
    fade: true,
    speed: 1500, 
    autoplaySpeed: 3000, 
    arrows: true,  
    autoplay: true, 
    slidesToShow: 1,
    slidesToScroll: 1, 
    infinite: true 
  });

}
});



let contents = document.querySelectorAll('.news__item-title');

contents.forEach(content => {
  content.textContent = omittedContent(content.textContent);
});

function omittedContent(string) {

  const MAX_LENGTH = 53;

  if (string.length > MAX_LENGTH) {
    return string.substr(0, MAX_LENGTH) + '...';
  }
 
  return string;
}


$(document).ready(function(){
	if (window.matchMedia('(min-width: 768px)').matches) {

$('.slider').slick({
    autoplay: true,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<div class="slick-prev"></div>',
    nextArrow: '<div class="slick-next"></div>',
    centerMode: true,
    variableWidth: true,
    dots: false,
});

}
});


jQuery(window).scroll(function (){
	jQuery('.blur').each(function(){
		var elemPos = jQuery(this).offset().top,
		scroll = jQuery(window).scrollTop(),
		windowHeight = jQuery(window).height();

			if (scroll > elemPos - windowHeight + 150){
				jQuery(this).addClass('scrollin');
			}
	});
});



const targets = document.getElementsByClassName('fade');
for(let i = targets.length; i--;){
 let observer = new IntersectionObserver((entries, observer) => {
  for(let j = entries.length; j--;){
   if (entries[j].isIntersecting) {
    entries[j].target.classList.add('active');
   } else{
    entries[j].target.classList.remove('active');
   }
  }
 });
 observer.observe(targets[i]);
}



function fadeAnime(){

  $('.fadeUpTrigger').each(function(){ 
    var elemPos = $(this).offset().top-50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('fadeIn');
    }else{
    $(this).removeClass('fadeIn');
    }
    });
}

  $(window).scroll(function (){
    fadeAnime();
  });

  $(window).on('load', function(){
    fadeAnime();
  });


  (()=>{

    const $doc = document;
    const $tab = $doc.getElementById('js-tab');
    const $nav = $tab.querySelectorAll('[data-nav]');
    const $content = $tab.querySelectorAll('[data-content]');
    const ACTIVE_CLASS = 'is-active';
    const navLen = $nav.length;
  
    const init = () => {
      $content[0].style.display = 'block';
    };
    init();
  
    const handleClick = (e) => {
      e.preventDefault();
  
      const $this = e.target;
      const targetVal = $this.dataset.nav;
  
      let index = 0;
      while(index < navLen){
        $content[index].style.display = 'none';
        $nav[index].classList.remove(ACTIVE_CLASS);
        index++;
      }
  
      $tab.querySelectorAll('[data-content="' + targetVal + '"]')[0].style.display = 'block';
      $nav[targetVal].classList.add(ACTIVE_CLASS);
    };
  
    let index = 0;
    while(index < navLen){
      $nav[index].addEventListener('click', (e) => handleClick(e));
      index++;
    }
  
    
  })();
