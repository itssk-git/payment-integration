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
                                <a href="/">
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

    <section class="section-b-space">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <form class="needs-validation" method="POST" action="../controller/all_action.php">
                        <input type="hidden" name="_token" value="CVH6XgdFhoUV6OBdiTIlT2bviIidpb0qD6U1Vf68">
                        <div id="billingAddress" class="row g-4">
                            <h3 class="mb-3 theme-color">Billing address</h3>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Full Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Enter Phone Number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="locality" class="form-label">Locality</label>
                                <input type="text" class="form-control" id="locality" name="locality"
                                    placeholder="Locality" required>
                            </div>
                           


                            <div class="col-md-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="City" required>

                            </div>

                            <div class="col-md-3">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select custome-form-select" id="country" name="country" required>
                                    <option>Nepal</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            
                          

                           
                        </div>


                       

                        <hr class="my-lg-5 my-4">

                        <h3 class="mb-3">Payment</h3>

                        <div class="d-block my-3">
                            <div class="form-check custome-radio-box">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" checked=""
                                    id="cod">
                                <label class="form-check-label" for="cod">Khalti</label>
                            </div>
                            
                        </div>
                        
                        <button class="btn btn-solid-default mt-4" name="order" type="submit">Place Order</button>
                    </form>
                </div>

                <div class="col-lg-4">
                    <div class="your-cart-box">
                        <h3 class="mb-3 d-flex text-capitalize">Your order<span
                                class="badge bg-theme new-badge rounded-pill ms-auto bg-dark">0</span>
                        </h3>
                        <ul class="list-group mb-3">



                            <li class="list-group-item d-flex justify-content-between lh-condensed active">
                                
                            </li>
                            <li class="list-group-item d-flex lh-condensed justify-content-between">
                                <span class="fw-bold">Total (NPR)</span>
                                <strong>Rs <?php echo $_SESSION['quantity']*$_SESSION['price']; ?></strong>
                            </li>
                        </ul>

                     
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
include "../includes/footer.php";
?>