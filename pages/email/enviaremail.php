<?php

$GLOBALS["zdlsmrxkgtdb"] = "empresa";
$GLOBALS["jwrejmrtm"] = "conta";
$GLOBALS["ayjusknlyhh"] = "smtp";
$GLOBALS["kbnpgwdgln"] = "buscasmtp";
$GLOBALS["wwlllwhdbp"] = "usuario";
$GLOBALS["aqypfump"] = "buscasmtp";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/enviaremail.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$GLOBALS["nlghnjnixmh"] = "buscasmtp";
protegePagina("user");
if (${$GLOBALS["wwlllwhdbp"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
${$GLOBALS["nlghnjnixmh"]} = "SELECT * FROM smtp_usuarios WHERE usuario_id='" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["aqypfump"]} = $conn->prepare(${$GLOBALS["kbnpgwdgln"]});
$buscasmtp->execute();
${$GLOBALS["ayjusknlyhh"]} = $buscasmtp->fetch();
${$GLOBALS["jwrejmrtm"]} = $buscasmtp->rowCount();
if (${$GLOBALS["ayjusknlyhh"]}["empresa"] == "") {
    ${$GLOBALS["zdlsmrxkgtdb"]} = "Sem Nome";
} else {
    ${$GLOBALS["zdlsmrxkgtdb"]} = ${$GLOBALS["ayjusknlyhh"]}["empresa"];
}
echo "<script language=\"JavaScript\">\n    <!--\n    function desabilitar() {\n        with(document.form) {\n            qtd_ssh.disabled = true;\n        }\n    }\n\n    function habilitar() {\n        with(document.form) {\n\n            qtd_ssh.disabled = false;\n\n        }\n    }\n    // \n    -->\n</script>\n<!-- Input with Icons start -->\n<section id=\"input-with-icons\">\n    <div class=\"row match-height\">\n        <div class=\"col-12\">\n            <div class=\"card\">\n                <div class=\"card-header\">\n                    <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-envelope text-success font-large-1\"></i> Enviar Email</h1>\n                </div>\n                <div class=\"card-content\">\n                    <form action=\"pages/email/enviandoemail.php\" method=\"POST\" role=\"form\">\n                        <div class=\"card-body\">\n                            <div class=\"row\">\n                                <div class=\"col-12\">\n                                    <p> Enviar email para seu clientes n\xc3\xa3o esque\xc3\xa7a de configurar antes.</p>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"mb-1\">\n                                        Tipo de Contato ao Cliente\n                                    \n                                    <fieldset class=\"form-group position-relative\">\n                                        <select class=\"form-select\" name=\"tipomodelo\">\n                                            <option value=\"1\">Suporte Tecnico</option>\n                                            <option value=\"2\">Entrega de Contas</option>\n                                        </select>\n                                    </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"mb-1\">\n                                        Tipo de Conta\n                                   \n                                    <fieldset class=\"form-group position-relative\">\n                                        <select class=\"form-select\" name=\"tipoconta\">\n                                            <option value=\"1\" selected=selected>Conta SSH</option>\n                                            <option value=\"2\">Acesso Painel</option>\n                                        </select>\n                                    </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"mb-1\">\n                                        Email do Destinatario\n                                   \n                                    <fieldset class=\"form-group position-relative has-icon-left input-divider-left\">\n                                        <input required=\"required\" type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Ex:o.juniordesouza@gmail.com\">\n                                        <div class=\"form-control-position\">\n                                            <i class=\"fad fa-at\"></i>\n                                        </div>\n                                    </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"mb-1\">\n                                        Sua Empresa\n                                    \n                                    <fieldset class=\"form-group position-relative input-divider-right\">\n                                        <input type=\"text\" class=\"form-control\" id=\"emp\" name=\"emp\" value=\"";
echo ${$GLOBALS["zdlsmrxkgtdb"]};
echo "\" disabled>\n                                        <div class=\"form-control-position\">\n                                            <i class=\"fad fa-globe-americas\"></i>\n                                        </div>\n                                    </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"mb-1\">\n                                        Senha\n                                    \n                                    <fieldset class=\"form-group position-relative has-icon-left input-divider-left\">\n                                        <input class=\"form-control\" id=\"senha\" name=\"senha\" placeholder=\"Digite a Senha\">\n                                        <div class=\"form-control-position\">\n                                            <i class=\"fad fa-key-skeleton\"></i>\n                                        </div>\n                                    </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"mb-1\">\n                                        Link de Acesso (<small>ou ip conex\xc3\xa3o</small>)\n                                    \n                                    <fieldset class=\"form-group position-relative input-divider-right\">\n                                        <input class=\"form-control\" id=\"link\" name=\"link\" placeholder=\"Ip ou endere\xc3\xa7o\">\n                                        <div class=\"form-control-position\">\n                                            <i class=\"fad fa-flame\"></i>\n                                        </div>\n                                    </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"mb-1\">\n                                        Assunto\n                                   \n                                    <fieldset class=\"form-group position-relative has-icon-left input-divider-left\">\n                                        <input type=\"text\" class=\"form-control\" id=\"assunto\" name=\"assunto\" placeholder=\"Digite um Assunto EX: Compra de SSH\" value=\"Sua nova conta SSH est\xc3\xa1 pronta\">\n                                        <div class=\"form-control-position\">\n                                            <i class=\"fad fa-user-tie\"></i>\n                                        </div>\n                                    </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"mb-1\">\n                                        Validade\n                                    \n                                    <fieldset class=\"form-group position-relative input-divider-right\">\n                                        <input type=\"text\" class=\"form-control\" id=\"validade\" name=\"validade\" placeholder=\"30\" value=\"30\">\n                                        <div class=\"form-control-position\">\n                                            <i class=\"fad fa-calendar-week\"></i>\n                                        </div>\n                                    </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-12 text-center\">\n                                    <div class=\"mb-2\">\n                                        Mensagem\n                                    \n                                    <fieldset class=\"form-group position-relative has-icon-left input-divider-left\">\n                                        <textarea class=\"form-control\" name=\"msg\" id=\"msg\" rows=\"5\" placeholder=\"Digite a Mensagem ...\"></textarea>\n                                        <div class=\"form-control-position\">\n                                            <i class=\"fad fa-flame\"></i>\n                                        </div>\n                                    </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-12 text-center\">\n                                    <fieldset class=\"form-group position-relative input-divider-right\">\n                                        ";
if (${$GLOBALS["jwrejmrtm"]} > 0) {
    echo "                                            <button href=\"home.php?page=email/1etapasmtp\" class=\"btn btn-info waves-effect waves-light m-t-10\">Reconfigurar SMTP</button>\n                                        ";
}
echo "                                    </fieldset>\n                                </div>\n                                <div class=\"col-sm-12 col-12 text-center\">\n                                    <button type=\"submit\" class=\"btn btn-success\">Salvar</button>\n                                    <button type=\"reset\" class=\"btn btn-danger\">Limpar</button>\n                                    <a href=\"home.php?page=email/1etapasmtp\" class=\"btn btn-warning\"> Configurar SMTP</a>\n                                </div>\n                            </div>\n                        </div>\n                    </form>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n<!-- Input with Icons end -->\n";
