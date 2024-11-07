<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Header</title>
  <link rel="stylesheet" href="layout/css/main.css" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
</head>

<body>
  <header>
    <div class="container container_coppy">
      <div class="header__top row">
        <div class="header__top--logo">
          <a href="#">
            <img src="layout/image/header/logo.png" alt="Logo" />
          </a>
        </div>
        <div class="header__top--searchBar">
          <input type="search" placeholder="Nhập từ khóa tìm kiếm" />
          <span class="icon--search">
            <i class="bx bx-search"></i>
          </span>
        </div>
        <div class="header__top--user">
          <a href="#">ĐĂNG KÝ</a>
          <span class="line">|</span>
          <a href="#">ĐĂNG NHẬP</a>
          <span class="shopping--cart">
            <i class="bx bx-cart-alt"></i>
            <span>0</span>
          </span>
        </div>
      </div>
      <div class="header__bottom row">
        <div class="menu__cate">
          <p onclick="toggleSubMenu()">
            <span><i class="bx bx-menu"></i></span>
            <span>DANH MỤC SẢN PHẨM</span>
          </p>
          <ul class="submenu">
            <li>
              <a href="#"><i class="bx bxs-chevron-right"></i> GIƯỜNG</a>
            </li>
            <li>
              <a href="#"><i class="bx bxs-chevron-right"></i> SOFA</a>
            </li>
            <li>
              <a href="#"><i class="bx bxs-chevron-right"></i> ARMCHAIR</a>
            </li>
            <li>
              <a href="#"><i class="bx bxs-chevron-right"></i> BÀN ĂN</a>
            </li>
            <li>
              <a href="#"><i class="bx bxs-chevron-right"></i> GHẾ ĂN</a>
            </li>
          </ul>
        </div>
        <div class="menu__main">
          <ul>
            <li><a href="#">TRANG CHỦ</a></li>
            <li><a href="#">GIỚI THIỆU</a></li>
            <li>
              <a href="#">SẢN PHẨM <i class="bx bxs-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="#">SOFA</a></li>
                <li><a href="#">BÀN ĂN</a></li>
                <li><a href="#">GIƯỜNG</a></li>
                <li><a href="#">ARMCHAIR</a></li>
                <li><a href="#">GHẾ ĂN</a></li>
              </ul>
            </li>
            <li><a href="#">TIN TỨC</a></li>
            <li><a href="#">LIÊN HỆ</a></li>
          </ul>
        </div>
        <div class="hotline">
          <span><i class="bx bx-headphone"></i></span>
          <span>Hotline:</span>
          <span>09xxxxxxxx</span>
        </div>
      </div>
    </div>
  </header>