<?php
/* Smarty version 3.1.30, created on 2020-08-05 17:50:37
  from "/Applications/XAMPP/xamppfiles/htdocs/samanemvctest/src/view/Entreprise/Liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2ad54da8c845_52498383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b629905cc39cb36a36d803e09a66f9d225cc1b7' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/samanemvctest/src/view/Entreprise/Liste.html',
      1 => 1596640378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2ad54da8c845_52498383 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style2.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
</head>
<body>
  <div><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logoajout.png" class="logoajout"></div>
           <ul class="menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Entreprise/Liste"> Liste clients</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Entreprise/AjoutEntreprise">Ajouter clients </a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Virement/virement">Virement</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Assistance/assistance">Assistance </a></li>
              </ul>
              <h2 class="titleliste" style="margin-left: 550px;"> Liste des entreprises</h2>
              <table class="table table-striped">
                  <tr>
                        <th> Id</th>
                        <th> Nom entreprise</th>
                        <th> Adresse</th>
                        <th> Email</th>
                        <th> Tel</th>
                        <th> Ninea</th>
                        <th> compte</th>
                        <th> Numéro</th>
                </tr>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeEntreprise']->value, 'Entreprise');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Entreprise']->value) {
?>
                <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['Entreprise']->value->getId();?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['Entreprise']->value->getNom_entreprise();?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['Entreprise']->value->getAdresse();?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['Entreprise']->value->getEmail();?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['Entreprise']->value->getTelephone();?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['Entreprise']->value->getNinea();?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['Entreprise']->value->getcompte();?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['Entreprise']->value->getNumero();?>
</td>
                        <td><a href="#">Editer</a></td>
                </tr>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </table>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
../../public/js/script1.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
