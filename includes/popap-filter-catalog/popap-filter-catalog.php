<div class="cat-filter-popup" id="catalogFilterPopup">
    <div class="cat-filter-popup__overlay"></div>
    <div class="cat-filter-popup__content">
        <button class="cat-filter-popup__close" type="button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M18 6L6 18M6 6L18 18" stroke="#666" stroke-width="2" stroke-linecap="round" />
            </svg>
        </button>

        <h2 class="cat-filter-popup__title">Фильтр</h2>

        <div class="cat-filter-popup__body">
            <!-- Цена -->
            <div class="cat-filter-section">
                <div class="cat-filter-section__header">
                    <span class="cat-filter-section__title">Цена ₽</span>
                    <button class="cat-filter-section__toggle" type="button">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4V20M4 12H20" stroke="#999" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <div class="cat-filter-section__content">
                    <div class="cat-filter-price-inputs">
                        <input type="text" placeholder="От" class="cat-filter-price-input">
                        <input type="text" placeholder="До" class="cat-filter-price-input">
                    </div>
                </div>
            </div>

            <!-- Производитель -->
            <div class="cat-filter-section">
                <div class="cat-filter-section__header">
                    <span class="cat-filter-section__title">Производитель</span>
                    <button class="cat-filter-section__toggle" type="button">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4V20M4 12H20" stroke="#999" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <div class="cat-filter-section__content">
                    <div class="cat-filter-vendors-list">
                        <!-- Видимые производители (5 штук) -->
                        <label class="cat-filter-checkbox">
                            <input type="checkbox" class="cat-filter-checkbox__input">
                            <span class="cat-filter-checkbox__label">Alcon</span>
                        </label>
                        <label class="cat-filter-checkbox">
                            <input type="checkbox" class="cat-filter-checkbox__input">
                            <span class="cat-filter-checkbox__label">Bausch & Lomb</span>
                        </label>
                        <label class="cat-filter-checkbox">
                            <input type="checkbox" class="cat-filter-checkbox__input">
                            <span class="cat-filter-checkbox__label">Belmore</span>
                        </label>
                        <label class="cat-filter-checkbox">
                            <input type="checkbox" class="cat-filter-checkbox__input">
                            <span class="cat-filter-checkbox__label">Cooper Vision</span>
                        </label>
                        <label class="cat-filter-checkbox">
                            <input type="checkbox" class="cat-filter-checkbox__input">
                            <span class="cat-filter-checkbox__label">Johnson & Johnson</span>
                        </label>
                        <!-- Скрытые производители (4 штуки) -->
                        <label class="cat-filter-checkbox cat-filter-vendor-hidden">
                            <input type="checkbox" class="cat-filter-checkbox__input">
                            <span class="cat-filter-checkbox__label">Menicon</span>
                        </label>
                        <label class="cat-filter-checkbox cat-filter-vendor-hidden">
                            <input type="checkbox" class="cat-filter-checkbox__input">
                            <span class="cat-filter-checkbox__label">Ok Vision</span>
                        </label>
                        <label class="cat-filter-checkbox cat-filter-vendor-hidden">
                            <input type="checkbox" class="cat-filter-checkbox__input">
                            <span class="cat-filter-checkbox__label">Линз-Очки</span>
                        </label>
                        <label class="cat-filter-checkbox cat-filter-vendor-hidden">
                            <input type="checkbox" class="cat-filter-checkbox__input">
                            <span class="cat-filter-checkbox__label">Офтальмикс</span>
                        </label>
                    </div>
                    <button class="cat-filter-show-more" type="button">
                        <span class="cat-filter-show-more-text">Показать еще 4</span>
                        <span class="cat-filter-show-less-text" style="display: none;">Свернуть 4</span>
                    </button>
                </div>
            </div>

            <!-- Дизайн линз -->
            <div class="cat-filter-section">
                <div class="cat-filter-section__header">
                    <span class="cat-filter-section__title">Дизайн линз</span>
                    <button class="cat-filter-section__toggle" type="button">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4V20M4 12H20" stroke="#999" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <div class="cat-filter-section__content">
                    <label class="cat-filter-checkbox">
                        <input type="checkbox" class="cat-filter-checkbox__input">
                        <span class="cat-filter-checkbox__label">Сферический</span>
                    </label>
                    <label class="cat-filter-checkbox">
                        <input type="checkbox" class="cat-filter-checkbox__input">
                        <span class="cat-filter-checkbox__label">Торический</span>
                    </label>
                    <label class="cat-filter-checkbox">
                        <input type="checkbox" class="cat-filter-checkbox__input">
                        <span class="cat-filter-checkbox__label">Мультифокальный</span>
                    </label>
                </div>
            </div>

            <!-- Тип цвета -->
            <div class="cat-filter-section">
                <div class="cat-filter-section__header">
                    <span class="cat-filter-section__title">Тип цвета</span>
                    <button class="cat-filter-section__toggle" type="button">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4V20M4 12H20" stroke="#999" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <div class="cat-filter-section__content">
                    <label class="cat-filter-checkbox">
                        <input type="checkbox" class="cat-filter-checkbox__input">
                        <span class="cat-filter-checkbox__label">Прозрачные</span>
                    </label>
                    <label class="cat-filter-checkbox">
                        <input type="checkbox" class="cat-filter-checkbox__input">
                        <span class="cat-filter-checkbox__label">Цветные</span>
                    </label>
                </div>
            </div>

            <!-- Режим замены -->
            <div class="cat-filter-section">
                <div class="cat-filter-section__header">
                    <span class="cat-filter-section__title">Режим замены</span>
                    <button class="cat-filter-section__toggle" type="button">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4V20M4 12H20" stroke="#999" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <div class="cat-filter-section__content">
                    <label class="cat-filter-checkbox">
                        <input type="checkbox" class="cat-filter-checkbox__input">
                        <span class="cat-filter-checkbox__label">Ежедневные</span>
                    </label>
                    <label class="cat-filter-checkbox">
                        <input type="checkbox" class="cat-filter-checkbox__input">
                        <span class="cat-filter-checkbox__label">Еженедельные</span>
                    </label>
                    <label class="cat-filter-checkbox">
                        <input type="checkbox" class="cat-filter-checkbox__input">
                        <span class="cat-filter-checkbox__label">Ежемесячные</span>
                    </label>
                </div>
            </div>

            <!-- Хит продаж -->
            <div class="cat-filter-section">
                <div class="cat-filter-section__header">
                    <span class="cat-filter-section__title">Хит продаж</span>
                    <button class="cat-filter-section__toggle" type="button">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4V20M4 12H20" stroke="#999" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <div class="cat-filter-section__content">
                    <select class="cat-filter-select">
                        <option value="">Все</option>
                        <option value="Y">Да</option>
                        <option value="N">Нет</option>
                    </select>
                </div>
            </div>

            <!-- Акция -->
            <div class="cat-filter-section">
                <div class="cat-filter-section__header">
                    <span class="cat-filter-section__title">Акция</span>
                    <button class="cat-filter-section__toggle" type="button">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4V20M4 12H20" stroke="#999" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <div class="cat-filter-section__content">
                    <select class="cat-filter-select">
                        <option value="">Все</option>
                        <option value="Y">Да</option>
                        <option value="N">Нет</option>
                    </select>
                </div>
            </div>

            <!-- Новинка -->
            <div class="cat-filter-section">
                <div class="cat-filter-section__header">
                    <span class="cat-filter-section__title">Новинка</span>
                    <button class="cat-filter-section__toggle" type="button">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4V20M4 12H20" stroke="#999" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <div class="cat-filter-section__content">
                    <select class="cat-filter-select">
                        <option value="">Все</option>
                        <option value="Y">Да</option>
                        <option value="N">Нет</option>
                    </select>
                </div>
            </div>

            <!-- Спецпредложение -->
            <div class="cat-filter-section">
                <div class="cat-filter-section__header">
                    <span class="cat-filter-section__title">Спецпредложение</span>
                    <button class="cat-filter-section__toggle" type="button">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4V20M4 12H20" stroke="#999" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <div class="cat-filter-section__content">
                    <select class="cat-filter-select">
                        <option value="">Все</option>
                        <option value="Y">Да</option>
                        <option value="N">Нет</option>
                    </select>
                </div>
            </div>

            <!-- Кнопки -->
            <div class="cat-filter-actions">
                <button class="cat-filter-actions__submit" type="button">
                    Показать <span class="cat-filter-count">0</span>
                </button>
                <button class="cat-filter-actions__reset" type="button">
                    Сбросить фильтр
                    <svg class="gr-svg-icon">
                        <use xlink:href="#icon_shop_refresh"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const popup = document.getElementById('catalogFilterPopup');
        if (!popup) return;

        const overlay = popup.querySelector('.cat-filter-popup__overlay');
        const closeBtn = popup.querySelector('.cat-filter-popup__close');
        const resetBtn = popup.querySelector('.cat-filter-actions__reset');

        // Открытие/закрытие попапа 
        function openPopup() {
            popup.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closePopup() {
            popup.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Закрытие по клику на крестик
        if (closeBtn) {
            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                closePopup();
            });
        }

        // Закрытие по клику на оверлей
        if (overlay) {
            overlay.addEventListener('click', function(e) {
                e.preventDefault();
                closePopup();
            });
        }

        // Закрытие по Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && popup.classList.contains('active')) {
                closePopup();
            }
        });

        //  Делегирование событий для секций 
        popup.addEventListener('click', function(e) {

            const header = e.target.closest('.cat-filter-section__header');
            if (header) {
                e.preventDefault();
                e.stopPropagation();

                const section = header.closest('.cat-filter-section');
                const isActive = section.classList.contains('cat-filter-section--active');


                popup.querySelectorAll('.cat-filter-section').forEach(function(s) {
                    s.classList.remove('cat-filter-section--active');
                });

                if (!isActive) {
                    section.classList.add('cat-filter-section--active');
                }
                return;
            }

            // Клик по кнопке "Показать еще" / "Скрыть"
            const showMoreBtn = e.target.closest('.cat-filter-show-more');
            if (showMoreBtn) {
                e.preventDefault();
                e.stopPropagation();

                const section = showMoreBtn.closest('.cat-filter-section');
                const hiddenVendors = section.querySelectorAll('.cat-filter-vendor-hidden');
                const showMoreText = showMoreBtn.querySelector('.cat-filter-show-more-text');
                const showLessText = showMoreBtn.querySelector('.cat-filter-show-less-text');
                const isExpanded = showMoreBtn.classList.contains('expanded');

                if (isExpanded) {
                    // Скрываем дополнительных производителей
                    hiddenVendors.forEach(function(vendor) {
                        vendor.classList.remove('show');
                    });
                    showMoreText.style.display = 'inline';
                    showLessText.style.display = 'none';
                    showMoreBtn.classList.remove('expanded');
                } else {
                    // Показываем дополнительных производителей
                    hiddenVendors.forEach(function(vendor) {
                        vendor.classList.add('show');
                    });
                    showMoreText.style.display = 'none';
                    showLessText.style.display = 'inline';
                    showMoreBtn.classList.add('expanded');
                }
                return;
            }

            //  Клик по кнопке toggle (плюсик) - не раскрываем секцию
            const toggleBtn = e.target.closest('.cat-filter-section__toggle');
            if (toggleBtn) {
                e.preventDefault();
                e.stopPropagation();
                return;
            }
        });

        // Сброс фильтра 
        function resetFilter() {
            // Сбрасываем чекбоксы
            popup.querySelectorAll('.cat-filter-checkbox__input').forEach(function(cb) {
                cb.checked = false;
            });

            // Сбрасываем поля цены
            popup.querySelectorAll('.cat-filter-price-input').forEach(function(input) {
                input.value = '';
            });

            // Сбрасываем селекты
            popup.querySelectorAll('.cat-filter-select').forEach(function(select) {
                select.selectedIndex = 0;
            });

            // Сбрасываем счетчик
            const countEl = popup.querySelector('.cat-filter-count');
            if (countEl) {
                countEl.textContent = '0';
            }

            // Скрываем дополнительных производителей если они показаны
            const showMoreBtn = popup.querySelector('.cat-filter-show-more');
            if (showMoreBtn && showMoreBtn.classList.contains('expanded')) {
                const section = showMoreBtn.closest('.cat-filter-section');
                const hiddenVendors = section.querySelectorAll('.cat-filter-vendor-hidden');
                hiddenVendors.forEach(function(vendor) {
                    vendor.classList.remove('show');
                });
                const showMoreText = showMoreBtn.querySelector('.cat-filter-show-more-text');
                const showLessText = showMoreBtn.querySelector('.cat-filter-show-less-text');
                showMoreText.style.display = 'inline';
                showLessText.style.display = 'none';
                showMoreBtn.classList.remove('expanded');
            }
        }

        if (resetBtn) {
            resetBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                resetFilter();
            });
        }

        //  Экспортируем функции глобально 
        window.openCatFilterPopup = openPopup;
        window.closeCatFilterPopup = closePopup;
        window.resetCatFilter = resetFilter;
    });
</script>