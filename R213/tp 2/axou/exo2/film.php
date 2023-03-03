<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>R213</title>
</head>
<body> 
  <p>
    <?php
 
$films = array(
  'incendies' => array('titre' => 'Incendies', 'annee' => 2010, 'synopsis' => "Le film évoque les jumeaux Jeanne et Simon qui, à la suite du décès de leur mère Nawal Marwan, se voient remettre deux lettres par le notaire Jean Lebel. L'une qu'ils doivent donner à leur père qu'ils n'ont jamais connu et qu'ils croyaient mort, et l'autre à leur frère dont ils ignoraient l'existence. Commence alors pour les jumeaux une longue quête vers leurs origines, et le dévoilement de la vie secrète de leur mère."),
  'prisoners' => array('titre' => 'Prisoners', 'annee' => 2013, 'synopsis' => "Dans la nord-est de la Pennsylvanie , Anna Dover et Joy Birch, deux petites filles de six ans, disparaissent. L'inspecteur Loki est chargé de l'enquête. De son propre côté, Keller Dover, le père dévasté d'Anna, qui est aveuglé par sa douleur, se lance alors dans une course contre la montre pour retrouver les fillettes disparues."),
  'enemy' => array('titre' => 'Enemy', 'annee' => 2013, 'synopsis' => "Adam enseigne à l'université et mène une vie terne qui oscille entre ses cours à l'université et sa petite amie. Un jour, il découvre son sosie parfait en regardant un film que lui conseille un collègue de l'université. Perturbé, il enquête alors pour connaître l'identité de ce mystérieux double. Il parvient très vite à entrer en contact avec lui..."),
  'sicario' => array('titre' => 'Sicario', 'annee' => 2015, 'synopsis' => "Kate Macer est une jeune agent du FBI idéaliste et volontaire. Divorcée et sans aucune vie de famille, elle ne vit que pour son métier. Membre de l'unité HRT opérant dans la région de Phoenix dans le Sud des États-Unis, elle est confrontée chaque jour à la violence des trafiquants de drogues qui ont transformé la région frontalière avec le Mexique en zone de non-droit."),
  'premier-contact' => array('titre' => 'Premier Contact', 'annee' => 2016, 'synopsis' => "Le film évoque l'apparition inattendue de douze mystérieux vaisseaux extraterrestres à différents endroits du monde, stationnés à quelques mètres au-dessus du sol ou de l'océan. Ils sont surnommés « coques » à cause de leur forme singulière, oblongue et lisse. Louise Banks, experte en linguistique comparée, est recrutée par l'armée américaine pour établir le contact avec les extraterrestres et connaître leurs intentions. Elle a pour mission de déchiffrer leur langue, que ces entités, ressemblant à des céphalopodes, écrivent à l'aide d'une encre qu'ils propulsent sur une paroi transparente."),
  'blade-runner-2049' => array('titre' => 'Blade Runner 2049', 'annee' => 2017, 'synopsis' => "En 2049, des humanoïdes issus du génie biologique, appelés réplicants, ont été intégrés dans la société pour assurer la survie de l'humanité. K, l'un des plus récents modèles conçus pour obéir, travaille comme blade runner au LAPD. Son travail consiste surtout à pourchasser et éliminer les anciens modèles délinquants. Il mène une vie monotone où son seul plaisir est la compagnie de sa « petite amie » holographique, Joi."),
  'dune-premiere-partie' => array('titre' => 'Dune : Première partie', 'annee' => 2021, 'synopsis' => "Dans un futur lointain de l'humanité, le duc Leto Atréides reçoit de l’empereur Shaddam IV le fief de la très profitable et très dangereuse planète désertique Arrakis. Également connue sous le nom de « Dune », cette planète est la seule source de la substance la plus précieuse de l'Imperium, « l’Épice », drogue qui prolonge la vie humaine, immunise contre les poisons et procure des facultés mentales surhumaines. L’Épice rend notamment possible la navigation interstellaire, base de toute l'économie impériale.")
)
?>
<?php
echo $films[$_GET['titre']]['titre'] . ' ('. $films[$_GET['titre']]['annee']. ')'; 
  ?> 
<br>
<?php
echo $films[$_GET['titre']]['synopsis']; 
  ?> 
  </p>
 </body>
</html>