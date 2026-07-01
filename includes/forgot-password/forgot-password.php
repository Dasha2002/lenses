<main class="site-main block_padding product_columns_5">
    <div class="site-main__inner block_width gr-inner-pages">


        <div class="g-notice g-notice--plain">
            Подтвердите адрес вашей электронной почты. На него будет отправлен пароль.
        </div>
        <form method="post" id="forgot-password-form">

            <input type="hidden" name="mode" value="forgot_password">




            <div class="g-form-row">


                <div class="g-form-field  g-form-field--title-pos-1 g-form-field--required">

                    <div class="g-form-field__title ">
                        <label for="email">
                            E-mail
                            <span class="g-form-field__required-mark">*</span>
                        </label>

                    </div>
                    <div class="g-form-field__value">
                        <input placeholder="sample@domain.ru" required="" class="g-form-control-text g-form-control-value g-form-control--required g-form-control-text-forgot" type="email" size="30" maxlength="100" value="" name="email" id="email">
                    </div>
                </div>
            </div>

            <div class="g-form-row g-form-row--submit">
                <button class="btn-forgot">Напомнить пароль</button>
            </div>
            <textarea name="smart-token" style="display: none !important;"></textarea>
        </form>





    </div>

</main>