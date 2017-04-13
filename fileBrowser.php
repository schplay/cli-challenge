<?php
// fileBrowser
// @author David Myers <davidm@linuxacademy.com>
// @version 1.0
// CLI script that provides a TUI for browsing and reading text files

// instantiate the loader
$loader = new \fileBrowser\Psr4AutoloaderClass;
// register the autoloader
$loader->register();
// register the base directories for the namespace prefix
$loader->addNamespace('fileBrowser', '/');
$loader->addNamespace('fileBrowser', '/models');
$loader->addNamespace('fileBrowser', '/controllers');

$browser = new \fileBrowser\FileController();

$mappings = [
    [
        65 => 'up',
        66 => 'down',
        68 => 'left',
        67 => 'right',
        56 => 'up',
        50 => 'down',
        52 => 'left',
        54 => 'right',
    ],
    [
        119 => 'up',
        115 => 'down',
        97 => 'left',
        100 => 'right',
    ],

];

system('stty cbreak -echo');
$stdin = fopen('php://stdin', 'r');

while (1) {
    $key = ord(fgetc($stdin));
    
    switch($key) {
    	case '':
    	break;
    	default:
    	break;
    }
}



?>