<?php
/* Smarty version 3.1.30, created on 2020-08-05 17:12:38
  from "/Applications/XAMPP/xamppfiles/htdocs/samanemvctest/src/view/welcome/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2acc66632a27_07003192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '524460eac95a41b39e0f517bbe4fa44a36a7ce0c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/samanemvctest/src/view/welcome/index.html',
      1 => 1596640336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2acc66632a27_07003192 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style2.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<!-- integration de javascript dans le moteur de rendu de vue Smarty -->
		
			<?php echo '<script'; ?>
 language=javascript>
			function load_design() {
			   document.getElementById("design_js").style.color = "#40007d";
			}

			<?php echo '</script'; ?>
>
		
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
		<div class="infosagent">
			<strong> Informations agent</strong> 
			<br><br>              
			 <strong>Prenom</strong>: Tidjane
			 <br><br>
			 Nom : THIAM
			 <br><br>
		   <strong> Profil</strong> : Responsable de compte
			 <br><br>
		   <strong>ID_agent</strong>: RC283674
			 <br><br>
			<strong>Agence </strong>: Petit Mbao
		 </div>
		 <div >
			 <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/Tidjane.png" class="imgagent">
		 </div>
		
	</body>
</html>
<?php }
}
