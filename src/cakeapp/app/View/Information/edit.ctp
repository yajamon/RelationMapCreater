<div class="information form">
<?php echo $this->Form->create('Information'); ?>
	<fieldset>
		<legend><?php echo __('Edit Information'); ?></legend>
	<?php
		echo $this->Form->input('id');
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
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Information.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Information.id'))); ?></li>
	</ul>
	<?php echo $this->element('information/actions'); ?>
</div>
