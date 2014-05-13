<div class="information form">
<?php echo $this->Form->create('Information'); ?>
	<fieldset>
		<legend><?php echo __('Add Information'); ?></legend>
	<?php
		echo $this->Form->input('summary');
		echo $this->Form->input('description');
		echo $this->Form->input('Label');
		echo $this->Form->input('Subject');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php echo $this->element('information/actions'); ?>
</div>
