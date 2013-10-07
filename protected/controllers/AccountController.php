<?php

class AccountController extends Controller
{
        
        public function accessRules() {
            return array(
                array('allow', // позволим аутентифицированным пользователям выполнять любые действия
                    'users'=>array('@'),
                ),
                array('deny',  // остальным запретим всё
                    'users'=>array('*'),
                ),
    //            array('deny',
    //                'actions' => array('myData'),
    //                'users' => array('?'),
    //                'expression' => 'is_null(Yii::app()->request->getQuery(\'ucode\'))',
    //            ),
                //array('deny'),
            );
        }
	public function actionIndex()
	{
            if(!Yii::app()->user->isGuest) {
		$this->render('index');
            } else {
                $this->redirect(Yii::app()->controller->createUrl('/site'));
            }
	}
        
        public function actionLogout() {
            $redirect = Yii::app()->controller->createUrl('/site');
            Yii::app()->user->logout();
            $this->redirect($redirect);
        }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}