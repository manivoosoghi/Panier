<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 14:22:09
  from '/var/www/html/panier/engine/templates/front-office/index.master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb671812a8231_62305380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '062be0fc6f98ebc82acd23b16f29922b3ef09a43' => 
    array (
      0 => '/var/www/html/panier/engine/templates/front-office/index.master.tpl',
      1 => 1605792078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./panier.tpl' => 1,
  ),
),false)) {
function content_5fb671812a8231_62305380 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <a href="./?panier">Votre panier</a>
</header>

<main>

<?php if ($_smarty_tpl->tpl_vars['page']->value === '') {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produits']->value, 'produit');
$_smarty_tpl->tpl_vars['produit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
$_smarty_tpl->tpl_vars['produit']->do_else = false;
?>
        <button>Ajouter au panier: <?php echo $_smarty_tpl->tpl_vars['produit']->value['id'];?>
</button>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['page']->value === "panier") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:./panier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
</main><?php }
}
