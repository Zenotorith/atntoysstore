<?php
    require "header.php"
?>
    <main class="page product-page">
        <section class="clean-block clean-product dark">
            <div class="container">
                <div class="block-heading">
                    <h2>Product Detail</h2>
                </div>
                <div class="block-content">
                    <div class="product-info">
                        <div class="row">
                        <div class="col-md-6">
                            <?php
                        require_once 'connectDB.php';
                    $con = connectDB(); 
                    $id = $_GET['id'];
                    $query = "select * from products where pdID=$id";
                    $result = pg_query($con, $query);
                    $row = pg_fetch_assoc($result);
                    ?>

                        <img class="img-fluid" src="<?php echo $row['pdImage']; ?>">

                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <h3><?php echo $row['pdName']; ?></h3>
                                    <div class="price">
                                        <h3>$<?php echo $row['pdPrice']; ?></h3>
                                    </div><button class="btn btn-primary" type="button" style="background-color: rgb(45,45,45);"><i class="icon-basket"></i>Add to Cart</button>
                                    <div class="summary">
                                        <p>Place order this product in 2 steps:<br>-Step 1: press button 'Add to Cart' to place this product into your basket<br>-Step 2: if Step 1 not working, contract us at 'Contract Us' in navigation bar or through the hotline: 1800-xxxx</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div>
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" id="description-tab" href="#description">Description</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane active fade show description" role="tabpanel" id="description">
                                    <p><?php echo $row['pdDes']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
   <?php
    require "footer.php"
?>
</body>

</html>