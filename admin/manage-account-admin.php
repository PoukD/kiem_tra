<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<title>Admin Side</title>
</head>
<body>
    <?php
        include("config/db.php");
        session_start();
        if(!isset($_SESSION['login'])){
            header('Location:'.SITEURL.'admin/login.php');
        }
    ?>
    <div class="container-fluid divOutFromThis">
        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo SITEURL ?>" class="btn btn-primary btnBackToWeb"><i class="bi bi-arrow-bar-left"></i>&nbsp;Back To Website</a>
            </div>
            <div class="col-md-6 btnLogout">
                <a href="<?php echo SITEURL.'admin/logout.php'; ?>" class="btn btn-primary btnLogout"><i class="bi bi-box-arrow-left"></i>&nbsp;Logout</a>
            </div>
        </div>
    </div>
    <b>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Side</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo SITEURL.'admin/' ?>">Quản Lý Cán Bộ</a>
                </li>
                <li class="nav-item ">
                <a class="nav-link active" href="<?php echo SITEURL.'admin/manage-account-admin.php' ?>">Quản Lý Tải Khoản</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="<?php echo SITEURL.'admin/add-admin.php' ?>">Thêm Tài Khoản Admin</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    </b>
    <div id="main-main" class="container-fluid">
        <main>
            <div class="row main-content">
            <table class="table">
                <thead class="">
                    <tr>
                    <td scope="col"><b>#</b></td>
                    <td scope="col"><b>Họ Tên</b></td>
                    <td scope="col"><b>Username</b></td>
                    <td scope="col"><b>Email</b></td>
                    <td scope="col"><b>Sửa</b></td>
                    <td scope="col"><b>Xóa</b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM acount_admin";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            $i=1;
                            while($row = mysqli_fetch_assoc($result)){
                                $id=$row['account_id'];
                    ?>
                    <tr>
                        <td scope="row"><?php echo $i; ?></th>
                        <td> <?php echo $row['full_name']; ?> </td>
                        <td> <?php echo $row['username']; ?></td>
                        <td> <?php echo $row['email']; ?></td>
                        <td><a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>"><i class="bi bi-pencil-fill"></i></a></td>
                        <td><a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>"><i class="bi bi-archive-fill"></i></a></td>
                    </tr>
                    <?php
                            $i++;
                            }
                        }

                        
                    ?>
                    
                    
                </tbody>
                </table>

            </div>
        </main>
    </div>

    <footer>
    <h6> <b> Designed By <strong>Khounpasird</b></strong></h6>

    </footer>
   


    <script src="js/myjs.js">  </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>