<?php

$GLOBALS["milswlhffh"] = "meulink";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/adicionar.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$lobxpinaw = "meulink";
protegePagina("donoadmin");
$meulink = $_SERVER["HTTP_HOST"];
echo "<script>\nfunction ValidateIPaddress(inputText)\n{\nvar ipformat = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\$/;\nif(inputText.value.match(ipformat))\n{\ndocument.form1.ip.focus();\nreturn true;\n}\nelse\n{\nalert(\"Endere\xc3\xa7o IP Invalido!\");\ndocument.form1.ip.focus();return false;\n}\n}\n</script>\n<!-- Input with Icons start -->\n<section id=\"multiple-column-form\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header\">\n<h4 class=\"card-title\">Adicionar servidor no painel</h4>\n</div>\n<div class=\"card-content\">\n<form action=\"pages/servidor/adicionar_exe.php\" method=\"POST\" enctype=\"multipart/form-data\" role=\"form\">\n<div class=\"card-body\">\n<div class=\"row\">\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Nome do servidor</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='server'></i></span>\n<input type=\"text\" id=\"nomesrv\" name=\"nomesrv\" class=\"form-control\" minlength=\"4\"  maxlength=\"15\" placeholder=\"Ex: Brasil-1\" required>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Endere\xc3\xa7o de IP</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='radio'></i></span>\n<input type=\"text\" name=\"ip\" id=\"ip\" class=\"form-control\" minlength=\"4\"  maxlength=\"32\" placeholder=\"Digite o IP\" required>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Usu\xc3\xa1rio root</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='user'></i></span>\n<input disabled type=\"text\" class=\"form-control\" value=\"root\" required=\"\">\n<input type=\"hidden\" class=\"form-control\" id=\"login\" name=\"login\" value=\"root\">\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Senha root</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='key'></i></span>\n<input type=\"password\"class=\"form-control\"  name=\"senha\" minlength=\"6\" maxlength=\"64\" id=\"senha\" placeholder=\"Digite a Senha\" required>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"basicSelect\">Regi\xc3\xa3o global</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='map'></i></span>\n<select class=\"form-select\" name=\"regiao\" data-placeholder=\"Selecione a regiao\" tabindex=\"1\">\n<option value=\"1\">Asia</option>\n<option value=\"2\" selected>America</option>\n<option value=\"3\">Europa</option>\n<option value=\"4\">Ant\xc3\xa1rtida</option>\n</select>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Localiza\xc3\xa7\xc3\xa3o</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='map-pin'></i></span>\n<input type=\"text\" minlength=\"6\" maxlength=\"32\" name=\"localiza\" id=\"localiza\" placeholder=\"Ex: S\xc3\xa3o Paulo\" value=\"S\xc3\xa3o Paulo\" class=\"form-control\" required>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Validade</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='calendar'></i></span>\n<input type=\"number\" min=\"1\" max=\"5000\" name=\"validade\" id=\"validade\" placeholder=\"Ex: 5000\" value=\"5000\" class=\"form-control\" required>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Limite</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='smartphone'></i></span>\n<input type=\"number\" min=\"1\" max=\"5000\" name=\"limite\" id=\"limite\" placeholder=\"Ex: 5000\" value=\"5000\" class=\"form-control\" required>\n</div>\n</div>\n</div>\n<div class=\"col-md-12 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"country-floating\">Link do Painel</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='link-2'></i></span>\n<input type=\"text\" minlength=\"6\" maxlength=\"64\" name=\"siteserver\" id=\"siteserver\" value=\"";
echo ${$GLOBALS["milswlhffh"]};
echo "\" class=\"form-control\" placeholder=\"Digite seu link ou IP\" required>\n</div>\n</div>\n</div>\n<div class=\"col-12 text-center\">\n<button type=\"submit\" class=\"btn btn-success me-1 waves-effect waves-float waves-light\">Adicionar</button>\n<button type=\"reset\" class=\"btn btn-danger waves-effect\">Limpar</button>\n</div>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
