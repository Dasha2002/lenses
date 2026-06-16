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
});