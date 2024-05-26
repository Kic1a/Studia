{extends file="main.tpl"}

{block name=content}
<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div>
        <form action="{$conf->action_url}login" method="post" class="pure-form pure-form-aligned bottom-margin" style="width: 300px;">
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
            {include file='messages.tpl'}
        </div>
    </div>
</div>
{/block}
