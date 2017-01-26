<?php 
require_once('../core/init.php');
    $id = $_POST['id'];
    $id = (int)$id;
    //selectionner les infos de tableau produit de la base ecommerce
    $sql = "SELECT * FROM PRODUCTS WHERE id = '$id' ";
    $result = $db->prepare($sql);
    $result->execute();
    $t_product = $result->fetch();
    //selectionner id de  tableau de marque de la base ecommerce
    $sql = "SELECT brand FROM brand WHERE id = '$id' ";
    $brand_query = $db->prepare($sql);
    $brand_query->execute();
    $t_brand = $brand_query->fetch();
    //selectionner et dynamiser les donneés de size
    $sizeString = $t_product['sizes'];
    $size_array = explode(',' , $sizeString);
    
?>

<?php ob_start(); ?>
    <!-- Details Modal -->
    <div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title text-center"><?= $t_product['title']; ?></h4>
                </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="center-block">
                                        <img src="<?= $t_product['image']; ?>" alt="<?= $t_product['title']; ?>" class="details img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4>Détailles de produit</h4>
                                    <p><?= $t_product['description']; ?></p>
                                    <hr>
                                    <p>Prix: $<?= $t_product['price'];?></p>
                                    <p>Marque: <?= $t_brand['brand']; ?></p>

                                        <form action="add_cart.php" method="post">
                                            <div class="form-group">
                                                <div class="col-xs-3">
                                                    <label for="quantity">Quantity:</label>
                                                    <input type="text" class="form-control" id="quantity" name="quantity">
                                                </div><br><br>
                                                <div class="col-xs-9"></div>
                                                </div><br>
                                                <div class="form-group">
                                                <label for="size">Size:</label>
                                                <select name="size" id="size" class="form-control">
                                                    <option value=""></option>
                                                    <!-- Générer une liste déroulante dynamiquement tialle et nb disponible-->
                                                    <?php foreach($size_array as $string){
                                                        $string_array = explode(':' , $string);
                                                        $size = $string_array[0];
                                                        $quantity = $string_array[1];
                                                    echo '<option value="'.$size.'">'.$size.' ('.$quantity.' Available)</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <!-- -------------Form of Quantity------------------------ -->
                        <div class="modal-footer">
                            <button class="btn btn-default"  onclick="closeMoal()">Close</button>
                            <button class="btn btn-warning"  type="submit" ><span class="glyphicon glyphicon-shopping-cart"></span>Ajouter au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
<script>
    function closeMoal(){
        $('#details-modal').modal('hide');
        setTimeout(function(){
            $('#details-modal').remove();
            $('.modal-backdrop').remove();
        },500);
     
    }
</script>
<?php echo (ob_get_clean()); ?>