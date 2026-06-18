<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Goegler-WebDev</title>

<!-- bootstrap.min.css -->
<!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"-->
<link href="/assets/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
</style>
<!-- Popper.min.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
		crossorigin="anonymous"></script>
<!--script type="text/javascript">
?php require __DIR__ . '/assets//bootstrap/dist/js/popper.min.js'; ?>
</script-->
<!-- bootstrap.bundle.js -->
<!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script-->
<script type="text/javascript">
<?php require __DIR__ . '/assets//bootstrap/dist/js/bootstrap.bundle.js'; ?>
</script>

</head><header>
<?php require __DIR__ . '/app/header.php'; ?>
</header><body data-bs-theme="dark">

<?php
$pages = require_once __DIR__ . '/app/Pages/whitelist.php';
$page =$_GET['page'] ?? 'home';
if (!isset($pages[$page])) {
	http_response_code(404);
	exit;
}
require __DIR__ . '/' . $pages[$page];
?>

<footer>
<?php require __DIR__ . '/app/footer.php'; ?>
</footer>


</body>
</html>
