<header>
        <a href="<?php echo BASE_URL .'/index.php' ?>" class="logo">
            <img src="http://cse.tlu.edu.vn/cse/assets/images/logo.jpg" alt="" style="margin-top: 15px;">
        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav nav-top">
            <li><a href="<?php echo BASE_URL .'/index.php' ?>">Trang Chủ</a></li>
            <li><a href="#">Thông Báo</a></li>
            <li><a href="#">Thư Viện</a></li>

            <?php if (isset($_SESSION['id'])): ?>
                <li>
                <a href="#">
                    <i class="fa fa-user"></i> 
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                    <?php if($_SESSION['admin']): ?>
                        <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Admin</a></li>
                    <?php endif; ?>    
                    <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Đăng Xuất</a></li>
                </ul>
            </li>
            <?php else: ?>
                <li><a href="<?php echo BASE_URL . '/register.php' ?>">Đăng Ký</a></li>
                <li><a href="<?php echo BASE_URL . '/login.php' ?>">Đăng Nhập</a></li>
            <?php endif; ?>
        </ul>
    </header>