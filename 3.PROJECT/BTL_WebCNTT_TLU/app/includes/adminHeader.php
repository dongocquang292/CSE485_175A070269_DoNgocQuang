<header style="height: 66px; ">
        <a class="logo" href="<?php echo BASE_URL . "/index.php"; ?>">
            <h1 class="logo-text" style="color: white;"> ADMIN - WEB KHOA CNTT TLU</h1>
        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav" >
            <?php if(isset($_SESSION['username'])): ?>
                <li>
                 <a href="#" style="color: white;">
                    <i class="fa fa-user" style="color: white;"></i> <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-chevron-down" style="font-size: .8em; color: white;"></i>
                 </a>
                <ul>
                    
                    <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
                </ul>
                </li>
            <?php endif; ?>
           
        </ul>
</header>