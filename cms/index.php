<?php include "includes/db.php";?>
<?php include "includes/header.php";?>

    <!-- Navigation -->
<?php include "includes/navigation.php";?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

               
<?php
$query = "SELECT * FROM posts";
$select_all_posts_query = mysqli_query($connection,$query);
    while ($row =  mysqli_fetch_assoc($select_all_posts_query)){
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_content = $row['post_content'];
        ?>

               <!-- Blog Post -->

                <!-- Title -->
                <h1>Page Heading</h1>
                <hr>
                <!-- Author -->
                <h2>
                    <a href="index.php"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">

                <hr>
        
                 <!-- Post Content -->
                <p class="lead"><?php echo $post_content; ?></p>
                <a href="" class="btn btn-primary">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>               
                        
<?php                                                                        
    }  
?>
               
 
            </div>

            <!-- Blog Sidebar Widgets Column -->

<?php include "includes/sidebar.php";?>
        </div>
        <!-- /.row -->

        <hr>

<?php include "includes/footer.php";?>