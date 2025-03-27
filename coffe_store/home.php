<?php 
session_start();
if (!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
}
require "config/connect.php";

$stmt = $con->prepare("SELECT * FROM registration WHERE id = ? ");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing-page-coffee </title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css"
        integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php $page = 'home' ?>
    <?php include "menu.php" ?>
    <!-- Navbar -->
    <!-- // HOME PAGE // -->
    <section class="home-page">
        <div class="home-page-container">
            <div class="container">
                <div class="content">
                    <div class="title-container">
                        <h1 class="title-text font-1  first-title">Best coffee</h1>
                        <div class="title-content">
                            <h1 class="title-text font-2"><span class="bold">Make</span></h1>
                            <h1 class="title-text font-2">your day<span class="bold"> great</span></h1>
                        </div>
                        <h1 class="title-text font-2">with our <span class="bold">coffee!</span>
                            <h1>
                    </div>
                    <div class="details">
                        <p class="text font-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor

                        </p>
                    </div>
                    <div class="button">
                        <a href="#" class="btn font-2">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-coffee"></div>
        <div class="coffee-image-section">
            <img src="assets/img/top-view-cup-coffee.png" alt="coffee" class="coffee-img" />
        </div>
    </section>

    <script src="assets/js/app.js"></script>

</body>

</html>