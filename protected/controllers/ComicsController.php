<?php

class ComicsController extends Controller
{
	
	public function actionIndex()
	{
		$var=$_GET['index'];
		$img=$_GET['imag'];
		$image=$img[$var];
		if($image==null)
		{
			$this->render('index',array('image'=>null));
		}
		else
		{
		$this->render('index',array(
		'var'=>$var,
		'image'=>$image->image,
		));
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