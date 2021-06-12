<?php

include_once($config['html_dir']."/includes/graphs/common.inc.php");

$rrd_filename = get_rrd_path($device, 'app-docker-'.$app["app_id"].'.rrd');

$array = array('containers'  => array('descr' => 'Containers', 'colour' => 'FF0000'),
               'running'  => array('descr' => 'Running', 'colour' => '00AAAA'),
               'paused' => array('descr' => 'Paused', 'colour' => '0022FF'),
               'stopped'  => array('descr' => 'Stopped', 'colour' => '22FF22'),
               'images'  => array('descr' => 'Images', 'colour' => '0000CC'),
);

$i = 0;
if (is_file($rrd_filename))
{
  foreach ($array as $ds => $data)
  {
    $rrd_list[$i]['filename'] = $rrd_filename;
    $rrd_list[$i]['descr'] = $data['descr'];
    $rrd_list[$i]['ds'] = $ds;
    $rrd_list[$i]['colour'] = $data['colour'];
    $i++;
  }
} else { echo("file missing: $rrd_filename");  }

$colours   = "mixed";
$nototal   = 1;
$unit_text = "Docker";

include($config['html_dir']."/includes/graphs/generic_multi_simplex_separated.inc.php");

// EOF
