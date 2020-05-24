<?php
session_start();
$title_info = "Главная страница админки";
require $_SERVER['DOCUMENT_ROOT'].'/admin/admin_head.admin.php';
?>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                <?php
                if (isset($_SESSION['login'])) {
                    echo '  
                    <a class="button is-primary" href="admin_user.php">
                    <strong>Редактировать пользователя</strong>
                </a>                  
                    <a class="button is-primary" href="reg/admin_exit.php">
                    <strong>Выход</strong>
                </a>';
                } else {
                    echo '                    
                    <a class="button is-primary" href="reg/admin_reg.php">
                    <strong>Регистрация</strong>
                </a>
                <a class="button is-light" href="reg/admin_auth.php">
                    Авторизация
                </a>';
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</nav>

<?php
echo("<section class='has-background-link columns'>
    <div class='column is-full has-text-white' >
     <h1 class='label is-size-2 has-text-centered '> Hello ");
if (isset($_SESSION['login'])) {
    echo " <span class='has-text-weight-bold'> {$_SESSION['login']} </span> </h1>";
} else {
    echo " <span class=' has-text-weight-bold'> Anonimus </span> </h1>";
}

echo("</h3>
        <h3 class='is-size-3 has-text-centered'> Добро пожаловать в CMS систему</h3>
    </div>
</section>
");
?>


<div class="columns">
<?php
    if (isset($_SESSION['login'])) {
        echo '    <div class="column has-text-centered is-full"> 
        <a href="parag.admin.php">
        <button class="button is-size-4 is-danger"> Редактировать параграфы</button>
        </a>

        <a href="cards.admin.php">
        <button class="button is-size-4 is-danger"> Редактировать карточки</button>
        </a>

        <a href="anchor.admin.php">
        <button class="button is-size-4 is-danger"> Редактировать ссылки</button>
        </a>

    </div>';
    } else {
        echo " <div class='column is-size-3 has-text-centered'>Авторизируйся что бы увидеть контент</div>";
    }
?>
</div>


</body>
</html>