<?php
$this->breadcrumbs=array(
	'Search',
);?>
<head>
<h1><?php echo $this->id ?></h1>

<p>
	<form action="/blog/index.php/search/search" method="get">
		<input type="text" value="Search" name="search" >
		<br/>
		<input type="submit" value="Submit"/>
	</form>
	<br/>
	<br/>
	<?php
	if($image!=null)
	{
	echo '<ul>';
		foreach($image as $i)
		{
			echo '<li>'.CHtml::link((($i->filename).' '.($i->chapterno)),array('chap','filename'=>$i->filename,'chapter'=>$i->chapterno,)).'</li>';
			echo '<br/>';
		}
echo '</ul>';
}
	?>
</p>
