<div class="header-transporent-bg-black">				
				
	<!-- HEADER 1 BLACK -->
	<header id="nav" class="header header-1 black-header">
	  <div class="header-wrapper">
		<div class="container-m-30 clearfix">
		  <div class="logo-row">
		  
			<!-- LOGO --> 
			<div class="logo-container-2">
				<div class="logo-2">
				<a href="index.html" class="clearfix">
					<img src="images/logo-white.png" class="logo-img" alt="Logo">
				</a>
				</div>
			</div>
			<!-- BUTTON --> 
			<div class="menu-btn-respons-container">
				<button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
					<span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
				</button>
			</div>
		 </div>
		</div>

		<!-- MAIN MENU CONTAINER -->
		<div class="main-menu-container">
			
			  <div class="container-m-30 clearfix">	
			  
					<!-- MAIN MENU -->
					<div id="main-menu">
					  <div class="navbar navbar-default" role="navigation">

						<!-- MAIN MENU LIST -->
						<nav class="collapse collapsing navbar-collapse right-1024">
						  <ul class="nav navbar-nav">
		  
							<!-- MENU ITEM -->
							<li>
								<a href="/"><div class="main-menu-title">HOME</div></a>
							</li>
							
							<!-- MENU ITEM -->
							<li class="parent">
								<a href="{{ url('about') }}"><div class="main-menu-title">ABOUT</div></a>
								<ul class="sub">
									<li><a href="{{ url('about') }}">PROFILE PERUSAHAAN</a></li>
									<li><a href="{{ url('visimisi') }}">VISI & MISI</a></li>
									<li><a href="{{ url('legalitas') }}">LEGALITAS</a></li>
									<li><a href="{{ url('client') }}">CLIENT</a></li>
								</ul>
							</li>			
							<li>
								<a href="{{ url('project') }}"><div class="main-menu-title">PROJECT</div></a>
							</li>
							<li class="parent">
								<a href="{{ url('service') }}"><div class="main-menu-title">OUR SERVICE</div></a>
								<ul class="sub">
									<li><a href="{{ url('flow') }}">FLOW</a></li>
								</ul>
							</li>
							<li>
								<a href="{{ url('gallery') }}"><div class="main-menu-title">GALLERY</div></a>
							</li>
							<!-- MENU ITEM -->
							<li id="menu-contact-info-big" class="parent megamenu">
								<a href="{{ url('contact') }}"><div class="main-menu-title">CONTACT</div></a> 
							</li>
		
						  </ul>
			  
						</nav>

					  </div>
					</div>
					<!-- END main-menu -->
					
			  </div>
			  <!-- END container-m-30 -->
			
		</div>
		<!-- END main-menu-container -->
		
		<!-- SEARCH READ DOCUMENTATION -->
		<ul class="cd-header-buttons">
			<li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
		</ul> <!-- cd-header-buttons -->
		<div id="cd-search" class="cd-search">
			<form class="form-search" id="searchForm" action="page-search-results.html" method="get">
				<input type="text" value="" name="q" id="q" placeholder="Search...">
			</form>
		</div>
		
	  </div>
	  <!-- END header-wrapper -->
	  
	</header>
	
		