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
							
                        <h1>Голосования</h1>
								
                        <div class="vote-box">
								
                            <h4>Руль с какой стороны для вас более удобен?</h4>
                                    
                            <form action="">
                                <div class="line"><input type="radio" name="group" value="1" checked="checked" /><label>Слева (<strong>33</strong> <em>голосов</em>)</label></div>
                                <div class="line"><input type="radio" name="group" value="2" /><label>Справа (<strong>12</strong> <em>голосов</em>)</label></div>
                                <div class="line"><input type="radio" name="group" value="3" /><label>Не принципиально (<strong>3</strong> <em>голосов</em>)</label></div>
                                <div class="line"><input type="submit" value="Голосовать" /></div>
                            </form>
									
                        </div><!--/.vote-box-->
								
                        <div class="vote-box">
								    
                            <h4>Руль с какой стороны для вас более удобен?</h4>
                                    
                            <form action="">
                                <div class="line"><input type="radio" name="group" value="1" checked="checked" /><label>Слева (<strong>33</strong> <em>голосов</em>)</label></div>
                                <div class="line"><input type="radio" name="group" value="2" /><label>Справа (<strong>12</strong> <em>голосов</em>)</label></div>
                                <div class="line"><input type="radio" name="group" value="3" /><label>Не принципиально (<strong>3</strong> <em>голосов</em>)</label></div>
                                <div class="line"><input type="submit" value="Голосовать" /></div>
                            </form>
									
                        </div><!--/.vote-box-->
								
                        <div class="vote-box">
								   
                            <h4>Руль с какой стороны для вас более удобен?</h4>
									
                            <form action="">
                                <div class="line"><input type="radio" name="group" value="1" checked="checked" /><label>Слева (<strong>33</strong> <em>голосов</em>)</label></div>
                                <div class="line"><input type="radio" name="group" value="2" /><label>Справа (<strong>12</strong> <em>голосов</em>)</label></div>
                                <div class="line"><input type="radio" name="group" value="3" /><label>Не принципиально (<strong>3</strong> <em>голосов</em>)</label></div>
                                <div class="line"><input type="submit" value="Голосовать" /></div>
                            </form>
									
                        </div><!--/.vote-box-->
								
                        <div id="paginacia">
                            <ul>
                                <li><a href="#"><<</a></li>
                                <li><a href="#"><</a></li>
                                <li class="current"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">></a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div><!--/#paginacia-->
								
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
