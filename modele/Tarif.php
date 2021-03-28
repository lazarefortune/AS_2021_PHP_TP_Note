<?php

/**
 * Class Tarif
 */
class Tarif
{

  public static function getAllTarif(){
    $db = Connexion::get();
    $usagers = $db->query('SELECT type_prest, lib_categ, prix FROM tarif,prestation,categorie
      WHERE tarif.num_prest = prestation.num_prest AND tarif.num_categ = categorie.num_categ ORDER BY prix');
    return $usagers->fetchAll();
  }

}












?>
