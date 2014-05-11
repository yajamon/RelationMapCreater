<?php

$current = array(
	'controller' => $this->name,
	'action'     => $this->action,
);

// action をリストアップする
$actions_data = array(
	'Label' => array(
		array(
			'label' => 'List Labels',
			'link'  => array('controller' => 'labels', 'action' => 'index'),
		),
		array(
			'label' => 'New Label',
			'link'  => array('controller' => 'labels', 'action' => 'add'),
		),
	),
	'Subject' => array(
		array(
			'label' => 'List Subjects',
			'link'  => array('controller' => 'subjects', 'action' => 'index'),
		),
		array(
			'label' => 'New Subject',
			'link'  => array('controller' => 'subjects', 'action' => 'add'),
		),
	),
	'Information' => array(
		array(
			'label' => 'List Information',
			'link'  => array('controller' => 'information', 'action' => 'index'),
		),
		array(
			'label' => 'New Information',
			'link'  => array('controller' => 'information', 'action' => 'add'),
		),
	),
);

function check_writable($link, $current){
	if (
		strcasecmp($current['controller'], $link['controller']) !== 0 ||
		strcasecmp($current['action'],     $link['action'])     !== 0
	) {
		return true;
	}else{
		return false;
	}
}
?>
<?php foreach ($actions_data as $controller_name => $actions): ?>
<h4><?php echo $controller_name; ?></h4>
<ul>
	<?php foreach ($actions as $action): ?>

	<?php if (check_writable($action['link'], $current)): ?>
	<li><?php echo $this->Html->link(__($action['label']), $action['link']); ?></li>
	<?php endif ?>

	<?php endforeach ?>
</ul>

<?php endforeach ?>