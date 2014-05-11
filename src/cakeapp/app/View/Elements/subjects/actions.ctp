<?php

// action をリストアップする
$actions_data = array(
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
);

echo $this->element('common/actions', array('actions_data' => $actions_data));