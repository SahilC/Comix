<?php
$this->breadcrumbs=array(
	'Index',); 
?>
<title>ComiX</title>
<head>
<script type="text/javascript">
	function Resize()
	{
		document.getElementById('image').width=1250;
		document.getElementById('image').height=1000;
		document.getElementById('link').innerHTML="original size";
		document.getElementById('link').setAttribute("onclick","javascript:resize();");
	}
	function resize()
	{
		document.getElementById('image').width=900;
		document.getElementById('image').height=750;
		document.getElementById('link').innerHTML="Expand Image";
		document.getElementById('link').setAttribute("onclick","javascript:Resize();");
	}
</script>
</head>
<p>
<?php
$filename=$_GET['filename'];
$chapter=$_GET['chapter'];
?>
<div style="font: normal 10pt Arial,Helvetica,sans-serif;font-size: 140%;position:relative;left:75%;">
<?php
echo $filename.' Chapter Number:'.$chapter.'<br/>';
?>
<select class="text" name="bmonth" runat="server" id="bmonth">
<?php
for($k=0;$k<$i;$k++)
{
if($k==$var)
	echo '<option value="'.$k.'" selected="selected">'.$k.'</option>';
else
	echo '<option value="'.$k.'">'.$k.'</option>';
}
?>
</select>
<?php
echo CHtml::button('Prev',array('submit'=>array('prev','var'=>$var,'filename'=>$filename,'chapter'=>$chapter),));
echo CHtml::button('Next',array('submit'=>array('next','var'=>$var,'filename'=>$filename,'chapter'=>$chapter),));
?>
</div>
<?php
echo '<img id=\'image\' src="data:image/jpeg;base64,'.base64_encode( $image ).'" width="900" height="750"/>';
if($image!=null)
{
echo '<a id="link" onClick="Resize();" style="position:relative;left:45%;">Expand Image</a>';
}
?>
</p>
