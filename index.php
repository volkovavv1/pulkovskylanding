<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./styles/global.css" />
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="stylesheet" href="./styles/carousel.css" />
    <link rel="shortcut icon" href="./img/favicon.png">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Школьный Вайб в Пулковском!</title>
    <script
      src="https://code.jquery.com/jquery-2.2.4.min.js"
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php
     include("input.php");
     ?>
  </head>
  <body>
    <p class="out"></p>
    <main class="main">
      <div class="promo">
        <header class="header">
          <div class="header-container">
            <div class="logo">
              <div class="logo-pulk" id="logopulk-one">
                <img
                  class="logopulk-icon"
                  alt=""
                  src="./img/pulklogo.svg"
                />
              </div>
              
            </div>
              <nav class="header-navigation">
                <a class="header-li" href="#participate-id">Как участвовать?</a>
                <a class="header-li" href="#win-section__id">Призы</a>
                <a class="header-li" href="#questions-id">Вопросы и ответы</a>
                <a class="header-li header-li__check" href="#addcheck-id">Зарегистрировать чек</a>
              </nav>
              <svg fill="#FFFFFF" class="burger-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/>
              </svg>
          </div>
        </header>
        <div class="promo-group">
          <div class="logo-lavka" id="logolavka-one">
            <img
              class="logolavka-icon"
              loading="lazy"
              alt=""
              src="./img/lavkalogo.svg"
            />
          </div>
          <div class="heading-group">
            <p class="promo-date">3 сентября - 18 октября 2024</p>
            <p class="promo-header__green">ШКОЛЬНЫЙ</p>

            <div class="vibe-heading">
              <div>
                <img
                  class="lightning-icon"
                  loading="lazy"
                  alt=""
                  src="./img/lightning-icon.png"
                />
              </div>
              <h1 class="promo-header__vibe">ВАЙБ</h1>
              <div>
                <img
                  class="lightning-icon"
                  alt=""
                  src="./img/lightning-icon.png"
                />
              </div>
            </div>
            <div class="promo-cake__mobile"></div>
            <div class="promo-participate">Участвуйте в <br> <span class="span-pink">РОЗЫГРЫШЕ</span> призов!</div>
            <span class="span-pink__mobile">РОЗЫГРЫШ ПРИЗОВ!</span>
            <button class="registration-btn">Зарегистрировать чек</button>
          </div>
          <div class="promo-cake"></div>
        </div>
      </div>


      <section class="participate-section" id="participate-id">
        <div class="participate">
        <div class="participate-wrapper">
          <div class="heading-white participate-heading" data-aos="fade-up">Как участвовать?</div>
          <div class="participate-container">
          <div class="step step-one" data-aos="fade-up" data-aos-delay="150">
            <div class="cake-image">
              <img
                class="cake-img"
                alt=""
                src="./img/participatecake.png"
              />
              <div class="circle-yellow-group group-one">
                <div class="circle-yellow"></div>
                <p class="circle-text circle-text__one">1</p>
              </div>
            </div>
            <p class="participate-text">
                  Совершайте покупки в универсамах сети "Пулковский" и лавках "Daily Meal" от 1000 р.
            </p>
          </div>
          <div class="step step-two" data-aos="fade-up" data-aos-delay="300">
            <div class="smartphone-image">
              <img
                class="smartphone-img"
                loading="lazy"
                alt=""
                src="./img/participatesmartphone.png"
              />
              <div class="circle-yellow-group group-two">
                <div class="circle-yellow"></div>
                <div class="circle-text circle-text__two">2</div>
              </div>
            </div>   
            <p class="participate-text participate-text__two">
              Зарегистрируйте чек на сайте. Количество чеков 
              <br />
              на одного участника
              <br />
              не ограничено!
            </p>
          </div> 
          <div class="step step-three" data-aos="fade-up" data-aos-delay="450">
            <div class="shop-image">
              <img
                class="shop-img"
                loading="lazy"
                alt=""
                src="./img/image-placeholder.png"
              />
              <div class="circle-yellow-group group-three">
                <div class="circle-yellow"></div>
                <div class="circle-text circle-text__two">3</div>
              </div>
            </div>
            <p class="participate-text participate-text__three">
              Розыгрыш состоится 18.10.2024 на празднике
              <br />
              “День осеннего гостеприимства
              <br />
              в Пулковском”
            </p>
          </div>
        </div>
      </div>
        <div class="participate-bg">
          <img
            class="participate-bg-icon"
            alt=""
            src="./img/participatebg--purple.svg"
          />
        </div>
      </div>
      </section>
      

      <section class="participate-section__mobile">
        <div class="heading-white" data-aos="fade-up">Как участвовать?</div>
        <div class="participate-container">
        <div class="step" data-aos="fade-up" data-aos-delay="150">
            <div class="circle-yellow-group">
              <div class="circle-yellow"></div>
              <p class="circle-text circle-text__one">1</p>
            </div>
          <p class="participate-text">
                Совершайте покупки в универсамах сети "Пулковский" и лавках "Daily Meal" от 1000 р.
          </p>
        </div>
        <div class="step" data-aos="fade-up" data-aos-delay="300">
            <div class="circle-yellow-group">
              <div class="circle-yellow"></div>
              <div class="circle-text circle-text__two">2</div>
            </div>   
          <p class="participate-text">
            Зарегистрируйте чек на сайте. Количество чеков на одного участника не ограничено!
          </p>
        </div> 
        <div class="step" data-aos="fade-up" data-aos-delay="450">
            <div class="circle-yellow-group">
              <div class="circle-yellow"></div>
              <div class="circle-text circle-text__three">3</div>
            </div>
          <p class="participate-text">
            Розыгрыш состоится 18.10.2024 на празднике “День осеннего гостеприимства в Пулковском”
          </p>
        </div>
      </div>
      </section>
     
      <section class="win-section win" id="win-section__id">
            <p class="heading-white win-heading" data-aos="fade-up">Призы</p>
                <div class="win-container">
                  <div class="headphones win" data-aos="fade-up" data-aos-delay="150">
                    <div class="headphones-image">
                      <div class="backgroundblur"></div>
                      <img
                        class="headphones-img"
                        alt=""
                        src="./img/headphones.webp"
                      />
                    </div>
                    <div class="description">
                      <b class="win-heading__yellow">НАУШНИКИ</b>
                      <p class="win-text">
                        Наушники беспроводные A4TECH Bloody MH390
                      </p>
                    </div>
                  </div>


                  <div class="basket-win win" data-aos="fade-up" data-aos-delay="300">
                    <div class="basket-image">
                      <div class="backgroundblur1"></div>
                      <img
                        class="basket-img"
                        loading="lazy"
                        alt=""
                        src="./img/basket.png"
                      />
                    </div>

                    <div class="description">
                      <b class="win-heading__yellow">ПОДАРОЧНАЯ КОРЗИНА</b>
                      <p class="win-text">Наши фирменные подарочные корзины и сертификаты</p>
                    </div>
                  </div>


                  <div class="ticket-win win" data-aos="fade-up" data-aos-delay="450">
                    <div class="ticket-image">
                      <div class="backgroundblur2"></div>
                      <img
                        class="ticket-img"
                        loading="lazy"
                        alt=""
                        src="./img/kettle.png"
                      />
                    </div>

                    <div class="description ticket-description">
                      <b class="win-heading__yellow">Другие призы</b>
                      <p class="win-text">
                        Бытовая техника, сертификаты, подарочные наборы от
                        наших поставщиков
                      </p>
                    </div>
                  </div>
                </div>
      </section>

      <section class="mainprize">
            <p class="heading-white mainprize-heading" data-aos="fade-up">Главные призы</p>
            <div class="carousel-container">
              <div class="carousel">
                <div class="carousel-slide">
                  <div class="backgroundblur3"></div>
                  <div class="mainprize-img">
                    <img
                      class="macbook-icon"
                      loading="lazy"
                      alt=""
                      src="./img/nout.png"
                      data-aos="zoom-in-up"
                      data-aos-delay="150"
                    />
                  </div>
                  <div class="mainprize-desc">
                    <div class="backgroundblur4"></div>
                    <p class="heading-yellow">Ноутбук DIGMA PRO Breve</p>
                    <ul class="mainprize-text">
                      <li>Процессор: AMD Ryzen 5 5500U 2.1 ГГц</li>
                      <li>Графический процессор: AMD Radeon</li>
                      <li>Экран: 15.6 " 1920х1080 IPS</li>
                    </ul>
                  </div>
                </div>

                  <div class="carousel-slide">
                    <div class="backgroundblur3"></div>
                    <div class="mainprize-img">
                      <img
                        class="mainphone-icon"
                        loading="lazy"
                        alt=""
                        src="./img/phone.png"
                        data-aos="zoom-in-up"
                        data-aos-delay="150"
                      />
                    </div>
                    <div class="mainprize-desc">
                      <div class="backgroundblur4"></div>
                      <p class="heading-yellow">Смартфон Spark 20 Pro</p>
                      <ul class="mainprize-text">
                        <li>Процессор: MediaTek HELIO G99</li>
                        <li>Память: оперативная 8 ГБ, встроенная 256 ГБ</li>
                        <li>Экран: IPS FHD+, 6.78" (2460x1080)</li>
                      </ul>
                    </div>
                  </div>

                  <div class="carousel-slide">
                    <div class="backgroundblur3"></div>
                    <div class="mainprize-img">
                      <img
                        class="kolonka-icon"
                        loading="lazy"
                        alt=""
                        src="./img/kolonka.png"
                        data-aos="zoom-in-up"
                        data-aos-delay="150"
                      />
                    </div>
                    <div class="mainprize-desc">
                      <div class="backgroundblur4"></div>
                      <p class="heading-yellow">Умная колонка ЯНДЕКС Станция Мини</p>
                      <ul class="mainprize-text">
                        <li>Голосовой помощник: Алиса на YaGPT</li>
                        <li>Радиус действия до 10 м</li>
                        <li>Мощность: 10 Вт</li>
                      </ul>
                    </div>
                  </div>
              </div>
              <div class="buttons-container">
              <button id="prev">
                <img class="arrow-btn" src="./img/arrow-left.png" alt="">
              </button>
              <button id="next">
                <img class="arrow-btn arrow-btn__right" src="./img/arrow-left.png" alt="">
              </button>
            </div>
          </div>
      </section>

      <section class="addcheck" id="addcheck-id">
            <p class="heading-white addcheck-heading">Регистрация чека</p>
            <form action="" class="check-form" method="post" id="form">

              <div class="alert" id="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                Успешно!
              </div>

              <label class="check-label" for="ownerName">ФИО</label>
              <input class="check-input" type="text" name="user_name" id="ownerName" required>
              <span class="error-input"></span>

              <label class="check-label" for="phoneNumber">Номер телефона. Мы свяжемся с вами и сообщим о выигрыше!</label>
              <input class="check-input" type="tel" name="phone" id="phoneNumber" required>
              <span class="error-input"></span>
              
              <label class="check-label" for="checkNumber">Номер чека (6 цифр)</label>
              <input class="check-input" type="text" name="receiptnumber" id="checkNumber" required>
              <span class="error-input"></span>

              <label class="check-label" min="2024-09-03" max="2024-10-18" for="dateCheck">Дата совершения покупки</label>
              <input class="check-input" type="date" name="receiptdate" id="dateCheck" required>
              <span class="error-input"></span>
      
              <label class="check-label" for="sumCheck">Сумма покупки</label>
              <input class="check-input" min="1000" step="0.01" type="number" name="receiptsum" id="sumCheck" required>
              <span class="error-input"></span>

              <div class="form-flex">
                <label class="check-label" for="sumCheck">Соглашаюсь с <a href="https://unpul.ru/privacy/">Правилами акции</a> и <a href="https://unpul.ru/privacy/">Политикой конфиденциальности</a></label>
                <input type="checkbox" class="checkbox-input" name="checkboxCheck" id="checkboxCheck" required>
              </div>
              
              <button id="submit-btn" class="registration-btn check-btn" disabled type="submit">Зарегистрировать чек</button>
            </form>
      </section>

      <section class="winners-content-wrapper" id="winners-id">

            <div class="heading-white" data-aos="fade-up">Победители</div>

              <div class="winners-container" data-aos="zoom-in" data-aos-delay="300">
                <div class="winners-header">
                  <p class="winners-text">Розыгрыш будет проведен</p>
                  <p class="winners-text">18.10.2024</p>
                </div>
              </div>
      </section>


      <section class="questions-content-wrapper" id="questions-id">
            <p class="heading-white questions-heading">
              Вопросы и ответы
            </p>
            <div class="question-list">
              <div class="question aos-init aos-animate" data-aos="zoom-in-down" data-aos-delay="300">
                <div class="question-inside">Как поучаствовать в акции?
                  <img
                    class="arrow"
                    loading="lazy"
                    alt=""
                    src="./img/imagebackground.svg"
                  />
                </div>
                <div class="question-description">
                  <p>Чтобы принять участие в акции, совершите покупку от 1000 р. в магазинах торговой сети «Пулковский» или в «лавках Daily Meal». Затем зарегистрируйте чек на нашем сайте и дождитесь подведения итогов!</p>
                </div>
              </div>
              <div class="question aos-init aos-animate" data-aos="zoom-in-down" data-aos-delay="400">
                <div class="question-inside">Как я узнаю, что выиграл приз?
                  <img
                    class="arrow"
                    alt=""
                    src="./img/imagebackground.svg"
                  />
                </div>
                <div class="question-description">
                  <p>Мы опубликуем списки победителей на нашем сайте, а также свяжемся с вами по номеру телефона, указанному при регистрации чека.</p>
                </div>
              </div>
              <div class="question aos-init aos-animate" data-aos="zoom-in-down" data-aos-delay="500">
                <div class="question-inside">Как я смогу получить свой приз?
                  <img
                    class="arrow"
                    alt=""
                    src="./img/imagebackground.svg"
                  />
                </div>
                <div class="question-description">
                  <p>Главный приз мы вручим на мероприятии "День гостеприимства в Пулковском". Подробнее о вариантах получения приза можно узнать в Правилах.</p>
                </div>
              </div>
              <div class="question aos-init aos-animate" data-aos="zoom-in-down" data-aos-delay="600">
                <div class="question-inside">Какие сроки проведения акции?
                <img
                  class="arrow"
                  alt=""
                  src="./img/imagebackground.svg"
                />
              </div>
                <div class="question-description">
                  <p>Общий срок проведения Акции с 00:00ч. 03.09.2024 по 00:00ч. 18.10.2024 года.</p>
                  <p>Срок совершения покупок и регистрации чеков для розыгрыша призов с 00:00ч. 03.09.2024 года по 23:59ч. 17.10.2024 года</p>
                </div>
              </div>
              <div class="question question__last aos-init aos-animate" data-aos="zoom-in-down" data-aos-delay="700">
                <div class="question-inside">Моего вопроса нет в списке! Что делать?
                <img
                  class="arrow"
                  alt=""
                  src="./img/imagebackground.svg"
                />
              </div>
                <div class="question-description">
                  <p>Обратитесь к нам по номеру телефона +7 911 777-77-77 или по адресу эл. почты unpul@unpul.ru. Мы обязательно поможем вам!</p>
                </div>
              </div>
            </div>
      </section>

      <footer class="footer">
            <div class="footer-content">
              <div class="logo footer-logos">
                <div class="logo-pulk" id="logopulk-two">
                  <img
                  class="logopulk-icon"
                  alt=""
                  src="./img/pulklogo.svg"
                />
                </div>
                <div id="logolavka-two">
                  <img
                    class="logolavka-icon"
                    loading="lazy"
                    alt=""
                    src="./img/lavkalogo_pink.svg"
                  />
                </div>
              </div>
              <div class="footer-links">
                  <a
                    class="footer-link__a"
                    href="https://unpul.ru/privacy/"
                    target="_blank"
                    >Политика конфиденциальности</a
                  >
                  <a
                    class="footer-link__a"
                    href="https://unpul.ru/privacy/"
                    target="_blank"
                    >Правила акции</a
                  >
              </div>
              <div class="footer-text__small">
                <p>
                  Общий срок проведения акции: с 03.08.2024 по 18.10.2024
                  года (включая определение победителей и выдачу призов).
                  Срок покупки акционной продукции и регистрации чеков:с
                  03.08.2024 по 17.10.2024 года. Организатор акции ООО «Универсам «Пулковский», ИНН
                  7810224080, https://pulkovsky.com. В акции участвует весь
                  ассортимент. Акция действует во всех магазинах торговой
                  сети «Пулковский» и «Daily Meal», расположенных на территории Российской
                  Федерации. Акция действует при наличии товарного запаса в
                  торговом зале. Количество призов ограничено. Призы могут
                  отличаться по внешнему виду от изображений на рекламных
                  материалах. Подробная информация о сроках проведения
                  акции, ее организаторе, правилах ее проведения, количестве
                  призов, сроках и порядке их получения размещена на сайте
                  https://pulkovsky.com
                </p>
              </div>
            </div>
            <div class="telegram-logo" id="telegram">
              <img
                class="telegram-icon"
                loading="lazy"
                alt=""
                src="./img/telegram.png"
              />
            </div>
      </footer>
          
    </main>
  </body>

  <script src="./scripts/index.js"></script>
  <script src="./scripts/carousel.js"></script>
  <script src="./scripts/validation.js"></script>
  <script>
    AOS.init()
  </script>
</html>
