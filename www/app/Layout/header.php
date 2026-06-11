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
</head>
<body data-bs-theme="dark">
<nav>
<ul class="nav justify-content-end text-bg-primary p-2">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/app/Pages/home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/app/Pages/about.php">About Us</a>
  </li>
	<div class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" type="button" 
			data-bs-toggle="dropdown" aria-expanded="false">Developement</button>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="/app/Pages/blog">Agriculture</a></li>
			<li><a class="dropdown-item" href="/app/Pages/dashboard">Industrial</a></li>
			<li><a class="dropdown-item" href="/app/Pages/jumbotron">Photovoltaic</a></li>
		  <li><a class="dropdown-item" href="/app/Pages/heroes">Partners</a></li>
			<li><a class="dropdown-item" data-bs-target="#modalToggle1" 
				data-bs-toggle="modal">Contact Us</a></li>
			<li><a class="dropdown-item" href="/app/Pages/masonry">Gallery</a></li>
		</ul>
	</div>
</ul>
</nav>
<main>