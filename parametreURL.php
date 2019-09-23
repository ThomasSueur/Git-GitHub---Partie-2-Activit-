<html>
<head>
<title>phpinfo.php</title>
</head>
<body>
<?php

// vérifie que le paramètre year n'est pas vide
if(!Empty($_GET["year"]))
{
// récupère le paramètre year
$year = $_GET["year"];
// Attention les paramètres d'url sont passées sous forme de chaîne de caractères
echo "<pre>Débogage variable year : "; var_dump($year); echo "</pre>";
// vérifie que le paramètre year est valide
if(ctype_digit($year)) // cf. is_numeric()
{
echo "est-ce-que $year est bissextile ?<br /><br />";
// est-ce-que cette année est bissextile ?
// TODO
}
else echo "Paramètre year invalide !<br /><br />";
}
else echo "Paramètre year manquant !<br /><br />";
echo "Essayez avec ces paramètres :<br />";
echo "<a href=\"exercice-2-1-a.php?year=\">vide</a><br />";
echo "<a href=\"exercice-2-1-a.php?year=2000\">2000</a><br />";
echo "<a href=\"exercice-2-1-a.php?year=2007\">2007</a><br />";
echo "<a href=\"exercice-2-1-a.php?year=year\">invalide</a><br />";
 
echo "bonjour correcteur! <br />";

?>
</body>
</html> 
