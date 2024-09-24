<!DOCTYPE html>
<html lang="pt-br"> <!-- Define o idioma da página como português do Brasil -->

<head>
    <title>Atualizar Curso</title> <!-- Título da página -->
    <meta charset="utf-8"> <!-- Define a codificação de caracteres da página como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"> <!-- Configurações de viewport para responsividade -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Configura o modo de renderização para usar o motor mais recente do IE disponível -->

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" /> <!-- Palavras-chave para SEO -->
    <meta name="author" content="Codedthemes" /> <!-- Nome do autor da página -->
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> <!-- Link para o ícone da página (favicon) -->
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> <!-- Importa a fonte Open Sans do Google Fonts -->
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all"> <!-- Link para o CSS das ondas (efeito visual) -->
    <!-- Required Framework -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css"> <!-- Link para o CSS do Bootstrap -->
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all"> <!-- Link repetido para o CSS das ondas -->
    <!-- Themify icons -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css"> <!-- Link para os ícones da biblioteca Themify -->
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css"> <!-- Link para o CSS da fonte Awesome (ícones) -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"> <!-- Link para o CSS da fonte Awesome (ícones) -->
    <!-- Scrollbar -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css"> <!-- Link para o CSS do scrollbar personalizado -->
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> <!-- Link para o arquivo principal de estilos CSS -->
</head>

<body>
    
<?php
    include 'menu_principal.php'; // Inclui o arquivo do menu principal
?>

<div class="pcoded-inner-content"> <!-- Início da seção de conteúdo principal -->
    <!-- Main-body start -->
    <div class="main-body"> <!-- Início do corpo principal da página -->
        <div class="page-wrapper"> <!-- Início do contêiner da página -->
            <!-- Page-body start -->
            <div class="page-body"> <!-- Início do corpo da página -->
                <div class="row"> <!-- Início de uma nova linha -->
                    <!-- Project statistic start -->
                    <div class="col-xl-12"> <!-- Coluna que ocupa toda a largura disponível -->
                        <div class="row"> <!-- Início de uma nova linha dentro da coluna -->
                            <div class="col-xl-8 col-md-10 m-auto"> <!-- Define a largura da coluna e centraliza-a -->
                                <h2>Escolha um curso para ser atualizado</h2> <!-- Cabeçalho da seção -->
                                <table class="table"> <!-- Início da tabela -->
                                    <thead> <!-- Cabeçalho da tabela -->
                                        <tr> <!-- Início da linha do cabeçalho -->
                                            <th scope="col">ID</th> <!-- Coluna para o ID do aluno -->
                                            <th scope="col">NOME DO ALUNO</th> <!-- Coluna para o nome do aluno -->
                                            <th scope="col">OPERAÇÃO</th> <!-- Coluna para operações -->
                                        </tr> <!-- Fim da linha do cabeçalho -->
                                    </thead>
                                    <tbody> <!-- Corpo da tabela -->
                                    <?php
                                        $url = 'http://localhost/exercicio/api.php/alunos'; // URL da API para buscar os dados dos alunos
                                        $response = file_get_contents($url); // Faz uma requisição GET para a URL e armazena a resposta
                                        $data = json_decode($response, true); // Decodifica a resposta JSON em um array associativo

                                        if (isset($data['dados'])) { // Verifica se há dados retornados
                                            foreach ($data['dados'] as $aluno) { // Itera sobre cada aluno retornado
                                                echo "<tr>"; // Início de uma nova linha na tabela
                                                echo '<td>' . $aluno['id'] . '</td>'; // Exibe o ID do aluno na célula
                                                echo '<td>' . $aluno['nome'] . '</td>'; // Exibe o nome do aluno na célula
                                                echo '<td> 
                                                        <a href="atualiza_aluno.php?id='.$aluno['id'].'" class="btn btn-primary">ATUALIZAR</a> 
                                                    </td>'; // Botão para atualizar o aluno, com link dinâmico para a página de atualização
                                                echo "</tr>"; // Fim da linha na tabela
                                            }
                                        } else {
                                            echo '<p>Nenhum curso encontrado.</p>'; // Mensagem exibida caso não haja alunos
                                        }
                                    ?>                                                                    
                                    </tbody>
                                </table> <!-- Fim da tabela -->
                            </div>
                        </div>
                    </div>
                    <!-- Project statistic end -->
                </div>
            </div>
            <!-- Page-body end -->
        </div>
        <div id="styleSelector"> </div> <!-- Elemento para seleção de estilo (não funcional no código atual) -->
    </div>
</div>
    

<!-- Required jQuery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script> <!-- Link para o jQuery -->
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script> <!-- Link para o jQuery UI -->
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script> <!-- Link para o Popper.js, utilizado pelo Bootstrap -->
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script> <!-- Link para o JavaScript do Bootstrap -->
<!-- Waves JS -->
<script src="assets/pages/waves/js/waves.min.js"></script> <!-- Link para o JavaScript das ondas (efeito visual) -->
<!-- jQuery SlimScroll JS -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script> <!-- Link para o SlimScroll (scroll personalizado) -->

<!-- SlimScroll JS -->
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script> <!-- Link para o SlimScroll personalizado -->

<!-- Menu JS -->
<script src="assets/js/pcoded.min.js"></script> <!-- Link para o script principal do template -->
<script src="assets/js/vertical/vertical-layout.min.js "></script> <!-- Link para o layout vertical do template -->

<script type="text/javascript" src="assets/js/script.js "></script> <!-- Link para o script principal -->
</body>

</html>
