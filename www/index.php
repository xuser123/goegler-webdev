

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

<!-- color-modes.js -->
<script src="../assets/js/color-modes.js"></script>

<!-- chart.umd.js -->
<!--script src="../assets/js/chart.umd.js" class="astro-vvvwv3sm"></script-->

<!-- dashboard.js -->
<script src="../assets/js/dashboard.js" 
	class="astro-vvvwv3sm"></script>

<!-- jquery-3.4.1.slim.min.js -->
<!-- Lightning-fast web components -->
<!--script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script-->

<!-- Popper.min.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
		crossorigin="anonymous"></script>

<!-- bootstrap.bundle.js -->
<script src="../assets/js/bootstrap.bundle.js"></script>

<!-- bootstrap.min.js -->
<!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"-->

<!-- main.js -->
<script src="../assets/js/main.js"></script>

<!-- npm - software registry for packages -->

</body>
</html>
