<h4>Subject</h4>
<ul>
	<li><?php echo $this->Html->link(__('New Subject'), array('action' => 'add')); ?></li>
</ul>
<h4>Informatiion</h4>
<ul>
	<li><?php echo $this->Html->link(__('List Information'), array('controller' => 'information', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Information'), array('controller' => 'information', 'action' => 'add')); ?> </li>
</ul>
<h4>Label</h4>
<ul>
	<li><?php echo $this->Html->link(__('List Labels'), array('controller' => 'labels', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Label'), array('controller' => 'labels', 'action' => 'add')); ?> </li>
</ul>