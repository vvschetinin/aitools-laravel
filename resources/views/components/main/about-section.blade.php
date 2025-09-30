<section class="s-about section-type pt-0 bg-dark">
  <div class="container--middle">
    <div class="row element-animation-up">
      <div class="col-100">
        <h2 class="h2-title deco-line mb-1 mb-0--lg mt-05">Немного о себе</h2>
      </div>
      <article class="col-100">
        <h2 class="p-article mt-15">
          <span class="display-block">{{ getGreeting() }}</span>
          Меня зовут Владлен Щетинин.
        </h2>
        <!-- About Text-->
        @if (View::exists('partials.content.about-main'))
          @include('partials.content.about-main')
        @endif
      </article>
    </div>
    <div class="row mt-2 element-animation-up">
      <article class="col-100">
        <h2 class="h2-title">Мой подход включает:</h2>
        <ul class="competences-list mt-1 mb-2">
          <li>Адаптацию проекта к вашим целям</li>
          <li>Техническую поддержку и обучение</li>
          <li>Измеримость полученного результата</li>
          <li>Заинтересован в сотрудничестве с компаниями, реализующими проекты с участием AI</li>
        </ul>
        <p>
          За годы работы я имел дело с десяткам малых бизнесов — от интернет-магазинов до локальных сервисов, и
          знаю их потребности. Я верю, что технологии должны быть простыми, понятными и приносить реальную пользу.
          Давайте вместе сделаем ваш бизнес более эффективным и успешным!
        </p>
      </article>
      <div class="col-100 mt-2">
        <article>
          <h2 class="p-article color-white font-middle mb-0">Готовы к росту вашего бизнеса?</h2>
          <p>
            Хотите больше клиентов и эффективные процессы? Предлагаю качественный контент, AI-чат-боты для общения
            24/7, обновление дизайна и оптимизацию сайтов. Адаптирую решения под ваши задачи, чтобы усилить бренд и
            повысить прибыль. Свяжитесь для консультации, чтобы начать уже сегодня! Узнайте больше в моих
            <a class="hover-link" href="{{ route('services.index') }}">услугах</a>.
          </p>
        </article>
        <!-- Блок кнопок -->
        <div class="button-wrap flex justify-center mt-2 mt-3--lg">
          <button class="start-project-btn display-inline-block js-startproject" aria-haspopup="dialog"
            aria-controls="modal-form">Получить консультацию</button>
        </div>
      </div>
    </div>
  </div>
</section>
