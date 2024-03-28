<?php
ob_start(); 
include_once "../includes/header.php";
if (!isset($_SESSION['user'])){
    header('Location: ../user/login.php');
    exit();
}
ob_end_flush(); 
?>
<?php
$qry = 'SELECT * FROM products WHERE ProductID = ' . $_GET['mid']; 
$result = mysqli_query($conn, $qry);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
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
                    <h3>Product Details</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="../index.htm">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">product-details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
</section> 
    <section>
        <div class="container">
            <div class="row gx-4 gy-5">
                <div class="col-lg-12 col-12">
                    <div class="details-items">
                        <div class="row g-4">
                            <div class="col-md-6">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="details-image-1 ratio_asos">
                                        <div>
                                            <img src="../assets/images/fashion/product/front/<?php echo $row['ImageURL']; ?>" id="zoom_01" data-zoom-image="assets/images/fashion/<?php echo $row['ImageURL']; ?>" class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="col-md-6">
                                <div class="cloth-details-size">
                             

                                    <div class="details-image-concept">
                                    <h2><?php echo $row['ProductName']; ?></h2>
                                    </div>

                                 

                                    <h3 class="price-detail">Rs <?php echo $row['Price']; ?> </h3>

                                    <div class="color-image">
                                        <div class="image-select">
                                            <h5>Color :</h5>
                                            <ul class="image-section">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/fashion/product/front/<?php echo $row['ImageURL']; ?>"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </li>
                                             
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="selectSize" class="addeffect-section product-description border-product">
                                      


                                        <h6 class="product-title product-title-2 d-block">quantity</h6>

                                        <div class="qty-box">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        onclick="updateQuantity()" data-type="minus" data-field="">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quantity" id="quantity"
                                                    class="form-control input-number" value="1">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        onclick="updateQuantity()" data-type="plus" data-field="">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-buttons">
                                        <form id="addtocart" method="post" action="../controller/all_action.php">
                                            <input type="hidden" name="_token" value="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
                                            <input type="hidden" name="id" value="<?php echo $row['ProductID']; ?>">
                                            <input type="hidden" name="name" value="<?php echo $row['ProductName']; ?>">
                                            <input type="hidden" name="price" value="<?php echo $row['Price']; ?>">
                                            <input type="hidden" name="photo" value="<?php echo $row['ImageURL']; ?>">
                                            <input type="hidden" name="quantity" id="qty" value="1">

                                            <button type="submit"name="orderProduct" class="btn btn-solid hover-solid btn-animation" onclick="addToCart()">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Order</span>
                                            </button>
                                        </form>
                                    </div>


                              

                                    <div class="mt-2 mt-md-3 border-product">
                                        <h6 class="product-title hurry-title d-block">Hurry Up! Left <span><?php echo $row['Quantity']; ?></p></span> in
                                            stock</h6>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 78%"></div>
                                        </div>
                                     
                                    </div>

                                    <div class="border-product">
                                        <h6 class="product-title d-block">share it</h6>
                                        <div class="product-icon">
                                            <ul class="product-social">
                                                <li>
                                                    <a href="https://www.facebook.com/">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.google.com/">
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="pe-0">
                                                    <a href="https://www.google.com/">
                                                        <i class="fas fa-rss"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="cloth-review">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#desc" type="button">Description</button>

                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="desc">
                                <div class="shipping-chart">
                                    <div class="part">
                                        <h4 class="inner-title mb-2">Some Insight</h4>
                                        <p class="font-light"><?php echo $row['Description']; ?></p>
                                    </div>

                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function updateQuantity() {
            var newQuantity = parseInt($("#quantity").val()) + 1;
            var maxQuantity = <?php echo $row['Quantity']; ?>; 
            if (newQuantity < maxQuantity) {
                $("#qty").val(newQuantity); 
            } else {
                $("#qty").val(maxQuantity); 
                $(".quantity-right-plus").prop('disabled', true); 
            }
        }
    </script>

    <script>
        function addToCart() {
    
            var quantity = document.getElementById("quantity").value;
            document.getElementById("qty").value = quantity;
          
}
    </script>

    <?php 
include "../includes/footer.php";
?>