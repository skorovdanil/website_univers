<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Специалисты</title>
    
    <?php include 'templates/header.php';
    session_start();
    $current_page = basename(__FILE__);
    ?>

    <main class="main">
      <div class="container">
        <h2>Специалисты клиники</h2>
        <div class="staff__grid_body">

          <?php require "config/db_staff.php";
          foreach ($staffs as $staff): ?>
          <div class="staff__container">
            <div class="staff__photo">
                <img src="<?php echo $staff['photo']; ?>" alt="">
            </div>
            <div class="staff__name">
              <?php echo $staff['name']; ?>
            </div>
            <div class="staff__ranked">
              <?php echo $staff['ranked']; ?>
            </div>
            
          </div>
          <?php endforeach; ?>
          
        </div>
      </div>
    </main>

    <?php include 'templates/footer.php' ?>
  </body>
</html>
