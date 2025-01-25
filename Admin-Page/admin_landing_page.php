
<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            background-color: #f4f7fa;
            color: #333;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .side-menu {
            width: 250px;
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px 0;
            transition: all 0.3s ease;
        }

        .side-menu h2 {
            text-align: center;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #34495e;
        }

        .side-menu h2 i {
            margin-right: 10px;
        }

        .side-menu a {
            display: flex;
            align-items: center;
            color: #ecf0f1;
            text-decoration: none;
            padding: 12px 20px;
            transition: all 0.3s ease;
        }

        .side-menu a:hover,
        .side-menu a.active {
            background-color: #34495e;
            border-left: 4px solid #3498db;
        }

        .side-menu a i {
            margin-right: 10px;
            font-size: 18px;
            width: 20px;
            text-align: center;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            transition: all 0.3s ease;
        }

        header {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 24px;
            color: #2c3e50;
        }

        header h1 i,
        .user-info i {
            margin-right: 10px;
            color: #3498db;
        }

        .user-info {
            font-size: 14px;
            color: #7f8c8d;
        }

        .content {
            background-color: #fff;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .content h2 i {
            margin-right: 10px;
            color: #3498db;
        }

        .content p {
            font-size: 16px;
            color: #7f8c8d;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .side-menu {
                width: 100%;
                order: 2;
            }

            .main-content {
                order: 1;
            }
        }


    </style>
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
