<?php
$this->append('css');
echo $this->Html->css('subjects/index');
$this->end();
?>
 <div class="subjects index">
	<h2><?php echo __('Subjects'); ?></h2>
	<h3>Sorting menu</h3>
	<ul class='sorting_menu' >
		<li><?php echo $this->Paginator->sort('id'); ?></li>
		<li><?php echo $this->Paginator->sort('name'); ?></li>
		<li><?php echo $this->Paginator->sort('created'); ?></li>
		<li><?php echo $this->Paginator->sort('modified'); ?></li>
		<!-- <li class="actions"><?php echo __('Actions'); ?></li> -->
	</ul>
	<h3>Contents</h3>
	<ul class="contents">
		<?php foreach ($subjects as $subject): ?>
		<li class='content'>
			<ul>
				<li><?php echo h($subject['Subject']['id']); ?>&nbsp;</li>
				<li><?php echo h($subject['Subject']['name']); ?>&nbsp;</li>
				<li><?php echo h($subject['Subject']['created']); ?>&nbsp;</li>
				<li><?php echo h($subject['Subject']['modified']); ?>&nbsp;</li>
				<li class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $subject['Subject']['id']), array('class'=>'view')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subject['Subject']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subject['Subject']['id']), null, __('Are you sure you want to delete # %s?', $subject['Subject']['id'])); ?>
				</li>
			</ul>
		</li>
		<?php endforeach; ?>
	</ul>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Subject'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Information'), array('controller' => 'information', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Information'), array('controller' => 'information', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Labels'), array('controller' => 'labels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Label'), array('controller' => 'labels', 'action' => 'add')); ?> </li>
	</ul>
</div>
