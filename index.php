<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.css">
<title>Guest Side</title>
</head>
<body>
    <?php
        include("admin/config/db.php");
    ?>

    <div class="container-fluid LogoAndLogin">
        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo SITEURL ?>"><img src="http://www.tlu.edu.vn/Portals/_default/skins/tluvie/images/logo.png" alt=""></a>
            </div>
            <div class="col-md-6" id="LoginAndSearch">
                <div class="btnLogin">
                   <a href="<?php echo SITEURL.'admin/login.php' ?>"><i class="bi bi-box-arrow-in-right"></i>&nbsp;Login</a>
                </div>
                <div class="search-bar">
                    <input type="text" name="txtSearch" placeholder="Tìm Kiếm">
                    <button class="btn-succes" name="btnSubmitSearch">Tìm</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid MenuAndSlide">
        <div class="menu">
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" id="navbarDropdown"><i class="bi bi-house-door-fill"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            GIỚI THIỆU
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            TIN TỨC & THÔNG BÁO
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            TUYỂN SINH
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ĐÀO TẠO
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            NGHIÊN CỨU
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ĐỐI NGOẠI
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            VĂN BẢN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SINH VIÊN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            LIÊN HỆ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo SITEURL.'img/slide1.jpg' ?>" class="d-block imgslide" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo SITEURL.'img/slide2.jpg' ?>" class="d-block imgslide" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo SITEURL.'img/slide3.jpg' ?>" class="d-block imgslide   " alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="titleUnit">
    <h1>CÁC CÁN BỘ TRONG TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
</div>
<div class="searchName">
    <form action="" method="POST">
            <input type="search" name="txtSearchName" placeholder="Tìm Bằng Tên">
            <input type="submit" onlick="myFunction()"name="sbmSearchName" value="Tìm" id="btnSubmit"class="btn-secondary" >
    </form>
</div>

<div class="showSearch"id="showSearch">
    <table class="table">
        <thead class="">
            <tr>
            <td scope="col"><b>#</b></td>
            <td scope="col"><b>Hình Ảnh</b></td>
            <td scope="col"><b>Họ Tên</b></td>
            <td scope="col"><b>Chức Vụ</b></td>
            <td scope="col"><b>Email</b></td>
            <td scope="col"><b>Số Điện Thoại</b></td>
            <td scope="col"><b>Đơn Vị</b></td>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_POST['sbmSearchName'])){
                    $name_search = $_POST['txtSearchName'];
                    $sql = "SELECT * FROM employee WHERE full_name='$name_search'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        $i=1;
                        while($row = mysqli_fetch_assoc($result)){
                            $id=$row['employee_id'];
                            $image_name = $row['img'];  
            ?>
            <tr>
                <td scope="row"><?php echo $i; ?></th>
                <td> <img src="<?php echo SITEURL; ?>img/<?php echo $image_name; ?>" alt=""class="imgEmployee"> </td>
                <td> <?php echo $row['full_name']; ?> </td>
                <td> <?php echo $row['position']; ?></td>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['phone']; ?></td>
                <td> <?php echo $row['unit_name']; ?></td>
            </tr>
            <?php
                    $i++;
                    }
                }
            }
            ?>
        </tbody>
    </table>
</div>
<div class="showEmployee"id="showEmployee">
    <table class="table">
        <thead class="">
            <tr>
            <td scope="col"><b>#</b></td>
            <td scope="col"><b>Hình Ảnh</b></td>
            <td scope="col"><b>Họ Tên</b></td>
            <td scope="col"><b>Chức Vụ</b></td>
            <td scope="col"><b>Email</b></td>
            <td scope="col"><b>Số Điện Thoại</b></td>
            <td scope="col"><b>Đơn Vị</b></td>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM employee";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    $i=1;
                    while($row = mysqli_fetch_assoc($result)){
                        $id=$row['employee_id'];
                        $image_name = $row['img'];
            ?>
            <tr>
                <td scope="row"><?php echo $i; ?></th>
                <td> <img src="<?php echo SITEURL; ?>img/<?php echo $image_name; ?>" alt=""class="imgEmployee"> </td>
                <td> <?php echo $row['full_name']; ?> </td>
                <td> <?php echo $row['position']; ?></td>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['phone']; ?></td>
                <td> <?php echo $row['unit_name']; ?></td>
            </tr>
            <?php
                    $i++;
                    }
                }

                
            ?>
            
            
        </tbody>
    </table>
</div>
   


    


    <script src="js/myjs.js">    </script>

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