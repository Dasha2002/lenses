<main class="site-main block_padding product_columns_5">
    <div class="site-main__inner block_width gr-inner-pages">


        <div class="g-user-register-block">
            <div class="g-user-register-block__left">
                <form method="post" id="form_g-user-register">

                    <input type="hidden" name="user_id" value="">


                    <input type="hidden" name="mode" value="register">




                    <div class="g-form-field g-form-field--required">
                        <div class="g-form-field__title">
                            <label for="email">
                                E-mail
                                <span class="g-form-field__required-mark">*</span>
                            </label>

                        </div>
                        <div class="g-form-field__value">
                            <input class=" g-form-control-text g-form-control-value g-form-control--required" type="text" size="32" maxlength="50" value="" name="email" id="email">

                        </div>
                    </div>






                    <div class="g-form-field g-form-field--required">
                        <div class="g-form-field__title">
                            <label for="pwd">
                                Пароль
                                <span class="g-form-field__required-mark">*</span>
                            </label>

                        </div>
                        <div class="g-form-field__value">
                            <input class=" g-form-control-text g-form-control-value g-form-control--required" type="password" size="32" maxlength="32" value="" name="pwd" id="pwd">

                        </div>
                    </div>





                    <div class="g-form-field g-form-field--required">
                        <div class="g-form-field__title">
                            <label for="pwd2">
                                Введите пароль повторно
                                <span class="g-form-field__required-mark">*</span>
                            </label>

                        </div>
                        <div class="g-form-field__value">
                            <input class=" g-form-control-text g-form-control-value g-form-control--required" type="password" size="32" maxlength="32" value="" name="pwd2" id="pwd2">

                        </div>
                    </div>





                    <div class="g-form-field g-form-field--required">
                        <div class="g-form-field__title">
                            <label for="familia">
                                Фамилия
                                <span class="g-form-field__required-mark">*</span>
                            </label>

                        </div>
                        <div class="g-form-field__value">
                            <input class=" g-form-control-text g-form-control-value g-form-control--required" type="text" size="30" maxlength="100" value="" name="familia" id="familia">

                        </div>
                    </div>




                    <div class="g-form-field g-form-field--required">
                        <div class="g-form-field__title">
                            <label for="name">
                                Имя
                                <span class="g-form-field__required-mark">*</span>
                            </label>

                        </div>
                        <div class="g-form-field__value">
                            <input class=" g-form-control-text g-form-control-value g-form-control--required" type="text" size="32" maxlength="100" value="" name="name" id="name">

                        </div>
                    </div>




                    <div class="g-form-field">
                        <div class="g-form-field__title">
                            <label for="country">
                                Отчество
                            </label>

                        </div>
                        <div class="g-form-field__value">
                            <input class=" g-form-control-text g-form-control-value" type="text" size="30" maxlength="100" value="" name="country" id="country">

                        </div>
                    </div>





                    <div class="g-form-field g-form-field--required">
                        <div class="g-form-field__title">
                            <label for="telefon">
                                Телефон
                                <span class="g-form-field__required-mark">*</span>
                            </label>

                        </div>
                        <div class="g-form-field__value">
                            <input class=" g-form-control-text g-form-control-value g-form-control--required" type="text" size="30" maxlength="100" value="" name="telefon" id="telefon">

                        </div>
                    </div>




                    <div class="g-form-field  g-form-field--required">
                        <div class="g-form-field__value">
                            <ul>
                                <li>
                                    <label class="g-form-control-checkbox">

                                        <input type="checkbox" value="Ознакомлен с пользовательским соглашением.  Подробнее " name="personal_data" class="visible g-form-control-value">
                                        <span class="g-form-control-checkbox__input"></span>
                                        <span class="g-form-control-checkbox__label">
                                            <span class="g-form-field__required-mark">*</span>

                                            Ознакомлен с пользовательским соглашением. <a href="/users/agreement" target="_blank">Подробнее</a>
                                        </span>

                                    </label>

                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="g-form-row g-form-row--submit">
                        <input type="submit" class="g-buttons g-user__button" value="Зарегистрироваться">
                    </div>
                    <textarea name="smart-token" style="display: none !important;"></textarea>
                </form>
            </div>

            <div class="g-user-register-block__right page-registration">



                <div class="g-form-field__title"><b>Также Вы можете войти через:</b></div>
                <div class="g-social">
                    <div class="g-social__row">
                        <div id="VkIdSdkOneTap-1">
                            <div id="twuyhe" data-test-id="oneTap" data-scheme="light" data-skin="primary" data-state="not_loaded">
                                <div><button class="VkIdWebSdk__button_twuyhe VkIdWebSdk__button_reset_twuyhe VkIdWebSdk__button_animation_twuyhe"><span class="VkIdWebSdk__button_in_twuyhe"><span class="VkIdWebSdk__button_content_twuyhe"><span class="VkIdWebSdk__button_logo_twuyhe">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path id="logoBg" fill-rule="evenodd" clip-rule="evenodd" d="M4.2653 4.2653C3 5.5306 3 7.56707 3 11.64V12.36C3 16.4329 3 18.4694 4.2653 19.7347C5.5306 21 7.56706 21 11.64 21H12.36C16.4329 21 18.4694 21 19.7347 19.7347C21 18.4694 21 16.4329 21 12.36V11.64C21 7.56707 21 5.5306 19.7347 4.2653C18.4694 3 16.4329 3 12.36 3H11.64C7.56706 3 5.5306 3 4.2653 4.2653Z" fill="white"></path>
                                                        <path id="logoIcon" d="M12.6095 16C8.55576 16 6.09636 13.1823 6 8.5H8.05309C8.1171 11.9395 9.67903 13.397 10.8764 13.6967V8.5H12.8439V11.4683C13.9988 11.3401 15.2076 9.98991 15.614 8.5H17.5505C17.2406 10.3321 15.9246 11.6823 14.9948 12.2392C15.9253 12.6895 17.4225 13.8682 18 16H15.8714C15.4219 14.5749 14.321 13.4712 12.8446 13.3213V16H12.6095Z" fill="#0077FF"></path>
                                                    </svg>
                                                </span><span class="VkIdWebSdk__button_text_twuyhe" style="width: 125px;"><span data-active="true">Войти с VK ID</span></span><span class="VkIdWebSdk__button_spinner_twuyhe">
                                                    
                                                </span></span></span></button></div>
                            </div>
                        </div>
                    </div>
                    <!--noindex-->
                    <a href="/users/hauth/start/yandex" class="g-social__item g-social__item--ya" rel="nofollow">Yandex</a>
                    <!--/noindex-->

                </div>


            </div>

        </div>

    </div>

</main>