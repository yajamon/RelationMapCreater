<div class="subjects form">
<?php echo $this->Form->create('Subject'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subject'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Information');
		echo $this->Form->input('Label');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subject.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Subject.id'))); ?></li>
	</ul>
	<?php echo $this->element('subjects/actions'); ?>
</div>
