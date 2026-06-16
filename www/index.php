<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Goegler-WebDev</title>

<link href="bootstrap.css" rel="stylesheet">

<!-- bootstrap.min.css -->
<!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"-->

</head>
<body data-bs-theme="dark">
<?php

$pages = require __DIR__ . '/app/whitelist.php';

$page =$_GET['page'] ?? 'home';

if (!isset($pages[$page])) {
	http_response_code(404);
	exit;
}

require __DIR__ . '/app/Layout/header.php';
require __DIR__ . '/assets/modal.htm';
require __DIR__ . '/assets/carousel.htm';
require __DIR__ . '/app/Pages/' . $pages[$page];
require __DIR__ . '/app/Layout/footer.php';

?>

<script src="popper.min.js"></script>

<!-- Popper.min.js -->
<!--script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
		crossorigin="anonymous"></script-->

<script src="bootstrap.bundle.js"></script>

<!-- bootstrap.bundle.js -->
<!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script-->
<!--script src="/assets/js/bootstrap.bundle.js"></script-->

<?php

var_dump ($_GET);


/* DEBUGGING includes */
$included_files = get_included_files();
foreach ($included_files as $filename) {
    echo "$filename\n";
}
$include_path = get_include_path();
echo $include_path;

phpinfo();
?>
</body>
</html>
