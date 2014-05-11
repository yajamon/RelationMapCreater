<?php
/**
 *
 */

$current = array(
	'controller' => $this->name,
	'action'     => $this->action,
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