//Sticky Navigation Bar 
const lowerNav = document.querySelector("#lower__nav");

// function setSticky() {
//     gsap.set(lowerNav, {
//         position: "fixed",
//         top: 0,
//         left: 0,
//         right: 0
//     });
// }

// function unsetSticky() {
//     gsap.set(lowerNav, { clearProps: "all" });
// }

// ScrollTrigger.create({
//     trigger: lowerNav,
//     start: "top top",
//     end: "bottom bottom",
//     onEnter: setSticky,
//     onLeaveBack: unsetSticky
// });

// Carousel Banner Images
$("#carouselExampleIndicators").swipe({
    swipe: function (event, direction) {
        console.log(direction);
        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');
    },
    allowPageScroll: "vertical" 
});


// Special Offers Carousel

$('#div__specialOffers__offers').flickity({
    pageDots: false,
    cellAlign: 'left',
    contain: true,
    draggable: false,
    freeScroll: false,
    wrapAround: false,
  });

// Special Offers Sliders

gsap.registerPlugin(ScrollTrigger);

// Left Article
gsap.from("#article__specialOffers__main", {
  x: "-170%", 
  duration: 1,
  scrollTrigger: {
    trigger: "#section__specialOffers", 
    start: "bottom bottom", 
    toggleActions: "play none none none",
  },
});

// Rigth Article
gsap.from("#div__specialOffers", {
  x: "170%",
  duration: 1, 
  scrollTrigger: {
    trigger: "#section__specialOffers", 
    start: "bottom bottom", 
    end: "center center", 
    toggleActions: "play none none none"
  },
});

  