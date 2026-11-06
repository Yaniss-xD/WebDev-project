<?php include 'top.php'; include 'donnees.php'; ?>
<main class="container">
<h1>Les recettes : Printemps</h1><div class="row"><div class="col-md-4"><img class="saison" src="images/LogoP.png" alt="Printemps"></div><section class="col-md-8"><h2>Les légumes de saison</h2><ul>
            <li>Asperges</li>
            <li>Petits pois</li>
            <li>Épinards</li>
            <li>Radis</li>
            <li>Artichaut</li>
        </ul></section></div><h2>À cuisiner</h2>
<?php $saison = 'printemps'; include 'liste.php'; ?>
</main>
<?php include 'footer.php'; ?>