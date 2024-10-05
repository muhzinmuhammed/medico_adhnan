<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		<title>Medicofy Website</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
				
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<!-- Feathericon CSS -->
    	<link rel="stylesheet" href="assets/css/feather.css">

   		<!-- Boxicons CSS -->
		<link rel="stylesheet" href="assets/plugins/boxicons/css/boxicons.min.css">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">

	</head>		
	<body>

		<!-- Loader -->
		<div class="page-loader">
			<div class="page-loader-inner">
				<img src="assets/img/icons/loader.svg" alt="Loader">
				<label><i class="fa-solid fa-circle"></i></label>
				<label><i class="fa-solid fa-circle"></i></label>
				<label><i class="fa-solid fa-circle"></i></label>
			</div>
		</div>
		<!-- /Loader -->

		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-- Header -->
			<header class="header header-trans">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.html" class="navbar-brand logo">
							<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.html" class="menu-logo">
								<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
							</a>
				
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							
							</li>
							
							<li class="login-link"><a href="login.html">Sign Up</a></li>
							<li class="login-link"><a href="register.html">Sign In</a></li>
						</ul>
					</div>
					
				</nav>
			</header>
			<!-- /Header -->

            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="container">
                     <div class="bread-crumb-head">
                        <div class="breadcrumb-title">
                            <h2>Add New medicine</h2>
                        </div>
                        <div class="breadcrumb-list">
                             <ul>
                                <li><a href="index.html">Home </a></li>
                                <li>Add New medicine</li>
                            </ul> 
                        </div> 
                    </div> 
                    <div class="breadcrumb-border-img">
                        <img src="assets/img/bg/line-bg.png" class="img-fluid" alt="Image">
                    </div>
                </div>
            </div>
            <!-- Breadcrumb -->

            <!-- Content -->
			<div class="content inner-content">
				<div class="container">
                    

					<!-- Medicine Information -->
					<form action="./submit_medicine.php" method="POST">
    <div class="row">
        <div class="col-md-12">
            <div class="review-form">
                <label>Medicine Name</label>
                <input type="text" class="form-control" name="medicine_name" placeholder="Enter Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="review-form">
                <label>Medicine Category</label>
                <select class="select" name="medicine_category">
                    <option>Select</option>
                    <option>Tablet</option>
                    <option>Capsule</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="review-form">
                <label>Sale Price</label>
                <input type="number" class="form-control" name="sale_price" placeholder="Enter Sale Price">
            </div>
        </div>
        <div class="col-md-4">
            <div class="review-form">
                <label>Medicine ID</label>
                <input type="text" class="form-control" name="medicine_id" placeholder="Enter Medicine ID">
            </div>
        </div>
        <div class="col-md-12">
            <div class="review-form">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="8" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Add Medicine</button>
        </div>
    </div>
</form>

					<!-- /Medicine Information -->
					
					<!-- Property Details -->
					
					<!-- /Property Video -->
					
					<!-- Property Description -->
					<!-- <div class="row" id="description">
						<div class="col-lg-4">                           
                           
						</div>
						<div class="col-lg-8"> 
							<div class="add-property-wrap">
                                <div class="row">
									<div class="col-md-12">
										
									</div>
								</div>
                            </div>
						</div>   
					</div>  -->
					<!-- Property Description -->
					
					<!-- Floor Plan -->
					
				   <!-- /Property location -->	

				   <!-- Property location -->
					

				</div>
			</div>
			<!-- /Content -->

			<div class="modal fade modal-succeess" id="success" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog  modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body">
							<div class="success-popup">
								<h4><img src="assets/img/icons/double-tick.svg" alt="img"></h4>
								<h5>Medicine Added</h5>
								<p>You Medicine has been successfully added to the list</p>
								<a href="seller.html" class="btn btn-primary w-100">Back to Home</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Search -->
			<div class="search-popup js-search-popup ">
				<a href="javascript:void(0);" class="close-button" id="search-close" aria-label="Close search">
					<i class="fa fa-close"></i>
				</a>
				<div class="popup-inner">
					<div class="inner-container">
						<form class="search-form" id="search-form" action="rent-property-grid.html">
							<h3>What Are You Looking for?</h3>
							<div class="search-form-box flex">
								<input type="text" class="search-input" placeholder="Type a  Keyword...." id="search-input" aria-label="Type to search" role="searchbox" autocomplete="off">
								<button type="submit" class="search-icon"><i class="bx bx-search"></i></button>
							</div>
							<h5>Popular Properties</h5>
							
						</form>
					</div>
				</div>
			</div>	
			<!-- /Search -->

		</div>		
		<!-- /Main Wrapper -->

		<!-- ScrollToTop -->
		<div class="progress-wrap active-progress">
			<svg class="progress-circle svg-content" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
			</svg>
		</div>
		<!-- /ScrollToTop -->
	
		<!-- jQuery -->
		<script src="assets/js/jquery-3.7.1.min.js"></script>
		
		<!-- Bootstrap Bundle JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>

		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
	
	</body>
</html>