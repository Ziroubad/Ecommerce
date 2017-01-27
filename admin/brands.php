<?php
require_once'../core/init.php';
include'includes/head.php';
include'includes/navigation.php';


//requette : get brands from database
$sql = ("SELECT * FROM brand ORDER BY brand");
$resultat = $db->prepare($sql);
$resultat->execute();

//gestion de form 
$errors = array();
if(isset($_POST['add_submit_brand'])){
    //verifier si la marque est vide 
    if($_POST['brand'] == ''){
        $errors[] = 'Entrer une marque SVP !';
    }
}
?>



<h2 class="text-center">Nous marques</h2>
<hr>
<!-- Barnd Form-->
    <div class="text-center">
        <form class="form-inline" action="brands.php" method="post">
            <div class="form-group" >
                <label for="brand">Ajouter une marque : </label>
                <input type="text" name="brand" id="brand" class="form-control" value="<?= (isset($_POST['brand']) ? $_POST['brand'] : ''); ?>">
                <input type="submit" name="add__submit_brand"  value="add brand" class="btn btn-success">
            </div>
        </form>
    </div>
    <hr>
    <!-- TABLEAU DES MARQUES BOUCLER SUR LA BASE DE DONNÉES, TABLE = BRAND -->
<table class="table table-bordered table-striped table-auto">
    <thead>
        <tr>
            <th>Marques du produit</th>
            <th>Modifier</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php for($i=0; $t_brand = $resultat->fetch(); $i++ ) :;?>
                <td><?= $t_brand['brand']?></td>
                <td><a href="brands.php?edit=1" class="bnt btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td><a href="brands.php?delete=1" class="bnt btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>
            <?php  endfor;?>
    </tbody>
</table>
<?php include'includes/footer.php';?>