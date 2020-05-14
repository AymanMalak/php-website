<?php 
session_start();
include('connection.php');
include('header.php');

if(! isset($_SESSION['id'])){
    echo "<div class='alert alert-danger m-auto text-center'>  غير مسموح لك بفتح هذه الصفحه </div>";
    header('REFRESH:1;URL= login.php');
}else{
?>

    <!-- posts -->
    <div class="content p-0 m-0">
        <div class="container-fluid">
            <div class="row">
                
                <!-- side area *control panel* -->
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
                <!-- /side area *control panel* -->

                <!-- Main area *table* -->
                <div class="col-md-10 py-3" id="main-area-post"  style="overflow-x:auto;">
                    <div class="posts">
                        <table class="table">
                            <?php 
                                // delete post from database >> delete it from home and posts pages
                                if(isset($_GET['id'])){
                                    $sql = "delete from posts where id=".$_GET['id'];
                                    $res = mysqli_query($conn,$sql);
                                    if( isset($res) ){
                                        echo "<div class='alert alert-success'> تم الحذف بنجاح </div>";
                                    }else{
                                        echo "<div class='alert alert-danger'> حدث خطا ما , اعد المحاولة </div>";
                                        }
                                    }
                            ?>
                            <!-- table header -->
                            <thead class="bg-secondary text-light">
                                <tr>
                                <th scope="col">رقم المقال</th>
                                <th scope="col">عنوان المقال</th>
                                <th scope="col">كاتب المقال</th>
                                <th scope="col">صورة المقال</th>
                                <th scope="col">تاريخ المقال</th>
                                <th scope="col">حذف المقال</th>
                                </tr>
                            </thead>
                            <!-- /table header -->

                            <!-- table body -->
                            <tbody>
                                <?php 
                                // get all posts in table
                                $sql = "select * from posts order by id desc";
                                $res =mysqli_query($conn,$sql);
                                $number =0;
                                while($row = mysqli_fetch_assoc($res)){ 
                                    $number ++;
                                    ?>
                                <tr>
                                <th scope="row"> <?php echo $number ?>  </th>
                                <td>  <?php echo $row['postTitle'] ?>  </td>
                                <td>  <?php echo $row['postAuthor'] ?>  </td>
                                <td>  <img src="images/uploaded/<?php echo $row['postImage'] ?>" width="60px" height="60px" alt=""> </td>
                                <td>  <?php echo $row['postDate'] ?>  </td>
                                <td>  <a href="posts.php?id=<?php echo $row['id'] ?>" name="del" class="btn btns btn-warning text-white"> حذف </a> </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <!-- /table body -->
                        </table>
                    </div>
                </div>
                <!-- /Main area *table* -->

            </div>
        </div>
    </div>
    <!-- /posts -->

<?php 
}
include('footer.php');
?>