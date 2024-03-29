<?php
include('../includes/functions.php'); 
    include('../includes/connect.php');
    if(isset($_POST['addUser'])){
        $query = 'INSERT INTO users(name, email, password) 
        VALUES(
            "'.mysqli_real_escape_string($connect,$_POST['name']).'",
            "'.mysqli_real_escape_string($connect,$_POST['email']).'",
            "'.md5($_POST['password']).'"
        )';
        mysqli_query($connect,$query);
        set_message('User has been created');
    }
    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
           <?php echo get_message();?>
        </div>
    </div>
            <div class="row">
                <div class="col">
                    <h1 class="display-5 mt-4 mb-4">Manage Users</h1>
                </div>
            </div>
            <?php include ('../reusables/nav.php');?>
        
            <div class="container">
            <div class="row">
<form action="" method="POST">
<div class="mb-3">
    <label for="name" class="form-label"> Name</label>
    <input type="text" class="form-control" id="name" name= "name" aria-describedby="Name">
    
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email"aria-describedby="email">
</div>
<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name= "password" aria-describedby="password">   
</div>

<button type="submit" class="btn btn-primary" name="addUser">Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>