<?php
include "inc/header.php";
?>
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div>
            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
        <div class="card-title">
        <h2>
            Create user
        </h2>    
        </div>
    </div>
    <div class="card-body">
        <?php
        if(isset($_GET['error'])){
            ?>
            <div class="alert alert-danger">* <?=$_GET['error'];?></div>
            <?php
             }
        ?>
        <form action="actions.php" method="POST">
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Save">
        </form>
    </div>
</div>
<?php
include "inc/footer.php";
?>