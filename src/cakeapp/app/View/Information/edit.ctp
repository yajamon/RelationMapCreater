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
		<li><?php echo $this->Html->link(__('List Information'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Labels'), array('controller' => 'labels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Label'), array('controller' => 'labels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
