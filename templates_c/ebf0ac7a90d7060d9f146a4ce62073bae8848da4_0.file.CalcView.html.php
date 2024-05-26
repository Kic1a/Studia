<?php
/* Smarty version 3.1.30, created on 2024-05-26 17:35:03
  from "D:\Programs Science\xamp\htdocs\kredyt\app\views\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_665356a7c42a98_97609788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebf0ac7a90d7060d9f146a4ce62073bae8848da4' => 
    array (
      0 => 'D:\\Programs Science\\xamp\\htdocs\\kredyt\\app\\views\\CalcView.html',
      1 => 1716736188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665356a7c42a98_97609788 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <title>Kalkulator kredytowy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(document).ready(function(){
            $("form").on("submit", function(event){
                event.preventDefault(); // zapobiega przeładowaniu strony

                $.ajax({
                    type: "POST",
                    url: $(this).attr("action"),
                    data: $(this).serialize(),
                    success: function(response) {
                        $("#wynik").html(response);
                    },
                    error: function() {
                        $("#wynik").html("<p>Wystąpił błąd. Spróbuj ponownie.</p>");
                    }
                });
            });
        });
    <?php echo '</script'; ?>
>
</head>
<body class="is-preload">
    <section id="header">
        <header class="major">
            <h1>Kalkulator kredytowy</h1>
            <p>Oblicz swoją miesięczną ratę!</p>
        </header>
    </section>
    <section id="footer">
        <div class="container">
            <header class="major">
                <h2>Oblicz miesięczną ratę</h2>
            </header>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
                <div class="row gtr-uniform">
                    <div class="col-12 col-12-xsmall"><input type="text" name="x" id="id_x" placeholder="Podaj kwotę kredytu" /></div>
                    <div class="col-12 col-12-xsmall"><input type="text" name="y" id="id_y" placeholder="Podaj oprocentowanie" /></div>
                    <div class="col-12 col-12-xsmall"><input type="text" name="z" id="id_z" placeholder="Podaj okres spłaty w latach" /></div>
                    <div class="col-12">
                        <ul class="actions special">
                            <li><input type="submit" value="Oblicz" class="primary" /></li>
                        </ul>
                    </div>
                </div>
            </form>  
            <div id="wynik" class="col-12">
                <?php if (isset($_smarty_tpl->tpl_vars['result']->value->result)) {?>
                    <h3>Twoja miesięczna rata wynosi: <?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>
 zł</h3>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
                    <ol>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ol>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
                    <ol>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ol>
                <?php }?>
            </div>
        </div>
    </section>
</body>
</html>
<?php }
}
