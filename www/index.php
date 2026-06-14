<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Goegler-WebDev</title>
<link href="/assets/css/bootstrap.css" rel="stylesheet">
<link href="/assets/css/modals.css" rel="stylesheet">
<link href="/assets/css/list-groups.css" rel="stylesheet">
<link href="/assets/css/dashboard.css" rel="stylesheet">
<link href="/assets/css/style.css" rel="stylesheet">
<!-- bootstrap.min.js -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Popper.min.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
		crossorigin="anonymous"></script>

<!-- bootstrap.bundle.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<!--script src="/assets/js/bootstrap.bundle.js"></script-->

</head>
<body data-bs-theme="dark">

<?php

require __DIR__ . '/app/Layout/header.php';

$page =$_GET['page'] ?? 'home';

$pages = require __DIR__ . '/app/whitelist.php';

if (!isset($pages[$page])) {
	http_response_code(404);
	exit;
}

require __DIR__ . '/app/Pages/' . $pages[$page];
require __DIR__ . '/app/Layout/footer.php';

?>

</body>
</html>
