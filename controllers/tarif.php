<?php
// Controller tarif


 $tarifs = Tarif::getAllTarif();
//On transmets les usagers à Smarty
 $smarty->assign('tarifs', $tarifs);
