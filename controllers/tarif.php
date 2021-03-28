<?php
// Controller tarif

  if (!empty($_GET['orderBy'])) {

    switch ($_GET['orderBy']) {
    case 'categorie':
        $orderBy = 'lib_categ';
        break;
    case 'prestation':
        $orderBy = 'type_prest';
        break;
    case 'prix':
        $orderBy = 'prix';
        break;
    default:
       $orderBy = 'prix';
     }
  }else{
    $orderBy = 'prix';
  }

  $tarifs = Tarif::getAllTarif($orderBy);
//On transmets les usagers à Smarty
  $smarty->assign('tarifs', $tarifs);
