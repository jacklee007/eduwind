<?php
/* @var $this CourseController */
/* @var $dataProvider CActiveDataProvider */

?>
<div class="row ">
<?php 

?>
	<div class="col-sm-2 dxd-course-category">
		<?php $this->widget('booster.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>CourseCategory::getItems(),
)); ?>
	</div>
	<div class="col-sm-10">
	<h3 class="side-lined"><?php echo Yii::t('app','关注话题');?></h3>
	<br/>
	<?php $this->widget('booster.widgets.TbThumbnails', array(
	    'dataProvider'=>$dataProvider,
	    'template'=>"{items}\n{pager}",
	    'itemView'=>'_card'
	)); ?>
	</div>
</div>
