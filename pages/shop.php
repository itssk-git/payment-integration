<?php
ob_start(); // Start output buffering
include_once "../includes/header.php";
if (!isset($_SESSION['user'])){
    header('Location: ../user/login.php');
    exit();
}
ob_end_flush(); // Flush output buffer
?>



    <section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Shop</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.htm">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="ratio_asos overflow-hidden">
        <div class="container p-sm-0">
           
            <style>
                .r-price {
                    display: flex;
                    flex-direction: row;
                    gap: 20px;
                }

                .r-price .main-price {
                    width: 100%;
                }

                .r-price .rating {
                    padding-left: auto;
                }

                .product-style-3.product-style-chair .product-title {
                    text-align: left;
                    width: 100%;
                }

                @media (max-width:600px) {

                    .product-box p,
                    .product-box a {
                        text-align: left;
                    }

                    .product-style-3.product-style-chair .main-price {
                        text-align: right !important;
                    }
                }
            </style>
            <div class="row g-sm-4 g-3">
                
            
            <?php
                $qry = 'SELECT * FROM products WHERE Quantity > 0';
                $result = mysqli_query($conn, $qry);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $description_words = explode(' ', $row['Description']);
                        $short_description = implode(' ', array_slice($description_words, 0, 10));

                        echo '
                        <div class="col-xl-2 col-lg-2 col-6">
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-details.php?mid=' . $row['ProductID'] . '">
                                        <img src="../assets/images/fashion/product/front/' . $row['ImageURL'] . '" class="w-100 bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="circle-shape"></div>
                                    <div class="label-block"></div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn">
                                                    <i data-feather="shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-style-3 product-style-chair">
                                    <div class="product-title d-block mb-0">
                                        <div class="r-price">
                                            <span>Rs</span><div class="theme-color">' . $row['Price'] . '</div>
                                        </div>
                                        <p class="font-light mb-sm-2 mb-0">' . $short_description . '</p>
                                        <a href="product-details.php?mid=' . $row['ProductID'] . '" class="font-default">
                                            <h5>' . $row['ProductName'] . '</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                } 
                ?>

        </div>
    </section>

    <div id="qvmodal"></div>

    <form id="frmFilter" method="GET">
        <input type="hidden" id="page" name="page" value="1">
        <input type="hidden" id="size" name="size" value="12">
        <input type="hidden" id="prange" name="prange" value="">
        <input type="hidden" id="order" name="order" value="-1">
        <input type="hidden" id="brands" name="brands" value="">
        <input type="hidden" id="categories" name="categories" value="">
    </form>

    <?php 
include "../includes/footer.php";
?>
  

    
    <div class="bg-overlay"></div>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/feather/feather.min.js"></script>
    <script src="../assets/js/lazysizes.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/slick/slick-animation.min.js"></script>
    <script src="../assets/js/slick/custom_slick.js"></script>
    <script src="../assets/js/price-filter.js"></script>
    <script src="../assets/js/ion.rangeSlider.min.js"></script>
    <script src="../assets/js/filter.js"></script>
    <script src="../assets/js/newsletter.js"></script>
    <script src="../assets/js/cart_modal_resize.js"></script>
    <script src="../assets/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="../assets/js/theme-setting.js"></script>
    <script src="../assets/js/script.js"></script>
    <script>
        $(function () {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
    </script>
