<?php include 'top.php'; include 'donnees.php'; ?>
<main class="container">
<h1>Les recettes : Hiver</h1><div class="row"><div class="col-md-4"><img class="saison" src="images/LogoH.png" alt="Hiver"></div><section class="col-md-8"><h2>Les légumes de saison</h2><ul>
            <li>Choux de Bruxelles</li>
            <li>Endives</li>
            <li>Poireaux</li>
            <li>Navets</li>
            <li>Céleri-rave</li>
            <li>Topinambours</li>
        </ul></section></div><h2>À cuisiner</h2>
<?php $saison = 'hiver'; include 'liste.php'; ?>
</main>
<?php include 'footer.php'; ?>