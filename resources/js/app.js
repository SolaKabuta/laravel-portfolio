import 'flowbite';


import barba from '@barba/core';

barba.init({
    transitions: [{
      name: 'opacity-transition',
      leave(data) {
        return gsap.to(data.current.container, {
          opacity: 0
        });
      },
      enter(data) {
        return gsap.from(data.next.container, {
          opacity: 0
        });
      }
    }]
  });


const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination

  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });


  // Config swiper for local images
Swiper.config.imageLoader = {
    baseURL: '/assets/'
  };
  

// //   TEST GSAP

//   function pageTransition() {
//     var tl = gsap.timeline();

//     tl.to("transition", {
//         duration: .5,
//         scaleY: 1,
//         transformOrigin: "bottom",
//         ease: "power4.inOut"
//   });

//   tl.to(".transition", {
//   duration: 1,
//   scaleY: 0,
//   transformOrigin: "top",
//   ease: "power4.inOut",
//     delay: 0.2,
//     });
// }

// function contentAnimation() {
//     var tl = gsap.timeline();
//     tl.from(".h1", {
//         top: 0,
//         duration: 1,
//         ease: "power3.out",
//         delay: 0.75,
//     });
// }

// function delay(n) {
//     n = n || 0;
//     return new Promise(done => {
//         setTimeout(() => {
//             done();
//         }, n);
//     });
// }

// barba.init({
//     sync: true,

//     transitions: [{
//         async leave(data) {
//             const done = this.async();

//             pageTransition();
//             await delay(1000);
//             done();
//         },

//         async enter(data) {
//             contentAnimation();
//         },

//         async once(data) {
//             contentAnimation();
//         }
//     }]
// });