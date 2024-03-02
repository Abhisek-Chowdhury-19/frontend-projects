var swiper = new Swiper(".mySwiper", {
    slidesPerView: "auto",
    loop: true,
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
      },
    centeredSlides: true,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
