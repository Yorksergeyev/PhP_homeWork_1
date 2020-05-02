<?php
require "config/info.config.php";
$title = "Незабываемый сайт";
$comma = implode(", ", $keywords);
$keywords = $comma;
require "includes/header.inc.php";
?>

<body>
    <div class="wrapper">
        <header class="header">
            <div id="logo">
                <img src="img/logo.png" alt="лого, компания, Nordic">
            </div>
            <nav class="nav">
<?php

while ($anchor = current($anchors)) {
    $tem = key($anchors);
    echo "<a href={$anchors[$tem][0]} class='nav__a'> {$anchors[$tem][1]} </a> ";
    next($anchors);
}

?>

            </nav>
            <input type="text" id="temp_input">
            <button class="temp_button"> Клик</button>
        </header>

        <div class="wrap_form animated">

            <i class="fa fa-times"></i>
            <form action="includes/form.inc.php" method="POST">
                <h3> Введите ваши данные</h3>
                <p class="error"> </p>
                <p class="error_name"></p>
                <p class="error_email"></p>
                <p class="error_tel"></p>

                <input type="text" name="name" placeholder="имя" >
                <input type="email" name="email" placeholder="email">
                <input type="tel" name="tel" placeholder="телефон">
                <input type="submit" value="отправить">
            </form>
        </div>

        <div class="side_panel">
<ul>

<?php
foreach ($anchors as $key => $value){
    echo "<li> <a href= {$anchors[$key][0]} class='nav__a'> {$anchors[$key][1]} </a>  </li>";
    next($anchors);
}
?>


            </ul>
        </div>
        <div class="promo" id="main">
            <h1 class="promo__h1">Только красивые путешествия</h1>
            <a href="#">
                <button class="promo__button"> Присоединяйся </button>
            </a>

            <div class="soc_icons">
                <a href="https://vk.com">
                    <div class="soc_icons__icon soc_icons__icon_vk "></div>
                </a>
                <a href="https://facebook.com">
                    <div class="soc_icons__icon soc_icons__icon_face"></div>
                </a>
                <a href="https://instagram.com">
                    <div class="soc_icons__icon soc_icons__icon_inst"></div>
                </a>
            </div>
        </div>

        <div class="banner-header">
            <h3 class="banner-header__h3">Путешествуй красиво</h3>
        </div>

        <div class="info">
        <?php
        for ($i=0; $i < count($parag); $i++) { 
           echo" <p class='info__p'>
                {$parag[$i]}
            </p>";
        }
        ?>

        </div>

        <div class="banner-header">
            <h3 class="banner-header__h3">Причины воспользоваться нашими услугами</h3>

            <div class="calculator">
                <input type="text" id="calc" style="font-size: 20px">
                <button id='btn_result'> Посчитать </button>
        </div>
        </div>
        <div class="reasons" id="about">
            <ul class="reasons__ul">
<?php
for ($i=0; $i < count($reasons); $i++) { 
    echo " <li class='reasons__li'> {$reasons[$i][0]}  {$reasons[$i][1]}</li>";
}
?>
            </ul>
        </div>

<div class='cards'>
    <?php
        foreach ($cards as $key => $value){
        echo "<div class='card'>
                <div class='card__img_wrap'>
                <img src='{$cards[$key][0]}' alt='' class='card__img'>
                </div>
                <h5 class='card__h5'>{$cards[$key][1]}</h5>
                <div class='card__line'></div>
                <p class='card__p'>{$cards[$key][2 ]}</p>
                </div>";
                next($cards);
            }
            ?>
</div>;

<div class='wrap_panel'>
<?php
    foreach ($faq as $key => $value){
        echo "<div class='wraper_faq'><div class='faq_panel'> <h5>{$faq[$key][0]} </h5></div>
        <div class='faq_answer'> <p> {$faq[$key][1]}</p></div></div>";
        next($faq);
    }
    ?> 
</div> 

<!-- <div class="wrap_panel">

    <div class="wraper_faq">
        <div class="faq_panel"> <h5>Какова стоимость путешествия </h5></div>
        <div class="faq_answer"> <p> Стоимость путешествия зависит от страны</p></div>
    </div>
    <div class="wraper_faq">
        <div class="faq_panel"> <h5>Есть ли страховка в путешествии? </h5></div>
        <div class="faq_answer"> <p> Нет, все будет нормально</p></div>
    </div>
    <div class="wraper_faq">
        <div class="faq_panel"> <h5> Нужен ли загранник для получения визы?</h5></div>
        <div class="faq_answer"> <p> Да, очень нужен</p></div>
    </div>

</div> -->

        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A53668337e5785bee8127b031a1f8f4ba1a74ac0c23ed566812a0e5924e07e887&amp;source=constructor" width="1200" height="400" frameborder="0"></iframe>

        <footer class="footer" id="contact">
            <div class="contacts">
                <h5 class="contacts__h5">Наши контакты:</h5>
                <address class="contacts__address"> Москва, ул Комсомола 12</address>
                <span class="contacts__span">тел 8(495)-626-46-34</span>
                <span class="contacts__span"> <a href="mailto:example@mail.ru"> example@mail.ru</a></span>
                <span class="contacts__span"> Часы работы: 10-19 </span>
            </div>
            <div class="logo">

            </div>
            <div class="travel_anc">
                <a href="#" class="travel_anc__a">
                    Путешествия по России
                </a>
                <a href="#" class="travel_anc__a">
                    Путешествия по Украине
                </a>
                <a href="#" class="travel_anc__a">
                    Путешествия по Таиланду
                </a>
                <a href="#" class="travel_anc__a">
                    Путешествия по ОАЭ
                </a>
                <a href="#" class="travel_anc__a">
                    Путешествия по Латвии
                </a>
            </div>


        </footer>
    </div>

</body>

</html>