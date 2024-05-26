<?php
/* Smarty version 3.1.30, created on 2024-05-26 19:04:39
  from "D:\Programs Science\xamp\htdocs\kredyt\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66536ba78c53c7_18292138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b410bc95a407d41dfbfa51f0ed4dc956deb6f49' => 
    array (
      0 => 'D:\\Programs Science\\xamp\\htdocs\\kredyt\\app\\views\\LoginView.tpl',
      1 => 1716743079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_66536ba78c53c7_18292138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109556785366536ba78c44b5_59694837', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_109556785366536ba78c44b5_59694837 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin" style="width: 300px;">
            <legend style="text-align: center; font-size: 24px; margin-bottom: 20px;">Logowanie do systemu</legend>
            <fieldset>
                <div class="pure-control-group">
                    <label for="id_login" style="margin-bottom: 10px;">Login:</label>
                    <input id="id_login" type="text" name="login" class="pure-input-1" />
                </div>
                <div class="pure-control-group">
                    <label for="id_pass" style="margin-bottom: 10px;">Hasło:</label>
                    <input id="id_pass" type="password" name="pass" class="pure-input-1" />
                </div>
                <div class="pure-controls" style="text-align: center;">
                    <button type="submit" class="pure-button pure-button-primary">Zaloguj</button>
                </div>
            </fieldset>
        </form>
        <div id="messages" style="text-align: center; margin-top: 20px;">
            <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
