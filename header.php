<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo get_bloginfo('name')?> | <?php echo get_bloginfo('description')?></title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Activity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    
	<?php wp_head(); ?>

    

	<!--web font--><link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!--//web font-->

</head>

<body>

<!-- //header -->
<header>	
	<div class="container" id="home">
		<!-- nav -->
		<nav class="py-4">
        <div id="logo">
			<h1> <a href="#index.html"><span class="fa fa-rebel" aria-hidden="true"></span> Activity</a></h1>
		</div>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul class="menu mt-2">
                <li class="mr-lg-4 mr-3 active"><a href="#">Home</a></li>
                <li class="mr-lg-4 mr-3"><a href="#about">About</a></li>
                <li class="mr-lg-4 mr-3"><a href="#services">Services</a></li>
                <li class="mr-lg-4 mr-3"><a href="#experience">Experience</a></li>
                <li class="mr-lg-4 mr-3">
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#text">Quoted Text</a></li>
                </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->