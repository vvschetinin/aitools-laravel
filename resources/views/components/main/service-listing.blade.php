<section class="s-service-listing section--inner bg-dark">
  <div class="container--middle">
    <div class="row content-block element-animation-up">
      <div class="col-100 flex justify-center">
        <h2 class="hidden">Заголовок секции</h2>
        <blockquote class="home-quotes">
          {!! getSlogan() !!}
        </blockquote>
      </div>
      <div class="col-100">
        <article class="mt-3 mt-5--lg">
          <h2 class="p-article mb-0">
            Создаю контент, разрабатываю AI-чат-боты для общения 24/7 и осуществляю техническую поддержку, чтобы ваш
            бренд выделялся, а процессы работали
            эффективно. Адаптирую решения под ваши цели, чтобы усилить бренд, привлечь клиентов и повысить прибыль.
            Получите персонализированный подход, который
            экономит время и приносит результат. Начните с консультации и раскройте потенциал вашего бизнеса уже
            сегодня!
          </h2>
        </article>
      </div>
    </div>
    <div class="row element-animation-up">
      <div class="col-100">
        <!-- Slider Service-->
        @if (View::exists('partials.sliders.service'))
          @include('partials.sliders.service')
        @endif
        <!-- Блок кнопок -->
        <div class="button-wrap flex justify-center mt-2 mt-3--lg">
          <button class="start-project-btn display-inline-block js-startproject" aria-haspopup="dialog"
            aria-controls="modal-form">Получить консультацию</button>
        </div>
      </div>
    </div>
  </div>
</section>
