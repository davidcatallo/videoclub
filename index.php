<?php

foreach( glob('config/*.php') as $config ) { require_once $config; }
foreach( glob('classes/*.php') as $class ) { require_once $class; }



$cat = new Category("Comédie", "Qui fait rire");



$cat2 = new Category('Horror', 'Films qui font peur');


$cat3 = new Category('Action', 'Films qui font de l\'action');
$cat3->save();

function destroy_cat($cat) 
{
    unset($cat);
}

destroy_cat($cat2);

var_dump($cat2);