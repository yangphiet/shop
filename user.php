<?php
include("conection.php"); 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ Người Dùng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* Custom Styling */
        .navbar {
            background-color: rgba(13, 255, 235, 0.7);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .banner {
            background-image: url('image/banner.jpg'); /* Thay bằng đường dẫn hình ảnh banner */
            background-size: cover;
            background-position: center;
            height: 300px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .banner h1 {
            font-size: 48px;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }
        .section-title {
            font-size: 28px;
            font-weight: bold;
            margin: 20px 0;
        }
        .product-card img {
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="image/laptop zone.png" height="50" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="allProduct/index.php">TẤT CẢ SẢN PHẨM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ƯU ĐÃI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart/history.php">LỊCH SỬ ĐẶT HÀNG</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <span class="btn btn-outline-danger me-2"><?php echo $_SESSION['fullname']; ?></span>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-danger" href="customer/logout.php">ĐĂNG XUẤT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="banner">
        <h1>Chào mừng, <?php echo $_SESSION['fullname']; ?>!</h1>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <!-- Featured Products -->
        <h2 class="section-title text-center">Sản Phẩm Nổi Bật</h2>
        <div class="row">
            <!-- Product Card -->
            <!-- <div class="col-md-4">
                <div class="card product-card">
                    <img src="image/product1.jpg" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Sản Phẩm 1</h5>
                        <p class="card-text">Mô tả ngắn gọn về sản phẩm.</p>
                        <a href="#" class="btn btn-primary">Xem Thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="image/product2.jpg" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Sản Phẩm 2</h5>
                        <p class="card-text">Mô tả ngắn gọn về sản phẩm.</p>
                        <a href="#" class="btn btn-primary">Xem Thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="image/product3.jpg" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Sản Phẩm 3</h5>
                        <p class="card-text">Mô tả ngắn gọn về sản phẩm.</p>
                        <a href="#" class="btn btn-primary">Xem Thêm</a>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- User Orders -->
        <h2 class="section-title text-center mt-5">Lịch Sử Đặt Hàng</h2>
        <p class="text-center">Xem lại các đơn hàng đã đặt của bạn <a href="cart/history.php">tại đây</a>.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
