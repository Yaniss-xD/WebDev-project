<!-- $saison est choisi dans la page qui inclut ce fichier. -->
<?php
foreach ($recettes as $numero => $recette) {
    if ($saison == 'toutes' || $recette['saison'] == $saison) {
?>
<article class="recette row">
    <div class="col-md-4">
        <img class="photo" src="<?php echo $recette['photos']; ?>" alt="Photo de la recette">
    </div>
    <div class="col-md-8">
        <h2><?php echo $recette['nom']; ?></h2>
        <p><?php echo $recette['description']; ?></p>
        <a href="recette.php?id=<?php echo $numero; ?>">Voir la recette →</a>
    </div>
</article>
<?php
    }
}
?>