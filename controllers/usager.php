<?php

// Controller Usager

// On récupère les usagers
 $usagers = Usager::getUsagers();
//On transmets les usagers à Smarty
 $smarty->assign('usagers', $usagers);
