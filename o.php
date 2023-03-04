<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="startech.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/bca3ec24e7.js" crossorigin="anonymous"></script>
    <title>STARTECH(IHI:IMRAN)</title>
</head>
<body class="body">
    
    <header>
        <div class="header-one">
            <a href="index.html"><img src="./image/logo.png" alt=""></a>

            <div class="my-input-div">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
            </div>

            <div class="icon-box">
                <a href="#">
                    <i class="fa-solid fa-gift"></i>
                    <div class="text">
                        <h6>OFFERS</h6>
                        <p>Last Offers</p>
                    </div>
                </a>
            </div>
            <div class="icon-box">
                <a href="#">
                    <i class="fa-solid fa-bolt-lightning "></i>
                    <div class="text">
                        <h6>DEALS</h6>
                        <p>Special Deals</p>
                    </div>
                </a>
            </div>
            <div class="icon-box">
                <a href="#">
                    <i class="fa-solid fa-user-tie"></i>
                    <div class="text">
                        <h6>ACCOUNT</h6>
                        <p>Register or Login</p>
                    </div>
                </a>
            </div>

            <button class="pc-btn">PC BUILDER</button>
        </div>
    </header>     
    <!-- menu and header-two css work in header -->
    <div class="header-two">
        <div class="offcan-div">
            <a class="offcan-btn" data-bs-toggle="offcanvas" href="#offcanvasExample">
                <i class="fa-solid fa-bars"></i>
            </a>
            
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"  data-bs-backdrop="false">
                <ul class="off-ul">

                    <div class="off-item-all">
                        <div class="off-item" id="second-off" onclick="showItem(this)">
                            <p>Desktop</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Desktop Offer</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Star PC</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>DGaming PC</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Brand PC</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>Laptop</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>All Leptop</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Gaming Laptop</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>Premium Ultrabook</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Laptop Bag</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>External Grapics Encloser</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Laptop Accessories</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Show All Laptop</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>Component</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Processor</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>CPU Cooler</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>Water / Liquid Cooling</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Motherboard</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Graphics Card</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>RAM(Laptop)</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>RAM(Desktop)</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Power Supply</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>Monitor</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Acer</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>ASRock</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>LG</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Apple</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Asus</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>MSI</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>BenQ</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>HP</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Dell</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Samsung</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>HUAWEI</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>UPS</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Online UPS</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Offline UPS</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>UPS Battery</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>IPS</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Voltage Stabilizer</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Show All UPS</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>Tablet</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Graphics Card</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Apple</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>Amazon</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Lenovo</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Samsung</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Realme</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>XIAOMI</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Walton</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>Office Eqipment</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Desktop Offer</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Star PC</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>DGaming PC</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Brand PC</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>Camera</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Desktop Offer</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Star PC</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>DGaming PC</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Brand PC</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>Security</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Desktop Offer</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Star PC</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>DGaming PC</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Brand PC</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>Networking</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Desktop Offer</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Star PC</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>DGaming PC</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Brand PC</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>Software</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Desktop Offer</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Star PC</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>DGaming PC</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Brand PC</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>Server & Storage</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Desktop Offer</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Star PC</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>DGaming PC</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Brand PC</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>Accessories</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Desktop Offer</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Star PC</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>DGaming PC</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Brand PC</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>Gadget</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Desktop Offer</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Star PC</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>DGaming PC</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Brand PC</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>Gaming</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Desktop Offer</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Star PC</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>DGaming PC</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Brand PC</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>TV</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Desktop Offer</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Star PC</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>DGaming PC</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Brand PC</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="off-item-all">
                        <div class="off-item" onclick="showItem(this)">
                            <p>AC</p>
                            <h6 class="plus">+</h6>
                        </div>
                        <div class="off-item-elem">
                            <div class="off-item2">
                                <a href="">
                                    <p>Desktop Offer</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">
                                    <p>Star PC</p>
                                    <h6>+</h6>
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#"> 
                                    <p>DGaming PC</p>
                                    <h6>+</h6>                                   
                                </a>
                            </div>
                            <div class="off-item2">
                                <a href="#">  
                                    <p>Brand PC</p>
                                    <h6>+</h6>                                  
                                </a>
                            </div>
                        </div>
                    </div>

                </ul>
            </div>
        </div>

        <div class="logo-image-div">
            <a href="#"><img src="./image/logo.png" alt=""></a>
        </div>

        <div class="icon-div">
            <i class="fa-solid fa-magnifying-glass search-cart" id="search"></i>

            <div class="input-group" id="input-div">
                <input type="text" class="form-control" aria-describedby="basic-addon2">
                <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>

            <i class="fa-solid fa-cart-shopping search-cart number-icon"></i><p>0</p>
        </div>
    </div>
    <menu class="menu">
        <ul class="first-ul">
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/desktops" target="_blank">Desktop</a>
                <ul class="second-ul">
                    <li><a href="#">Desktop Offer</a></li>
                    <li><a href="#">Star PC</a></li>
                    <li><a href="#">Gaming PC</a></li>
                    <li><a href="#">Brand PC</a></li>
                    <li><a href="#">All-in one PC</a></li>
                    <li><a href="#">Apple Mac Mini</a></li>
                    <li><a href="#">Apple iMac</a></li>
                    <li><a href="#">Apple Mac Studio</a></li>
                    <li><a href="#">Budget PC</a></li>
                    <li><a href="#">Show All Desktop</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/laptop-notebook" target="_blank">Laptop</a>
                <ul class="second-ul">
                    <li><a href="#">All Laptop</a></li>
                    <li><a href="#">Gaming Laptop</a></li>
                    <li><a href="#">Primium Ultrabook</a></li>
                    <li><a href="#">Laptop Bag</a></li>
                    <li><a href="#">Internal Grapics Encloser</a></li>
                    <li><a href="#">Laptop Accessories</a></li>
                    <li><a href="#">Show All Laptop</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/component" target="_blank">Component</a>
                <ul class="second-ul">
                    <li><a href="#">Processor</a></li>
                    <li><a href="#">CPU Cooler</a></li>
                    <li><a href="#">Water/Lequid Cooling</a></li>
                    <li><a href="#">Motherboard</a></li>
                    <li><a href="#">Grapics Card</a></li>
                    <li><a href="#">RAM (Desktop)</a></li>
                    <li><a href="#">RAM (Laptop)</a></li>
                    <li><a href="#">Power Suply</a></li>
                    <li><a href="#">Hard Disk Drive</a></li>
                    <li><a href="#">SSD</a></li>
                    <li><a href="#">Cassing</a></li>
                    <li><a href="#">Portable Hard Disk Drive</a></li>
                    <li><a href="#">Portable SSD</a></li>
                    <li><a href="#">Casing Cooler</a></li>
                    <li><a href="#">Optical Disk Drive</a></li>
                    <li><a href="#">Show All Component </a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/monitor" target="_blank">Monitor</a>
                <ul class="second-ul">
                    <li><a href="#">Acer</a></li>
                    <li><a href="#">ASRock</a></li>
                    <li><a href="#">LG</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Asus</a></li>
                    <li><a href="#">MSI</a></li>
                    <li><a href="#">BenQ</a></li>
                    <li><a href="#">HP</a></li>
                    <li><a href="#">Dell</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Viewsonic</a></li>
                    <li><a href="#">Huawei</a></li>
                    <li><a href="#">GIGABYTE</a></li>
                    <li><a href="#">XIAOMI</a></li>
                    <li><a href="#">AOC</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">PHILIPS</a></li>
                    <li><a href="#">GameMax</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/ups-ips" target="_blank">UPS</a>
                <ul class="second-ul">
                    <li><a href="#">Online UPS</a></li>
                    <li><a href="#">Offline UPS</a></li>
                    <li><a href="#">UPS Battery</a></li>
                    <li><a href="#">Voltage Stabilizer IPS</a></li>
                    <li><a href="#">Show All UPS</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/tablet-pc" target="_blank">Tablet</a>
                <ul class="second-ul">
                    <li><a href="#">Grapichal Tablet</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Amazon</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Realme</a></li>
                    <li><a href="#">Xiaomi</a></li>
                    <li><a href="#">Walton</a></li>
                    <li><a href="#">HUAWEI</a></li>
                    <li><a href="#">Show All Tablet</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/office-equipment" target="_blank">Office Eqipment</a>
                <ul class="second-ul">
                    <li><a href="#">Projector</a></li>
                    <li><a href="#">Conference System</a></li>
                    <li><a href="#">PA System</a></li>
                    <li><a href="#">Interective FLat Pannel</a></li>
                    <li><a href="#">Signage</a></li>
                    <li><a href="#">Kisok</a></li>
                    <li><a href="#">Printer</a></li>
                    <li><a href="#">Large Formate Printer</a></li>
                    <li><a href="#">ID Card Printer</a></li>
                    <li><a href="#">POS Printer</a></li>
                    <li><a href="#">Lavel Printer</a></li>
                    <li><a href="#">Dot Matrix Printer</a></li>
                    <li><a href="#">Photo Copier</a></li>
                    <li><a href="#">Tonner</a></li>
                    <li><a href="#">Ink Bottle</a></li>
                    <li><a href="#">Ribon</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/camera" target="_blank">Camera</a>
                <ul class="second-ul">
                    <li><a href="#">Action Camera</a></li>
                    <li><a href="#">Camera Lences</a></li>
                    <li><a href="#">Digital Camera</a></li>
                    <li><a href="#">DSLR</a></li>
                    <li><a href="#">Handy Camera</a></li>
                    <li><a href="#">Mirrorless Camera</a></li>
                    <li><a href="#">Dash Camera</a></li>
                    <li><a href="#">Video Camera</a></li>
                    <li><a href="#">Camera Flash</a></li>
                    <li><a href="#">Camera Accessories</a></li>
                    <li><a href="#">Show All Camera</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/Security-Camera" target="_blank">Security</a>
                <ul class="second-ul for-position">
                    <li><a href="#">Portable WIFI Camera</a></li>
                    <li><a href="#">IP Camera</a></li>
                    <li><a href="#">CCTV Camera</a></li>
                    <li><a href="#">PTZ Camera</a></li>
                    <li><a href="#">Dahua CC Camera Package</a></li>
                    <li><a href="#">Dahua IP Camera Package</a></li>
                    <li><a href="#">Hikvision CC Camera</a></li>
                    <li><a href="#">DVR</a></li>
                    <li><a href="#">XVR</a></li>
                    <li><a href="#">NVR</a></li>
                    <li><a href="#">CC Camera Accessories</a></li>
                    <li><a href="#">Door Lock</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/networking" target="_blank">Networking</a>
                <ul class="second-ul for-position">
                    <li><a href="#">Router</a></li>
                    <li><a href="#">Network Switch</a></li>
                    <li><a href="#">Lan Card</a></li>
                    <li><a href="#">UTP Cable Box</a></li>
                    <li><a href="#">Networking Accessories</a></li>
                    <li><a href="#">Media Converter</a></li>
                    <li><a href="#">Networking Tools</a></li>
                    <li><a href="#">Show All Networking</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/software" target="_blank">Software</a>
                <ul class="second-ul for-position">
                    <li><a href="#">Operating System</a></li>
                    <li><a href="#">Office Application</a></li>
                    <li><a href="#">Database Server Solution</a></li>
                    <li><a href="#">Mail Server Solution</a></li>
                    <li><a href="#">Cloud Solution</a></li>
                    <li><a href="#">Adobe</a></li>
                    <li><a href="#">Antivirus</a></li>
                    <li><a href="#">VMware</a></li>
                    <li><a href="#">AutoDesk</a></li>
                    <li><a href="#">Show All Software</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/server-networking" target="_blank">Server & Storage</a>
                <ul class="second-ul for-position">
                    <li><a href="#">Server</a></li>
                    <li><a href="#">Workstation</a></li>
                    <li><a href="#">Server Rack</a></li>
                    <li><a href="#">NAS Storage</a></li>
                    <li><a href="#">SAN Storage</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Show All Server & Storage</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/accessories" target="_blank">Accessories</a>
                <ul class="second-ul for-position">
                    <li><a href="#">Keyboard</a></li>
                    <li><a href="#">Mouse</a></li>
                    <li><a href="#">Headphone</a></li>
                    <li><a href="#">Headphone Stand</a></li>
                    <li><a href="#">Mouse Pad</a></li>
                    <li><a href="#">Speaker & Home Theater</a></li>
                    <li><a href="#">Blutooth Speakers</a></li>
                    <li><a href="#">Webcam</a></li>
                    <li><a href="#">Converter & Cable</a></li>
                    <li><a href="#">Hubs & Docks</a></li>
                    <li><a href="#">Microphone</a></li>
                    <li><a href="#">Presenter</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/gadget" target="_blank">Gadget</a>
                <ul class="second-ul for-position">
                    <li><a href="#">Smart Watch</a></li>
                    <li><a href="#">Smart Band</a></li>
                    <li><a href="#">Ear Phone</a></li>
                    <li><a href="#">Earbuds</a></li>
                    <li><a href="#">Neckband</a></li>
                    <li><a href="#">Power Bank</a></li>
                    <li><a href="#">TV Box</a></li>
                    <li><a href="#">Gimbal</a></li>
                    <li><a href="#">Drones</a></li>
                    <li><a href="#">Portable Power Station</a></li>
                    <li><a href="#">Studio Equipment</a></li>
                    <li><a href="#">Daily Life Style</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/gadget" target="_blank">Gaming</a>
                <ul class="second-ul for-position">
                    <li><a href="#">Gaming Chair</a></li>
                    <li><a href="#">Gaming Sofa</a></li>
                    <li><a href="#">Keyboard</a></li>
                    <li><a href="#">Mouse</a></li>
                    <li><a href="#">Headphone</a></li>
                    <li><a href="#">Mouse Pad</a></li>
                    <li><a href="#">Gamepad</a></li>
                    <li><a href="#">VR</a></li>
                    <li><a href="#">Gaming Console</a></li>
                    <li><a href="#">Gaming Desk</a></li>
                    <li><a href="#">Games</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/television-shop" target="_blank">TV</a>
                <ul class="second-ul for-position">
                    <li><a href="#">All TV</a></li>
                    <li><a href="#">LED TV</a></li>
                    <li><a href="#">Smart TV</a></li>
                    <li><a href="#">ANdroid TV</a></li>
                    <li><a href="#">4K TV</a></li>
                    <li><a href="#">AKASH Digital TV</a></li>
                    <li><a href="#">TV Stand</a></li>
                    <li><a href="#">Show ALl TV</a></li>
                </ul>
            </li>
            <li class="item"><a class="item-ankor" href="https://www.startech.com.bd/air-conditioner" target="_blank">AC</a>
                <ul class="second-ul for-position">
                    <li><a href="#">GENERAL</a></li>
                    <li><a href="#">Midea</a></li>
                    <li><a href="#">Gree</a></li>
                    <li><a href="#">Elite</a></li>
                    <li><a href="#">Xiaomi</a></li>
                    <li><a href="#">Super General</a></li>
                    <li><a href="#">Show All AC</a></li>
                </ul>
            </li>
        </ul>
    </menu>

    <section class="section-one">
        <div class="side-one">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#"><img src="image/Carousel/carosel-image-1.png"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img src="image/Carousel/carosel-image-2.png"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img src="image/Carousel/carosel-image-3.png"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img src="image/Carousel/carosel-image-4.png"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="side-two">
            <div class="compare-box">
                <h5>Compare Products</h5>
                <p>Choose Two Products to Compare</p>
                <div class="d-flex justify-content-center">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search & Select Product">
                        <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search & Select Product">
                        <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                </div>
                <button>View Comparison</button>
            </div>

            <div class="image-box">
                <img src="./image/dhaka-express-delivery.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- this div css work in section-one part -->
    <div class="d-flex justify-content-center marquee-div-parent">
        <div class="marquee-div">
            <marquee behavior="" direction="">
                14th December Wednesday, our all branches are open except Uttara Syed Grand Center & Pragati Sharani Branch. Additionally, our online activities will remain open and operational.
            </marquee>
        </div>
    </div>

    <section class="section-two">
        <div class="text-div">  
            <h4>Featured Category</h4>
            <p>Get Your Desired Product from Featured Category!</p>
        </div>

        <div class="d-flex justify-content-center icon-box-parent">
            <div class="icon-box-all">
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-laptop"></i>
                        <p>All Laptop</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-battery-full"></i>
                        <p>Laptop Battery</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-calendar-minus"></i>
                        <p>Laptop Charger / Adapter</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-computer"></i>
                        <p>Desktop</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-display"></i>
                        <p>Monitor</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-microchip"></i>
                        <p>Processor</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-city"></i>
                        <p>Grapics Card</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-gopuram"></i>
                        <p>SSD</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-keyboard"></i>
                        <p>Keyboard</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-computer-mouse"></i>
                        <p>Mouse</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-headphones-simple"></i>
                        <p>Headphone</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-wifi"></i>
                        <p>Router</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-camera-retro"></i>
                        <p>Portable Wifi Camera</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-swatchbook"></i>
                        <p>Smart Watch</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-gamepad"></i>
                        <p>Gaming Console</p>
                    </div>
                </a>
                <a class="icon-box-ankor" href="#">
                    <div class="icon-box">
                        <i class="fa-solid fa-paint-roller"></i>
                        <p>Convert &Cable</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="section-three">
        <div class="text-div">
            <h4>Featured Products</h4>
            <p>Check & Get Your Desired Product!</p>
        </div>

        <div class="d-flex justify-content-center">
            <div class="all-cart-box">
                <div class="cart-box">
                    <div class="discount">
                        <span class="">Save:</span>
                        <span>200</span>
                        <span><i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                    </div>
                    <div class="img-div">
                        <a href="#"><img src="https://m.media-amazon.com/images/I/81yOuAUQAiL._AC_SL1500_.jpg" alt=""></a>
                    </div>
                    <div class="text">
                        <a href="#">Intel 10th Gen Core i5-10400 12.12 Deal</a>
                        <div class="price">
                            <span>4500</span>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>
                            <span class="del-span"><del>4700<i class="fa-solid fa-bangladeshi-taka-sign"></i></del></span>
                        </div>
                    </div>
                </div>
                <div class="cart-box">
                    <div class="discount">
                        <span class="">Save:</span>
                        <span>200</span>
                        <span><i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                    </div>
                    <div class="img-div">
                        <a href="#"><img src="image/monitor.jpg" alt=""></a>                        
                    </div>
                    <div class="text">
                        <a href="#">Intel 10th Gen Core i5-10400 12.12 Deal Desktop PC (Only for Online Order)</a>
                        <div class="price">
                            <span>4500</span>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>
                            <span class="del-span"><del>4700<i class="fa-solid fa-bangladeshi-taka-sign"></i></del></span>
                        </div>
                    </div>
                </div>
                <div class="cart-box">
                    <div class="discount">
                        <span class="">Save:</span>
                        <span>200</span>
                        <span><i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                    </div>
                    <div class="img-div">
                        <a href="#"><img src="https://images.officeworks.com.au/api/2/img/https://s3-ap-southeast-2.amazonaws.com/wc-prod-pim/JPEG_1000x1000/IN4794710_.jpg/resize?size=600&auth=MjA5OTcwODkwMg__" alt=""></a>                        
                    </div>
                    <div class="text">
                        <a href="#">Intel 10th Gen Core i5-10400 12.12 Deal Desktop PC (Only for Online Order)</a>
                        <div class="price">
                            <span>4500</span>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>
                            <span class="del-span"><del>4700<i class="fa-solid fa-bangladeshi-taka-sign"></i></del></span>
                        </div>
                    </div>
                </div>
                <div class="cart-box">
                    <div class="discount">
                        <span class="">Save:</span>
                        <span>200</span>
                        <span><i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                    </div>
                    <div class="img-div">
                        <a href="#"><img src="https://tiimg.tistatic.com/fp/1/007/413/black-color-hp-compaq-cpu-hardware-processor-black-colour-277.jpg" alt=""></a>                        
                    </div>
                    <div class="text">
                        <a href="#">Intel 10th Gen Core i5-10400 12.12 Deal Desktop PC (Only for Online Order)</a>
                        <div class="price">
                            <span>4500</span>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>
                            <span class="del-span"><del>4700<i class="fa-solid fa-bangladeshi-taka-sign"></i></del></span>
                        </div>
                    </div>
                </div>
                <div class="cart-box">
                    <div class="discount">
                        <span class="">Save:</span>
                        <span>200</span>
                        <span><i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                    </div>
                    <div class="img-div">
                        <a href="#"><img src="image/tablet.png" alt=""></a>                        
                    </div>
                    <div class="text">
                        <a href="#">Intel 10th Gen Core i5-10400 12.12 Deal Desktop PC (Only for Online Order)</a>
                        <div class="price">
                            <span>4500</span>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>
                            <span class="del-span"><del>4700<i class="fa-solid fa-bangladeshi-taka-sign"></i></del></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-four d-flex justify-content-center">
        <div class="text-all-box">
            <div class="text-box">
                <h4>Leading Computer, Laptop & Gaming PC Retail & Online Shop in Bangladesh</h4>
                <p>
                    Technology has become a part of our daily lives and for a huge portion of our life, we depend on tech products daily. There is hardly a home in Bangladesh without a tech product. This is where we come in. <a href="#">Star Tech & Engineering Ltd</a> started as a Tech Product Shop way back in March 2007. We focused on giving the customers the best service possible. This is why Star Tech is one of The most trusted names in the tech industry of Bangladesh today. After a long 15-year journey; Star Tech & Engineering Ltd. was certified with the renowned <a href="#">"ISO 9001:2015 certification"</a> as a recognition for the best Quality Control Management System. As an "ISO 9001:2015 certified" organization; Star Tech & Engineering Ltd. is now up to the international standards that specify a Quality Management System <a href="#">(QMS)</a>. This Certification denotes that this organization consistently maintains all sorts of regulatory requirements to provide products and services for meeting all sorts of customer requirements.
                </p>
            </div>
            <div class="text-box">
                <h5>Best Laptop Shop in Bangladesh</h5>
                <p>
                    Star Tech is the largest and most reliable Branded <a href="#">Laptop</a> Shop in BD. Whether you are a freelancer, office goer, or student - Star Tech Laptop Shop has the perfect device for you. Gamers love our collection of <a href="#">Gaming Laptops</a> because we always bring the latest configuration devices to Bangladesh. Your budget is our top concern. Get an Intel Laptop or AMD Laptop within your desired price tag from Star Tech. Also, buy genuine official Apple Macbook Air or <a href="#">Macbook</a> Pro laptop from our laptop shop. Star Tech sells the latest models of the most popular laptop computer brands such as Razer, HP, Dell, <a href="#">Apple</a> Macbook, Asus, Acer, Lenovo, Microsoft Surface, MSI, <a href="#">Gigabyte</a>, i-Life, Walton, Xiaomi MI, <a href="#">Huawei</a>, Chuwi, etc.
                </p>
            </div>
            <div class="text-box">
                <h5>Best Desktop PC Shop In Bangladesh</h5>
                <p>
                    <a href="#">Star Tech</a> has the most comprehensive array of Desktop PCs. We offer top-of-the-line Custom PC, <a href="#">Brand PC</a> , All-in-One PC, and Portable Mini PC at our stores spread all over Bangladesh. Get your new iMac Desktop or <a href="#">Apple Mac</a> Mini with an international warranty and servicing plan. To build a Desktop PC with the components of your choice, you can always depend on the experts of the Star Tech PC shop. Take your gaming or professional content creation to the next level with a large collection of high-end <a href="#">Gaming and Rendering PC</a> from Star Tech. You can choose and build a complete Personal computer with our PC Builder feature anytime, anywhere. Or, build a <a href="#">Desktop</a> PC to your taste right in front of you at the Star Tech PC Shop.
                </p>
            </div>
            <div class="text-box">
                <h5>Best Office Equipment Shop In Bangladesh</h5>
                <p>
                    Star Tech & Engineering Ltd. is Bangladesh's most trusted <a href="#">Office Equipments</a> Shop. For more than 15 years, we have been providing the best Office Solution. Take a quick drive to the nearest Star Tech retail center and furnish your home office, Start-up business desk, or corporate space with the best <a href="#">Office Equipment</a>. Find Laptops, Desktops, Antiviruses, CCTV & IP Cameras, Printers, Routers, Photocopiers, Attendance Machines, Scanners, Conference Systems, Server Equipment, etc for smooth office operation.
                </p>
            </div>
            <div class="text-box">
                <h5>Best Gadget Shop In Bangladesh</h5>
                <p>
                    We bring in the most sought <a href="#">gadgets</a> at Star Tech. Only genuine and leading brands of <a href="#">Smart Watch</a>, <a href="#">Earbuds</a>, <a href="#">TV</a>, Power Bank and Mobile Phone Accessories are available at our Gadget Shop. We are also concerned for creative professionals from whom we bring exciting gadgets like Drones, Studio Equipment, Gimbals & Stream Decks from DJI, Blackmagic, Corsair, Zhiyun, Gudsen, and Loupedeck. Ease up your chores with Daily Lifestyle gadgets from our gadget shop. Xiaomi, Razer, Fire-Boltt, UGREEN, <a href="#">OnePlus</a>, Apple, Baseus, Orico, Havit, Samsung, and HOCO are a few of the brands we cover.
                </p>
            </div>
            <div class="text-box">
                <h5>Best E-commerce Shop To Order Your Desired Product</h5>
                <p>
                    Star Tech believes the most in customer satisfaction. To serve our customers most efficiently, we launched our <a href="#">E-Commerce shop</a>. Since its inception, it has been regarded as the best E-Commerce store in Bangladesh. Our <a href="#">website</a> features a highly intelligent search engine for our valued customers to find their desired products easily. We have developed the most comprehensive PC Builder App, which is also integrated into our web store. With the PC Builder, you can build your Custom PC for gaming or productivity, save the build, and get an estimated budget, wattage, and performance report. Our E-Commerce Shop runs a variety of campaigns and exciting deals on multiple national & international occasions. To name a few of our most successful events are - Flash sale, Special offer, Thursday Thunder, Anniversary Special Offer, New Year Offer, 11.11, 12.12 Campaign, and many more. We also arrange special <a href="#">Gaming</a> Events and tournaments for Bangladeshi gamers with renowned gaming Brands like Razer and Asus ROG.
                </p>
            </div>
            <div class="text-box">
                <h5>Best Price, Product, After-sales Service & Fastest Delivery</h5>
                <p>
                    Star Tech & Engineering Ltd. has taken care of its customers since the beginning. Whether a customer is purchasing or inquiring, our customers get the highest priority in every instance. We deliver the best product for the best price with the most extended customer service in the nation. We <a href="#">offer</a> your desired product within the fastest timeframe. Covering all 64 districts of Bangladesh, our hubs are located at Dhaka, Gazipur, Chattogram, Khulna, Rangpur, and Gazipur. The plan to expand our operations in other cities is already in motion.
                </p>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="footer-all-item">
            <div class="contuct-info">
                <div class="support-div">
                    <h6>SUPPORT</h6>
                    <div class="box">
                        <a href="#">
                            <i class="fa-solid fa-phone"></i>
                            <div class="text-box">
                                <p>9AM-8PM</p>
                                <p class="bold">018XXXXXXXX</p>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="#">
                            <i class="fa-solid fa-location-dot"></i>
                            <div class="text-box">
                                <p>STORE LOCATOR</p>
                                <p class="bold">FIND OUR STORE</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="about ms-5">
                    <h6>ABOUT US</h6>
                    <li><a href="#">EMI TERMS</a></li>
                    <li><a href="#">PRIVACY POLICY</a></li>
                    <li><a href="#">STAR POINT POLICY</a></li>
                    <li><a href="#">BRANDS</a></li>
                </div>

                <div class="about df-marg">
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">TERMS AND CONDITION</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">ONLINE SERVICE SUFFORT</a></li>
                </div>

                <div class="about df-marg">
                    <li><a href="#">ONLINE DELIVERY</a></li>
                    <li><a href="#">REFUND AND RETURN POLICY</a></li>
                    <li><a href="#">CONTUCT US</a></li>
                    <li><a href="#">COMPLAIN / ADVICE</a></li>
                </div>

                <div class="location-text">
                    <h6>STAY CONNECTED</h6>
                    <p>
                        Star Tech & Engineering Ltd
                        Head Office: 28 Kazi Nazrul Islam Ave,Navana Zohura Square, Dhaka 1000
                    </p>
                    Email: <a href="#">info.webteam@startechbd.com</a>
                    <div class="icon-div">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="our-information">
                <p>© 2022 Star Universal Technology Corporation Ltd | All rights reserved</p>
                <p>Powered By: Universal Technology Corporation</p>
            </div>
        </div>
        
    </footer>


    <script src="startech.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>