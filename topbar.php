<nav class="navbar navbar-white shadow">
        <div class="navbar-left">
            <div class="navbar-brand">
                <button class="btn btn-transparent-dark btn-circle sidenav-toggler" data-toggle="sidebar">&#9776;</button>
                <a href="#" class="navbar-title">
                    HOAMS
                </a>
            </div>
            <form action="index.php" class="center">
                <div class="input-group navbar-wide">
                    <input type="text" class="input input-stretch input-search" placeholder="Search...">
                    <i class="fa-solid fa-magnifying-glass input-icon"></i>
                </div>
            </form>
        </div>
        <div class="navbar-nav">
            <button class="navbar-link btn btn-transparent-dark btn-icon btn-circle sidenav-toggler" data-toggle="sidebar">&#9776;</button>
            <div class="dropdown dropdown-right">
                <button class="navbar-link btn btn-transparent-dark btn-icon btn-circle dropdown-toggler">
                    <img class="image-fluid" src="<?= $_SESSION['user']['profile_dir'] ?>" alt="profile">
                </button>
                <div class="card shadow dropdown-content">
                    <div class="media">
                        <div class="icon-container icon-large">
                            <img class="image-fluid" src="<?= $_SESSION['user']['profile_dir'] ?>" alt="profile">
                        </div>
                        <div class="media-content">
                            <h3 class="media-author"><?= $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'] ?></h3>
                            <p class="media-email"><?php echo $_SESSION['user']['email'] ?></p>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a href="#">
                                <svg class="dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336c44.2 0 80-35.8 80-80s-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80z"/></svg>
                                Account
                            </a>
                        </li>
                        <li class="dropdown-item modal-toggler" data-modal="confirm-logout">
                            <a href="#">
                                <svg class="dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M534.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L434.7 224 224 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM192 96c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-53 0-96 43-96 96l0 256c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown dropdown-right">
                <button class="navbar-link navbar-mobile btn btn-icon btn-circle btn-transparent-dark dropdown-toggler">
                    <i class="fa-regular fa-bell"></i>
                </button>
                <div class="card shadow dropdown-content dropdown-notification">
                    <h3 class="dropdown-header">
                        <i class="fa-regular fa-bell dropdown-header-icon"></i>
                        Notifications
                    </h3>
                    <section class="notification-content">
                        <div class="media">
                            <div class="icon-container new-user-notif-icon">
                            <i class="fa-solid fa-user-plus"></i>
                            </div>
                            <div class="media-content">
                            <p class="media-email">December 05, 2001</p>
                                <h3 class="media-author">New user request. Carl Jefferson Delfin</h3>
                            </div>
                        </div>
                    </section>
                    <section class="notification-content">
                        <div class="media">
                            <div class="icon-container new-user-notif-icon">
                            <i class="fa-solid fa-user-plus"></i>
                            </div>
                            <div class="media-content">
                            <p class="media-email">December 05, 2001</p>
                                <h3 class="media-author">New user request. Carl Jeffer...</h3>
                            </div>
                        </div>
                    </section>
                    <section class="notification-content">
                        <div class="media">
                            <div class="icon-container new-user-notif-icon">
                            <i class="fa-solid fa-user-plus"></i>
                            </div>
                            <div class="media-content">
                            <p class="media-email">December 05, 2001</p>
                                <h3 class="media-author">New user request. Carl Jeffer...</h3>
                            </div>
                        </div>
                    </section>
                    <section class="notification-content">
                        <div class="media">
                            <div class="icon-container new-user-notif-icon">
                            <i class="fa-solid fa-user-plus"></i>
                            </div>
                            <div class="media-content">
                            <p class="media-email">December 05, 2001</p>
                                <h3 class="media-author">New user request. Carl Jeffer...</h3>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="dropdown dropdown-right">
                <button class="navbar-link navbar-mobile btn btn-transparent-dark btn-icon btn-circle dropdown-toggler">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <form action="index.php" class="card shadow dropdown-content search-container">
                    <div class="input-group input-stretch">
                        <input type="text" class="input input-stretch input-search" placeholder="Search...">
                        <i class="fa-solid fa-magnifying-glass input-icon"></i>
                    </div>
                </form>
            </div>
            <div class="dropdown dropdown-right">
                <button class="navbar-link navbar-wide btn btn-small btn-transparent-dark dropdown-toggler">
                    <i class="fa-regular fa-bell"></i>
                    Notifications
                </button>
                <div class="card shadow dropdown-content dropdown-notification">
                    <h3 class="dropdown-header">
                        <i class="fa-regular fa-bell dropdown-header-icon"></i>
                        Notifications
                    </h3>
                    <section class="notification-content">
                        <div class="media">
                            <div class="icon-container new-user-notif-icon">
                            <i class="fa-solid fa-user-plus"></i>
                            </div>
                            <div class="media-content">
                            <p class="media-email">December 05, 2001</p>
                                <h3 class="media-author">New user request. Carl Jefferson Delfin</h3>
                            </div>
                        </div>
                    </section>
                    <section class="notification-content">
                        <div class="media">
                            <div class="icon-container new-user-notif-icon">
                            <i class="fa-solid fa-user-plus"></i>
                            </div>
                            <div class="media-content">
                            <p class="media-email">December 05, 2001</p>
                                <h3 class="media-author">New user request. Carl Jeffer...</h3>
                            </div>
                        </div>
                    </section>
                    <section class="notification-content">
                        <div class="media">
                            <div class="icon-container new-user-notif-icon">
                            <i class="fa-solid fa-user-plus"></i>
                            </div>
                            <div class="media-content">
                            <p class="media-email">December 05, 2001</p>
                                <h3 class="media-author">New user request. Carl Jeffer...</h3>
                            </div>
                        </div>
                    </section>
                    <section class="notification-content">
                        <div class="media">
                            <div class="icon-container new-user-notif-icon">
                            <i class="fa-solid fa-user-plus"></i>
                            </div>
                            <div class="media-content">
                            <p class="media-email">December 05, 2001</p>
                                <h3 class="media-author">New user request. Carl Jeffer...</h3>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </nav>

    <div class="modal modal-ok-cancel" id="confirm-logout">
        <div class="card shadow modal-content">
            <header class="card-header">
                <p class="card-heading">Logout</p>
            </header>
            <section class="card-content">
                <p>Are you sure you want to logout?</p>
            </section>
            <footer class="card-footer modal-footer">
                <a href="includes/logout.inc.php" class="btn btn-danger btn-small px-3">Logout</a>
                <button class="btn btn-transparent-danger modal-cancel btn-small px-3">Cancel</button>
            </footer>
        </div>
    </div>