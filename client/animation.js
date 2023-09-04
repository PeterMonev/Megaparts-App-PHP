//Sticky Navigation Bar 
// const lowerNav = document.querySelector("#lower__nav");

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

