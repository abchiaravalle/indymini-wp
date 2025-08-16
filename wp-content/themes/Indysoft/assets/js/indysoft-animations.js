(function($){
  $(function(){

    const featureItems = document.querySelectorAll('.hover-trigger');
    const softwareImage = document.getElementById('software-image');
    if (featureItems.length) {
      featureItems.forEach(item => {
        item.addEventListener('mouseenter', function(){
          featureItems.forEach(otherItem => {
            otherItem.classList.remove('active');
            otherItem.style.opacity = '0.5';
          });
          this.classList.add('active');
          this.style.opacity = '1';
          if(softwareImage){
            softwareImage.style.opacity = '0.7';
            setTimeout(()=>{ softwareImage.style.opacity = '1'; }, 200);
          }
        });
        item.addEventListener('mouseleave', function(){
          featureItems.forEach(otherItem => {
            otherItem.classList.remove('active');
            otherItem.style.opacity = '0.5';
          });
          if(featureItems[0]){
            featureItems[0].classList.add('active');
            featureItems[0].style.opacity = '1';
          }
          if(softwareImage){ softwareImage.style.opacity = '1'; }
        });
      });
    }

    if (typeof Swiper !== 'undefined' && document.querySelector('.testimonials-swiper')) {
      new Swiper('.testimonials-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        effect: 'slide',
        speed: 600,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: '.swiper-button-next-testimonials',
          prevEl: '.swiper-button-prev-testimonials',
        }
      });
    }

    if(typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
      gsap.registerPlugin(ScrollTrigger);

      const fadeSelectors = ['.animate-fade', '.animate-fade-up', '.animate-fade-left', '.animate-fade-right', '.animate-fade-down', '.animate-stagger'];
      gsap.set(fadeSelectors.join(','), {
        opacity: 0,
        y: (index, el) => {
          if(el.classList.contains('animate-fade-up')) return 20;
          if(el.classList.contains('animate-fade-down')) return -20;
          if(el.classList.contains('animate-stagger')) return 15;
          return 0;
        },
        x: (index, el) => {
          if(el.classList.contains('animate-fade-left')) return 20;
          if(el.classList.contains('animate-fade-right')) return -20;
          return 0;
        }
      });

      ScrollTrigger.batch('.animate-fade', {
        onEnter: batch => gsap.to(batch, {opacity:1, duration:0.8, stagger:0.15, ease:'power2.out'})
      });

      ScrollTrigger.batch('.animate-fade-up, .animate-fade-down', {
        onEnter: batch => gsap.to(batch, {opacity:1, y:0, duration:0.8, stagger:0.15, ease:'power2.out'})
      });

      ScrollTrigger.batch('.animate-fade-left, .animate-fade-right', {
        onEnter: batch => gsap.to(batch, {opacity:1, x:0, duration:0.8, stagger:0.15, ease:'power2.out'})
      });

      ScrollTrigger.batch('.animate-stagger', {
        onEnter: batch => gsap.to(batch, {opacity:1, y:0, duration:0.8, stagger:0.05, ease:'power2.out'})
      });
    }
  });
})(jQuery);
