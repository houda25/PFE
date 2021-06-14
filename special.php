<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Special</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php
    require('db.php');

    if (isset($_REQUEST['tomate'])) {

        $tomate = stripslashes($_REQUEST['tomate']);
        $tomate = mysqli_real_escape_string($con, $tomate);
        $creme    = stripslashes($_REQUEST['creme']);
        $creme    = mysqli_real_escape_string($con, $creme);
        $champ = stripslashes($_REQUEST['champ']);
        $champ = mysqli_real_escape_string($con, $champ);
        $ail = stripslashes($_REQUEST['ail']);
        $ail = mysqli_real_escape_string($con, $ail);
        $noires = stripslashes($_REQUEST['noires']);
        $noires = mysqli_real_escape_string($con, $noires);
        $vertes = stripslashes($_REQUEST['vertes']);
        $verts = mysqli_real_escape_string($con, $vertes);
        $huile = stripslashes($_REQUEST['huile']);
        $huile = mysqli_real_escape_string($con, $huile);
        $sel = stripslashes($_REQUEST['sel']);
        $sel = mysqli_real_escape_string($con, $sel);
        $fromages = stripslashes($_REQUEST['fromages']);
        $fromages = mysqli_real_escape_string($con, $fromages);
        $oeufs = stripslashes($_REQUEST['oeufs']);
        $oeufs = mysqli_real_escape_string($con, $oeufs);
        $query    = "INSERT into `special` (tomate, creme, champ,ail, noires, vertes,huile,sel, fromages, oeufs)
                             VALUES ('$tomate','$creme','$champ','$ail', '$noires','$vertes','$huile', '$sel','$fromages','$oeufs')";

        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Your order is under review.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>go to home</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Please enter all the ingrediants.</h3><br/>
                  <p class='link'>Click here to <a href='special.php'>try</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form"  method="post">
        <h1 class="login-title">TA PIZZA SPECIALE</h1>
        <input type="text" class="login-input" name="tomate" placeholder="Sauce tomate(g)"  />
        <input type="text" class="login-input" name="creme" placeholder="Crème fraiche épaisse(g)"  />
        <input type="text" class="login-input" name="champ" placeholder="Champignons(g)"  />
        <input type="text" class="login-input" name="ail" placeholder="Ail hachée(g)"  />
        <input type="text" class="login-input" name="noires" placeholder="Olives noires(g)"  />
        <input type="text" class="login-input" name="vertes" placeholder="Olives vertes(g)"  />
        <input type="text" class="login-input" name="huile" placeholder="Huile d'olive(g)"  />
        <input type="text" class="login-input" name="sel" placeholder="Sel,poivre(g)"  />
        <input type="text" class="login-input" name="fromage" placeholder="Fromage(g)"  />
        <input type="text" class="login-input" name="oeufs" placeholder="Oeufs(g)"  />
        <input type="submit" name="submit" value="ENVOYER RECETTE" class="login-button">

    
    </form>
<?php
    }
?>
</body>
</html>

<style>
    html{
    margin:0px;
	padding:0px;
	background-image:url(images/rotate.gif);
	background-size:cover;
			background-repeat:no-repeat;
			background-attachment:fixed;}      }
</style>