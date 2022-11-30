<?php $pageName = 'User List' ?>
<?php $headerIcon = '<svg class="icon icon-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/></svg>' ?>
<?php include "includes/header.inc.php" ?>
            <div class="mb-4"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <section class="card-content">
                            <div class="row">
                                <div class="col-12">
                                    <a class="btn btn-primary btn-small px-3" href="add-user.php">
                                        <i class="fa-solid fa-user-plus btn-icon"></i>
                                        New
                                    </a>
                                    <div class="table-container">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Joined Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    include "includes/connection.inc.php";
                                                    $sql = "SELECT * FROM users ORDER BY first_name";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        $i = 0;
                                                        while ($row = $result->fetch_assoc()) {
                                                            $modal[$i] = '<div class="modal modal-ok-cancel" id="delete-'.$row['id'].'">
                                                                        <div class="card shadow modal-content">
                                                                            <header class="card-header">
                                                                                <p class="card-heading">Delete User</p>
                                                                            </header>
                                                                            <section class="card-content">
                                                                                <p>Are you sure you to delete '.$row['first_name'].' '.$row['last_name'].'?</p>
                                                                            </section>
                                                                            <footer class="card-footer modal-footer">
                                                                                <a class="btn btn-danger btn-small px-3" href="includes/delete-user.inc.php?id='.$row['id'].'">Delete</a>
                                                                                <button class="btn btn-transparent-danger btn-small modal-cancel px-3">Cancel</button>
                                                                            </footer>
                                                                        </div>
                                                                    </div>';
                                                            echo '<tr>
                                                            <td><div class="userlist-profile"><div class="icon-container"><img src="'.$row['profile_dir'].'" class="image-fluid" alt="profile"></div>'.$row["first_name"].' '.$row['last_name'].'</div></td>
                                                                <td>'.$row["email"].'</td>
                                                                <td><span class="badge '.(($row["role"] === "Administrator") ? "badge-primary" : "badge-secondary").'">'.$row["role"].'</span></td>
                                                                <td>'.$row["joined_date"].'</td>
                                                                <td>
                                                                    <a href="edit-user.php?id='.$row['id'].'" class="btn btn-transparent-dark btn-fit">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z"/></svg>
                                                                    </a>
                                                                    <button value="'.$row['id'].'" class="btn btn-transparent-dark btn-fit modal-toggler" data-modal="delete-'.$row['id'].'">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"/></svg>
                                                                    </button>
                                                                </td>
                                                            </tr>';
                                                            $i++;
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <?php
            if (isset($modal)) {
                for ($i=0; $i < sizeof($modal); $i++) { 
                    if (isset($modal[$i])) {
                        echo $modal[$i];
                    }
                }
            }

            ?>
<?php include "includes/footer.inc.php" ?>
