<?php
/* Smarty version 3.1.39, created on 2021-03-26 16:00:44
  from 'C:\wamp64\www\mvc\tpl\pages\depot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605e052ca2d776_59368575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a1e7ed1e8c6cf3f45243e62aec8d5ef5ad651d5' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc\\tpl\\pages\\depot.tpl',
      1 => 1616774443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605e052ca2d776_59368575 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="row">
    <div class="col-md-12">
      <h5>Ajout dun depot </h5>


      <form method="post" name="action">

        <div class="mb-3">
          <label for="numCarte">Utilisateur</label>
          <select class="form-select form-select" name="numCarte" id="numCarte">
            <option selected>Sélectionner un utilisateur ...</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['utilisateurs']->value, 'utilisateur');
$_smarty_tpl->tpl_vars['utilisateur']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['utilisateur']->value) {
$_smarty_tpl->tpl_vars['utilisateur']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['utilisateur']->value['num_carte'];?>
"><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value['nom'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>

        <div class="mb-3">
          <label for="mtCaution" class="form-label">Montant de la caution</label>
          <input type="number" class="form-control" name="mtCaution" id="mtCaution">
        </div>

        <button type="submit" class="btn btn-success" name="action">Ajouter </button>
      </form>
    </div>
  </div>
</div>
<?php }
}
