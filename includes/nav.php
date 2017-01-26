 <?php
 $sql = "SELECT * FROM categories WHERE parent = 0";
 $pquery = $db->prepare($sql);
 $pquery->execute();
 ?>
    <!-- Top Nav Bar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand">Vente du Garage</a>
                <ul class="nav navbar-nav">
                    <!-- Boucle sur les categorie par Sexe-->
                    <?php for($i=0; $parent = $pquery->fetch(); $i++) : ?>
                        <?php 
                            $parent_id = $parent['id'] ;
                            $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id' ORDER BY category ASC" ;
                            $cquery = $db->prepare($sql2);
                            $cquery->execute();
                        ?>
                        <!-- Menu Items -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $parent['category']; ?><span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <!-- Boucle sur les categorie par produit-->
                                    <?php for($i=0; $categorie = $cquery->fetch(); $i++) : ?>
                                        <li><a href="#"><?= $categorie['category']; ?></a></li>
                                    <?php endfor;?>
                                </ul>                   
                        </li>
                    <?php endfor;?>
                </ul>
            </div>
        </nav>



