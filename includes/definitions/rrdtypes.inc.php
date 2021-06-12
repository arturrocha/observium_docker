<?php

$config['rrd_types']['docker'] = array(
  'file'  => 'app-docker-%index%.rrd',
  'ds'    => array(
	  'containers'     => array('type' => 'GAUGE', 'min' => 0, 'max' => 9999),
	  'running'        => array('type' => 'GAUGE', 'min' => 0, 'max' => 9999),
	  'paused'         => array('type' => 'GAUGE', 'min' => 0, 'max' => 9999),
	  'stopped'        => array('type' => 'GAUGE', 'min' => 0, 'max' => 9999),
	  'images'         => array('type' => 'GAUGE', 'min' => 0, 'max' => 9999),
  ),
);

// EOF
