<?php 
session_start();
include('connection.php');
include('header.php');

if(! isset($_SESSION['id'])){
    echo "<div class='alert alert-danger m-auto text-center'>  غير مسموح لك بفتح هذه الصفحه </div>";
    header('REFRESH:3;URL= login.php');
}else{
?>

    <!-- Categories -->
    <div class="content p-0 m-0">
        <div class="container-fluid">
            <div class="row">
            
                <!-- control panel -->
                <div class=" col-md-2 py-3" id="side-area">
                    <h4>لوحه التحكم</h4>
                    <ul class="bg-dark p-0 w-100">
                        <li>
                            <a href="categories.php">
                                <span> <i class="fa fa-tags"></i> </span>
                                <span> التصنيفات </span>
                            </a>
                        </li>
                        <!-- Menu -->
                        <li data-toggle="collapse" data-target="#menu">
                            <a href="#">
                                <span> <i class="fa fa-newspaper-o" aria-hidden="true"></i> </span>
                                <span> المقالات </span>
                            </a>
                        </li>
                        <ul class="collapse p-0" id="menu">
                            <li>
                                <a href="new-post.php">
                                    <span> <i class="fa fa-edit"></i> </span>
                                    <span> مقال جديد </span>
                                </a>
                            </li>
                            <li>
                                <a href="posts.php">
                                    <span> <i class="fa fa-th-large" aria-hidden="true"></i> </span>
                                    <span> كل المقالات </span>
                                </a>
                            </li>
                        </ul>

                        <!-- /Menu -->

                        <li>
                            <a href="index.php">
                                <span> <i class="fa fa-window-restore" aria-hidden="true"></i> </span>
                                <span> عرض الموقع </span>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <span> <i class="fa fa-sign-out"></i> </span>
                                <span> تسجيل الخروج </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /control panel -->

                <!-- Main Content -->
                <div class="col-md-10 py-3" id="main-area">
                    <!-- Add category -->
                        <div class="add-category">

                            <?php
                                // add new category 
                                $txt ="<div class='alert alert-success'> تم الحذف بنجاح </div>";
                                if(isset($_POST['add'])){
                                    if( empty($_POST['category']) ){
                                        echo "<div class='alert alert-danger'>  حقل الادخال فارغ </div>";
                                    }
                                    elseif( $_POST['category'] > 100 ){
                                        echo "<div class='alert alert-danger'>  اسم التصنيف كبير جدا  </div>";
                                    }
                                    else{
                                        $sql ="insert into cat_table (categoryName) values ('".$_POST['category']."')";
                                        $res = mysqli_query( $conn , $sql );
                                        echo "<div class='alert alert-success'> تم الاضافة بنجاح </div>";
                                        $txt ="";
                                        }
                                    }
                            ?>
                            <!-- form -->
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="">تصنيف جديد</label>
                                    <input type="text" name="category" class="form-control">
                                </div>
                                <button class="btn btns" name="add">اضافة</button>
                            </form>
                            <!-- /form -->

                        </div>
                    <!-- /Add category -->

                    <!-- table -->
                        <div class="display-category my-4">
                            <table class="table">

                                <?php
                                    // delete category
                                    if(isset($_GET['id'])){
                                        $query ="delete from cat_table where id =".$_GET['id'];
                                        $delete =mysqli_query($conn,$query);
                                        if( ! isset($delete)){
                                            echo "<div class='alert alert-danger'> حدث خطا ما , اعد المحاولة </div>";
                                        }else{
                                            if(isset($delete)){
                                                echo $txt;
                                            }
                                        }
                                    }
                                ?>
                                
                                <!-- table header -->
                                <thead class="bg-secondary text-white">
                                    <tr>
                                    <th scope="col">  رقم الفئة  </th>
                                    <th scope="col">  اسم الفنة  </th>
                                    <th scope="col">  تاريخ الاضافة  </th>
                                    <th scope="col">  حذف التصنيف  </th>
                                    </tr>
                                    <?php 
                                    $sql2 = "select * from cat_table order by id desc";
                                    $res2 = mysqli_query($conn,$sql2);
                                    ?>
                                </thead>
                                <!--  table header -->
                                
                                <!-- table body -->
                                <tbody>
                                    <?php
                                        // display category properties in table
                                        $number =0;
                                        while($row = mysqli_fetch_assoc($res2)){
                                            $number ++;
                                            ?>
                                            <tr>
                                            <th scope="row"> <?php echo $number ?>   </th>
                                            <td>  <?php echo $row['categoryName'] ?>  </td>
                                            <td>  <?php echo $row['categoryDate'] ?>  </td>
                                            <td >  <a class="btn btn-dark text-white  m-auto hhh" name="sss"  href="categories.php?id=<?php echo $row['id'] ?>"> حذف  </a>  </td>
                                            </tr>
                                        <?php }
                                    ?>
                                </tbody>
                                <!-- /table body -->

                            </table>
                        </div>
                    <!-- /table -->
                </div>
                <!-- /Main Content -->

            </div>
        </div>
    </div>
    <!-- Categories -->

<?php 
}
include('footer.php');
?>