<meta charset="UTF-8">

<style>
*{
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
</style>

<h1>Exercice Foot</h1>

<p>Soit une application qui gère des équipes de football. Une équipe possède un nom (Paris Saint-Germain, Bayern Munich, Real Madrid, ...) et un ensemble de joueurs identifié par un prénom, un nom et une date de naissance. Chaque équipe appartient à un pays (France, Espagne, Allemagne, ...) et chaque joueur a une nationalité (France, Espagne, Allemagne, ...). Un joueur peut jouer dans une ou plusieurs équipes dans sa carrière (avec une année de début de saison).</p>

<h2>Résultat</h2>

<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name.'.php';
});

$france=new Pays("France");
$espagne=new Pays("Espagne");
$angleterre=new Pays("Angleterre");
$italie=new Pays("Italie");
$argentine=new Pays("Argentine");
$bresil=new Pays("Brésil");
$portugal=new Pays("Portugal");

$psg=new Equipe("PSG", $france, 1970);
$racingStras=new Equipe("Racing Club Strasbourg", $france, 1906);
$fcBarcelone=new Equipe("FC Barcelone", $espagne, 1899);
$realMadrid=new Equipe("Real Madrid", $espagne, 1902);
$manchesterU=new Equipe("Manchester United", $angleterre, 1878);
$juventus=new Equipe("Juventus", $italie, 1897);

$killian=new Joueur("MBAPPE", "Killian", "1998-12-20", $france);
$lionel=new Joueur("MESSI", "Lionel", "1987-06-24", $argentine);
$neymar=new Joueur("JUNIOR", "Neymar", "1992-02-05", $bresil);
$colin=new Joueur("DAGBA", "Colin", "1998-09-09", $france);
$cristiano=new Joueur("RONALDO", "Cristiano", "1985-02-05", $portugal);

$saison2017KM=new Saison ($killian, $psg, 2017);
$saison2004LM=new Saison($lionel, $fcBarcelone, 2004);
$saison2021LM=new Saison($lionel, $psg, 2021);
$saison2013NJ=new Saison($neymar, $fcBarcelone, 2013);
$saison2017NJ=new Saison($neymar, $psg, 2017);
$saison2022CD=new Saison($colin, $racingStras, 2022);
$saison2009CR=new Saison($cristiano, $realMadrid, 2009);
$saison2018CR=new Saison($cristiano, $juventus, 2018);
$saison2021CR=new Saison($cristiano, $manchesterU, 2021); 

?>

<section style='display:flex; gap:10px; justify-content: center; height:300px'>
<?php

$france->infosPays();
$espagne->infosPays();
$angleterre->infosPays();
$italie->infosPays();

?>
</section><br><br>

<section style='display:flex; flex-wrap: wrap; gap:11px; justify-content: center; height:600px'>
<?php

$psg->infosEquipe();
$racingStras->infosEquipe();
$fcBarcelone->infosEquipe();
$realMadrid->infosEquipe();
$manchesterU->infosEquipe();
$juventus->infosEquipe();

?>
</section><br><br>

<section style='display:flex; flex-wrap: wrap; gap:11px; justify-content: center; height:600px'>
<?php

$killian->infosJoueur();
$lionel->infosJoueur();
$neymar->infosJoueur();
$colin->infosJoueur();
$cristiano->infosJoueur();

?>
</section><br><br>
