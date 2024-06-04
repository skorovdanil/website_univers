<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Стоматологическая клиника "Семейная"</title>

    <?php include 'templates/header.php';
    session_start();
    $current_page = basename(__FILE__);
    ?>

    <main class="main">
      <div class="container">


        <div class="banner__container">
          <div class="banner__slog">
            <h2 class="banner__slog-title">
              Болят<span class="banner__title-border"> зубы </span
              >?<br />Приходи к нам
            </h2>
            <p class="banner__slog-text">
              Боль в зубах может оказаться настоящим испытанием, мешая
              наслаждаться жизнью и ограничивая вашу способность к повседневным
              делам. Но не беспокойтесь, мы здесь, чтобы помочь!
              <br />
              <br />
              Забудьте о боли и дискомфорте. Приходите к нам, и мы поможем вам
              вернуть уверенность в вашу улыбку!
            </p>
            <div class="banner__slog-button">
              <a href="#popup1" class="popup-link">Оставить заявку <img src="img/banner_arrow.png" alt=""></a>
              
            </div>
          </div>
          <div class="banner__img">
            <img src="img/banner_img.png" alt="" />
          </div>
        </div>




        <div class="statistic__container">
          <h2 class="statistic__container-title">Почему выбирают нас</h2>
          <div class="statistic__flexbox">
            <div class="statistic__box"><img src="img/statistic-1.png" alt=""></img><span class="statistic__box-text">Профессиональная команда специалистов</span></div>
            <div class="statistic__box"><img src="img/statistic-2.png" alt=""></img><span class="statistic__box-text">Современное оборудование</span></div>
            <div class="statistic__box"><img src="img/statistic-3.png" alt=""></img><span class="statistic__box-text">10 лет - опыта работы в стоматологии</span></div>
            <div class="statistic__box"><img src="img/statistic-4.png" alt=""></img><span class="statistic__box-text">2 700 здоровых улыбок в год</span></div>  
          </div>
        </div>
        



        
        <div class="about__container">
          <h2 class="about__text-title">О компании</h2>
          <div class="about__flexbox">
            <div class="about__text">
                <span>В клинике «Семейная» пациентам предоставляются стоматологические услуги, соответствующие самым высоким междунлохародным стандартам качества. </span> <br>
                <span>Все виды стоматологических работ выполняются с использованием инновационных материалов и современного оборудования, что обеспечивает высокий уровень качества лечения и позволяет достигать максимально точных и эффективных результатов.</span>
            </div>
            <div class="about__video_button">
              <video playsinline autoplay muted loop src="video/dent.mp4" style="width: 560px;" class="about__video"></video>
              <div class="about__button">
                <a href="">Подробнее о клинике</a>
              </div>
            </div>
          </div>
        </div>





        <div  id="reviews" class="reviews__container">
          <h2>Отзывы наших клиентов</h2>
          <div class="reviews__items">
            <div class="reviews__item_body">
              <div class="reviews__item_user">
                <img src="img/reviews/ivanov.jpg" alt="" >
                <span>Иванов Иван</span>
              </div>
              <p>Клиника замечательная! Сделала проф. 
                гигиену, наметили план для дальнейшего лечения. Персонал очень внимателен и вежлив, 
                что в наше время редкость, к сожалению... </p>
              <div class="reviews__item_rating">
                <img src="img/reviews/star_yellow.svg" alt="">
                <img src="img/reviews/star_yellow.svg" alt="">
                <img src="img/reviews/star_yellow.svg" alt="">
                <img src="img/reviews/star_yellow.svg" alt="">
                <img src="img/reviews/star_white.svg" alt="">
              </div>
            </div>
            <div class="reviews__item_body">
              <div class="reviews__item_user">
                <img src="img/reviews/ivanov.jpg" alt="" >
                <span>Иванов Иван</span>
              </div>
              <p>Клиника замечательная! Сделала проф. 
                гигиену, наметили план для дальнейшего лечения. Персонал очень внимателен и вежлив, 
                что в наше время редкость, к сожалению... </p>
              <div class="reviews__item_rating">
                <img src="img/reviews/star_yellow.svg" alt="">
                <img src="img/reviews/star_yellow.svg" alt="">
                <img src="img/reviews/star_yellow.svg" alt="">
                <img src="img/reviews/star_yellow.svg" alt="">
                <img src="img/reviews/star_white.svg" alt="">
              </div>
            </div>
            <div class="reviews__item_body">
              <div class="reviews__item_user">
                <img src="img/reviews/ivanov.jpg" alt="" >
                <span>Иванов Иван</span>
              </div>
              <p>Клиника замечательная! Сделала проф. 
                гигиену, наметили план для дальнейшего лечения. Персонал очень внимателен и вежлив, 
                что в наше время редкость, к сожалению... </p>
              <div class="reviews__item_rating">
                <img src="img/reviews/star_yellow.svg" alt="">
                <img src="img/reviews/star_yellow.svg" alt="">
                <img src="img/reviews/star_yellow.svg" alt="">
                <img src="img/reviews/star_yellow.svg" alt="">
                <img src="img/reviews/star_white.svg" alt="">
              </div>
            </div>
          </div>
          <div class="reviews__button">
            <a href="#popup2" class="popup-link">Оставить отзыв</a>
          </div>
        </div>


        
        <div id="contacts" class="location__container">
          <h2>Как найти нас ?</h2>
          <div class="location__gridbox">
            <div class="location__map">
              <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A096d09be474990d27ed1585a1326c78bd5095b14f545c871f125ca8fb4f2edfc&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
            </div>
            <div class="location__info">

              <div class="location__info-1">
                <div class="location__info_text-1">
                  <h3>Свяжитесь с нами</h3>
                  <p>Адрес поликлиники</p>
                  <span>350033 г.Краснодар <br>ул.Семейная, д. 26</span>
                </div>
                <div>
                  <img src="img/location/house.jpg" alt="" style="width: 230px; border-top-right-radius: 50px;border-bottom-right-radius: 50px;">
                </div>
              </div>

              <div class="location__info-2">
                <p>Номер телефона</p>
                <span>8 (800) 999-99-99 <br> 8 (918) 999-99-99</span>
              </div>

              <div class="location__info-3">
                <p>Время работы</p>
                <span>ПН - ПТ 09:00 - 18:00 <br> СБ 09:00 - 14:00</span>
              </div>
            </div>
          </div>
        </div>


      </div>
    </main>

    <?php include 'templates/footer.php';
     require "config/db_uslugi.php"; ?>

    <div id="popup1" class="popup">
        <div class="popup__container">

            <div class="appointment__form_container popup_body">
                <span class="close-btn close-popup" id="closePopupBtn">&times;</span>
                <form action="config/appointment.php" id="form_appointment" method="post">
                    <h2>Запись на приём</h2>

                    <input type="hidden" name="current_page" value="<?php echo "../".$current_page; ?>">      
                    <div class="form-element">
                        <span>Имя*</span>
                        <input type="text" name="name" required placeholder="Введите имя"/>
                    </div>


                    <div class="form-element">
                        <span>Номер телефона*</span>
                        <input type="text" id="phone" name="phone" required pattern="[\+]{1}[7]{1}([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="+7 (__) ___ - __ - __"/>
                    </div>


                    <div class="form-element">
                        <span>Выберите услугу (необязталеьно)</span>
                        <select name="usluga" id="form_uslugi">
                            <option selected disabled>Выберите услугу</option>
                            <?php 
                                foreach ($uslugi as $usluga): ?>
                            <option value="<?php echo $usluga['id']; ?>"><?php echo $usluga['name']; ?></option> 
                            <?php endforeach; ?>
                        </select>
                    </div>
                    


                    <div class="form-element">
                        <span>Сообщения (необязталеьно)</span>
                        <textarea type="text" rows="5" style="resize: none;" name="message""></textarea>
                    </div>


                    <div class="form-element">
                    <div class="checkbox">
                        <input id="formAgreement" required type="checkbox" name="agreement"
                        class="checkbox__input">
                        <span for="formAgreement" class="checkbox__label"><span>Я даю свое согласие
                            на
                            обработку перслональных данных в соответствии с <a
                            href="agreement.html">Условиями</a><span style="color:red">*</span></span></span>
                                    </div>
                    </div>


                    <div class="form-element">
                        <input class="appointment_button" type="submit" value="Отправить данные"/>
                    </div>
                </form>
            </div>


        </div>
    </div>            



    <div id="popup2" class="popup">
        <div class="popup__container">

            <div class="appointment__form_container popup_body">
                <span class="close-btn close-popup" id="closePopupBtn">&times;</span>
                <form action="config/reviews.php" id="form_appointment" method="post">
                    <h2>Оставить отзыв</h2>

                    <input type="hidden" name="current_page" value="<?php echo "../".$current_page; ?>">      
                    <div class="form-element">
                        <span>Имя*</span>
                        <input type="text" name="name" required placeholder="Введите имя"/>
                    </div>


                    <div class="form-element">
                        <span>Номер телефона*</span>
                        <input type="text" id="phone2" name="phone" required pattern="[\+]{1}[7]{1}([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="+7 (__) ___ - __ - __"/>
                    </div>


                    <div class="form-element">
                        <span>Отзыв *</span>
                        <textarea type="text" rows="5" required style="resize: none;" name="review""></textarea>
                    </div>

                    
                    <div class="form-element">
                        <span>Дайте оценку*</span>
                        <select name="raiting" required id="form_uslugi">
                            <option value="1">1</option> 
                            <option value="2">2</option> 
                            <option value="3">3</option> 
                            <option value="4">4</option> 
                            <option selected value="5">5</option> 

                        </select>
                    </div>


                    <div class="form-element">
                    <div class="checkbox">
                        <input id="formAgreement" required type="checkbox" name="agreement"
                        class="checkbox__input">
                        <span for="formAgreement" class="checkbox__label"><span>Я даю свое согласие
                            на
                            обработку перслональных данных в соответствии с <a
                            href="agreement.html">Условиями</a><span style="color:red">*</span></span></span>
                                    </div>
                    </div>


                    <div class="form-element">
                        <input class="appointment_button" type="submit" value="Отправить данные"/>
                    </div>
                </form>
            </div>


        </div>
    </div>                                         




  </body>
</html>
