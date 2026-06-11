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

<html lang="de">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Goegler-WebDev</title>
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/css/modals.css" rel="stylesheet">
	<link href="../assets/css/list-groups.css" rel="stylesheet">
	<link href="../assets/css/dashboard.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">
</head>
<body data-bs-theme="dark">
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

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/color-modes.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>
