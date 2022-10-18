
//  Title: .js file for swiper of course list
//  Author: Nafisa Maliyat


var swiper = new Swiper(".course-list", {
    slidesPerView: 4,
    spaceBetween: 2,
    direction: 'horizontal',
    loop: true,


    centerInsufficientSlides:true,

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

});


