// Фиксированная шапка при скролле
const headerScrolled = document.getElementById('headerScrolled');
const headerMain = document.querySelector('.header-main');
let lastScrollTop = 0;
let scrollThreshold = 300; 

if (headerMain) {
    scrollThreshold = headerMain.offsetHeight + 50;
}

window.addEventListener('scroll', function() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > scrollThreshold) {
        headerScrolled.classList.add('active');
    } else {
        headerScrolled.classList.remove('active');
    }
    
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
}, false);




// popap-record
document.querySelectorAll('.popap-record-btn').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const modal = document.getElementById('callbackModal');
        modal.classList.add('active');
        
        document.body.style.overflow = 'hidden'; 
    });
});

function closeModal() {
    document.getElementById('callbackModal').classList.remove('active');
    
}

document.getElementById('callbackModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

// Закрытие по клавише Escape
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && document.getElementById('callbackModal').classList.contains('active')) {
        closeModal();
    }
});

// Инициализация даты
document.querySelectorAll('.datepickerInit').forEach(function(input) {
    input.addEventListener('click', function() {
        this.type = 'date';
    });
});




// popap-overlay
document.addEventListener('DOMContentLoaded', function() {
    const authPopup = document.getElementById('authPopup');
    const authPopupClose = document.getElementById('authPopupClose');
    const authOpenBtns = document.querySelectorAll('.btn-popap-overlay');
    
    authOpenBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            authPopup.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });
    
    if (authPopupClose) {
        authPopupClose.addEventListener('click', function() {
            authPopup.classList.remove('active');
            document.body.style.overflow = '';
        });
    }
    
    if (authPopup) {
        authPopup.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && authPopup && authPopup.classList.contains('active')) {
            authPopup.classList.remove('active');
            document.body.style.overflow = '';
        }
    });

    const authForm = document.getElementById('authForm');
    if (authForm) {
        authForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const login = this.querySelector('input[type="text"]').value;
            const password = this.querySelector('input[type="password"]').value;
            
            console.log('Попытка входа:', { login, password });
            
            authPopup.classList.remove('active');
            document.body.style.overflow = '';
        });
    }
});




// popap-filter
document.addEventListener('DOMContentLoaded', function() {
    const filterPopup = document.getElementById('filterPopup');
    const filterPopupClose = document.getElementById('filterPopupClose');
    const filterOpenBtns = document.querySelectorAll('.btn-popap-filter');
    
    // Открытие по клику на кнопку
    filterOpenBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            filterPopup.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });
    if (filterPopupClose) {
        filterPopupClose.addEventListener('click', function() {
            filterPopup.classList.remove('active');
            document.body.style.overflow = '';
        });
    }
    if (filterPopup) {
        filterPopup.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && filterPopup && filterPopup.classList.contains('active')) {
            filterPopup.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
    
    const filterToggleVendors = document.getElementById('filterToggleVendors');
    
    if (filterToggleVendors) {
        filterToggleVendors.addEventListener('click', function() {
            const hiddenVendors = document.querySelectorAll('.filter-vendor-hidden');
            const isExpanded = this.classList.contains('expanded');
            
            if (isExpanded) {
                // Скрываем
                hiddenVendors.forEach(function(vendor) {
                    vendor.classList.remove('show');
                });
                this.textContent = 'Показать ещё 5';
                this.classList.remove('expanded');
            } else {
                // Показываем
                hiddenVendors.forEach(function(vendor) {
                    vendor.classList.add('show');
                });
                this.textContent = 'Скрыть';
                this.classList.add('expanded');
            }
        });
    }
    const filterForm = document.getElementById('filterForm');
    
    if (filterForm) {
        filterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const data = {};
            
            for (let [key, value] of formData.entries()) {
                if (key.endsWith('[]')) {
                    const baseKey = key.slice(0, -2);
                    if (!data[baseKey]) data[baseKey] = [];
                    data[baseKey].push(value);
                } else {
                    data[key] = value;
                }
            }
            
            console.log('Данные фильтра:', data);
            filterPopup.classList.remove('active');
            document.body.style.overflow = '';
        });
    }
});



//popap-catalog
document.addEventListener('DOMContentLoaded', function() {
    const catalogPopup = document.getElementById('catalogPopup');
    const catalogPopupClose = document.getElementById('catalogPopupClose');
    const catalogBtns = document.querySelectorAll('.catalog-btn');
    
    catalogBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            catalogPopup.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });
    if (catalogPopupClose) {
        catalogPopupClose.addEventListener('click', function() {
            catalogPopup.classList.remove('active');
            document.body.style.overflow = '';
        });
    }
    if (catalogPopup) {
        catalogPopup.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && catalogPopup && catalogPopup.classList.contains('active')) {
            catalogPopup.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
});



