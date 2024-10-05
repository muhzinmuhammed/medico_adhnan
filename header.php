<header class="header header-fix">
    <div class="header-top">
        <!-- <div class="template-ad">
                <img src="assets/img/icons/badge-icon.svg" alt="icon">
                <h5>No 5, Realestate Website to Buy / Sell Your Place <span>First Listing Free!!!</span></h5>
            </div> -->
    </div>
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="index.php" class="navbar-brand logo">
                <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="index.php" class="menu-logo">
                    <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
        </div>
        <ul class="nav header-navbar-rht"> 
			

            <?php
			session_name('MyCustomSessionName');
			session_start();
			
			 if (isset($_SESSION['user'])): // Check if the user is logged in ?>
                <li class="new-property-btn">
                    <a href="add-new-property.php">
                        <i class="bx bxs-plus-circle"></i> Add New Medicine
                    </a>
                </li>
				<li class="new-property-btn">
                   Hi <?php echo ($_SESSION['user']['name']) ?>
                </li>
                <li>
                    <a href="logout.php" class="btn sign-btn"><i class="feather-log-out"></i> Logout</a>
                </li>
            <?php else: ?>
                <li>
                    <a href="register.php" class="btn btn-primary"><i class="feather-user-plus"></i> Sign Up</a>
                </li>
                <li>
                    <a href="login.php" class="btn sign-btn"><i class="feather-unlock"></i> Sign In</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
