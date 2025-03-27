        <!-- // NAVBAR // -->
        <nav class="navbar">
            <div class="logo">
                <a href="#">
                    <i class="ri-cup-fill"></i>
                    <div class="logo-text-container">
                        <p class="logo-text">Coffee</p>
                        <p class="logo-text">Shop</p>
                    </div>
                </a>
            </div>
            <div class="nav-element">
                <div class="nav-link">
                    <ul>
                        <li><a href="home.php" class="link <?php echo ($page == 'home') ? 'active' : '' ?>">Coffee</a></li>
                        <li><a href="order.php" class="link <?php echo ($page == 'menu') ? 'active' : ''?>">Menu</a></li>
                        <li><a href="about.php" class="link <?php echo ($page == 'about') ? 'active' : ''?>">About</a></li>
                        <li><a href="#" class="link <?php echo ($page == 'contact') ? 'active' : ''?>">Contact</a></li>
                    </ul>
                </div>
                <div class="user-menu">
                    <i class="fa-solid fa-user fa-2x"></i>
                    <div class="dropdown-menu">
                        <a href="#">👤 <?php echo (isset($_SESSION['user_id']) ? $user['firstName'] : 'Guest' ) ?>
                        </a><hr>
                        <a href="logout.php">🚪 Logout</a>
                    </div>
                </div>
                <div class="menu-hamburger">
                    <span class="bar-menu"></span>
                    <span class="bar-menu"></span>
                    <span class="bar-menu"></span>
                </div>
            </div>
        </nav>
