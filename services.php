<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Услуги</title>
    
    <?php include 'templates/header.php';
    session_start();
    $current_page = basename(__FILE__);
    ?>

    <main class="main">
      <div class="container">
        <h2>Услуги и цены</h2>
        <div class="services__grid_body">

          <?php 
          require "config/db_uslugi.php";
          foreach ($uslugi as $us): ?>
            <div class="services__container">
              <div class="services__container_head">
                <img src="<?php echo $us['photo']; ?>" alt="">
                <h3><?php echo $us['name']; ?></h3>
              </div>
                <div class="services__container_table">
                  <div class="services__table_head">
                    <div class="th_item">Наименование услуги</div>
                    <div class="th_item">Цена (руб) *</div>
                  </div>
                  <div class="services__table_body">
                  <?php 
                    $i = 0;
                    foreach ($subuslugi as $subus):
                        if ($subus['id_uslugi'] == $us['id']):
                            $i++;
                    ?>
                    <div class="tr_item <?php 
                    if ($i % 2 == 0){
                      echo 'action_blue';
                    };
                      ?>">
                      <div class="td_item"><?php echo $subus['name']; ?></div>
                      <div class="td_item"><?php echo $subus['price']; ?></div>
                    </div>
                    <?php
                        endif;
                    endforeach;
                    ?>
                  </div>
                </div>
            </div>
            <?php endforeach; ?>


        </div>
        
        <div class="appointment__form_container">
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
    </main>

    <?php include 'templates/footer.php' ?>
  </body>
</html>
