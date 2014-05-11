<div class="subjects view">
<h2><?php echo __('Subject'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subject'), array('action' => 'edit', $subject['Subject']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subject'), array('action' => 'delete', $subject['Subject']['id']), null, __('Are you sure you want to delete # %s?', $subject['Subject']['id'])); ?> </li>
	</ul>
	<?php echo $this->element('subjects/actions'); ?>
</div>
<div class="related">
	<h3><?php echo __('Related Information'); ?></h3>
	<?php if (!empty($subject['Information'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Summary'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subject['Information'] as $information): ?>
		<tr>
			<td><?php echo $information['id']; ?></td>
			<td><?php echo $information['summary']; ?></td>
			<td><?php echo $information['description']; ?></td>
			<td><?php echo $information['created']; ?></td>
			<td><?php echo $information['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'information', 'action' => 'view', $information['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'information', 'action' => 'edit', $information['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'information', 'action' => 'delete', $information['id']), null, __('Are you sure you want to delete # %s?', $information['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Information'), array('controller' => 'information', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Labels'); ?></h3>
	<?php if (!empty($subject['Label'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subject['Label'] as $label): ?>
		<tr>
			<td><?php echo $label['id']; ?></td>
			<td><?php echo $label['name']; ?></td>
			<td><?php echo $label['created']; ?></td>
			<td><?php echo $label['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'labels', 'action' => 'view', $label['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'labels', 'action' => 'edit', $label['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'labels', 'action' => 'delete', $label['id']), null, __('Are you sure you want to delete # %s?', $label['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Label'), array('controller' => 'labels', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
