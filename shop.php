<?php

require "header.php";
require_once 'admin/connectDB.php';
$conn = connectDB(); 

?>

<body>
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark" style="background-color: rgb(255,255,255);">
            <div class="container">
                <div class="block-heading">
                    <h1>Shop</h1>
                    <p>All of our products are here!&nbsp;</p>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-none d-md-block">
                                <div class="filters">
                                <?php 
                                    $id = $_GET['id'];
                                    $sql = "select * from product where cateID=$id";
                                    $re = mysqli_query($conn, $sql); 
                                    $viewdetail ="shop-view-filter.php?id=".$r['cateID']; 
                                    $r = mysqli_fetch_array($re, MYSQLI_ASSOC);   
                                ?>
                                     <div class="filter-item">
                                        <h3>Living creature</h3>
                                        <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '1' ?>"><label class="form-check-label" for="formCheck-1">Fish</label></a></div>
                                        <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '2' ?>"><label class="form-check-label" for="formCheck-2">Shrimp</label></a></div>
                                        <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '3' ?>"><label class="form-check-label" for="formCheck-3">Snail</label></a></div>
                                        <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '4' ?>"><label class="form-check-label" for="formCheck-4">Aquicolous</label></a></div>
                                    </div>
                                    <div class="filter-item">
                                        <h3>Aqua-Environment</h3>
                                        <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '5' ?>"><label class="form-check-label" for="formCheck-5">Fertilizer</label></a></div>
                                        <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '6' ?>"><label class="form-check-label" for="formCheck-6">Soil</label></a></div>
                                        <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '7' ?>"><label class="form-check-label" for="formCheck-7">Microbiology</label></a></div>
                                    </div>
                                    <div class="filter-item">
                                        <h3>Other</h3>
                                        <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '8' ?>"><label class="form-check-label" for="formCheck-8">Fish tank</label></a></div>
                                        <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '9' ?>"><label class="form-check-label" for="formCheck-9">Aqua furnitures</label></a></div>
                                        <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '10' ?>"><label class="form-check-label" for="formCheck-10">Full set-up</label></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button">Filters<i class="icon-arrow-down filter-caret"></i></a>
                                <div class="collapse"
                                    id="filters">
                                    <div class="filters">
                                    <div class="filter-item">
                                        <h3>Living creature</h3>
                                            <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '1' ?>"><label class="form-check-label" for="formCheck-1">Fish</label></a></div>
                                            <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '2' ?>"><label class="form-check-label" for="formCheck-2">Shrimp</label></a></div>
                                            <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '3' ?>"><label class="form-check-label" for="formCheck-3">Snail</label></a></div>
                                            <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '4' ?>"><label class="form-check-label" for="formCheck-4">Aquicolous</label></a></div>
                                    </div>
                                    <div class="filter-item">
                                        <h3>Aqua-Environment</h3>
                                            <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '5' ?>"><label class="form-check-label" for="formCheck-5">Fertilizer</label></a></div>
                                            <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '6' ?>"><label class="form-check-label" for="formCheck-6">Soil</label></a></div>
                                            <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '7' ?>"><label class="form-check-label" for="formCheck-7">Microbiology</label></a></div>
                                    </div>
                                    <div class="filter-item">
                                        <h3>Other</h3>
                                            <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '8' ?>"><label class="form-check-label" for="formCheck-8">Fish tank</label></a></div>
                                            <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '9' ?>"><label class="form-check-label" for="formCheck-9">Aqua furnitures</label></a></div>
                                            <div class="form-check"><a href="<?php echo $viewdetail ?>" value="<?php echo $r['cateID'] = '10' ?>"><label class="form-check-label" for="formCheck-10">Full set-up</label></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-9">
                            <div class="products">
                                <div class="row no-gutters">
                                    <?php
                                        $query = "select * from product where IsshowPd ='1'";
                                        $result = mysqli_query($conn, $query);                                       
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                            $image_link = "productupload/".$row['Pdimage'];
                                            $moredetail ="product-page.php?id=".$row['PDID'];
                                            echo "<div class='col-12 col-md-6 col-lg-4'>";
                                            echo "<div class='clean-product-item'>";
                                            echo "<div class='image'><a href='$moredetail'><img class='img-fluid d-block mx-auto' src='$image_link' style='height: 146px;width: 220px;'></a></div>";
                                            echo "<div class='text-center product-name'><a href='$moredetail'>"; echo $row['PdName']; echo"</a></div>";
                                            echo "<div class='about'>";
                                            echo "<div class='rating'></div>";
                                            echo "<div class='price'>";
                                            echo "<h3>$"; echo $row['PdPrice']; echo "</h3>"; echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                        }
                                       
                                    ?>
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
   </body>
 </html>
