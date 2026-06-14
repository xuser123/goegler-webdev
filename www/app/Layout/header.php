<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Goegler-WebDev</title>
	<link href="/assets/css/bootstrap.css" rel="stylesheet">
	<link href="/assets/css/modals.css" rel="stylesheet">
	<link href="/assets/css/list-groups.css" rel="stylesheet">
	<link href="/assets/css/dashboard.css" rel="stylesheet">
	<link href="/assets/css/style.css" rel="stylesheet">

	<!-- jquery-3.4.1.slim.min.js -->
	<!-- Lightning-fast web components -->
	<!--script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script-->

	<!-- Popper.min.js -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
			crossorigin="anonymous"></script>

	<!-- bootstrap.bundle.js -->
	<script src="/assets/js/bootstrap.bundle.js"></script>

	<!-- bootstrap.min.js -->
	<!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"-->

	<!-- main.js -->
	<script src="/assets/js/main.js"></script>

</head>
<body data-bs-theme="dark">
<nav>
<ul class="nav justify-content-end text-bg-primary p-2">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" 
			href="/app/Pages/home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" 
			href="/app/Pages/about">About Us</a>
  </li>
	<div class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" 
			type="button" 
				data-bs-toggle="dropdown" 
					aria-expanded="false">Developement</button>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" 
				href="/app/Pages/blog">Agriculture</a></li>
			<li><a class="dropdown-item" 
				href="/app/Pages/dashboard">Industrial</a></li>
			<li><a class="dropdown-item" 
				href="/app/Pages/jumbotron">Photovoltaic</a></li>
		  <li><a class="dropdown-item" 
				href="/app/Pages/heroes">Partners</a></li>
		</ul>
	</div>
	<li class="nav-item"><a class="nav-link" 
		data-bs-target="#modalToggle1" 
			data-bs-toggle="modal">Contact Us</a></li>
	<li class="nav-item"><a class="nav-link" 
		href="/app/Pages/masonry">Gallery</a></li>
</ul>
</nav>



