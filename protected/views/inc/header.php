<?php
    $this->renderPartial('../inc/banner-top');
?>


<div id="header">

    <div id="mainmenu">
        <ul>
            <li><a href="<?=PreDefineUrl::SiteUrl();?>" <?=PreDefineUrl::CssCurrentUrl('site');?> title="На главную">Главная</a></li>
            <li><a href="<?=PreDefineUrl::AboutUrl();?>" <?=PreDefineUrl::CssCurrentUrl('about');?>  title="Информация о проекте">О нас</a></li>
            <li><a href="<?=PreDefineUrl::ActionsUrl();?>" <?=PreDefineUrl::CssCurrentUrl('actions');?>  title="Акции и спецпредложения">Акции</a></li>
            <li><a href="<?=PreDefineUrl::VoteUrl();?>" <?=PreDefineUrl::CssCurrentUrl('vote');?> title="Пользовательское голосование">Голосования</a></li>
            <li><a href="<?=PreDefineUrl::ContactsUrl();?>" <?=PreDefineUrl::CssCurrentUrl('contacts');?>  title="Обратная связь">Контакты</a></li>
        </ul>
    </div><!--/#mainmenu-->

    <div id="account">
        <ul>
            <li>
                <a  href="#?w=600" rel="add-service" class="poplight" title="Добавить свой автосервис">Добавить свой сервис</a>
                <div id="add-service" class="popup-block">
                    <h3>Добавить сервис</h3>
                    <form action="">
                        <div class="warning">Системное сообщение</div>
                        <div class="line"><input type="text" value="Название компании" class="left" /> <input type="text" value="Адрес" class="right" /></div> 
                        <div class="line"><input type="submit" value="Сохранить" /></div>
                    </form>
                </div><!--/.popup-block-->
            </li>
            <?php if(Yii::app()->user->isGuest):?>
                <li>
                    <a href="#?w=300" rel="login-box" class="poplight" title="Войти в аккаунт">Вход</a> | <a href="<?=  PreDefineUrl::RegistrationUrl();?>" <?=PreDefineUrl::CssCurrentUrl('registration');?>  title="Зарегистрироваться на сайте">Регистрация</a>
                    <div id="login-box" class="popup-block">
                                        <h3>Войти на сайт</h3>
                        <form action="">
                            <div class="line"><input type="text" value="Логин" /></div>
                                                    <div class="line"><input type="password" value="Пароль" /></div>
                                                    <div class="line"><a href="#" title="Напомнить пароль">Забыли пароль?</a></div>
                                                    <div class="line"><input type="checkbox" /> Запомнить</div> 
                                                    <div class="line"><input type="button" value="Вход" /></div> 
                        </form>
                    </div><!--/.popup-block-->
                </li>
            <?php endif;?>
            <?php if(!Yii::app()->user->isGuest):?>
            <li>Вы вошли как <a href="<?=  PreDefineUrl::AccountUrl()?>" <?=  PreDefineUrl::CssCurrentUrl('account');?> title="Ваш аккаунт"><?php echo Yii::app()->user->name;?></a>, <a href="/account/logout" title="Выйти из аккаунта">Выйти</a>
            </li>
            <?php endif;?>
        </ul>
    </div><!--/#account-->
    
	<a id="logo" href="<?=PreDefineUrl::SiteUrl();?>" title="На главную страницу"><img src="/img/logo.png" alt="На главную" /></a>
 
        <div id="find-service"><a href="<?=PreDefineUrl::FindServiceUrl();?>" <?=  PreDefineUrl::CssCurrentUrl('findservice');?> title="Найти автосервис">Найти сервис</a></div><!--/#find-service--> 

    <div id="razdely">
        <ul>
            <li>
                <a href="<?=PreDefineUrl::AutopediaUrl();?>"  class="haschild <?=  PreDefineUrl::CssCurrentUrl('autopedia', 'submain');?>" title="Информация полезная для любого автолюбителя">Энциклопедия</a>
                <ul>
                    <li>
                        <a href="#" class="hassubchild" title="">Подпункт</a>
                        <ul> 
                            <li>
                                <a href="#" title="">Подподпункт</a>
                            </li>
                        </ul>
 
                    </li>
                    <li>
                        <a href="#" title="">Подпункт с длинным текстом</a>
                    </li>
                </ul>
            </li>
            <li><a href="<?=PreDefineUrl::TipsUrl();?>"   <?=  PreDefineUrl::CssCurrentUrl('tips');?>  title="Советы для автомобилистов">Советы</a></li>
            <li><a href="<?=PreDefineUrl::ReportUrl();?>" <?=  PreDefineUrl::CssCurrentUrl('report');?> title="Репортажи про авто и не только">Репортажи</a></li>
            <li><a href="<?=PreDefineUrl::ComplaneUrl();?>"  <?=  PreDefineUrl::CssCurrentUrl('complane');?> title="Пожаловаться на конкретный автомобиль">Пожаловаться на авто</a></li>
        </ul>
    </div><!--/#razdely-->
 
</div><!--/#header-->