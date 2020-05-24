<?php
session_start();
$title_info = "Изменить настройки юзера";

require $_SERVER['DOCUMENT_ROOT'] . '/admin/admin_head.admin.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
?>


<section class="columns has-background-info is-centered">
    <div class="column is-half has-text-centered">
        <h3 class="title has-text-white"> Редактирование пользователя</h3>
        <hr class="login-hr">
        <div class='is-size-5 has-text-white' style='margin-bottom: 30px;'>Имя пользователя дольжно быть не меньше 3 символов!</div>
        <form action="form_user.php" method="GET" class="has-background-primary">
            <div class="field">
                <div class="box">
                <div class='has-text-weight-bold'>Ваше имя:
                <?php echo (" <input class='has-text-weight-bold  is-medium' type='text' style='outline: none; border: none; ' placeholder={$_SESSION["login"]} name='login'>  </div>"); ?>      <!-- Через JS можно сделать очишение поля при нажатии на кнопку -->
                </div>
            </div>

            <button class="button is-success  is-large is-pulled-right" type="submit">Изменить имя</button>


        </form>
    </div>

</section>

</body>
</html>