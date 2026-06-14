<!DOCTYPE html>
<html lang="de">
<?php

$page =$_GET['page'] ?? 'home';

$pages = require __DIR__ . '/app/whitelist.php';

if (!isset($pages[$page])) {
	http_response_code(404);
	exit;
}

require __DIR__ . '/app/Layout/header.php';
require __DIR__ . '/app/Pages/' . $pages[$page];
require __DIR__ . '/app/Layout/footer.php';

?>

</html>
