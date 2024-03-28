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
                    <h3>Checkout</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="../index.htm">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <table class="table cart-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">total</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <a href="../product/details.html">
                                        <img src="../assets/images/fashion/product/front/<?php echo $_SESSION['photo']; ?>" class="blur-up lazyloaded"
                                            alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="../product/details.html"><?php echo $_SESSION['name']; ?></a>
                                    <div class="mobile-cart-content row">
                                        <div class="col">
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <input type="text" name="quantity" class="form-control input-number"
                                                        value="<?php echo $_SESSION['quantity']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h2><?php echo $_SESSION['price']; ?></h2>
                                        </div>
                                        <div class="col">
                                            <h2 class="td-color">
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2><?php echo $_SESSION['price']; ?></h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity"
                                                data-rowid="8eb747b95b9862e9d83031beb9938720"
                                                class="form-control input-number" value="<?php echo $_SESSION['quantity']; ?>">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2 class="td-color"><?php echo $_SESSION['quantity']*$_SESSION['price']; ?></h2>
                                </td>
                              
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart-checkout-section">
                    <div class="row g-4">
                        

                    

                        <div class="col-lg-4">
                            <div class="cart-box">
                                <div class="cart-box-details">
                                    <div class="total-details">
                                        <div class="top-details">
                                            <h3>Cart Totals</h3>
                                            <h6>Sub Total <span>Rs <?php echo $_SESSION['quantity']*$_SESSION['price']; ?></span></h6>
                                          

                                            <h6>Total <span>Rs <?php echo $_SESSION['quantity']*$_SESSION['price']; ?></span></h6>
                                        </div>
                                        <div class="bottom-details">
                                            <a href="checkout.php">Process Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
include "../includes/footer.php";
?>
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