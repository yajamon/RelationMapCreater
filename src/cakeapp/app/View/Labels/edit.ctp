<div class="labels form">
<?php echo $this->Form->create('Label'); ?>
	<fieldset>
		<legend><?php echo __('Edit Label'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Information');
		echo $this->Form->input('Subject');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Label.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Label.id'))); ?></li>
	</ul>
	<?php echo $this->element('labels/actions'); ?>
</div>
