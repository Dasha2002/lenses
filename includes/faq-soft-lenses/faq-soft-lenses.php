<section class="container-faq">
    <h2 class="section-title sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-back" data-sal-duration="1000">Часто задаваемые вопросы</h2>
    <p class="section-subtitle sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-back" data-sal-duration="1000">Ответы на самые распространенные вопросы о контроле миопии</p>

    <div class="faq-section">
        <div class="faq-item sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-back" data-sal-duration="1000">
            <div class="faq-question">С какого возраста можно начинать контроль миопии с помощью контактных линз?
            </div>
            <div class="faq-answer">
                <p>Контроль миопии с помощью контактных линз можно начинать с 6 лет. В этом возрасте дети уже
                    способны самостоятельно надевать и снимать линзы под наблюдением родителей. Однако решение о
                    начале контроля миопии принимается индивидуально с учетом состояния зрения ребенка и его
                    готовности к ношению линз.</p>
            </div>
        </div>

        <div class="faq-item sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-back" data-sal-duration="1000">
            <div class="faq-question">Насколько эффективны линзы для контроля миопии?</div>
            <div class="faq-answer">
                <p>Клинические исследования показывают, что специализированные линзы для контроля миопии могут
                    замедлить прогрессирование близорукости на 50-60% по сравнению с обычными очками или контактными
                    линзами. Эффективность зависит от регулярности ношения и соблюдения рекомендаций врача.</p>
            </div>
        </div>

        <div class="faq-item sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-back" data-sal-duration="1000">
            <div class="faq-question">Безопасны ли контактные линзы для детей?</div>
            <div class="faq-answer">
                <p>Да, контактные линзы абсолютно безопасны для детей при правильном использовании и соблюдении
                    правил гигиены. Однодневные линзы особенно безопасны, так как не требуют ухода и стерилизации.
                    Ребенок должен научиться правильно надевать, снимать и утилизировать линзы под наблюдением
                    родителей.</p>
            </div>
        </div>

        <div class="faq-item sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-back" data-sal-duration="1000">
            <div class="faq-question">Как часто нужно менять линзы для контроля миопии?</div>
            <div class="faq-answer">
                <p>Для контроля миопии рекомендуются однодневные линзы, которые меняются каждый день. Это
                    обеспечивает максимальную гигиену и комфорт. Никакого ухода за линзами не требуется — после
                    использования линза выбрасывается.</p>
            </div>
        </div>

        <div class="faq-item sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-back" data-sal-duration="1000">
            <div class="faq-question">Можно ли носить линзы для контроля миопии только часть дня?</div>
            <div class="faq-answer">
                <p>Для достижения максимального эффекта линзы для контроля миопии следует носить ежедневно в течение
                    всего дня (не менее 8 часов). Неполное ношение может снизить эффективность контроля миопии.
                    Однако в некоторых случаях врач может рекомендовать индивидуальный режим ношения.</p>
            </div>
        </div>

        <div class="faq-item sal-animate active" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-back" data-sal-duration="1000">
            <div class="faq-question">Что делать, если ребенок случайно потерял линзу?</div>
            <div class="faq-answer">
                <p>Если ребенок потерял линзу, не стоит беспокоиться — однодневные линзы недороги и легко
                    заменяются. Просто используйте новую линзу из запаса. Важно всегда иметь несколько запасных линз
                    дома и в школе. Если линза потеряна во время занятий, можно временно использовать очки до конца
                    дня.</p>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', function(e) {
            e.stopPropagation();
            
            if (item.classList.contains('active')) {
                item.classList.remove('active');
            } else {
                
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
                
                item.classList.add('active');
            }
        });
    });
    const activeItem = document.querySelector('.faq-item.active');
    if (activeItem) {
        activeItem.classList.add('active');
    }
});
</script>