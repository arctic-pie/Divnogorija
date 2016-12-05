<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Дивногория: интернет-магазин ёлочных украшений</title>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="css/normalize.css" rel="stylesheet">
    <!--        <link href="css/style-min.css" rel="stylesheet">-->
    <link href="css/style.css" rel="stylesheet"> 
<?php if (isset($_GET['bgstyle'])) {
    echo '<style>';
    if ($_GET['bgstyle'] == 'style2') {
        echo 'body { background-attachment: scroll; background-repeat: repeat-y; background-size: auto 125%; }';
    } elseif ($_GET['bgstyle'] == 'style3') {
        echo 'body { background-size: auto 125%; }';
    } elseif ($_GET['bgstyle'] == 'style4') {
        echo 'body { background-size: auto 125%; background-attachment: scroll; }';
    } 
    echo '</style>';
} ?>
</head>
<body>
    <header>
        <section class="main-header">
            <div class="main-logo"> <img width="200" height="94" src="img/logo_new.png" alt="Д"></div>
            <div class="communications">
                <div class="phone-number"><a href="tel:+7 (9999) 96 49 96">8-999-996-4-996</a></div>
                <div class="e-mail"><a href="mailto:divnogorija@mail.ru">divnogorija@mail.ru</a></div>
            </div>
            <div class="opening-hours"> ПН – ПТ:
                <time> 9 <span class="super">00</span> – 19 <span class="super">00</span></time>
                <br>СБ – ВС: выходной </div>
            <div class="basket"> <span class="">Мин. заказ - 500 руб</span> <span class="">5 товаров на сумму 5 000 р.</span> <a class="btn" href="#">Купить</a> </div>
        </section>
        <section class="main-banner"> <img width="1170" src="img/main-banner.jpg" alt="Дивногория"> </section>
        <nav>
            <ul class="main-navigation">
                <li class="main-navigation-item"><a href="#">Как купить</a></li>
                <li class="main-navigation-item"><a href="#">Как доставить</a></li>
                <li class="main-navigation-item"><a href="#">Как оплатить</a></li>
                <li class="main-navigation-item"><a href="#">Контакты</a></li>
            </ul>
        </nav>
    </header>
    <main id="contentwrapper">
        <aside id="leftcolumn">
            <section class="catalog">
                <h2>Каталог</h2>
                <ul>
                    <li> <a href="catalog.html">Шишка ели</a> </li>
                    <li> <a href="catalog.html">Шишка ольхи</a> </li>
                    <li> <a href="catalog.html">Шишка пихты</a> </li>
                    <li> <a href="catalog.html">Шишка сосны</a> </li>
                    <li> <a href="catalog.html">Шишка сосны южной</a> </li>
                    <li> <a href="catalog.html">Сувениры</a> </li>
                    <li> <a href="catalog.html">Полуфабрикаты</a> </li>
                </ul>
            </section>
            <section class="encyclopedia">
                <h2>Энциклопедия</h2>
                <ul>
                    <li class="encyclopedia-section"><a href="#">Предисловие</a></li>
                    <li class="encyclopedia-section"><a href="#">Вводное слово</a></li>
                    <li>
                        <ol class="encyclopedia-chapters">
                            <li>
                                <ol>
                                    <li><a href="#">Астрономические основы древних языческих культов</a></li>
                                    <!--1.1-->
                                </ol>
                            </li>
                            <li>
                                <ol>
                                    <li><a href="#">Исторические основы Нового года</a></li>
                                    <!--2.1.-->
                                    <li><a href="#">Дата празднования Нового года в древности и в настоящее время</a></li>
                                    <!--2.2.-->
                                    <li><a href="#">Особенности празднования Нового года</a></li>
                                    <!--2.3.-->
                                </ol>
                            </li>
                            <li>
                                <ol>
                                    <li><a href="#">Исторические основы Рождества Христова. Определение даты рождения Иисуса Христа на основе христианских текстов</a></li>
                                    <!--3.1.-->
                                    <li><a href="#">Определение даты рождения Иисуса Христа косвенными способами</a></li>
                                    <!--3.2.-->
                                    <li><a href="#">Особенности празднования Рождества Христова</a></li>
                                    <!--3.3.-->
                                </ol>
                            </li>
                            <li>
                                <ol>
                                    <li><a href="#">Зимние новогодние праздники в России</a></li>
                                    <!--4.1-->
                                    <li><a href="#">Языческий Новый год</a></li>
                                    <!--4.2.-->
                                    <li><a href="#">Православный Новый год</a></li>
                                    <!--4.3.-->
                                    <li><a href="#">Светский Новый год</a></li>
                                    <!--4.4.-->
                                    <li><a href="#">Православное Рождество</a></li>
                                    <!--4.5.-->
                                </ol>
                            </li>
                            <li>
                                <ol>
                                    <li><a href="#">Священные деревья. Ёлка</a></li>
                                    <!--5.1.-->
                                    <li><a href="#">Символические украшения Ёлочные игрушки</a></li>
                                    <!--5.2.-->
                                    <li><a href="#">Примеры украшения праздничной ёлки. Традиции и современные дизайнерские тенденции</a></li>
                                    <!--5.3.-->
                                </ol>
                            </li>
                            <li>
                                <ol>
                                    <li><a href="#">Санта-Клаус и его помощники</a></li>
                                    <!--6.1-->
                                    <li><a href="#">Дед Мороз и Снегурочка</a></li>
                                    <!--6.2.-->
                                    <li><a href="#">Рождественский козел, девять оленей и тройка лошадей</a></li>
                                    <!--6.3.-->
                                    <li><a href="#">Снеговик и снежная баба</a></li>
                                    <!--6.4.-->
                                </ol>
                            </li>
                            <li>
                                <ol>
                                    <li><a href="#">Мишура и “дождик”</a></li>
                                    <!--7.1-->
                                    <li><a href="#">Конфетти и серпантин</a></li>
                                    <!--7.2.-->
                                    <li><a href="#">Адвентский и рождественский венки</a></li>
                                    <!--7.3.-->
                                    <li><a href="#">Пиротехнические изделия</a></li>
                                    <!--7.4.-->
                                    <li><a href="#">Электрические гирлянды</a></li>
                                    <!--7.5.-->
                                </ol>
                            </li>
                        </ol>
                    </li>
                    <li class="encyclopedia-section"><a href="#">Заключение</a></li>
                    <li class="encyclopedia-section"><a href="#">Хронология знаменательных дат</a></li>
                </ul>
            </section>
        </aside>
        <section class="content" id="rightcolumn">
            <h1>Доска объявлений</h1>
            <h3>Ёлочные игрушки: <br>история возникновения и тренды 2015 года</h3>
            <p>Наверняка большинство наших читателей в преддверии зимнего праздника покупает хотя бы одно ёлочное украшение, чтобы пополнить коллекцию. Поверьте, мы тоже так делаем и уже сейчас задались важным вопросом: чем же нарядить ёлку, чтобы порадовать себя и удивить близких.</p>
            <p>«Эх, как же в Новый год и без ёлоцки?!» — сокрушался герой мультфильма «Падал прошлогодний снег». Действительно, без зеленой красавицы и ёлочных игрушек сложно создать новогоднее настроение. Наверняка большинство наших читателей в преддверии зимнего праздника покупает хотя бы одно ёлочное украшение, чтобы зарядиться духом Нового года и пополнить коллекцию. Поверьте, мы тоже так делаем и уже сейчас задались важным вопросом: чем же нарядить ёлку, чтобы порадовать себя и удивить близких. Просмотрев сотни страниц во Всемирной Паутине, мы выбрали самые, на наш взгляд, интересные тренды и идеи для ёлочных игрушек, которыми поделились российские и зарубежные мастерицы, и будем рады, если они вам пригодятся.</p>
            <p class="interesting">Считается, что обычай украшать новогоднюю ёлку распространился по всему миру из Германии.</p>
            <p>Начало этой традиции в 1513 году положил немецкий богослов Мартин Лютер. В канун Рождества он возвращался домой по лесной тропинке и остановил свой взгляд на ночном небе. Лютера настолько восхитила красота звезд, густо усыпавших небесный свод, что ему показалось, будто и кроны высоких сосен и елей искрятся звездочками.</p>
            <p>Придя домой, реформатор поставил на стол небольшую ёлочку в кадке, украсил ее свечами, а верхушку увенчал звездой в память о Вифлеемской звезде, указавшей путь к пещере, где родился Иисус.</p>
            <p>К слову, в 16 веке в Центральной Европе на Рождество тоже украшали деревья: в семьях было принято ставить на стол маленькое деревце бука, наряженное сваренными в меду яблочками, сливами и орехами.</p>
            <p>В 18-19 веках ёлки украшали уже не только во всей Германии, но и в Англии, Австрии, Чехии, Голландии, Дании и Америке. Сначала ёлки наряжали с помощью свечей, фруктов и сладостей, а позднее в моду вошли игрушки из воска, ваты, картона и стекла.</p>
            <p>Царь Петр I был тем, кто ввел в России обычай ставить украшать ёлку. Будучи еще совсем юным, он гостил у своих немецких друзей где увидел необычную ель с яблоками и конфетами. Став царем, Петр I издал указ отмечать Новый год, как в Европе: «По большим и проезжим улицам знатным людям и у домов нарочитых духовного и мирского чина перед вороты учинить некоторые украшения от древ и ветвей сосновых и можжевеловых».</p>
        </section>
    </main>
    <footer>
        <section class="footer-rights">
            <p><span class="footer-rights-copyright">© 2016</span>
                <br>Интернет-магазин <span class="footer-rights-logo_quotes">«</span><span class="footer-rights-logo">Дивногория</span><span class="footer-rights-logo_quotes">»</span>. Все права защищены.</p>
            <p>При использовании
                <br>любого материала сайта
                <br>ссылка на сайт обязательна.</p>
        </section>
        <section class="footer-legislation">
            <h4>Законодательство</h4>
            <ul>
                <li> <a href="offer-document.html">Договор оферта</a> </li>
            </ul>
        </section>
        <section class="footer-marketing">
            <h4>Маркетинг</h4>
            <ul>
                <li> <a href="bestsellers.html">Хиты продаж</a> </li>
                <li> <a href="#">Карта цветов</a> </li>
                <li> <a href="#">Типоразмеры</a> </li>
                <li> <a href="#">Термины</a> </li>
            </ul>
        </section>
        <section class="footer-purchase">
            <h4>Покупка</h4>
            <ul>
                <li> <a href="#">Как купить</a> </li>
                <li> <a href="#">Как доставить</a> </li>
                <li> <a href="#">Как оплатить</a> </li>
            </ul>
        </section>
        <section class="footer-communications">
            <h4>Контакты</h4>
            <ul>
                <li> <a href="#">Контакты</a> </li>
                <li> <a href="#">Реквизиты</a> </li>
            </ul>
        </section>
        <section class="footer-creators">
            <h4 class="footer-creators-prototype">Прототип сайта:<a href="#"></a></h4>
            <h4 class="footer-creators-development">Разработка сайта:<a href="http://roswebconsult.ru/" target="_blank">roswebconsult</a></h4>
            <h4 class="footer-creators-texts">Тексты:<a href="#"> </a></h4> </section>
        <section class="footer-payments">
            <ul>
                <li>MasterCard<img src="img/footer-payments-mc.png" width="55" height="32" alt="mastercard"></li>
                <li>Visa<img src="img/footer-payments-visa.png" width="81" height="25" alt="visa"></li>
                <li>Qiwi<img src="img/footer-payments-qw.png" width="83" height="37" alt="qiwi"></li>
                <li>WebMoney<img src="img/footer-payments-wm.png" width="129" height="32" alt="webmoney"></li>
                <li>Яндекс Деньги<img src="img/footer-payments-yandex-money.png" width="87" height="36" alt="yandex money"></li>
                <li>Билайн<img src="img/footer-payments-bilain.png" width="108" height="32" alt="билайн"></li>
                <li>МегаФон<img src="img/footer-payments-megafon.png" width="166" height="32" alt="megafon"></li>
                <li>МТС<img src="img/footer-payments-mts.png" width="90" height="32" alt="mts"></li>
                <li>TELE2<img src="img/footer-payments-tele2.png" width="78" height="29" alt="tele2"></li>
            </ul>
        </section>
    </footer>
    <script src="js/script.js" type="text/javascript"></script>
</body>

</html>