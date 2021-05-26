<header>
    <a class="logo" href="<?php echo BASE_URL . '/index.php'; ?>">
        <h1 class="logo-text"><span>D<i class="fas fa-donate"></i>llar</span> Makes<span> D<i class="fas fa-donate"></i>llar</span></h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        <li><a href="<?php echo BASE_URL . '/index.php'; ?>"><i class="fas fa-globe"></i> Public View</a></li>
        <!-- <a class="logo" href="<?php echo BASE_URL . '/index.php'; ?>">
        <h1>Public View</h1>
    </a> -->
        <?php if (isset($_SESSION['username'])): ?>
            <li>

                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                    <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</header>