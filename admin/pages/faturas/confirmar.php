<?php

$GLOBALS["dcmvfoaplhnd"] = "fatu";
echo "<!-- Input with Icons start -->\n<section id=\"input-with-icons\">\n    <div class=\"row match-height\">\n        <div class=\"col-12\">\n            <div class=\"card\">\n                <div class=\"card-header\">\n                    <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-dollar text-success font-large-1\"></i> Fatura N\xc2\xb0<small>#";
$syvnvrqor = "fatu";
$eavxwqnpadf = "fatu";
echo $fatu["id"];
echo "</h1>\n                </div>\n                <div class=\"card-content\">\n                    <form role=\"form\" action=\"pages/faturas/confirmando.php\" enctype=\"multipart/form-data\" method=\"post\">\n                        <div class=\"card-body\">\n                            <div class=\"row\">\n                                <div class=\"col-12\">\n                                    <p>Nota: Anexe uma Print do Comprovante para agilizar o processo que pode levar at\xc3\xa9 24 horas para ser efetuado e voc\xc3\xaa ver refletido em sua conta.</p>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"text-bold-600 font-medium-2 mb-1\">\n                                        Fatura\n                                    </div>\n                                    <fieldset class=\"form-group position-relativet\">\n                                        <input type=\"text\" class=\"form-control\" placeholder=\"#";
$vqsfugpnich = "fatu";
echo $fatu["id"];
$hrjdvyc = "fatu";
echo "\" value=\"#";
echo $fatu["id"];
echo "\" disabled=\"\">\n                                        <input name=\"fatura\" value=\"";
echo $fatu["id"];
echo "\" type=\"hidden\">\n                                    </fieldset>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"text-bold-600 font-medium-2 mb-1\">\n                                        Forma de Pagamento\n                                    </div>\n                                    <fieldset class=\"form-group position-relative\">\n                                        <select name=\"formap\" class=\"form-control\">\n                                            <option value=\"1\" selected=selected>Boleto</option>\n                                            <option value=\"2\">Dep\xc3\xb3sito/Transf\xc3\xaancia</option>\n                                        </select>\n                                    </fieldset>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"text-bold-600 font-medium-2 mb-1\">\n                                        Deixar um comentario\n                                    </div>\n                                    <fieldset class=\"form-group position-relative\">\n                                        <textarea class=\"form-control\" name=\"msg\" id=\"msg\" class=\"form-control\" rows=\"5\" placeholder=\"Digite ... (Opcional)\"></textarea>\n                                    </fieldset>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"text-bold-600 font-medium-2 mb-1\">\n                                        Anexo de comprovante\n                                    </div>\n                                    <fieldset class=\"form-group position-relative\">\n                                        <div class=\"fileinput fileinput-new input-group\" data-provides=\"fileinput\">\n                                            <div class=\"form-control\" data-trigger=\"fileinput\"> <i class=\"glyphicon glyphicon-file fileinput-exists\"></i> <span class=\"fileinput-filename\"></span></div>\n                                            <span class=\"input-group-addon btn btn-default btn-file\"> <span class=\"fileinput-new\">SELECIONAR</span> <span class=\"fileinput-exists\">MUDAR</span>\n                                            <input type=\"file\" id=\"arquivo\" name=\"arquivo\" required=required> </span> <a href=\"#\" class=\"input-group-addon btn btn-default fileinput-exists\" data-dismiss=\"fileinput\">Remover</a>\n                                        </div>\n                                    </fieldset>\n                                </div>\n                                <div class=\"col-sm-12 col-12\ttext-center\">\n                                    <button type=\"submit\" class=\"btn btn-success round\">Enviar</button>\n                                    <button type=\"button\" onclick=\"window.location.href='home.php?page=faturas/verfatura&id=";
echo $fatu["id"];
echo "'\"  class=\"btn btn-info waves-effect waves-light m-t-10\"><i class=\"fa fa-arrow-circle-o-left\" aria-hidden=\"true\"></i> Voltar</button>\n                                </div>\n                            </div>\n                        </div>\n                    </form>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n<!-- Input with Icons end -->\n";
