<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->bodyClass("docs");
$page->pageTitle("Everything is modular");


if(is_array($action) && count($action)) {

	if(count($action) == 1) {

		$page->page(array(
			"templates" => "docs/".$action[0].".php"
		));
		exit();
	}

}

$page->page(array(
	"templates" => "docs/index.php"
));
exit();

?>