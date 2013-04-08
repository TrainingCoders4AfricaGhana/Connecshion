<?php

class ProfileController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionConfirmEmail($guid)
	{
		$record=User::model()->findByAttributes(array('Guid'=>$guid,'EmailVerified'=>0));
        if($record===null)
		{
			throw new CHttpException(404,'invalid request');
		}
		else
		{
			$record->EmailVerified=1;
			$record->save();
			//Yii::app()->user->setFlash('success', 'Everything went fine!');
			$this->render('confirmEmail',array('user'=>$record));
		}
         
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