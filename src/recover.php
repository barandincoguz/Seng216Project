<?php
session_start();
include("connect.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered email and new password from the form
    $email = $_POST['email'];
    $newPassword = $_POST['newpassword'];
    $newPassword=md5($newPassword);

    // Prepare SQL statement to check if the email exists
    $sql = "SELECT * FROM users WHERE email = :email";

    // Prepare the SQL statement
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);

    // Execute the query
    $stmt->execute();

    // Check if any rows are returned
    if ($stmt->rowCount() > 0) {
        // Email exists in the database, update the password
        $updateSql = "UPDATE users SET password = :password WHERE email = :email";
        $updateStmt = $pdo->prepare($updateSql);
        $updateStmt->bindParam(':password', $newPassword, PDO::PARAM_STR);
        $updateStmt->bindParam(':email', $email, PDO::PARAM_STR);
        $updateStmt->execute();
        header("Location: index.php");
        exit(); // Ensure script execution stops after redirection

    } else {
        // Email does not exist in the database
        echo "Email does not exist.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
    margin: 0 auto;
    margin-top: 10%;
}        
.vh-50 {
    height: 50vh;
}

    </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-50">
		<div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="mt-3 input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="newpassword" name="newpassword" placeholder="new password" class="form-control"  type="password">
                        </div>
                      </div>

                      <div class="form-group mt-3">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
                    <a class="btn btn-primary mt-3" href="index.php">Login</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
</div>
      <script src="script.js"></script>
</body>
</html>