<?php

class RegistrationController extends Controller
{
        public function filters()
        {
            return array(
                'accessControl',
                'ajaxOnly + RestorePassword', //, LogSteps
            );
        }
        
        /*public function accessRules() {
            return array(
                /*array('allow', // позволим аутентифицированным пользователям выполнять любые действия
                    'users'=>array('@'),
                    
                ),
    //            array('deny',
    //                'actions' => array('myData'),
    //                'users' => array('?'),
    //                'expression' => 'is_null(Yii::app()->request->getQuery(\'ucode\'))',
    //            ),
                //array('deny'),
            );
        }*/
        
	public function actionIndex()
	{
            $user=new User();
            $user->group = 0;
            if(!Yii::app()->user->isGuest) {
                $this->render('index',array('model'=>$user));
            } else {
                $this->render('index',array('model'=>$user));
                //$this->redirect('/account');
                //$this->redirect('/account',array('model'=>$model));
            }
            if(isset($_POST['ajax']) && $_POST['ajax']==='login-form') {
                $this->performAjaxValidation($user);
            }         
            if(isset($_POST['User']))
            {
                $user->attributes=$_POST['User'];
                if($user->validate() && $user->save()) {
                    //Yii::app()->authManager->assign('client', $user->id);
                //Yii::app()->authManager->save();
                if($user->authenticateOnRegistration()){
                    Yii::app()->user->login($user,Yii::app()->params['loginDuration']);
                    $redirect = Yii::app()->controller->createUrl('/account');
                    $this->redirect($redirect);
                }
                
                //$user->emailGreetingsAndPassword($user);
//                $data=$item_id;
//                echo CJavaScript::encode($data);
                
                //Logging
                //Logging::logActivity($user,1, false, $data);

                        
                /*if($model->validate()&& $model->login()) $this->redirect(Yii::app()->user->returnUrl);
                /*{
                   // Yii::app()->user->login($model,Yii::app()->params['loginDuration']);
                    $model->authenticateOnRegistration();
                    //Logging
                    //Logging::logActivity($model,3,false,$data);
                    $this->redirect('account');
                } else {
                    //Logging
                    //Logging::logActivity($model,4,false,$data);                
                }*/
                }
            }
            //$this->render('index',array('model'=>$model));
	}
        
        public function actionLogin() {
            SiteController::Logging();
        }

        public function actionSetsession(){
            $session = Yii::app()->session;
            $data = Yii::app()->request->getPost('size');
            return true;
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