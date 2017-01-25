<?php
require_once('core/init.php');
include'includes/nav.php';
include 'includes/headerfull.php';
include'includes/leftbar.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Badreddine Boutique</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
                <!-- main side bar -->
                <div class="col-md-8">Main
                    <h2 class="text-center">Caractéristiques de produits</h2>
                    <!-- Product 1 -->
                    <div class="col-md-3">
                        <h4>Levis Jeans</h4>
                        <img src="images/products/men4.png" alt="Levis Jean" class="img-thumb"/>
                        <p class="list-price text-danger">Liste de prix: <s>$59.99</s></p>
                        <p class="price">Notre Prix: $39.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>
                    <!-- Product 2 -->
                    <div class="col-md-3">
                        <h4>Shirt Hollister</h4>
                        <img src="images/products/men1.png" alt="Levis Jean" class="img-thumb"/>
                        <p class="list-price text-danger">Liste de prix: <s>$25.99</s></p>
                        <p class="price">Notre Prix: $19.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>
                    <!-- Product 3 -->
                    <div class="col-md-3">
                        <h4>Chaussures Fancy</h4>
                        <img src="images/products/women6.png" alt="Levis Jean" class="img-thumb"/>
                        <p class="list-price text-danger">Liste de prix: <s>$59.99</s></p>
                        <p class="price">Notre Prix: $19.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>
                    <!-- Product 4 -->
                    <div class="col-md-3">
                        <h4>Hoodie Garcon</h4>
                        <img src="images/products/boys1.png" alt="Levis Jean" class="img-thumb"/>
                        <p class="list-price text-danger">Liste de prix: <s>$24.99</s></p>
                        <p class="price">Notre Prix: $18.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>
                    <!-- Product 5 -->
                    <div class="col-md-3">
                        <h4>Robe Fille</h4>
                        <img src="images/products/girls3.png" alt="Levis Jean" class="img-thumb"/>
                        <p class="list-price text-danger">Liste de prix: <s>$59.99</s></p>
                        <p class="price">Notre Prix: $19.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>
                    <!-- Product 6 -->
                    <div class="col-md-3">
                        <h4>Levis Jeans</h4>
                        <img src="images/products/women3.png" alt="Levis Jean" class="img-thumb"/>
                        <p class="list-price text-danger">Liste de prix: <s>$59.99</s></p>
                        <p class="price">Notre Prix: $19.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>
                    <!-- Product 7 -->
                    <div class="col-md-3">
                        <h4>Jube</h4>
                        <img src="images/products/women7.png" alt="Levis Jean" class="img-thumb"/>
                        <p class="list-price text-danger">Liste de prix: <s>$59.99</s></p>
                        <p class="price">Notre Prix: $19.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>
                    <!-- Product 8 -->
                    <div class="col-md-3">
                        <h4>Sac</h4>
                        <img src="images/products/women5.png" alt="Levis Jean" class="img-thumb"/>
                        <p class="list-price text-danger">Liste de prix: <s>$79.99</s></p>
                        <p class="price">Notre Prix: $49.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>
                </div>
                    <!-- Details Modal -->
    <div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title text-center">Levis Jeans</h4>
                </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="center-block">
                                        <img src="images/products/men4.png" alt="Levis Jean" class="details img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4>Détailles</h4>
                                    <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.</p>
                                    <hr>
                                    <p>Prix: $34.99</p>
                                    <p>Marque: Levis</p>
                    <!-- -------------Form of Quantity------------------------ -->
                                    <div class="modal-footer">
                                        <button class="btn btn-default"  data-dismiss="close">Close</button>
                                        <button class="btn btn-warning"  type="submit" ><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
                                        <form action="add_cart.php" method="post">
                                            <div class="form-group">
                                                <div class="col-xs-3">
                                                    <label for="quantity">Quantity:</label>
                                                    <input type="text" class="form-control" id="quantity" name="quantity">
                                                </div><div class="col-xs-9"></div>
                                                
                                                <p>Available: 3</p>
                                                </div><br>
                                                <div class="form-group">
                                                <label for="size">Size:</label>
                                                <select name="size" id="size" class="form-control">
                                                    <option value=""></option>
                                                    <option value="28">28</option>
                                                    <option value="32">32</option>
                                                    <option value="36">36</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <footer class="text-center" id="footer">
        &copy; Copyright 2013-2015 Badreddine Boutique
    </footer>


    
    <!-- --------------------------------------------Code javascript---------------------------------------------------------------- -->
    <script>
        jQuery(window).scroll(function(){
            var vscroll = jQuery(this).scrollTop();
            jQuery('#logotext').css({
                "transform" : "translate(0px, "+vscroll/2+"px)"
            });

            var vscroll = jQuery(this).scrollTop();
            jQuery('#back-flower').css({
                "transform" : "translate("+vscroll/5+"px, -"+vscroll/12+"px)"
            });

            var vscroll = jQuery(this).scrollTop();
            jQuery('#fore-flower').css({
                "transform" : "translate(0px, -"+vscroll/2+"px)"
            });      
        });
    </script>
    </body>
</html>