<?php
// File Controller
// @author David Myers <davidm@linuxacademy.com>
// @version 1.0

namespace fileBrowser;

use fileBrowser\GenericFile;

// require_once(__DIR__.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.'File.php');

class FileController
{
	protected $currentPath = '';
	protected $currentTree = [];
	protected $defaultView = '';

	// Constructor
	// @var string $path
	public function __construct()
	{
		$this->init();
		try {
			$this->defaultView = file_get_contents('../views/default.txt');
		} catch(\Exception $e) {
			echo 'Error - '.$e->getMessage();
		}
	}

	// Display list of files
	public function listAction()
	{
		
	}

	// Display individual file
	// @var int $treeIndex
	public function viewAction(int $treeIndex)
	{
		$file = $this->currentTree[$treeIndex];
		$file;
	}

	// Move within the tree
	// @var string $path
	public function traverseAction(string $path)
	{
		chdir($path);
		$this->init();
	}

	// Set object variables
	protected function init()
	{
		$this->currentPath = getcwd();
		$this->currentTree = scandir($this->currentPath);
	}

	protected function resetView()
	{
		system('clear');
	}

	protected function paintView()
	{

	}

	public function highlightAction()
	{

	}
}
?>