
<!-- Попап фильтра -->
<div class="filter-popup-overlay" id="filterPopup">
    <div class="filter-popup">
        <!-- Крестик закрытия -->
        <button class="filter-popup-close" id="filterPopupClose">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M18 6L6 18M6 6l12 12" stroke="#666" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
        </button>

        <!-- Заголовок -->
        <h2 class="filter-popup-title">Подбор по параметрам</h2>

        <!-- Форма фильтра -->
        <form class="filter-form" id="filterForm">
            <div class="filter-grid">
                
                <!-- Строка 1: Цена, Название, Артикул -->
                <div class="filter-field">
                    <label class="filter-label">Цена (₽):</label>
                    <div class="filter-price-row">
                        <input type="text" name="price_min" placeholder="от" class="filter-input filter-input-small">
                        <input type="text" name="price_max" placeholder="до" class="filter-input filter-input-small">
                    </div>
                </div>

                <div class="filter-field">
                    <label class="filter-label">Название:</label>
                    <input type="text" name="name" class="filter-input">
                </div>

                <div class="filter-field">
                    <label class="filter-label">Артикул:</label>
                    <input type="text" name="article" class="filter-input">
                </div>

                <!-- Строка 2: Текст, Категория, Производитель -->
                <div class="filter-field">
                    <label class="filter-label">Текст:</label>
                    <input type="text" name="search_text" class="filter-input">
                </div>

                <div class="filter-field">
                    <label class="filter-label">Выберите категорию:</label>
                    <div class="filter-select-wrapper">
                        <select name="category" class="filter-select">
                            <option value="">Все</option>
                            <option value="novinki">Новинки</option>
                            <option value="linzy">Мягкие контактные линзы</option>
                            <option value="aksessuary">Аксессуары для контактных линз</option>
                            <option value="solncezachitnye">Солнцезащитные очки</option>
                            <option value="opravy">Оправы</option>
                            <option value="detskie">Очки для детей и подростков</option>
                        </select>
                        <svg class="filter-select-arrow" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M3 4.5L6 7.5L9 4.5" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <div class="filter-field filter-field-vendors">
                    <label class="filter-label">Производитель:</label>
                    <div class="filter-vendors-list">
                        <label class="filter-checkbox">
                            <input type="checkbox" name="vendor[]" value="alcon">
                            <span class="filter-checkbox-custom"></span>
                            <span>Alcon</span>
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox" name="vendor[]" value="avizor">
                            <span class="filter-checkbox-custom"></span>
                            <span>Avizor</span>
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox" name="vendor[]" value="bausch">
                            <span class="filter-checkbox-custom"></span>
                            <span>Bausch&Lomb</span>
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox" name="vendor[]" value="belmore">
                            <span class="filter-checkbox-custom"></span>
                            <span>Belmore</span>
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox" name="vendor[]" value="cooper">
                            <span class="filter-checkbox-custom"></span>
                            <span>Cooper Vision</span>
                        </label>
                        <!-- Скрытые чекбоксы -->
                        <label class="filter-checkbox filter-vendor-hidden">
                            <input type="checkbox" name="vendor[]" value="johnson">
                            <span class="filter-checkbox-custom"></span>
                            <span>Johnson & Johnson</span>
                        </label>
                        <label class="filter-checkbox filter-vendor-hidden">
                            <input type="checkbox" name="vendor[]" value="menicon">
                            <span class="filter-checkbox-custom"></span>
                            <span>Menicon</span>
                        </label>
                        <label class="filter-checkbox filter-vendor-hidden">
                            <input type="checkbox" name="vendor[]" value="okvision">
                            <span class="filter-checkbox-custom"></span>
                            <span>Ok Vision</span>
                        </label>
                        <label class="filter-checkbox filter-vendor-hidden">
                            <input type="checkbox" name="vendor[]" value="linz">
                            <span class="filter-checkbox-custom"></span>
                            <span>Линз-Очки</span>
                        </label>
                        <label class="filter-checkbox filter-vendor-hidden">
                            <input type="checkbox" name="vendor[]" value="oftalmiks">
                            <span class="filter-checkbox-custom"></span>
                            <span>Офтальмикс</span>
                        </label>
                    </div>
                    <button type="button" class="filter-toggle-vendors" id="filterToggleVendors">
                        Показать ещё 5
                    </button>
                </div>

                <!-- Строка 3: Хит продаж, Акция, Новинка -->
                <div class="filter-field">
                    <label class="filter-label">Хит продаж:</label>
                    <div class="filter-select-wrapper">
                        <select name="hit" class="filter-select">
                            <option value="">Все</option>
                            <option value="1">да</option>
                            <option value="0">нет</option>
                        </select>
                        <svg class="filter-select-arrow" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M3 4.5L6 7.5L9 4.5" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <div class="filter-field">
                    <label class="filter-label">Акция:</label>
                    <div class="filter-select-wrapper">
                        <select name="action" class="filter-select">
                            <option value="">Все</option>
                            <option value="1">да</option>
                            <option value="0">нет</option>
                        </select>
                        <svg class="filter-select-arrow" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M3 4.5L6 7.5L9 4.5" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <div class="filter-field">
                    <label class="filter-label">Новинка:</label>
                    <div class="filter-select-wrapper">
                        <select name="new" class="filter-select">
                            <option value="">Все</option>
                            <option value="1">да</option>
                            <option value="0">нет</option>
                        </select>
                        <svg class="filter-select-arrow" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M3 4.5L6 7.5L9 4.5" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <!-- Строка 4: Спецпредложение, Результатов, Кнопка -->
                <div class="filter-field">
                    <label class="filter-label">Спецпредложение:</label>
                    <div class="filter-select-wrapper">
                        <select name="special" class="filter-select">
                            <option value="">Все</option>
                            <option value="1">да</option>
                            <option value="0">нет</option>
                        </select>
                        <svg class="filter-select-arrow" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M3 4.5L6 7.5L9 4.5" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <div class="filter-field">
                    <label class="filter-label">Результатов на странице:</label>
                    <div class="filter-select-wrapper">
                        <select name="per_page" class="filter-select">
                            <option value="5">5</option>
                            <option value="20">20</option>
                            <option value="35">35</option>
                            <option value="50" selected>50</option>
                            <option value="65">65</option>
                            <option value="80">80</option>
                            <option value="95">95</option>
                        </select>
                        <svg class="filter-select-arrow" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M3 4.5L6 7.5L9 4.5" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <div class="filter-field filter-field-submit">
                    <button type="submit" class="filter-submit-btn">Поиск</button>
                </div>

            </div>
        </form>
    </div>
</div>