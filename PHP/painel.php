<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/loginc.php";

if (getLogged($sid) == true) {
    header("location: homec.php");
} else {
    echo "\n\t<section class=\"vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center\">\n\t\t<div class=\"container\">\n\t\t\t<div class=\"row justify-content-center form-bg-image\">\n\t\t\t\t<div class=\"col-12 d-flex align-items-center justify-content-center\">\n\t\t\t\t\t<div class=\"bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500\">\n\t\t\t\t\t\t<div class=\"text-center text-md-center mb-4 mt-md-0\">\n\t\t\t\t\t\t\t<h1 class=\"mb-0 h3\">Painel Conecta4G</h1>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t";
    if (isset($_SESSION["erro"])) {
        echo $_SESSION["erro"];
        session_destroy();
    }
    echo "\n\t\t\t\t\t\t<form action=\"\" method=\"POST\" class=\"mt-4\">\n\t\t\t\t\t\t\t<!-- Form -->\n\t\t\t\t\t\t\t<div class=\"form-group mb-4\">\n\t\t\t\t\t\t\t\t<label for=\"email\">Usu\xc3\xa1rio</label>\n\t\t\t\t\t\t\t\t<div class=\"input-group\">\n\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">\n\t\t\t\t\t\t\t\t\t\t<svg class=\"icon icon-xs text-gray-600\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">\n\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z\"></path>\n\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z\"></path>\n\t\t\t\t\t\t\t\t\t\t</svg>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Usu\xc3\xa1rio\" name=\"login\" autofocus required>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<!-- End of Form -->\n\t\t\t\t\t\t\t<div class=\"form-group\">\n\t\t\t\t\t\t\t\t<!-- Form -->\n\t\t\t\t\t\t\t\t<div class=\"form-group mb-4\">\n\t\t\t\t\t\t\t\t\t<label for=\"password\">Senha</label>\n\t\t\t\t\t\t\t\t\t<div class=\"input-group\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon2\">\n\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon icon-xs text-gray-600\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">\n\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z\" clip-rule=\"evenodd\"></path>\n\t\t\t\t\t\t\t\t\t\t\t</svg>\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Senha\" class=\"form-control\" name=\"senha\" required>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<!-- End of Form -->\n\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-top mb-4\">\n\t\t\t\t\t\t\t\t\t<div class=\"form-check\">\n\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"remember\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label mb-0\" for=\"remember\">\n\t\t\t\t\t\t\t\t\t\t\tLembre-me\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div></div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"d-grid\">\n\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"btn_login\" class=\"btn btn-gray-800\">Entrar</button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</form>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</section>\n\t</main>\n\n";
}
require_once $_SERVER["DOCUMENT_ROOT"] . "/config/rodape.php";
