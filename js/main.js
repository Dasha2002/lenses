document.addEventListener("DOMContentLoaded", function () {
  const reviewsSwiper = new Swiper(".reviews_swiper", {
    loop: false,
    slidesPerGroup: 1,
    spaceBetween: 30,
    slidesPerView: 3,
    navigation: {
      nextEl: ".reviews_next",
      prevEl: ".reviews_prev",
    },
    pagination: {
      el: ".reviews_pagination",
      clickable: true,
    },
    breakpoints: {
      960: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      500: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      0: {
        slidesPerView: 1.2,
        spaceBetween: 10,
      },
    },
  });

  // Отзывы: показываем градиент и раскрытие только там, где текст не влез
  const feedbackSlides = document.querySelectorAll(".reviews_slides_feedback");

  function checkFeedbackOverflow() {
    feedbackSlides.forEach(function (slide) {
      if (slide.classList.contains("open")) return;
      slide.classList.toggle("has_more", slide.scrollHeight > slide.clientHeight);
    });
  }

  checkFeedbackOverflow();
  window.addEventListener("resize", checkFeedbackOverflow);

  feedbackSlides.forEach(function (slide) {
    slide.addEventListener("click", function () {
      if (!this.classList.contains("has_more")) return;
      this.classList.toggle("open");
    });
  });

  // Новости: раскрытие/сворачивание полного списка
  const news = document.querySelector(".news");
  const newsOpen = news && news.querySelector(".news_open");

  if (news && newsOpen) {
    const newsOpenText = newsOpen.childNodes[0];

    newsOpen.addEventListener("click", function () {
      const collapsed = news.classList.toggle("news_hidden");
      newsOpen.classList.toggle("open", !collapsed);
      newsOpenText.textContent = collapsed ? "Раскрыть" : "Свернуть";
    });
  }
});
