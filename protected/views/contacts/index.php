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
							
                        <h1>Контакты</h1>
								
                        <p><strong>Адрес</strong> - Москва, Котельническая набережная . . .</p>
                        <p><strong>Телефон</strong> - +7 (945) 999-99-99</p>
                        <p><strong>E-mail</strong> - contact@carcure.ru</p>
								
                        <h2>Отправить сообщение</h2>
								
                        <form action="" class="feedback-form">
                            <div class="warning">Заполните все поля!</div>
                            <div class="line"><input type="text" value="Ваше имя" class="left" /> <input type="text" value="Ваш e-mail" class="right" /></div>                            <div class="line"><textarea>Сообщение</textarea></div>
                            <div class="line">КАПТЧА</div>
                            <div class="line"><input type="submit" value="Отправить" /></div>
                        </form>
								
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
