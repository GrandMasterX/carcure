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
                    <?php $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'login-form',
                        'enableAjaxValidation'=>true,
                        'clientOptions'=>array(
                            'validateOnSubmit'=>true,
                        ),
                        'htmlOptions'=>array(
                            'class'=>'registration-form'
                            ),
                        )); ?>
                    <div class="box640"><span></span>
                        <h1>Регистрация</h1>
                            <div class="line">
                                <?php echo $form->textField($model,'name', array('class'=>' left', 'placeholder'=>Yii::t('login', 'ФИО'))); ?>
                                <?php echo $form->error($model,'name'); ?>
                                <?php echo $form->textField($model,'login', array('class'=>' right', 'placeholder'=>Yii::t('login', 'Логин'))); ?>
                                <?php echo $form->error($model,'login'); ?>
                            </div>
                            <div class="line">
                                <?php echo $form->textField($model,'email', array('class'=>' left', 'placeholder'=>Yii::t('login', 'Ваш e-mail'))); ?>
                                <?php echo $form->error($model,'email'); ?>
                                <?php echo $form->textField($model,'email_repeat', array('class'=>' right', 'placeholder'=>Yii::t('login', 'Ваш e-mail еще раз'))); ?>
                                <?php echo $form->error($model,'email_repeat'); ?>
                            </div>
                            <div class="line">
                                <?php echo $form->textField($model,'password', array('class'=>' left', 'placeholder'=>Yii::t('login', 'Пароль'))); ?>
                                <?php echo $form->error($model,'password'); ?>
                                <?php echo $form->textField($model,'password_repeat', array('class'=>' right', 'placeholder'=>Yii::t('login', 'Пароль еще раз'))); ?>
                                <?php echo $form->error($model,'password_repeat'); ?>
                            </div>
                            <div class="line">
                                <?php echo $form->radioButtonList($model,'group',array('0'=>'Пользователь','1'=>'Дилер'),array('separator'=>'</div><div class="line">')); ?>
                            </div>
                            <div class="line">
                                <?php echo $form->textArea($model, 'details', array('maxlength' => 300)); ?>
                            </div>
                            <div class="line">
                                <?php echo $form->checkBox($model,'mailing',array('checked'=>'')); ?>
                                <?php echo $form->labelEx($model, 'mailing'); ?>
                            </div>
                            <div class="line">
                                <?php echo CHtml::submitButton(Yii::t('login', 'Регистрация')); ?>
                            </div> 
								
                    </div><!--/.box640-->
                    <?php $this->endWidget(); ?>
                    

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
