<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/loginstyle.css">
<link rel="stylesheet" href="css/font-awesome.css">
<title>Admin Side</title>
</head>
<body>
    <?php
        include("config/db.php");
        session_start();
    ?>
    
    <a href="../" class="btn btn-primary"><i class="bi bi-arrow-bar-left"></i>Back To Website</a>
    <div class="container-fluid" id="outside">
        <div class="logindiv">
            <h4>Admin Login</h4>
            <form method="POST">
                <div>
                    <input type="email" name="txtEmail" placeholder="Email">
                </div>
                <div>
                    <input type="password" name="txtPass" placeholder="Password">
                </div>
                <div>
                    <input type="submit" class="btn-primary" value="Login" name="sbmLogin">
                </div>
            </form>
            <?php
                if(isset($_POST['sbmLogin'])){
                    $email = $_POST['txtEmail'];
                    $pass = $_POST['txtPass'];

                    $sql = "SELECT * FROM acount_admin WHERE email='$email' AND pass_word='$pass'";
                    $result = mysqli_query($conn,$sql);

                    $count = mysqli_num_rows($result);

                    if($count == 1){
                        $_SESSION['login'] = $email;
                        header('Location:http://localhost/kiem_tra/admin/index.php');
                    }else{
                        
                        header('Location:'.SITEURL.'admin/login.php');
                    }
                }
            ?>
        </div>
    </div>
    
    

    <footer>
    <h6> <b> Designed By <strong>Khounpasird</b></strong></h6>

    </footer>
   


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