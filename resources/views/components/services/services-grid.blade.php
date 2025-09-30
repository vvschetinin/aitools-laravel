<section class="section-type s-services bg-dark">
  <div class="container--middle">
    <div class="row content-block element-animation-up">
      <article class="col-100">
        <h2 class="h2-title deco-line mb-2">Рост вашего бизнеса с умными решениями</h2>
        <p>
          Хотите вывести свой бизнес на новый уровень? Перечисленные ниже услуги объединяют передовые технологии и
          проверенные подходы, чтобы автоматизировать
          процессы, привлекать больше клиентов и создавать контент, который работает. От умных чат-ботов и и
          контент-маркетинга до всех аспектов технической
          оптимизации — я помогу вам экономить время, сокращать затраты и достигать целей. Узнайте, как это может
          преобразить ваш бизнес уже сегодня!
        </p>
      </article>
    </div>

    <div class="row justify-center">
      <div class="col-100 col-md-50 col-lg-40 mb-2">
        <article class="services-item">
          <a href="{{ route('services.page', ['page' => 'content']) }}">
            <div class="services-banner">
              <picture class="inner">
                <img src="{{ asset('assets/images/services/content/content.webp') }}" alt="Баннер Контент-маркетинг" />
              </picture>
            </div>
          </a>
          <div class="services-prev">
            <div class="content">
              <h3 class="h3-title mb-1" itemprop="name">Контент-маркетинг</h3>
              <p itemprop="description">
                Контент, который идеально соответствует вашему стилю и задачам. Привлечение аудитории в соцсетях,
                создание презентаций и рекламных материалов.
              </p>
            </div>
            <a href="{{ route('services.page', ['page' => 'content']) }}" class="find-btn">Узнать больше</a>
          </div>
        </article>
      </div>

      <div class="col-100 col-md-50 col-lg-40 mb-2">
        <article class="services-item">
          <a href="{{ route('services.page', ['page' => 'aibots']) }}">
            <div class="services-banner">
              <picture class="inner">
                <img src="{{ asset('assets/images/services/aibots/aibots.webp') }}" alt="Баннер AI Чат-боты" />
              </picture>
            </div>
          </a>
          <div class="services-prev">
            <div class="content">
              <h3 class="h3-title mb-1" itemprop="name">AI Чат-боты</h3>
              <p itemprop="description">
                Автоматизированное общение с клиентами — от консультаций и поддержки до обработки заказов и сбора
                контактов. С AI чат-ботами вы всегда на связи!
              </p>
            </div>
            <a href="{{ route('services.page', ['page' => 'aibots']) }}" class="find-btn">Узнать больше</a>
          </div>
        </article>
      </div>

      <div class="col-100 col-md-50 col-lg-40 mb-2 mb-0--md">
        <article class="services-item">
          <a href="{{ route('services.page', ['page' => 'mailmarket']) }}">
            <div class="services-banner">
              <picture class="inner">
                <img src="{{ asset('assets/images/services/mailmarket/mailmarket.webp') }}"
                  alt="Баннер E-mail маркетинг" />
              </picture>
            </div>
          </a>
          <div class="services-prev">
            <div class="content">
              <h3 class="h3-title mb-1" itemprop="name">E-mail маркетинг</h3>
              <p itemprop="description">
                Разработка персонализированных e-mail кампаний с использованием современных платформ и подходов.
                Создание стратегий, адаптированных под ваш
                бизнес.
              </p>
            </div>
            <a href="{{ route('services.page', ['page' => 'mailmarket']) }}" class="find-btn">Узнать больше</a>
          </div>
        </article>
      </div>

      <div class="col-100 col-md-50 col-lg-40 mb-0">
        <article class="services-item">
          <a href="{{ route('services.page', ['page' => 'castom']) }}">
            <div class="services-banner">
              <picture class="inner">
                <img src="{{ asset('assets/images/services/castom/castom.webp') }}"
                  alt="Баннер Создание верстки для CMS" />
              </picture>
            </div>
          </a>
          <div class="services-prev">
            <div class="content">
              <h3 class="h3-title mb-1" itemprop="name">Создание верстки для CMS</h3>
              <p itemprop="description">
                Cоздание адаптивной, валидной верстку с базовой SEO-оптимизацией, использующей самые современные подходы
                и плагины. Идеальная работа на любых
                устройствах.
              </p>
            </div>
            <a href="{{ route('services.page', ['page' => 'castom']) }}" class="find-btn">Узнать больше</a>
          </div>
        </article>
      </div>
    </div>

    <div class="row element-animation-up">
      <article class="col-100 addservice">
        <h3 class="h3-title mb-1">Дополнительные работы и услуги:</h3>
        <ul class="services-list">
          <li>Анализ конкурентной среды с применением AI</li>
          <li>Техническая поддержка AI-решений</li>
          <li>Заинтересован в сотрудничестве с компаниями, реализующими проекты с использованием AI</li>
        </ul>
        <p>
          Хотите, чтобы ваш сайт работал безупречно и привлекал больше клиентов? Обеспечу его быструю загрузку,
          идеальную адаптацию под мобильные устройства и
          соответствие современным стандартам. Продуманные решения сделают сайт удобным для пользователей и усилят
          позиции вашего бизнеса в онлайне! Узнайте
          больше в моих
          <a class="hover-link" href="{{ route('cases.index') }}">кейсах</a>
          .
        </p>
        <!-- Блок кнопок -->
        <div class="button-wrap flex justify-center mt-2 mt-3--lg">
          <button class="start-project-btn display-inline-block js-startproject">Получить консультацию</button>
        </div>
      </article>
    </div>
  </div>
</section>
