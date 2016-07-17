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
        $post_autor = $row['post_autor'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_content = $row['post_content'];

    }  
?>
               
                <!-- Blog Post -->

                <!-- Title -->
                <h1>Blog Post Title</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Start Bootstrap</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <hr>

            </div>

            <!-- Blog Sidebar Widgets Column -->

<?php include "includes/sidebar.php";?>
        </div>
        <!-- /.row -->

        <hr>

<?php include "includes/footer.php";?>
