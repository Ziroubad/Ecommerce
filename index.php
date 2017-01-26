<?php
require_once('core/init.php');
include'includes/head.php';
include'includes/nav.php';
include 'includes/headerfull.php';
include'includes/leftbar.php';

$sql = "SELECT *FROM products WHERE featured=1";
$featured= $db->prepare($sql);
$featured->execute();
?>

                <!-- main side bar -->
                <div class="col-md-8">Main
                    <div class="row">
                        <h2 class="text-center">Caractéristiques de produits</h2>
                        <?php for($i=0; $product = $featured->fetch(); $i++) : ?>
                        <!-- Product 1 -->
                        <div class="col-md-3 text-center">
                            <h4><?= $product['title']; ?></h4>
                            <img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" class="img-thumb"/>
                            <p class="list price text-danger">Liste de prix: <s><?= $product['list_price']; ?></s></p>
                            <p class="price">Notre Prix: $<?= $product['price']; ?></p>
                            <button type="button" class="btn btn-sm btn-success" onclick="detailsModal(<?= $product['id']; ?>)">Details</button>
                        </div>
                        <?php endfor;?>
                    </div>
                </div>

<?php
include'includes/rightbar.php';
include'includes/footer.php';
?>
