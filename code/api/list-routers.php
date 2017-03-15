<?php

$routesOutput = shell_exec('route -n');

$routesOutput = explode("\n", $routesOutput);
$routesOnly = '';
foreach ($routesOutput as $key => $value) {
  if($key > 1)
    $routesOnly .= $value."\n";
}

$regex = '/([\w\.]+)\s+([\w\.]+)\s+([\w\.]+)\s+(\w+)\s+(\w+)\s+(\w+)\s+(\w+)\s+(\w+)/';
preg_match_all($regex, $routesOnly, $matches);

$routes = [];
foreach ($matches[1] as $key => $value) {
   $route = [
    'address' => $matches[1][$key],
    'gateway' => $matches[2][$key],
    'mask' => $matches[3][$key],
    'interface' => $matches[8][$key]
  ];
  $routes[] = $route;
}


echo json_encode($routes);
