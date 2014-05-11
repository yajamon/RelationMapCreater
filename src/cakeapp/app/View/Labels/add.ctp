<div class="labels form">
<?php echo $this->Form->create('Label'); ?>
	<fieldset>
		<legend><?php echo __('Add Label'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Information');
		echo $this->Form->input('Subject');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php echo $this->element('labels/actions'); ?>
</div>
