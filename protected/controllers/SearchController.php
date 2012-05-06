<?php
class SearchController extends Controller
{
	public function actionIndex()
	{		
		$this->render('index',array('image'=>null));
	}
	public static function set($i)
	{
		self::$imag=$i;
	}
	
	public function actionSearch()
	{
		$var=$_GET['search'];
		$crit=new CDbCriteria();
		$crit->condition='filename=:var and page=1';
		$crit->params[':var']=$var;
		$list=Comics::model()->findAll($crit);
		$this->render('index',array('image'=>$list));
	}
	public function actionChap()
	{
		$var=0;
		$var1=$_GET['filename'];
		$var2=$_GET['chapter'];
		$crit=new CDbCriteria();
		$crit->condition='filename=:var and chapterno=:var2';
		$crit->params[':var']=$var1;
		$crit->params[':var2']=$var2;
		$imag=Comics::model()->findAll($crit);
		$i=0;
		foreach($imag as $k)
		{
			$i=$i+1;
		}
		$this->render('search',array('var'=>$var,'image'=>$imag[$var]->image,'filename'=>$var1,'chapter'=>$var2,'i'=>$i));
	}
	public function actionNext()
	{
		$var=$_GET['var'];
		$var1=$_GET['filename'];
		$var2=$_GET['chapter'];
		$crit=new CDbCriteria();
		$crit->condition='filename=:var and chapterno=:var2';
		$crit->params[':var']=$var1;
		$crit->params[':var2']=$var2;
		$imag=Comics::model()->findAll($crit);
		$var+=1;
		$i=0;
		foreach($imag as $k)
		{
			$i=$i+1;
		}
		if($var<$i)
		{
			$image=$imag[$var];
		}
		else
		{
			$image=null;
		}
		if($image==null)
		{
			$this->render('search',array(
			'var'=>$var,
			'image'=>null,
			'i'=>$i,
			));
		}
		else
		{
		$this->render('search',array(
		'var'=>$var,
		'image'=>$image->image,
		'i'=>$i,
		));
		}
	}
	public function actionPrev()
	{
		$var=$_GET['var'];
		$var1=$_GET['filename'];
		$var2=$_GET['chapter'];
		$crit=new CDbCriteria();
		$crit->condition='filename=:var and chapterno=:var2';
		$crit->params[':var']=$var1;
		$crit->params[':var2']=$var2;
		$imag=Comics::model()->findAll($crit);
		$i=0;
		foreach($imag as $k)
		{
			$i=$i+1;
		}
		$var-=1;
		if($var>=0)
		{
		$image=$imag[$var];
		}
		else
		{
		$image=null;
		}
		if($image==array())
		{
			$this->render('search',array(
			'var'=>$var,
			'image'=>null,
			'i'=>$i,
			));
		}
		else
		{
		$this->render('search',array(
		'var'=>$var,
		'image'=>$image->image,
		'i'=>$i,
		));
		}
	}

}