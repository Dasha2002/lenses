// popap-record
// Открытие модального окна
document.querySelectorAll('.popap-record-btn').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const modal = document.getElementById('callbackModal');
        modal.classList.add('active');
        // НЕ блокируем прокрутку body - страница должна прокручиваться
        document.body.style.overflow = 'hidden'; // УДАЛИТЬ ЭТУ СТРОКУ
    });
});

// Закрытие модального окна
function closeModal() {
    document.getElementById('callbackModal').classList.remove('active');
    // НЕ разблокируем прокрутку, так как мы её не блокировали
    // document.body.style.overflow = ''; // УДАЛИТЬ ЭТУ СТРОКУ
}

// Закрытие при клике на оверлей
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



document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.header');
    const headerScrolled = document.getElementById('headerScrolled');
    const body = document.body;

    let scrollThreshold = 150;
    
    function handleScroll() {
        const scrollY = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollY > scrollThreshold) {
            headerScrolled.classList.add('active');
        } else {
            headerScrolled.classList.remove('active');
        }
    }
    
    window.addEventListener('scroll', function() {
        requestAnimationFrame(handleScroll);
    });

    // ========== ОТКРЫТИЕ/ЗАКРЫТИЕ ПОПАПА ФИЛЬТРОВ (НОВЫЙ ВАРТИАНТ) ==========
const filtersOverlayFull = document.getElementById('filtersOverlayFull');
const filtersCloseFull = document.getElementById('filtersCloseFull');
const filterBtn = document.querySelector('.header-search__filter');

// Открытие по клику на иконку фильтра
if (filterBtn) {
    filterBtn.addEventListener('click', function(e) {
        e.preventDefault();
        openFiltersFull();
    });
}

// Закрытие по крестику
if (filtersCloseFull) {
    filtersCloseFull.addEventListener('click', closeFiltersFull);
}

// Закрытие по клику на overlay
if (filtersOverlayFull) {
    filtersOverlayFull.addEventListener('click', function(e) {
        if (e.target === this) {
            closeFiltersFull();
        }
    });
}

// Закрытие по Escape
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && filtersOverlayFull && filtersOverlayFull.classList.contains('active')) {
        closeFiltersFull();
    }
});

function openFiltersFull() {
    if (filtersOverlayFull) {
        filtersOverlayFull.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closeFiltersFull() {
    if (filtersOverlayFull) {
        filtersOverlayFull.classList.remove('active');
        document.body.style.overflow = '';
    }
}

// ========== КНОПКА "ПОКАЗАТЬ ЕЩЁ" (ПРОИЗВОДИТЕЛИ) ==========
const filterToggleVendors = document.getElementById('filterToggleVendors');
if (filterToggleVendors) {
    filterToggleVendors.addEventListener('click', function() {
        const hiddenVendors = document.querySelectorAll('.filter-vendor-hidden');
        const isExpanded = this.classList.contains('expanded');
        
        if (isExpanded) {
            // Сворачиваем
            hiddenVendors.forEach(function(vendor) {
                vendor.classList.remove('show');
            });
            this.innerHTML = 'Показать ещё <span class="vendors-count">5</span>';
            this.classList.remove('expanded');
        } else {
            // Разворачиваем
            hiddenVendors.forEach(function(vendor) {
                vendor.classList.add('show');
            });
            this.innerHTML = 'Свернуть';
            this.classList.add('expanded');
        }
    });
}

// ========== ОБРАБОТКА ОТПРАВКИ ФОРМЫ ==========
const filtersFormFull = document.getElementById('filtersFormFull');
if (filtersFormFull) {
    filtersFormFull.addEventListener('submit', function(e) {
        e.preventDefault();

        // Собираем данные формы
        const formData = new FormData(this);
        const data = {};
        for (let [key, value] of formData.entries()) {
            if (data[key]) {
                if (!Array.isArray(data[key])) {
                    data[key] = [data[key]];
                }
                data[key].push(value);
            } else {
                data[key] = value;
            }
        }

        console.log('Данные фильтра:', data);
        closeFiltersFull();
    });
    }

    

    // ========== ОБЩИЕ ФУНКЦИИ ОТКРЫТИЯ/ЗАКРЫТИЯ ПОПАПОВ ==========
    const userIcons = document.querySelectorAll('.header-icon[href="#"], [data-open="loginPopup"]');
    userIcons.forEach(icon => {
        icon.addEventListener('click', function(e) {
            e.preventDefault();
            openPopup('loginPopup');
        });
    });

    const callbackBtn = document.querySelector('.header-btn');
    if (callbackBtn) {
        callbackBtn.addEventListener('click', function() {
            openPopup('callbackPopup');
        });
    }

    document.querySelectorAll('[data-open]').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const popupId = this.getAttribute('data-open');
            openPopup(popupId);
        });
    });

    document.querySelectorAll('[data-close]').forEach(btn => {
        btn.addEventListener('click', function() {
            const popupId = this.getAttribute('data-close');
            closePopup(popupId);
        });
    });

    document.querySelectorAll('.popup-overlay').forEach(overlay => {
        overlay.addEventListener('click', function(e) {
            if (e.target === this) {
                closePopup(this.id);
            }
        });
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('.popup-overlay.active').forEach(popup => {
                closePopup(popup.id);
            });
            // Также закрываем фильтры при нажатии Escape
            if (filtersOverlay && filtersOverlay.classList.contains('active')) {
                closeFilters();
            }
        }
    });

    function openPopup(id) {
        const popup = document.getElementById(id);
        if (popup) {
            popup.classList.add('active');
            body.classList.add('popup-open');
        }
    }

    function closePopup(id) {
        const popup = document.getElementById(id);
        if (popup) {
            popup.classList.remove('active');
            if (!document.querySelector('.popup-overlay.active')) {
                body.classList.remove('popup-open');
            }
        }
    }

    document.querySelectorAll('.popup-filters__form, .popup-login__form, .popup-callback__form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            alert('Форма отправлена!');
            closePopup(this.closest('.popup-overlay').id);
        });
    });

    const phoneInput = document.querySelector('input[name="phone"]');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.startsWith('8')) value = '7' + value.slice(1);
            if (!value.startsWith('7')) value = '7' + value;
            
            let formatted = '+7';
            if (value.length > 1) formatted += ' (' + value.slice(1, 4);
            if (value.length >= 5) formatted += ') ' + value.slice(4, 7);
            if (value.length >= 8) formatted += '-' + value.slice(7, 9);
            if (value.length >= 10) formatted += '-' + value.slice(9, 11);
            
            e.target.value = formatted;
        });
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#' || href.length < 2) return;
            
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
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