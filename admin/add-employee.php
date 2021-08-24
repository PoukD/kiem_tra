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
        if(!isset($_SESSION['login'])){
            header('Location:'.SITEURL.'admin/login.php');
        }
    ?>
    
    <div class="main-content container-fluid">
        <div class="wrapper add-employee">

                <h2>Add Employee</h2>
                <br><br>
                <?php 
                    if(isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
                    {
                        echo $_SESSION['add']; //Display the SEssion Message if SEt
                        unset($_SESSION['add']); //Remove Session Message
                    }
                ?>
                <form action="" method="POST">
                    <b>
                    <table class="tbl-30" id="tbInsertData">
                        <tr>
                            <td>
                                <input type="text" name="full_name" id="txtFullname" class="addtxt" placeholder="Enter Full Name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="position" id="txtPosition"class="addtxt" placeholder="Enter Position">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="phone" id="txtUsername"class="addtxt" placeholder="Enter phone">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="email" id="txtEmail" class="addtxt" placeholder="Enter Email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="mobile_phone"id="txtPass" class="addtxt"placeholder="Enter Mobile Phone">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="unit_id" id="txtUsername"class="addtxt" placeholder="Enter Unit Id">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="unit_name" id="txtUsername"class="addtxt" placeholder="Enter Unit Name">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Admin" id="btnSubmit"class="btn-secondary">
                            </td>
                        </tr>
                    </table>
                    </b>
                </form>
        </div>
    </div>
    
    

    <footer>
    <h6> <b> Designed By <strong>Khounpasird</b></strong></h6>

    </footer>
   
    <?php 
    //Process the Value from Form and Save it in Database

    //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        // Button Clicked
        //echo "Button Clicked";

        //1. Get the Data from form
        $full_name = $_POST['full_name'];
        $position = $_POST['position'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $mobile_phone = $_POST['mobile_phone'];
        $unit_id = $_POST['unit_id'];
        $unit_name = $_POST['unit_name'];

        //2. SQL Query to Save the data into database
        $sql = "INSERT INTO employee SET 
            employee_id='',
            full_name='$full_name',
            position='$position',
            phone='$phone',
            email='$email',
            mobile_phone='$mobile_phone',
            unit_id='$unit_id',
            unit_name='$unit_name'
        ";
 
        //3. Executing Query and Saving Data into Datbase
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
        if($res==TRUE)
        {
            //Data Inserted
            //echo "Data Inserted";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
            //Redirect Page to Manage Admin
            header("location:".SITEURL.'admin/');
        }
        else
        {
            //FAiled to Insert DAta
            //echo "Faile to Insert Data";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='error'>Failed to Add Admin.</div>";
            //Redirect Page to Add Admin
            header("location:".SITEURL.'admin/');
        }

    }
    
?>

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