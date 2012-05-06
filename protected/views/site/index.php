<?php $this->pageTitle=Yii::app()->name; ?>

<h1 style="color:white"><i>Welcome to <?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<p>
<?php
if($list==array())
{
	echo 'Welcome to Comix!! <br/>';
}
else
{
	echo 'Welcome to Comix '.Yii::app()->user->name.'<br/>';
}
echo '<ul>';
foreach($list as $l)
{
echo '<li>'.CHtml::link(($l->filename),array('search/search','search'=>$l->filename,)).'</li>';
	echo '<br/>';
}
echo '</ul>';
?>
</p>