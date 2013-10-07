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
							
                        <h1>Найти сервис</h1>
								
                        <div id="service-search">
                            <form action="">
                                <input type="text" value="Ваше местоположение . . ." />
                                <input type="button" value="Искать" title="Найти ближайший сервис"/>
                            </form>
                        </div><!--/#service-search-->
								
                        <p><script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=Lbae-cLF0O_0TUkJz_1AftR6M69W0Skf&width=600&height=450"></script></p>
								
                        <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню, что именно говорил этот человек, открывший истину, которого я бы назвал зодчим счастливой жизни. Действительно, никто не отвергает, не презирает, не избегает наслаждений только из-за того, что это наслаждения</p>
								
                        <h3>Добавленные сервисы</h3>
								
                        <div id="services-filter">
                            <form action="">
                                <select>
                                    <option>Марка автомобиля&nbsp;</option>
                                    <option>Опция</option>
                                    <option>Опция</option>
                                </select>
                                <select>
                                    <option>Станция метро&nbsp;</option>
                                    <option>Опция</option>
                                    <option>Опция</option>
                                </select>
                                <input type="submit" value="Отфильтровать" />
                            </form>
                        </div><!--/#services-filter-->
								
                        <div id="services-list">
                            <ul>
                                <li><a href="/service-page.php" title="Название компании сервиса">Название компании сервиса</a></li>
                                <li><a href="/service-page.php" title="Название компании сервиса">Название компании сервиса</a></li>
                                <li><a href="/service-page.php" title="Название компании сервиса">Название компании сервиса с длинным названием</a></li>
                                <li><a href="/service-page.php" title="Название компании сервиса">Название компании сервиса с длинным названием</a></li>
                                <li><a href="/service-page.php" title="Название компании сервиса">Название компании сервиса</a></li>
                                <li><a href="/service-page.php" title="Название компании сервиса">Название компании сервиса с длинным названием</a></li>
                                <li><a href="/service-page.php" title="Название компании сервиса">Название компании сервиса</a></li>
                                <li><a href="/service-page.php" title="Название компании сервиса">Название компании сервиса с длинным названием</a></li>
                                <li><a href="/service-page.php" title="Название компании сервиса">Название компании сервиса</a></li>
                            </ul>
                        </div><!--/#services-list-->
								
                    </div><!--/.box640-->                    

                </div><!--/#content-->
	 
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
