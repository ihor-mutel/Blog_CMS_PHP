<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php deleteRows(); ?>

<?php include "includes/header.php"?>
<div class="container">
    <div class="col-xs-6"> <!-- grid class -->
        <form action="login_delete.php" method="post">
         <h1 class="text-center">Delete</h1>              
            <div class="form-group">
               <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div> 
            <div class="form-group">
                <select name="id" id="">
                    <?php
                         showAllData();
                    ?>                  
                   
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">        
        </form>
    </div>      
<?php include "includes/footer.php"?>