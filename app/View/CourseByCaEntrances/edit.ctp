<div class="courseByCaEntrances form">
<?php echo $this->Form->create('CourseByCaEntrance'); ?>
	<fieldset>
		<legend><?php echo __('Edit Course By Ca Entrance'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('co_code',array('options'=>$co_codes,'class'=>'form-control'));
		echo $this->Form->input('entrance',array('options'=>$entrances,'class'=>'form-control'));

		
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
