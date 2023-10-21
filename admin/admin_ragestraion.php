<?php
include("./includes/header.php");
include("./includes/db_conn.php");

if (isset($_POST['register'])) {
    $admin_email = mysqli_real_escape_string($conn, $_POST['admin_email']);
    $admin_pass = mysqli_real_escape_string($conn, $_POST['admin_pass']);
    $enc_pass=password_hash($admin_pass,PASSWORD_BCRYPT);

    $sql = "SELECT * FROM `admin` WHERE admin_email = '$admin_email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) >= 1 ) {
        echo "Email already exists";
    } else {
        $sql_insert = "INSERT INTO admin (admin_email, admin_password) VALUES ('$admin_email', '$enc_pass')";
        if (mysqli_query($conn, $sql_insert)) {
            echo "Email successfully registered";
        } else {
            echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>
<div class="container ">
    <div class="row">
        <div class="col-8  mex-auto">
            <div class="card  ">
                <div class="card-header bg-primary text-light">
                Registration Form
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
                        <button class="btn btn-primary w-100" name="register">Register</button>
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
