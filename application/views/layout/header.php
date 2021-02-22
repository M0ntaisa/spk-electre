<body>
	<div class="main-w3pvt <?php if ($title != "Home") {
        echo "banner-w3ls-2";
    }
     ?>">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
						<h1><a class="" href="index.html">SPK</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="<?= base_url('home') ?>" <?php if($title == "Home"){echo 'class="active"';} ?>>Home</a></li>
								<li><a href="<?= base_url('about') ?>" <?php if($title == "About"){echo 'class="active"';} ?>>About</a></li>
								<li><a href="<?= base_url('login') ?>" <?php if($title == "Hasil"){echo 'class="active"';} ?>>Login</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->