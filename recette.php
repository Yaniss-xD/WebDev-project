<?php
include 'donnees.php';
// Sans numéro dans l'adresse, on affiche la première recette.
$id = 0;
if (isset($_GET['id']) && is_string($_GET['id'])) {
    $id = $_GET['id'];
}
if (!isset($recettes[$id])) {
    include 'top.php';
    echo '<main class="container"><h1>Recette introuvable</h1><a href="recettes.php">Retour aux recettes</a></main>';
    include 'footer.php';
    exit;
}
$recette = $recettes[$id];
include 'top.php';
?>
<main class="container">
<h1><?php echo $recette['nom']; ?></h1>
<div class="row">
<div class="col-md-5">
<!-- Le premier élément du carousel reçoit la classe active. -->
<div id="photos" class="carousel slide">
<div class="carousel-inner">

    <div class="carousel-item ">
        <img class="photo" src="<?php printf("%s",$recette['photos'][0]); ?>" alt="Photo de la recette">
    </div>

</div>

</div>
</div>
<div class="col-md-7">
<section><h2>Ingrédients</h2><ul>
<?php foreach ($recette['ingredients'] as $ingredient) { ?><li><?php echo $ingredient; ?></li><?php } ?>
</ul></section>

<section><h2>Préparation</h2><ol>
<?php foreach ($recette['preparation'] as $etape) { ?><li><?php echo $etape; ?></li><?php } ?>
</ol></section>
</div>
</div>
<a href="recettes.php">← Toutes les recettes</a>
</main>
<?php include 'footer.php'; ?>