// Секция service_main

document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.mySwiper', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 1,
        spaceBetween: 0, // Убрали отступы
        centeredSlides: false,
    });
});


// Секция carousel-brands
document.addEventListener('DOMContentLoaded', function() {
    const brandsSwiper = new Swiper('.brands-swiper', {
        slidesPerView: 'auto',
        spaceBetween: 0, 
        

        autoplay: false,
    
        allowTouchMove: true,
        grabCursor: true,
        

        navigation: false,
        pagination: false,
        

        loop: false,
    
        freeMode: true,
        freeModeMomentum: true,
        freeModeMomentumVelocityRatio: 0.3,

        breakpoints: {
            320: {
                slidesPerView: 'auto',
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 'auto',
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 'auto',
                spaceBetween: 0,
            },
        },
    });
});document.addEventListener("DOMContentLoaded", function () {
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

// Секция FAQ: аккордеон
document.addEventListener("DOMContentLoaded", function () {
  const faq = document.querySelector(".frequent_questions");
  if (!faq) return;

  const blocks = faq.querySelectorAll(".frequent_questions_block");

  blocks.forEach(function (block) {
    const head = block.querySelector(".frequent_questions_block_head");
    const subtext = block.querySelector(".frequent_questions_block_subtext");
    if (!head || !subtext) return;

    head.addEventListener("click", function () {
      const isOpen = block.classList.contains("open");

      // закрываем все остальные (одновременно открыт только один)
      blocks.forEach(function (other) {
        other.classList.remove("open");
        const otherSubtext = other.querySelector(".frequent_questions_block_subtext");
        if (otherSubtext) otherSubtext.classList.add("hidden");
      });

      // открываем текущий, если он был закрыт
      if (!isOpen) {
        block.classList.add("open");
        subtext.classList.remove("hidden");
      }
    });
  });
});





// Секция main-product
// Simple slider functionality
    const items = document.querySelectorAll('.card-slider__item');
    const thumbs = document.querySelectorAll('.card-slider__thumb');
    let currentIndex = 0;

    function showItem(index) {
        items.forEach((item, i) => {
            item.classList.remove('active');
            thumbs[i].classList.remove('active');
            if (i === index) {
                item.classList.add('active');
                thumbs[i].classList.add('active');
            }
        });
        currentIndex = index;
    }

    thumbs.forEach((thumb, index) => {
        thumb.addEventListener('click', () => showItem(index));
    });

    document.querySelectorAll('.slider-controls button')[0].addEventListener('click', () => {
        const newIndex = currentIndex === 0 ? items.length - 1 : currentIndex - 1;
        showItem(newIndex);
    });

    document.querySelectorAll('.slider-controls button')[1].addEventListener('click', () => {
        const newIndex = currentIndex === items.length - 1 ? 0 : currentIndex + 1;
        showItem(newIndex);
    });





    // секция product-description
    const tabs = document.querySelectorAll('.shop-product-data__nav li');
    const tabContents = document.querySelectorAll('.desc-area');

    tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active-tab'));
            tabContents.forEach(content => content.classList.remove('active-area'));
            
            // Add active class to clicked tab
            this.classList.add('active-tab');
            
            // Show corresponding content
            const targetId = this.querySelector('a').getAttribute('href').substring(1);
            document.getElementById(targetId).classList.add('active-area');
        });
    });

    // Star rating functionality
    const stars = document.querySelectorAll('.tpl-stars span');
    const ratingInput = document.querySelector('.tpl-stars input[type="hidden"]');

    stars.forEach(star => {
        star.addEventListener('click', function() {
            const rating = this.getAttribute('data-rating');
            ratingInput.value = rating;
            
            // Update stars
            stars.forEach((s, index) => {
                if (index < rating) {
                    s.classList.add('active');
                    s.style.color = '#ffc107';
                } else {
                    s.classList.remove('active');
                    s.style.color = '#ddd';
                }
            });
        });

        star.addEventListener('mouseenter', function() {
            const rating = this.getAttribute('data-rating');
            stars.forEach((s, index) => {
                if (index < rating) {
                    s.style.color = '#ffc107';
                } else {
                    s.style.color = '#ddd';
                }
            });
        });
    });

    document.querySelector('.tpl-stars').addEventListener('mouseleave', function() {
        const currentRating = ratingInput.value;
        stars.forEach((s, index) => {
            if (index < currentRating) {
                s.style.color = '#ffc107';
            } else {
                s.style.color = '#ddd';
            }
        });
    });

    // Form submission
    document.querySelector('.tpl-form').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Спасибо за ваш отзыв! Он будет опубликован после модерации.');
    });