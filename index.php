<?php

foreach( glob('config/*.php') as $config ) { require_once $config; }
foreach( glob('classes/*.php') as $class ) { require_once $class; }


$cat = new Category("Humour", "Des films drôles");
// $cat->setTitle('Nouveau titre 2');
// $cat->save();
// $cat->delete();

$categorie = Category::findOne(25);
var_dump($categorie);


// var_dump($cat);

// $cat->delete();

// $cat->getList();

//$list = Category::findAll();

// $categorie = Category::find([
//     ['name', 'like', 'humour'],
//     ['description', '=', 'rire'],
//     ['orderBy', 'id', 'desc']
// ]);