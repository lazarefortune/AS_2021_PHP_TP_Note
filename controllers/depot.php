<?php


// On récupère les usagers
 $utilisateurs = Usager::getUsagers();
//On transmets les usagers à Smarty
  // var_dump($utilisateurs);
  // die;
 $smarty->assign('utilisateurs', $utilisateurs);
