<?php 
session_start();
include('connection.php');
include('header.php');

if(! isset($_SESSION['id'])){
    echo "<div class='alert alert-danger m-auto text-center'>  غير مسموح لك بفتح هذه الصفحه </div>";
    header('REFRESH:1;URL= login.php');
}else{
?>
    <!-- Main Content -->
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
                        
                        <!-- collapse list -->
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
                        <!-- /collapse list -->

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

                <!-- main area -->
                <div class="col-md-10 py-3" id="main-area">
                    <div class="add-category">
                        <?php
                            // add new category
                            if(isset($_POST['publish'])){
                                if( empty($_POST['ptitle']) ){
                                    echo "<div class='alert alert-danger'>  حقل عنوان المقال فارغ  </div>";
                                }elseif( empty($_POST['postcategory'])){
                                    echo "<div class='alert alert-danger'> اختر واحد من التصنيف  </div>";
                                }
                                // elseif( isset($pimage)){
                                //     echo "<div class='alert alert-danger'> اختر صورة  </div>";
                                // }
                                elseif( empty($_POST['pcontent'])){
                                    echo "<div class='alert alert-danger'> حقل نص المقال فارغ  </div>";
                                }elseif($_POST['pcontent'] > 100000){
                                    echo "<div class='alert alert-danger'> محتوي المنشور كبير جدا </div>";
                                }
                                else{
                                    $authorname = 'ايمن عبدالملاك';
                                    $title =$_POST['ptitle'];
                                    $pcontent =$_POST['pcontent'];
                                    $pcategory =$_POST['postcategory'];
                                    //image
                                    $imageName = $_FILES['pimage']['name'];
                                    $imagetmp  = $_FILES['pimage']['tmp_name'];
                                    $extensions =["jpg","jpeg","png","webp"];
                                    $extImage =explode(".",$imageName);
                                    $end = end($extImage);
                                    // echo "<script>alert('$end')</script>";
                                    if( ! in_array( $end , $extensions )){
                                        echo "<script>alert('there an error of extension please try again')</script>";
                                    }else{
                                        
                                        $pimage = rand(0,1000)."_".$imageName;
                                        echo "image tmp = ".$imagetmp."<br>";
                                        echo "image name = ".$imageName."<br>";
                                        echo "pimage = ".$pimage."<br>";

                                        move_uploaded_file ($imagetmp,"images/uploaded/".$pimage) ;

                                        $sql4 = "insert into posts (postTitle,postCategory,postImage,postContent,postAuthor) values
                                        ('$title' , '$pcategory' , '$pimage' , '$pcontent' , '$authorname' )";
                                        $results = mysqli_query($conn,$sql4);
                                        if(isset($results)){
                                            //   echo "تم اضافة المنشور بنجاح";
                                            echo "<div class='alert alert-success'> تم اضافة المنشور بنجاح </div>";
                                        }else{
                                            // echo "عذرا حدث خطا يرجي المحاولة مرة اخري";
                                            echo "<div class='alert alert-danger'>   عذرا حدث خطا </div>";
                                        }
                                }
                            }
                        }
                        ?>
                        <!-- form -->
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" id="formss"  method="POST" enctype="multipart/form-data">
                            <div class="text-center">
                                <h3 class="btn btn-primary text-light">اضف مقال</h3>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold text-secondary" for="pstitle"> عنوان المقال </label>
                                <input type="text" required name="ptitle" id="pstitle" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold text-secondary" for="cat"> التصنيف </label>
                                <select name="postcategory" required id="cat" form="formss" class="form-control">
                                
                                <?php
                                   $sql5 ="select * from cat_table";
                                   $res5 = mysqli_query($conn,$sql5);
                                   while($row5 = mysqli_fetch_assoc($res5)){  ?>
                                   <option name="" value="<?php echo $row5['categoryName']; ?>"> <?php echo $row5['categoryName']; ?> </option>
                                <?php } ?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold text-secondary" for="image"> صورة المقال </label>
                                <input type="file" required name="pimage" id="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold text-secondary" for="pstxtarea"> نص المقالة </label>
                                <textarea name="pcontent" required id="pstxtarea" cols="30" rows="8" class="form-control"></textarea>
                            </div>

                            <button class="btn btns btn-success" name="publish">نشر المقالة</button>

                        </form>
                        <!-- /form -->

                    </div>
                </div>
                <!-- /main area -->

            </div>
        </div>
    </div>
    <!-- Main Content -->

<?php 
}
include('footer.php');
?>