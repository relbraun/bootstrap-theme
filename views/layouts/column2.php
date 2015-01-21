<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="col-md-10">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="col-md-2">
	<div id="sidebar" class="nav navbar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations nav navbar-pills'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>