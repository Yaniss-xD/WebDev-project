<?php if(filter_input(INPUT_SERVER,'REQUEST_METHOD')!=='POST'){
    print "ERROR";
    exit();}
    $avis=filter_input(INPUT_POST,"message");
    if(! $avis){
        print "ERROR";
        exit;
    }
    ?>
<?php include 'top.php';?>
<h2>Merci pour votre avis :)</h2>


