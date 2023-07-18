<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../admin/index.php" class="brand-link">
        <!-- <img src="assets/dist/img/AdminLTELogo.png" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text " style="font: size 1.5em; font-weight: 700;">Mahaved Developer's</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <!-- <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
            </div>
            <div class="info">
                <span class="d-block text-white" style="text-transform: capitalize;"><i class="fa-solid fa-user"></i>
                    <?php
                    if (isset($_SESSION['auth'])) {
                        echo $_SESSION['auth_user']['user_name'];
                    } else {
                        echo "No Logging";
                    }
                    ?>
                </span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <!-- <a href="../admin/index.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a> -->
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">
                                <p class="font-weight-bold">Dashboard</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="text-white my-2" style="font-size: 1.5rem; font-weight:700;">Master</li>
                <li class="pl-2 ml-2 ">
                    <div class="dropdown">
                        <button class="w-100 btn btn-secondary dropdown-toggle mb-2" style="text-align: start;" type="button" id="blog_des" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Projects
                        </button>
                        <div class="dropdown-menu pl-3" aria-labelledby="blog_des">
                            <a href="add_blog.php">
                                <p class="text-dark">Add Projects</p>
                            </a>
                            <a href="blog_des.php">
                                <p class="text-dark"> All Projects </p>
                            </a>

                            <!-- <a href="category.php">
                                <p class="text-dark"> Categories </p>
                            </a> -->
                        </div>
                    </div>
                </li>
                <li class="pl-3">
                    <div class="dropdown">
                        <button class="btn w-100 btn-secondary dropdown-toggle mb-2" style="text-align: start;" type="button" id="blog_des" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gallery
                        </button>
                        <div class="dropdown-menu pl-3" aria-labelledby="blog_des">
                            <!-- <a href="video_tbl.php">
                                <p class="text-dark">Videos</p>
                            </a> -->
                            <a href="gallery.php">
                                <p class="text-dark">Image Upload</p>
                            </a>
                        </div>
                    </div>

                </li>
                <li class="pl-3">
                    <a href="registered.php">
                        <p class="">Admin Page</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>