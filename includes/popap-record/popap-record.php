<div class="remodal-overlay" id="callbackModal">
        <div class="remodal">
            <button class="remodal-close-btn" onclick="closeModal()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 6L6 18M6 6l12 12"/>
                </svg>
            </button>
            
            <div class="header-callback__container">
                <div class="tpl-anketa">
                    <div class="tpl-anketa__left">
                        <div class="tpl-anketa__title">Оставить заявку</div>
                    </div>
                    
                    <div class="tpl-anketa__right">
                        <form method="post" action="">
                            <input type="hidden" name="form_id" value="7488907">
                            
                            <!-- Имя -->
                            <div class="tpl-field type-text field-required">
                                <div class="field-value">
                                    <input type="text" required size="30" maxlength="100" name="d[0]" placeholder="Имя *">
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="tpl-field type-text">
                                <div class="field-value">
                                    <input type="email" size="30" maxlength="100" name="d[1]" placeholder="Электронная почта">
                                </div>
                            </div>
                            
                            <!-- Телефон -->
                            <div class="tpl-field type-phone field-required">
                                <div class="field-value">
                                    <input type="tel" required size="30" maxlength="20" name="d[3]" placeholder="+7" inputmode="tel">
                                </div>
                            </div>
                            
                            <!-- Выбор услуги -->
                            <div class="tpl-field type-select field-required">
                                <div class="field-title">Выбрать услугу: <span class="field-required-mark">*</span></div>
                                <div class="field-value">
                                    <label class="gr-select-wrapper">
                                        <select size="1" required name="d[4]">
                                            <option value="">не выбрано</option>
                                            <option value="Проверка зрения">Проверка зрения</option>
                                            <option value="Консультация">Консультация</option>
                                            <option value="Контрольный осмотр">Контрольный осмотр</option>
                                            <option value="Подбор очков">Подбор очков</option>
                                            <option value="Подбор мягких контактных линз">Подбор мягких контактных линз</option>
                                            <option value="Подбор ортокератологических контактных линз">Подбор ортокератологических контактных линз</option>
                                            <option value="Подбор склеральных контактных линз">Подбор склеральных контактных линз</option>
                                            <option value="Подбор роговичных контактных линз">Подбор роговичных контактных линз</option>
                                            <option value="Прочие услуги">Прочие услуги</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            
                            <!-- Чем пользуетесь -->
                            <div class="tpl-field type-select">
                                <div class="field-title">Чем пользуетесь для коррекции зрения:</div>
                                <div class="field-value">
                                    <label class="gr-select-wrapper">
                                        <select size="1" name="d[5]">
                                            <option value="">не выбрано</option>
                                            <option value="Контактные линзы">Контактные линзы</option>
                                            <option value="Очки">Очки</option>
                                            <option value="Очки и контактные линзы">Очки и контактные линзы</option>
                                            <option value="Ничем не пользуюсь">Ничем не пользуюсь</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            
                            <!-- Выбор врача -->
                            <div class="tpl-field type-select">
                                <div class="field-title">Выбор врача:</div>
                                <div class="field-value">
                                    <label class="gr-select-wrapper">
                                        <select size="1" name="d[6]">
                                            <option value="">не выбрано</option>
                                            <option value="Морозов Роман Александрович">Морозов Роман Александрович</option>
                                            <option value="Жармуханова Айслу Курмантаевна">Жармуханова Айслу Курмантаевна</option>
                                            <option value="Гусева Марина Сергеевна">Гусева Марина Сергеевна</option>
                                            <option value="Липунова Олеся Алексеевна">Липунова Олеся Алексеевна</option>
                                            <option value="Степанец Иван Русланович">Степанец Иван Русланович</option>
                                            <option value="Лесакова Алёна Константиновна">Лесакова Алёна Константиновна</option>
                                            <option value="Артемов Андрей Александрович">Артемов Андрей Александрович</option>
                                            <option value="Борисова Екатерина Александровна">Борисова Екатерина Александровна</option>
                                            <option value="Юденков Геннадий Юрьевич">Юденков Геннадий Юрьевич</option>
                                            <option value="Долгова Марина Викторовна">Долгова Марина Викторовна</option>
                                            <option value="Монастырева Наталия Романовна">Монастырева Наталия Романовна</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            
                            <!-- Выбор салона -->
                            <div class="tpl-field type-select field-required">
                                <div class="field-title">Выбрать салон: <span class="field-required-mark">*</span></div>
                                <div class="field-value">
                                    <label class="gr-select-wrapper">
                                        <select size="1" required name="d[7]">
                                            <option value="">не выбрано</option>
                                            <option value="Центр коррекции зрения &quot;Озерки&quot;">Центр коррекции зрения "Озерки"</option>
                                            <option value="Салон оптики &quot;Академический&quot;">Салон оптики "Академический"</option>
                                            <option value="Салон оптики &quot;Дыбенко&quot;">Салон оптики "Дыбенко"</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            
                            <!-- Дата визита -->
                            <div class="tpl-field type-calendar field-required">
                                <div class="field-value">
                                    <input type="text" size="15" readonly name="d[8]" class="datepickerInit" placeholder="Желаемая дата визита *">
                                </div>
                            </div>
                            
                            <!-- Согласие на обработку данных -->
                            <div class="tpl-field type-checkbox field-required">
                                <div class="field-value">
                                    <ul>
                                        <li>
                                            <label>
                                                <input required type="checkbox" value="Да" name="d[9]">
                                                <span>Я ознакомлен (-а) с Условиями пользования сайтом и Политикой в отношении обработки и защиты персональных данных и даю согласие на обработку <a href="/users/agreement">моих персональных данных</a>" <span class="field-required-mark">*</span></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Рассылка -->
                            <div class="tpl-field type-checkbox">
                                <div class="field-value">
                                    <ul>
                                        <li>
                                            <label>
                                                <input type="checkbox" value="Да" name="d[10]">
                                                <span>Хочу получать полезные рассылки: об акциях, скидках, новостях</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Кнопка отправки -->
                            <div class="tpl-field tpl-field-button">
                                <button type="submit" class="tpl-form-button">Оформить запись</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>