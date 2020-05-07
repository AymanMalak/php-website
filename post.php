<?php
// session_start();
include('connection.php');
include('home/header.php');

?>

    <!-- post -->
    <section class="py-5">
        <div class="container">
            <div class="row">

                <!-- Main Area *post* -->
                <div class="col-md-9">
                    <?php 
                        // get the post that clicked in
                        if(isset($_GET['id'])){
                            $sql= "select * from posts where id=".$_GET['id'];
                            $query =mysqli_query($conn,$sql);
                            $row =mysqli_fetch_assoc($query); 
                        } 
                    ?>
                    <!-- post -->
                    <div class="post my-3 p-3 bg-white">

                        <!-- post image -->
                        <div class="post-image w-100">
                            <img src="images/uploaded/<?php echo $row['postImage'] ?>" height="300px" class="w-100" alt="">
                        </div>
                        <!-- /post image -->

                        <!-- post title -->
                        <div class="post-title text-center text-danger font-weight-bold py-3">
                            <?php echo $row['postTitle'] ?> 
                        </div>
                        <!-- /post title -->

                        <!-- post body  -->
                        <div class="post-details text-center">
                            <!-- author name , post date , post category -->
                            <div class="text-center py-2 px-0 mx-0 row">
                                <span class="col-sm-12 col-md-3"> <i class="text-info fa fa-user" aria-hidden="true"></i>  <?php echo $row['postAuthor'] ?> </span>
                                <span class="col-sm-12 col-md-4"> <i class="text-info fa fa-calendar" aria-hidden="true"></i> <?php echo $row['postDate'] ?> </span>
                                <span class="col-sm-12 col-md-5"> <i class="text-info fa fa-tags" aria-hidden="true"></i> <?php echo $row['postCategory'] ?> </span>
                            </div>
                            <!-- /author name , post date , post category -->

                            <!-- post content -->
                            <div class="post-content text-secondary">
                                    <?php 
                                        echo $row['postContent'];
                                    ?>
                            </div>
                            <!-- /post content -->

                        </div>
                        <!-- /post body  -->

                    </div>
                    <!-- /post -->

                </div>
                <!-- /Main Area *post* -->


                <!-- Side Area  -->
                <div class="col-md-3">

                    <!-- categories -->
                    <div class="categories bg-white p-3 my-3">
                        <h4>التصنيفات</h4>
                        
                        <ul class="p-0 m-0 list-unstyled">
                        <?php
                                // get categories from database
                                $sql = "select * from cat_table order by id desc";
                                $query = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($query)){ 
                        ?>
                        <li>
                            <a href="category.php?category=<?php echo $row['categoryName']; ?>">
                                <span> <i class="fa fa-tags"></i> </span>
                                <span>  <?php echo $row['categoryName'] ?> </span>
                            </a>
                        </li>
                        <?php } ?>
                        </ul>

                    </div>
                    <!-- /categories -->

                    <!-- last posts -->
                    <div class="last-posts p-2  bg-white">
                        <h4 class="p-2">احدث المنشورات</h4>
                        <ul>
                            <?php
                            // get last 3 posts from database
                            $sql ="select * from posts order by id desc limit 3";
                            $query =mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($query)){ ?>
                            
                            <li>
                                <a href="post.php?id=<?php  echo $row['id']; ?>">
                                    <div class="row justify-content-between flex-nowrap p-0 m-0">

                                        <span class=""> <img src="images/uploaded/<?php echo $row['postImage'] ?>" width="80px" height="60px" alt="">
                                        </span>
                                        <span class="span-text">  <?php echo $row['postTitle'] ?> </span>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>

                    </div>
                    <!-- /last posts -->
                    
                </div>
                <!-- /Side Area  -->

            </div>
        </div>
    </section>
    <!-- /post -->

<?php

include('home/footer.php');
?>

