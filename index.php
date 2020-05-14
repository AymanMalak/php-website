<?php
include('connection.php');
include('home/header.php');
?>

    <!-- Home -->
    <section class="py-5">
        <div class="container">
            <div class="row">

                <!-- Main area *posts* -->
                <div class="col-md-9">
                    <?php 
                        // get all posts from database
                        $sql = "select * from posts order by id desc";
                        $res = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($res)){ 
                    ?>
                    <div class="post my-3 p-3 bg-white">
                        <!-- post image -->
                        <div class="post-image w-100">
                            <a href="post.php?id=<?php echo $row['id'] ?>"><img src="images/uploaded/<?php echo $row['postImage'] ?>" height="300px" class="w-100" alt=""></a>
                        </div>
                        <!-- /post image -->

                       <!-- post title -->
                        <div class="post-title text-center text-danger font-weight-bold text-uppercase py-3">
                            <a href="post.php?id=<?php echo $row['id'] ?>" class="text-danger" style="text-decoration:none" >  <?php echo $row['postTitle'] ?> </a>
                        </div>
                       <!-- /post title -->

                        <!-- post body  -->
                        <div class="post-details text-center">
                            <!-- author name , post date , post category -->
                            <div class="text-center py-2 px-0 mx-0 row">
                                <span class="  col-sm-12  col-md-3"> <i class="text-info fa fa-user" aria-hidden="true"></i>  <?php echo $row['postAuthor'] ?> </span>
                                <span class="  col-sm-12  col-md-4"> <i class="text-info fa fa-calendar" aria-hidden="true"></i> <?php echo $row['postDate'] ?> </span>
                                <span class="  col-sm-12  col-md-5"> <i class="text-info fa fa-tags" aria-hidden="true"></i> <?php echo $row['postCategory'] ?> </span>
                            </div>
                            <!-- /author name , post date , post category -->
                        
                            <!-- post content -->
                            <div class="post-content text-secondary">
                                <?php 
                                    // if post content length >150 character will take 100 and skip the other
                                    if( strlen($row['postContent']) > 150){
                                        $row['postContent'] = substr($row['postContent'],0,80);
                                    }
                                    echo $row['postContent']." ... ";
                                    ?>
                            </div>
                            <!-- /post content -->
                        </div>
                        <!-- /post body  -->

                        <!-- read more button -->
                        <div class="button-holder text-center py-3">
                            <a class="btn btns" href="post.php?id=<?php echo $row['id'] ?>">اقرا المزيد</a>
                        </div>
                        <!-- /read more button -->

                    </div>
                    <?php } ?>
                </div>
                <!-- /Main area *posts* -->

                <!-- Side area -->
                <div class="col-md-3">
                    
                    <!-- Categories -->
                    <div class="categories bg-white p-3 my-3">
                        <h4>التصنيفات</h4>
                        <ul class="p-0 m-0 list-unstyled">
                            <?php
                                // get all categories
                                $sql = "select * from cat_table order by id desc";
                                $query = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($query)){ ?>
                            <li>
                                <a href="category.php?category=<?php echo $row['categoryName']; ?>">
                                    <span> <i class="fa fa-tags"></i> </span>
                                    <span>  <?php echo $row['categoryName'] ?> </span>
                                </a>
                            </li>
                                <?php } ?>
                   
                        </ul>
                    </div>
                    <!-- /Categories -->

                    <!-- Last posts -->
                    <div class="last-posts p-2  bg-white">
                        <h4 class="p-2">احدث المنشورات</h4>
                        <ul>
                            <?php
                            // get last 3 posts 
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
                    <!-- /Last posts -->

                </div>
                <!-- /Side area -->

            </div>
        </div>
    </section>
    <!-- /Home -->

<?php
include('home/footer.php');
?>
