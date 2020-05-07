<?php
session_start();
include( 'connection.php' );
?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>

<title> لوحه التحكم</title>
<link rel = 'stylesheet' href = 'css/bootstrap.min.css'>
<link rel = 'stylesheet' href = 'css/bootstrap-rtl.css'>
<link rel = 'stylesheet' href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel = 'stylesheet' href = 'css/dashboard.css'>
</head>

<body class = 'bg-light'>

    <div class="col-sm-12 col-md-4 m-auto ">
        <!-- form -->
        <form method = 'post' class="p-3" action="<?php $_SERVER['PHP_SELF'] ?>">
            <h3 class="text-center text-danger pb-2">تسجيل الدخول</h3>
            <?php
                // validation
                if ( isset( $_POST['submit'] ) ) {
                    $email = $_POST['email1'];
                    $pass = $_POST['pass1'];
                    $sql = "select * from login where emailAdress ='$email' and password = '$pass' ";
                    $result = mysqli_query( $conn, $sql );

                    $row = mysqli_fetch_assoc($result);
                    if(empty($_POST['name1'])){
                        echo "<div class='alert alert-danger my-2'>رجاء ادخال اسم المستخدم</div>";
                    }elseif ( empty( $email ) ) {
                        echo "<div class='alert alert-danger my-2'>رجاء ادخال البريد الالكتروني</div>";
                    } elseif ( empty( $pass ) ) {
                        echo "<div class='alert alert-danger my-2'>رجاء ادخال كلمة السر</div>";
                    }elseif(strlen($pass) < 5 ){
                        echo "<div class='alert alert-danger my-2'>   كلمة السر يجب الا تقل عن 5 حروف   </div>";
                    }else{
                        if(isset($row)){
                            if ( in_array( $email, $row )  &&  in_array( $pass, $row ) ) {
                                echo "<div class='alert alert-success'>  مرحبا .. سيتم تحويلك الي صفحه التحكم  </div>";
                                $_SESSION['id']= $row['id'];
                                $_SESSION['name']= $_POST['name1'];
                                header('REFRESH:2 ;URL= categories.php');
                            } else {
                                // $row ="a";
                                echo "<div class='alert alert-danger my-2'>  البيانات غير متطابفة  </div>";
                            }
                        }else{
                            echo "<div class='alert alert-danger my-2'>  البيانات غير متطابفة  </div>";
                        }
                    }
                }
            ?>

            <div class = 'form-group'>
                <label for = 'txt1' class = 'font-weight-bold'>   اسم المستخدم </label>
                <input type = 'text' name = 'name1'  required class = 'form-control' id = 'txt1'  >
            </div>

            <div class = 'form-group'>
                <label for = 'exampleInputEmail1' class = 'font-weight-bold'>البريد الالكتروني</label>
                <input type = 'email' name = 'email1' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required class = 'form-control' id = 'exampleInputEmail1' aria-describedby = 'emailHelp' >
            </div>
           
            <div class = 'form-group'>
                <label for = 'exampleInputPass' class = 'font-weight-bold'>كلمة السر</label>
                <input type = 'text' id="exampleInputPass" pattern=".{4,}" title="خمسة حروف او اكثر"  name = 'pass1' required class = 'form-control' id = 'exampleInputPassword1' >
            </div>

            <div class = 'form-group'>
                <button type = 'submit' class = 'btn btn-primary form-control' name = 'submit'> تسجيل الدخول</button>
            </div>

        </form>
        <!-- /form -->
    </div>

    <style>
        form {
            margin: 140px auto;
        }
    </style>

    <script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src = 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
    <script src = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
</body>
</html>