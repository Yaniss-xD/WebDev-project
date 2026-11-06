<?php include 'top.php'; ?>
<main class="container">
<h1>À propos</h1>
<h2>Notre site</h2><p>À compléter : présentez votre projet autour des légumes.</p>
<h2>Notre équipe</h2><ul><li>WALTER-SAUTON Gwelta</li><li>FERAGA Mohamed Anis</li></ul>

<section class="avis">
    <h2>Améliorations possibles</h2>

    <form action="avis.php" method="post">
        <label for="message">Votre commentaire :</label>

        <textarea id="message" name="message" rows="5" placeholder="Écrivez votre avis ici..." required></textarea>

        <button type="submit">Envoyer mon avis</button>
    </form>
</section>
</main><?php include 'footer.php'; ?>