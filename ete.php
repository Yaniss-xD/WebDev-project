<?php include 'top.php'; include 'donnees.php'; ?>
<main class="container">
<h1>Les recettes : Été</h1><div class="row"><div class="col-md-4"><img class="saison" src="images/LogoE.png" alt="Été"></div><section class="col-md-8"><h2>Les légumes de saison</h2><ul>
            <li>Tomates</li>
            <li>Courgettes</li>
            <li>Aubergines</li>
            <li>Poivrons</li>
            <li>Concombres</li>
            <li>Haricots verts</li>
        </ul></section></div><h2>À cuisiner</h2>
<?php $saison = 'ete'; include 'liste.php'; ?>
</main>
<?php include 'footer.php'; ?>