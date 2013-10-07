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

                <div id="slider"><span></span>
					
                    <ul class="slides">
						<li>
                            <a href="#" title="Заголовок слайда 1"><img src="pic/slides/slide1.jpg" alt="Заголовок слайда 1" /></a>
                            <p class="flex-caption">Тут идет пояснительный текст к слайду 1.</p>
                        </li>
						<li>
                            <a href="#" title="Заголовок слайда 2"><img src="pic/slides/slide2.jpg" alt="Заголовок слайда 2" /></a>
                            <p class="flex-caption">Тут идет пояснительный текст к слайду 2.</p>
                        </li>
						<li>
                            <a href="#" title="Заголовок слайда 3"><img src="pic/slides/slide3.jpg" alt="Заголовок слайда 3" /></a>
                            <p class="flex-caption">Тут идет пояснительный текст к слайду 3.</p>
                        </li>
                    </ul><!--/.slides-->
						
                </div><!--/#slider-->

                <div id="carcure-is"><span></span>
					
                    <h3>CARCURE - Это ...</h3>
						
                    <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню, что именно говорил этот человек, открывший истину, которого я бы назвал зодчим счастливой жизни. Действительно, никто не отвергает, не презирает, не избегает наслаждений только из-за того, что это наслаждения</p>
						
                    <a href="/about.php" title="Подробнее о проекте" class="more">О проекте</a>
						
                </div><!--/#carcure-is-->
		
                <div id="search-by-auto"><span></span>
					
                    <h3>Поиск по автомобилю</h3>
						
                    <form action="">
                        <select>
                            <option>Марка&nbsp;</option>
                            <option>Опция</option>
                            <option>Опция</option>
                        </select>
                        <select>
                            <option>Модель&nbsp;</option>
                            <option>Опция</option>
                            <option>Опция</option>
                        </select>
                        <select>
                            <option>Год выпуска&nbsp;</option>
                            <option>Опция</option>
                            <option>Опция</option>
                        </select>
                        <input type="submit" value="Поиск" />
                    </form>
						
                </div><!--/#search-by-auto-->
					
                <div id="content">

                    <?php
                        $this->renderPartial('../inc/banner-center');
                    ?>
                    
                    <div id="new"><span></span>
							
                        <h3>Новое</h3>
								
                        <div class="article-prev">
                            <h4>Заголовок сататьи</h4>
                            <a class="thumb" href="#" title="Заголовок сататьи"><img src="pic/articles/thumbs/thumb.jpg" alt="Заголовок сататьи" /></a>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление...</p>
                            <ul class="article-info"><li class="date">13.07.2013</li><li class="cat"><a href="#" title="Категория">Категория</a></li></ul>
                        </div><!--/.article-prev-->
						
						<div class="article-prev">
                            <h4>Заголовок сататьи</h4>
                            <a class="thumb" href="#" title="Заголовок сататьи"><img src="pic/articles/thumbs/thumb.jpg" alt="Заголовок сататьи" /></a>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление...</p>
                            <ul class="article-info"><li class="date">13.07.2013</li><li class="cat"><a href="#" title="Категория">Категория</a></li></ul>
                        </div><!--/.article-prev-->
						
						<div class="article-prev">
                            <h4>Заголовок сататьи</h4>
                            <a class="thumb" href="#" title="Заголовок сататьи"><img src="pic/articles/thumbs/thumb.jpg" alt="Заголовок сататьи" /></a>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление...</p>
                            <ul class="article-info"><li class="date">13.07.2013</li><li class="cat"><a href="#" title="Категория">Категория</a></li></ul>
                        </div><!--/.article-prev-->
						
						<div class="article-prev">
                            <h4>Заголовок сататьи</h4>
                            <a class="thumb" href="#" title="Заголовок сататьи"><img src="pic/articles/thumbs/thumb.jpg" alt="Заголовок сататьи" /></a>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление...</p>
                            <ul class="article-info"><li class="date">13.07.2013</li><li class="cat"><a href="#" title="Категория">Категория</a></li></ul>
                        </div><!--/.article-prev-->
						
						<div class="article-prev">
                            <h4>Заголовок сататьи</h4>
                            <a class="thumb" href="#" title="Заголовок сататьи"><img src="pic/articles/thumbs/thumb.jpg" alt="Заголовок сататьи" /></a>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление...</p>
                            <ul class="article-info"><li class="date">13.07.2013</li><li class="cat"><a href="#" title="Категория">Категория</a></li></ul>
                        </div><!--/.article-prev-->
						
						<div class="article-prev">
                            <h4>Заголовок сататьи</h4>
                            <a class="thumb" href="#" title="Заголовок сататьи"><img src="pic/articles/thumbs/thumb.jpg" alt="Заголовок сататьи" /></a>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление...</p>
                            <ul class="article-info"><li class="date">13.07.2013</li><li class="cat"><a href="#" title="Категория">Категория</a></li></ul>
                        </div><!--/.article-prev-->
						
						<div class="article-prev">
                            <h4>Заголовок сататьи</h4>
                            <a class="thumb" href="#" title="Заголовок сататьи"><img src="pic/articles/thumbs/thumb.jpg" alt="Заголовок сататьи" /></a>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление...</p>
                            <ul class="article-info"><li class="date">13.07.2013</li><li class="cat"><a href="#" title="Категория">Категория</a></li></ul>
                        </div><!--/.article-prev-->
						
						<div class="article-prev">
                            <h4>Заголовок сататьи</h4>
                            <a class="thumb" href="#" title="Заголовок сататьи"><img src="pic/articles/thumbs/thumb.jpg" alt="Заголовок сататьи" /></a>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление...</p>
                            <ul class="article-info"><li class="date">13.07.2013</li><li class="cat"><a href="#" title="Категория">Категория</a></li></ul>
                        </div><!--/.article-prev-->
								
                    </div><!--/#new-->

                    <?php
                        $this->renderPartial('../inc/banner-bottom');
                    ?>
                    
                    <div id="news"><span></span>
							
                        <h3>Новости</h3>
								
                        <div class="news-prev">
                            <h4><a href="#" title="Заголовок новости">Заголовок новости</a></h4>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания...</p>
                        </div><!--/.news-prev-->
						
						<div class="news-prev">
                            <h4><a href="#" title="Заголовок новости">Заголовок новости</a></h4>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания...</p>
                        </div><!--/.news-prev-->
						
						<div class="news-prev">
                            <h4><a href="#" title="Заголовок новости">Заголовок новости</a></h4>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания...</p>
                        </div><!--/.news-prev-->
						
						<div class="news-prev">
                            <h4><a href="#" title="Заголовок новости">Заголовок новости</a></h4>
                            <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания...</p>
                        </div><!--/.news-prev-->
								
                        <a href="#" title="Все новости" class="more">Все новости</a>
								
                    </div><!--/#news-->
		
                    <div id="actions"><span></span>
							
                        <h3>Акции</h3>
								
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
								
                        <a href="<?=  PreDefineUrl::ActionsUrl();?>" title="Все акции" class="more">Все акции</a>
								
                    </div><!--/#actions-->

                </div><!--/#content-->

            </div><!--/#main-->
			
        </div><!--/.w1-->



<?php
        $this->renderPartial('../__footer');
?>


</body>
</html>