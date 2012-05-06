<?php
$this->breadcrumbs=array(
	'Index',); 
?>
<title>ComiX</title>

<p>
<?php
echo CHtml::button('Prev',array('submit'=>array('prev','var'=>$index),'img'=>'/images/images.jpg',));
echo CHtml::button('Next',array('submit'=>array('next','var'=>$index),'img'=>'/images/images.jpg',));
if($index!=0)
echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'" width="900" height="750"/>';
?>
</p>
