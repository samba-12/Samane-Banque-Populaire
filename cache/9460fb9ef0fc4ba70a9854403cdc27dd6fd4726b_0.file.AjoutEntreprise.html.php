<?php
/* Smarty version 3.1.30, created on 2020-08-05 18:46:28
  from "/Applications/XAMPP/xamppfiles/htdocs/samanemvctest/src/view/Entreprise/AjoutEntreprise.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2ae264acbe79_08954450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9460fb9ef0fc4ba70a9854403cdc27dd6fd4726b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/samanemvctest/src/view/Entreprise/AjoutEntreprise.html',
      1 => 1596640347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2ae264acbe79_08954450 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style2.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
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
    <h2>ENTREPRISE</h2>
    <form method="POST"  action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Entreprise/AjoutEntreprise" class="form">
      <div class="formajout">
            <label for="nom_entreprise">Nom Entreprise* :</label><br><input name="nom_entreprise" id="nom_entreprise" type="text" required="required"/> 
            <span id="absence_nom_entreprise"></span><br>
            <label for="adresse">Adresse * :</label><br><input name="adresse" id="adresse" type="text"required="required"  />
            <span id="absence_adresse"></span><br>
            <label for="email">Email :</label><br><input name="email" id="email" type="email" /><br><br>
            <label for="tel">Telephone * :</label><br><input name="telephone" id="telephone" type="telephone" required="required"  /> 
            <span id="absence_tel"></span><br>
      </div>
      <div class="formajout2">
            <label for="salaire">NINEA * :</label><br><input name="ninea" id="ninea" type="number" required="required"/> 
            <br><br> 
            		<select id="compte" name="compte" required="required">
            		     <option>Choisissez un type de compte *</option>
            		     <option>Compte épargne simple et xeewel</option>
            		     <option>Compte courant</option>
            		     <option>Compte bloque</option>
            		</select >
                <span id="absence_list"></span>
                <br>
                <label for="numero">Numero compte* :</label><br><input name="numero" id="numero" type="number" required="required" /> 
      </div>
      <div class="col-container1">
                <div class="col"><input type="submit" value="Valider" id="envoyer"></div>
                <div class="col"><input type="submit" value="Annuler" ></div>
      </div>
    </form>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
../../public/js/script1.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
