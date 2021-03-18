<?php
    session_start();
    require "header.php"
  
?>

<body>
    <main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2>Shopping Cart</h2>
                </div>
                <div class="content">
                    <?php 
                        require_once 'connectDB.php'; 
                        $con = connectDB(); 
                        $id_next = $_SESSION['id'];
                        $query = "SELECT * FROM products WHERE \"pdID\"='$id_next'";
                        $result = pg_query($con, $query);
                        $row = pg_fetch_assoc($result);
                        
                    ?> 
                    <div class="row no-gutters">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="<?php echo $row['pdImage'] ?>"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#"><?php echo $row['pdName'] ?></a>
                                            <div class="product-specs">
                                                <div><span>Description:&nbsp;</span><span class="value"><?php echo $row['pdDes'] ?></span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity">
                                          <form method="post" action="shopping-cart.php">
                                             <label class="d-none d-md-block" for="quantity">Quantity</label>
                                             <input type="number" name="quantity" id="number" class="form-control quantity-input" value="1"><br>
                                             <button type="submit" name="add_item" class="text-info">Add item</button>
                                           </form>
                                        </div>         
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Summary</h3>
                                <?php
                                $item_quantity = $_POST['quantity'];
                                $total = $item_quantity * $row['pdPrice'];
                                $_SESSION["item_"] = $values["item_name"];
	                             $_SESSION["total"] = $total;
                                ?>
                                <h4><span class="text">Subtotal</span><span class="price"><?php echo $row['pdPrice'];?></span></h4>
                                <h4><span class="text">Discount</span><span class="price">$0</span></h4>
                                <h4><span class="text">Shipping</span><span class="price">$0</span></h4>
                                <h4><span class="text">Total</span><span class="price"><?php echo $total?></span></h4>
                                <button class="btn btn-primary btn-block btn-lg" type="button">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
    require "footer.php";
?>