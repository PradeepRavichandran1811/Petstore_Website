<?php
    $conn = new mysqli("localhost", "root", "", "petstore");
    header("Cache-Control: no-cache, must-revalidate");
    header("Pragma: no-cache");
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    /* Validation */
    if (empty($Email)) {
        echo "<script>alert('Email is required')
        window.location='login'</script>";
        exit();
    }
    // check if name only contains letters and whitespace
    else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      echo "<script>alert('Invalid Email Format')
      window.location='login'</script>";
        exit();
    }
    try
    {
        $result = $conn->query("Select * from users where Email='$Email' and Password='$Password' ");
        $ro=mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        $result1 = $conn->query("Select Role_ID from users where Email='$Email'");
        $row = mysqli_fetch_assoc($result1);
        $rid =$row['Role_ID'];
        if($count==1){
            if($rid==1)
            {
                $_SESSION['use']=$Email;
                if(isset($_SESSION['use'])) {
                    session_start();
                    echo "<script>window.location='index';</script>";
                }
            }
            else
            {
                $_SESSION['use']=$Email;
                if(isset($_SESSION['use'])) {
                     session_start();
                     echo "<script>window.location='aboutus';</script>";
                }

            }

        }
        else
        {

        ?>
            <script>
                        alert("Email or Password doesn't match");
                        window.location='login';
            </script>
            <?php
        }

    }
    catch(Exception $e){
        echo "Exception:", $e->getMessage();
    }
	if(mysqli_connect_errno())
	{
	die( mysqli_connect_error());
	}


?>
