<?php include 'top.php'; include 'donnees.php'; ?>
<main class="container">
<h1>Les recettes : Automne</h1><div class="row"><div class="col-md-4"><img class="saison" src="images/LogoA.png" alt="Automne"></div><section class="col-md-8"><h2>Les légumes de saison</h2><ul>
            <li>Potirons</li>
            <li>Courges</li>
            <li>Citrouilles</li>
            <li>Choux</li>
            <li>Poireaux</li>
            <li>Champignons</li>
        </ul></section></div><h2>À cuisiner</h2>
<?php $saison = 'automne'; include 'liste.php'; ?>
</main>
<?php include 'footer.php'; ?>