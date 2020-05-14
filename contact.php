<?php
    include('connection.php');
    include('home/header.php');
?>

    <style>
        body{
            background-color: #eee;
        }
        .contact{
            padding: 4%;
            height: 400px;
        }
        .col-md-3{
            background: #aaa;
            color: #fff;
            padding: 4%;
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }
        .contact-info{
            margin-top:10%;
        }
        .contact-info img{
            margin-bottom: 15%;
        }
        .contact-info h2{
            margin-bottom: 10%;
        }
        .col-md-9{
            background: #fff;
            padding: 3%;
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
        }
        .contact-form label{
            font-weight:600;
        }
        .contact-form button{
            background: #25274d;
            color: #fff;
            font-weight: 600;
            width: 25%;
            transition: all ease 0.3s;
        }
        .contact-form button:hover{
            background: #aaa;
            color: #000;
        }
        .contact-form button:focus{
            box-shadow:none;
        }
        footer{
            position: relative;
            bottom:0;
            width: 100%;
        }
    </style>

    <div class="container contact">
        <div class="row">

            <!-- side area -->
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                    <h2>اتصل بنا</h2>
                    <h4 >  نحن نحب ان نسمعك <span><i class="fa fa-heart-o text-danger" aria-hidden="true"></i></span></h4>
                </div>
            </div>
            <!-- /side area -->

            <!-- Form -->
            <div class="col-md-9">
                <div class="contact-form py-3">
                    <h2> تواصل معنا  </h2>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

                        <?php

                            if(isset($_POST['submit'])){
                                echo "<div class='alert alert-success my-3'> لقد تم ارسال رسالتك بنجاح </div>";
                                echo "
                                <div class='w-100 bg-primary text-white p-3 my-3' style='border-radius: 7px;'>
                                        <h3> نشكركم علي الاتصال بنا </h3>
                                        <p>
                                        أنت مهم جدا بالنسبة لنا. ستظل جميع المعلومات المستلمة سرية دائمًا ، وسنتصل بك قريبًا بمجرد مراجعة رسالتك.
                                        </p>
                                </div>";
                            }
                        ?>

                        <div class="form-group py-1">
                            <label class="control-label col-sm-3" for="fname">الاسم الاول :</label>
                            <div class="col-sm-10">          
                                <input type="text" required class="form-control" id="fname"  name="fname">
                            </div>
                        </div>
                        <div class="form-group py-1">
                            <label class="control-label col-sm-3" for="lname">اسم العائلة :</label>
                            <div class="col-sm-10">          
                                <input type="text" required class="form-control" id="lname"  name="lname">
                            </div>
                        </div>
                        <div class="form-group py-1">
                            <label class="control-label col-sm-3 " for="email">البريد الالكتروني :</label>
                            <div class="col-sm-10">
                                <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required class="form-control" id="email"  name="email">
                            </div>
                        </div>
                        <div class="form-group py-1">
                            <label class="control-label col-sm-3" for="comment"> رسالتك : </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" required rows="5" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="form-group py-1">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default" name="submit">ارسال</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- /Form -->
            
        </div>
    </div>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
</body>
</html>