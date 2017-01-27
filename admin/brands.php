<?php
require_once'../core/init.php';
include'includes/head.php';
include'includes/navigation.php';


$errors = array();
//Suprimer une marque
if(isset($_GET['delete']) && !empty($_GET['delete'])){
        $brand_id = (int) $_GET['delete'];
        $brand_id = valide_input($brand_id);

        //Suprimer de la base de donnée
        $requette = " DELETE FROM brand WHERE id = '$brand_id' ";
        $requette= $db->prepare($requette);
        $requette->execute();
        header('Location: brands.php');
    }

//gestion de form 

if(isset($_POST['add_submit_brand'])){
    //Verfifier le input d user
    $brand = valide_input($_POST['brand']);

    //verifier si le input est vide 
    if($_POST['brand'] == ''){
        $errors[] .= 'Entrer une marque SVP !';
    }
    //verifer si la marque exisit dans la base de données
    $requette = "SELECT * FROM brand WHERE brand = '$brand' ";
    $requette = $db->prepare($requette);
    $requette->execute();
    // Return the number of rows in result set
    $count_rows= $requette->rowCount();
    if($count_rows > 0){
        $errors[] .= '<p>La marque : </p><strong>'.$brand.'</strong>'.', exisiste déja. SVP Entrer une autre marque' ;
    }


    //Affichage des $errors
    if(!empty($errors)){
        echo display_errors($errors);
   
    }else{
        $brand =  valide_input($_POST['brand']);
        //ajouter la marque à la base de données par PDO objet
        $requette = ' INSERT INTO brand(brand) VALUES(:brand) ';
        $requette = $db->prepare($requette);
        $requette->bindValue(':brand', $brand);
        $requette->execute();
        header('Location: brands.php');
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
                <input type="submit" name="add_submit_brand"  value="add brand" class="btn btn-success">
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
    <?php
        //requette : get brands from database
        $sql = ("SELECT * FROM brand ORDER BY brand");
        $resultat = $db->prepare($sql);
        $resultat->execute();
     ?>
    <tbody>
        <tr>
            <?php for($i=0; $t_brand = $resultat->fetch(); $i++ ) :;?>
                <td><?= $t_brand['brand']?></td>
                <td><a href="brands.php?edit=<?= $t_brand['id']?>" class="bnt btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td><a href="brands.php?delete=<?= $t_brand['id'] ?>" onclick="return confirm('Est-ce-que tu es sure de suprimer cette marque ?')" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>
            <?php  endfor;?>
    </tbody>
</table>
<?php include'includes/footer.php';?>