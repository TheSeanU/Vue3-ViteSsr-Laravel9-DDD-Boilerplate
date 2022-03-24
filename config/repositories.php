<?php
$repository = str_replace(".php", "::class", glob('App\\Domain\\' . "*" . '\\Repository\\' . '*.php'));
$interface = str_replace(".php", "::class", glob('App\\Domain\\' . "*" . '\\Interface\\' . '*.php'));

$interfaceRepository = array_combine($interface, $repository);

return $interfaceRepository;
