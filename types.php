<?php
// Chaîne de caractères
$formation = "Formation DWWM Toulon";

// Entier
$nbApprenants = 20;

// Décimal
$tauxPresence = 98.5;

// Booléen
$pauseCafe = false;

echo $formation;
echo "<br>Nombre d'apprenants : $nbApprenants";
echo "<br>Taux de présence : $tauxPresence%";
echo "<br>Pause café en cours ? $pauseCafe";
?>

<?php
// Affichage des types de variables
echo "<br>DWWM - TOULON<br>";
echo "Ville: Toulon<br>";
?>

<?php
// 3 String + Integer Crée une variable $apprenants = 20; et affiche : Apprenants inscrits : 20

$apprenants = 20;
echo "Apprenants inscrits : $apprenants<br>";

// 4 Float Crée une variable $taux = 95.5; et affiche : Taux de réussite : 95.5%

$taux = 95.5;
echo "Taux de réussite : $taux%<br>";

// 5 Boolean Crée $ouvert = true; et affiche : Inscriptions ouvertes : oui si vrai, sinon non.

$ouvert = true;
if ($ouvert) {
    echo "Inscriptions ouvertes : oui<br>";
} else {
    echo "Inscriptions ouvertes : non<br>";
}   

// 6 Concaténation Crée deux variables $prenom et $nom, affiche : Bonjour {prenom} {nom}

$prenom = "Flavie";
$nom = "Michel";
echo "Bonjour $prenom $nom<br>";

// 7 Somme simple Crée $a = 7; $b = 5; et affiche : La somme de 7 et 5 est : 12

$a = 7;
$b = 5;
$somme = $a + $b;
echo "La somme de $a et $b est : $somme<br>";

// 8 Soustraction Crée $x = 12; $y = 4; et affiche : Résultat : 8

$x = 12;
$y = 4;
$diff = $x - $y;
echo "La différence est : $diff<br>";

// 9 Division entière Crée $n = 25; $d = 4; et affiche le quotient avec intdiv() et le reste avec %.
$n = 25;
$d = 4;
$quotient = intdiv($n, $d);
$reste = $n % $d;
echo "Le quotient est : $quotient<br>";
echo "Le reste est : $reste%<br>";

// 10 Moyenne de notes Crée trois variables de type int pour les notes, calcule la moyenne et affiche : Moyenne : 16
$note1 = 15;
$note2 = 16;
$note3 = 17;
$moyenne = ($note1 + $note2 + $note3) / 3;
echo "Moyenne : $moyenne<br>";

// 11 Texte avec guillemets Affiche avec echo : Aujourd"hui, tu codes en "PHP" à DWWM – TOULON.
echo "Aujourd'hui, tu codes en \"PHP\" à DWWM – TOULON.";

// 12 Variable float formatée Crée $prix = 19.99; et affiche : Prix : 19.99 €
$prix = 19.99;
echo "<br>Prix : " . number_format($prix, 2) . " €<br>";

// 13 Page d’accueil Avec echo, affiche en HTML un <h1> : Bienvenue et un <p> : Formation DWWM – TOULON.
echo "<h1>Bienvenue</h1>";
echo "<p>Formation DWWM – TOULON.</p>";

// 14 Année courante Affiche avec echo : © 2025 Formation DWWM – TOULON (utilise date("Y")).
echo "<p>© " . date("Y") . " Formation DWWM – TOULON.</p>";

// Fiche apprenant Crée plusieurs variables (string, int, float, bool) et affiche une petite fiche : prénom, âge, moyenne, inscription.
$prenom = "Flavie";
$age = 33;
$moyenne = 16.5;
$inscription = true;

echo "<h2>Fiche apprenant</h2>";
echo "<p>Prénom : $prenom</p>";
echo "<p>Âge : $age ans</p>";
echo "<p>Moyenne : $moyenne</p>";
echo "<p>Inscription : " . ($inscription ? "Oui" : "Non") . "</p>";
