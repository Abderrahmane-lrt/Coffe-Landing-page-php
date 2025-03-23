<?php 
$is_exist = '';
require "config/connect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $first_name = $_POST['fName'];
    $last_name = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $con->prepare("SELECT COUNT(*) FROM registration WHERE email = '$email'");
    $stmt->execute();
    $num = $stmt->fetchColumn();

    if ($num > 0){
        $is_exist = true;
    }else{
        $is_exist = false;
        $stmt = $con->prepare("INSERT INTO registration VALUES (null, '$first_name', '$last_name', '$email', '$password')");
        $stmt->execute();
        echo "<script> setTimeout(function () { window.location.href = 'login.php' }, 3000) </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href=' https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css'>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel='stylesheet' href="./assets/css/registration.css">
    <title>Document</title>
</head>

<body>
<?php 
if ($is_exist === true){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>OOps .</strong> User Already exist!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}elseif ($is_exist === false){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Done .</strong> User Added successfully!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


?>

    <div class='container' id='signup'>
        <h1 class='form-title'>Register</h1>
        <form method='post'>
            <div class='input-grp'>
                <i class='fas fa-user'></i>
                <input type='text' name='fName' id='fName' placeholder='First Name' required>
                <label for='fName'>First Name</label>
                <i class='fas fa-user'></i>
                <input type='text' name='lName' id='lName' placeholder='Last Name' required>
                <label for='lName'>Last Name</label>
            </div>
            <div class='input-grp'>
                <i class='fas fa-envelope'></i>
                <input type='email' name='email' id='email' placeholder='Email' required>
                <label for='email'>Email</label>
            </div>
            <div class='input-grp'>
                <i class='fas fa-lock'></i>
                <input type='password' name='password' id='password' placeholder='Password' required>
                <label for='password'>Password</label>
            </div>
            <input type='submit' class='btn' value='Sign Up' name='signUp'>
        </form>
        <p class='or'>
            ---------or----------
        </p>
        <div class='icons'>
            <i class='fab fa-google'></i>
            <i class='fab fa-facebook'></i>
        </div>
        <div class='links'>
            <p>Already Have Account ?</p>
            <button id='signInButton'><a href="login.php" style="text-decoration: none;">Login</a></button>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle - Copy.js"></script>
</body>

</html>