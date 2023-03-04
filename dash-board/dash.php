<?php
    if(!isset($_COOKIE['ddd']) && empty($_COOKIE['ddd']) && !isset($_COOKIE['aaa']) && empty($_COOKIE['aaa'])){
        print "<script>alert('You are not authorized...')</script>";
        print "<script>window.location.assign('password.php')</script>";
    }else{
        ?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dash.css">
    <script src="https://kit.fontawesome.com/bca3ec24e7.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

        <h3 align="center" class="admin-h3">ADMIN PANNEL</h3>
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
            <img src="../image/logo.png" alt="">
            <button class="nav-link active m-top" data-bs-toggle="pill" role="tab" data-bs-target="#pills-admin" aria-selected="true"><i class="fa-regular fa-address-card"></i>ADMIN</button>
            <button class="nav-link" data-bs-toggle="pill" role="tab" data-bs-target="#pills-post" aria-selected="false"><i class="fa-brands fa-opencart"></i>ADD CART</button>
            <button class="nav-link" data-bs-toggle="pill" role="tab" data-bs-target="#pills-order" aria-selected="false"><i class="fa-brands fa-first-order-alt"></i>ORDERS</button>
            <!-- <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-messages" aria-selected="false" dis>Messages</button> -->
            <button class="nav-link" data-bs-toggle="pill" role="tab" data-bs-target="#pills-setting" aria-selected="false"><i class="fa-solid fa-gears"></i>SETTING</button>

            <div class="btn-div">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <form action="dash.php" method="post">
                    <button class="log-btn" name="log-btn">LOG OUT</button>
                </form>
                
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade show active no-service" id="pills-admin" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                <div class="no-service">
                    <div class="box">
                        <i class="fa-solid fa-exclamation"></i>
                        <div class="text">
                            <p>Sorry, This service isn't available</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade cart-pannel" id="pills-post" role="tabpanel" tabindex="0">
                <div class="add-cart-div">
                    
                </div>
            </div>

            <div class="tab-pane fade" id="pills-order" role="tabpanel" tabindex="0">
                <div class="no-service">
                    <div class="box">
                        <i class="fa-solid fa-exclamation"></i>
                        <div class="text">
                            <p>Sorry, This service isn't available</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div> -->

            <div class="tab-pane fade no-service" id="pills-setting" role="tabpanel" tabindex="0">
                 <div class="no-service">
                    <div class="box">
                        <i class="fa-solid fa-exclamation"></i>
                        <div class="text">
                            <p>Sorry, This service isn't available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

    <?php
    }
    ?>

    <?php
        if(isset($_POST['log-btn'])){
            print "hello1234";
            unset($_COOKIE['admin']);
            unset($_COOKIE['pass']);
            print "<script>window.location.assign('password.php')</script>";
        }
    ?>

