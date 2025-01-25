<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="container">
    <div class="side-menu">
        <h2><i class="fas fa-cogs"></i> Menu</h2>
        <a href="#" class="active"><i class="fas fa-home"></i> Home</a>
        <a href="#"><i class="fas fa-plus-circle"></i> Tour Package Entry</a>
        <a href="#"><i class="fas fa-list"></i> Tour Package View</a>
        <a href="#"><i class="fas fa-hotel"></i> Hotel Details Entry</a>
        <a href="#"><i class="fas fa-building"></i> Hotel Details View</a>
        <a href="#"><i class="fas fa-calendar-plus"></i> Tour Schedule Entry</a>
        <a href="#"><i class="fas fa-calendar-alt"></i> Tour Schedule View</a>
        <a href="#"><i class="fas fa-book"></i> Booking View</a>
        <a href="#"><i class="fas fa-users"></i> Customer View</a>
        <a href="#"><i class="fas fa-credit-card"></i> Payment View</a>
        <a href="#"><i class="fas fa-comment"></i> Feedback View</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a>
    </div>
    <div class="main-content">
        <header>
            <h1><i class="fas fa-globe"></i>Tour Grid <i class="fa-solid fa-plane"></i>The Ultimate Tour Management System </h1>
            <div class="user-info"><i class="fas fa-user"></i> Welcome, Admin</div>
        </header>
        <div class="content">
            <h2><i class="fas fa-chart-line"></i> Dashboard</h2>
            <p>Select an option from the menu to proceed</p>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
