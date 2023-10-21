<?php  
include("./includes/header.php");
include("./includes/db_conn.php");


if(isset($_POST['login'])){
    $admin_email=mysqli_real_escape_string($conn,$_POST['admin_email']);
    $admin_pass=mysqli_real_escape_string($conn,$_POST['admin_password']);

 


$sql = "SELECT `admin_password` from `admin` where admin_email = '$admin_email' ";
$result=mysqli_query($conn,$sql);

// echo "<pre>";
// var_dump($result);
// echo "</pre>";
if(mysqli_num_rows($result) == 1){
    echo "email found";
}else{
    echo "email does not exist";
}

 
mysqli_close($conn);
 
}

?>
<div class="container ">
    <div class="row">
        <div class="col-8  mex-auto">
            <div class="card  ">
                <div class="card-header bg-primary text-light">
              login form
                </div>
                
                <div class="card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="admin_email" class="form-label">Email</label>
                        <input type="email" id="admin_email" name="admin_email" placeholder="Enter Your Email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="admin_pass" class="form-label">Password</label>
                        <input type="password" id="admin_pass" name="admin_pass" placeholder="Enter Your Password" class="form-control">
                    </div>
                    <div>
                        <button class="btn btn-primary w-100" name="login">login</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

include("./includes/footer.php")

?>