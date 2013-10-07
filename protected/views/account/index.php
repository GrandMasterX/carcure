<?php
$this->renderPartial('../__header');
?>

<body <?php $pageName = "home"; ?>>

    <div id="wrapper">

        <div class="w1">

            <?php
                $this->renderPartial('../inc/header');
            ?>


            <div id="main">

                <div id="content">

                    <div class="box640"><span></span>

                        <h1>Иванов Иван Иванович - Москва</h1>

                        <div class="account-pic gallery">
                            <a href="pic/account/account-pic.jpg" title="Иванов Иван Иванович"><img src="pic/account/account-pic.jpg" alt="Иванов Иван Иванович"/></a>
                        </div><!--/.account-pic-->

                        <ul class="account-info list"> 
                            <li><strong>Login</strong> - <?php echo Yii::app()->user->name; ?></li>
                            <li><strong>E-mail</strong> - <?php echo Yii::app()->user->email; ?></li>
                            <li><strong>Марка</strong> - BMW</li>
                            <li><strong>Модель</strong> - x6</li>
                        </ul><!--/.account-info-->

                        <div class="account-car-pic gallery-car">
                            <a href="pic/account/account-car-pic1.jpg" title="BMW x6"><img src="pic/account/account-car-pic1.jpg" alt="BMW x6"/></a>
                        </div><!--/.account-car-pic-->

                        <a href="#?w=600" rel="account-info-edit" class="poplight edit" title="Редактировать персональную информацию">Редактировать персональную информацию</a>
                        <div id="account-info-edit" class="popup-block">
                            <form action="">
                                <div class="warning">Системное сообщение</div>
                                <h3>Персональная информация</h3>
                                <div class="line"><input type="text" value="ФИО" class="left" /> <input type="text" value="Город" class="right" /></div>
                                <div class="line"><input type="text" value="Логин" class="left" /> <input type="text" value="E-mail" class="right" /></div> 
                                <div class="line"><input type="password" value="Пароль" class="left" /> <input type="password" value="Пароль еще раз" class="right" /></div>
                                <h3>Информация об автомобиле</h3>
                                <div class="line"><input type="text" value="Марка" class="left" /> <input type="text" value="Модель" class="right" /></div>
                                <div class="line"><textarea>Регламент прохождения ТО</textarea></div>
                                <div class="line"><textarea>Дополнительная информация</textarea></div>
                                <div class="line"><input type="submit" value="Сохранить" /></div>
                            </form>
                        </div><!--/.popup-block-->

                    </div><!--/.box640-->

                    <div class="box300 left"><span></span>

                        <h3>Карта запчастей</h3>

                        <div class="account-car-map-pic gallery-car-map">
                            <a href="pic/account/account-car-map-pic.jpg" title="Увеличить"><img src="pic/account/account-car-map-pic.jpg" alt="BMW x6"/></a>
                        </div><!--/.account-car-map-pic-->

                        <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню, что именно говорил этот человек, открывший истину.</p>

                    </div><!--/.box300-->

                    <div class="box300 right"><span></span>

                        <h3>Ближайшие сервисы</h3>

                        <p><script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=Lbae-cLF0O_0TUkJz_1AftR6M69W0Skf&width=260&height=207"></script></p>

                        <ul class="list"> 
                            <li><strong>Название сервиса</strong> - Адрес <a href="#" title="Подробнее о дилере">Подробнее</a> | <a href="#" title="Удалить сервис">Удалить</a></li>
                            <li><strong>Название сервиса</strong> - Адрес <a href="#" title="Подробнее о дилере">Подробнее</a> | <a href="#" title="Удалить сервис">Удалить</a></li>
                            <li><strong>Название сервиса</strong> - Адрес <a href="#" title="Подробнее о сервисе">Подробнее</a> | <a href="#" title="Удалить сервис">Удалить</a></li>
                        </ul><!--/.list-->

                        <a href="#?w=600" rel="add-service" class="poplight add-service-link" title="Добавить сервис">Добавить сервис</a>
                        <div id="add-service" class="popup-block">
                            <h3>Добавить сервис</h3>
                            <form action="">
                                <div class="warning">Системное сообщение</div>
                                <div class="line"><input type="text" value="Название компании" class="left" /> <input type="text" value="Адрес" class="right" /></div> 
                                <div class="line"><input type="submit" value="Сохранить" /></div>
                            </form>
                        </div><!--/.popup-block-->

                    </div><!--/.box300-->

                    <div class="box300 left"><span></span>

                        <h3>Регламент обслуживания</h3>

                        <h4>Регламент ТО</h4>
                        <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню.</p>

                        <h4>Гарантия</h4>				
                        <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню.</p>

                        <h4>Регламент ТО</h4>
                        <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню.</p>

                    </div><!--/.box300-->

                    <div class="box300 right"><span></span>

                        <h3>На что жалуются владельцы</h3>

                        <h4>Название совета</h4>
                        <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню.</p>

                        <h4>Название совета</h4>
                        <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню.</p>

                        <h4>Название совета</h4>
                        <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню.</p>

                    </div><!--/.box300-->

                    <div class="box640"><span></span>

                        <h3>Дополнительная информация по автомобилю</h3>

                        <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню, что именно говорил этот человек, открывший истину, которого я бы назвал зодчим счастливой жизни. Действительно, никто не отвергает, не презирает, не избегает наслаждений только из-за того, что это наслаждения.</p>

                    </div><!--/.box640-->


                </div><!--/#content-->

                <div id="right">

                    <div class="box300"><span></span>

                        СОДЕРЖАНИЕ ПРАВОГО БЛОКА ДЛЯ КОНКРЕТНОЙ СТРАНИЦЫ

                    </div><!--/.box300-->

                    <div class="box300"><span></span>

                        <h3>Акции сервисов</h3>

                        <div class="action-prev">
                            <h4><a href="#" title="Заголовок акции">Заголовок акции</a></h4>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания...</p>
                        </div><!--/.action-prev-->

                        <div class="action-prev">
                            <h4><a href="#" title="Заголовок акции">Заголовок акции</a></h4>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания...</p>
                        </div><!--/.action-prev-->

                        <div class="action-prev">
                            <h4><a href="#" title="Заголовок акции">Заголовок акции</a></h4>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания...</p>
                        </div><!--/.action-prev-->

                        <div class="action-prev">
                            <h4><a href="#" title="Заголовок акции">Заголовок акции</a></h4>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания...</p>
                        </div><!--/.action-prev-->

                        <a href="<?= PreDefineUrl::ActionsUrl() ?>" title="Все акции" class="more">Все акции</a>

                    </div><!--/.box300-->

                    <div class="box300"><span></span>

                        <h3>Полезные советы</h3>

                        <h4><a href="#" title="Название совета">Название совета</a></h4>
                        <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания.</p>

                        <h4><a href="#" title="Название совета">Название совета</a></h4>
                        <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания.</p>

                        <h4><a href="#" title="Название совета">Название совета</a></h4>
                        <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания.</p>

                        <h4><a href="#" title="Название совета">Название совета</a></h4>
                        <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания.</p>

                        <a href="<?= PreDefineUrl::TipsUrl(); ?>" title="Все советы" class="more">Все советы</a>

                    </div><!--/.box300-->


                </div>    

                <?
                    $this->renderPartial('../__inner_right_block');
                ?>


            </div><!--/#main-->


            <?
                $this->renderPartial('../inc/banner-bottom');
            ?>




        </div><!--/.w1-->



        <?php
            $this->renderPartial('../__footer');
        ?>


</body>
