<?php

/**
 * Observium
 *
 *   This file is part of Observium.
 *
 * @package    observium
 * @subpackage poller
 * @author Artur F. da Rocha
 *
 */

if (!empty($agent_data['app']['docker']))
{
  $app_id = discover_app($device, 'docker');

  list ($containers, $running, $paused, $stopped, $images) = explode("\n", $agent_data['app']['docker']);

  update_application($app_id, array(
	  'containers'  => $containers,
	  'running'     => $running,
	  'paused'      => $paused,
	  'stopped'     => $stopped,
	  'images'      => $images,
  ));

  rrdtool_update_ng($device, 'docker', array(
	  'containers'  => $containers,
	  'running'     => $running,
          'paused'      => $paused,
          'stopped'     => $stopped,
          'images'      => $images,
  ), $app_id);
}

// EOF
