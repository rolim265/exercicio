<!DOCTYPE html>
<html lang="pt-br"> <!-- Define o tipo de documento e o idioma da página como português do Brasil -->

<head>
    <title>Atualizar Curso</title> <!-- Define o título da página que aparece na aba do navegador -->
    <meta charset="utf-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"> <!-- Configura a visualização para dispositivos móveis -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Define a compatibilidade do IE para a versão mais recente -->

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" /> <!-- Palavras-chave para SEO -->
    <meta name="author" content="Codedthemes" /> <!-- Autor do documento -->
    
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> <!-- Define o ícone da aba do navegador -->
    
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> <!-- Importa a fonte "Open Sans" do Google Fonts -->
    
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all"> <!-- Importa o CSS para efeitos de onda -->
    
    <!-- Required Framework -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css"> <!-- Importa o CSS do Bootstrap -->
    
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all"> <!-- Importa novamente o CSS para efeitos de onda, redundante -->
    
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css"> <!-- Importa o CSS para ícones Themify -->
    
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css"> <!-- Importa o CSS para ícones Font Awesome (versão normal) -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"> <!-- Importa o CSS para ícones Font Awesome (versão minificada) -->
    
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css"> <!-- Importa o CSS para barra de rolagem personalizada -->
    
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> <!-- Importa o CSS principal da aplicação -->
</head>

<body>
    
<?php
    include 'menu_principal.php'; // Inclui o arquivo 'menu_principal.php', que provavelmente contém o menu de navegação
?>

    <div class="pcoded-inner-content"> <!-- Início do conteúdo interno do layout -->
        <!-- Main-body start -->
        <div class="main-body"> <!-- Div principal do corpo -->
            <div class="page-wrapper"> <!-- Envolvimento para a página -->
                <!-- Page-body start -->
                <div class="page-body"> <!-- Início do corpo da página -->
                    <div class="row"> <!-- Início da linha -->
                        <!-- Project statistic start -->
                        <div class="col-xl-12"> <!-- Coluna que ocupa toda a largura em telas grandes -->
                            <div class="row"> <!-- Início de uma nova linha -->
                                <div class="col-xl-8 col-md-10 m-auto"> <!-- Coluna centralizada que ocupa 8 de 12 colunas em telas grandes e 10 em médias -->
                                    <h2>Escolha um curso para ser atualizado</h2> <!-- Título da seção -->
                                    <table class="table"> <!-- Início da tabela -->
                                        <thead> <!-- Cabeçalho da tabela -->
                                            <tr> <!-- Linha do cabeçalho -->
                                                <th scope="col">ID</th> <!-- Cabeçalho para a coluna de ID -->
                                                <th scope="col">NOME DO CURSO</th> <!-- Cabeçalho para a coluna de nome do curso -->
                                                <th scope="col">OPERAÇÃO</th> <!-- Cabeçalho para a coluna de operações -->
                                            </tr>
                                        </thead>
                                        <tbody> <!-- Corpo da tabela -->
                                        <?php
                                            $url = 'http://localhost/exercicio/api.php/cursos'; // URL da API que retorna a lista de cursos
                                            $response = file_get_contents($url); // Faz uma requisição GET para a API
                                            $data = json_decode($response, true); // Decodifica a resposta JSON em um array associativo

                                            if (isset($data['dados'])) { // Verifica se a chave 'dados' existe no array
                                                foreach ($data['dados'] as $curso) { // Itera sobre cada curso encontrado
                                                    echo "<tr>"; // Início de uma nova linha na tabela
                                                    echo '<td>' . $curso['id_curso'] . '</td>'; // Exibe o ID do curso
                                                    echo '<td>' . $curso['nome_curso'] . '</td>'; // Exibe o nome do curso
                                                    echo '<td> 
                                                            <a href="atualiza_curso.php?id='.$curso['id_curso'].'" class="btn btn-primary">ATUALIZAR</a> 
                                                        </td>'; // Link para a página de atualização do curso com um botão estilizado
                                                    echo "</tr>"; // Fim da linha
                                                }
                                            } else {
                                                echo '<p>Nenhum curso encontrado.</p>'; // Mensagem caso não haja cursos disponíveis
                                            }
                                        ?>                                                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Project statistic end -->
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div> <!-- Seletor de estilo, pode ser utilizado para alterar temas -->
        </div>
    </div>
    

    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script> <!-- Importa o jQuery -->
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script> <!-- Importa o jQuery UI -->
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script> <!-- Importa a biblioteca Popper.js para gerenciamento de pop-ups e tooltips -->
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script> <!-- Importa o Bootstrap JS -->
    
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script> <!-- Importa o JavaScript para efeitos de onda -->
    
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script> <!-- Importa o JavaScript para rolagem slim -->
    
    <!-- slimscroll js -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script> <!-- Importa o JavaScript para barra de rolagem personalizada -->
    
    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script> <!-- Importa o JavaScript principal do layout -->
    <script src="assets/js/vertical/vertical-layout.min.js "></script> <!-- Importa o layout vertical do JavaScript -->
    
    <script type="text/javascript" src="assets/js/script.js "></script> <!-- Importa o JavaScript personalizado -->
</body>

</html>
