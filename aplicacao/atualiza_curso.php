<!DOCTYPE html>
<html lang="pt-br"> <!-- Define o idioma da página como português do Brasil -->

<head>
    <title>Atualiza Curso</title> <!-- Título da página -->
    <meta charset="utf-8"> <!-- Define a codificação de caracteres da página como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"> <!-- Configurações de viewport para responsividade -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Configura o modo de renderização para usar o mais recente motor de renderização do IE disponível -->

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" /> <!-- Palavras-chave para SEO -->
    <meta name="author" content="Codedthemes" /> <!-- Nome do autor da página -->
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> <!-- Link para o ícone da página (favicon) -->
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> <!-- Importa a fonte Open Sans do Google Fonts -->
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all"> <!-- Link para o CSS das ondas (efeito visual) -->
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css"> <!-- Link para o CSS do Bootstrap -->
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all"> <!-- Link repetido para o CSS das ondas -->
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css"> <!-- Link para os ícones da biblioteca Themify -->
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css"> <!-- Link para o CSS da fonte Awesome (ícones) -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"> <!-- Link para o CSS da fonte Awesome (ícones) -->
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css"> <!-- Link para o CSS do scrollbar personalizado -->
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> <!-- Link para o arquivo principal de estilos CSS -->
</head>

<body>
    
<?php
    include 'menu_principal.php'; // Inclui o arquivo do menu principal
?>

<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <!-- Project statustic start -->
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-8 col-md-10 m-auto"> <!-- Define a largura da coluna e centraliza-a -->
                                <h2>Insere novo Curso</h2> <!-- Cabeçalho da página -->
                                <?php
                                    $id = $_GET['id']; // Obtém o parâmetro 'id' da URL
                                    
                                    $url = "http://localhost/exercicio/api.php/cursos/{$id}"; // Monta a URL para buscar os dados do curso via API
                                    
                                    $response = file_get_contents($url); // Faz uma requisição GET para a URL e armazena a resposta
                                    $data = json_decode($response, true); // Decodifica a resposta JSON em um array associativo

                                    //echo $data['dados']['nome_curso']; // Exemplo de como acessar o nome do curso retornado pela API
                                ?>
                                <form action="executa_atualiza_curso.php?id=<?php echo $id;?>" method="POST"> <!-- Início do formulário, envia dados via POST -->
                                    <div class="mb-3">
                                        <label class="form-label">Nome Novo do Curso</label> <!-- Rótulo do campo de texto -->
                                        <input type="text" name="nome_novo_curso" value="<?php echo $data['dados']['nome_curso']; ?>" class="form-control"> <!-- Campo de texto pré-preenchido com o nome atual do curso -->
                                    </div>                                                            
                                    <button type="submit" class="btn btn-primary">Atualizar</button> <!-- Botão de envio do formulário -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Project statustic end -->
                </div>
            </div>
            <!-- Page-body end -->
        </div>
        <div id="styleSelector"> </div> <!-- Elemento para seleção de estilo (não funcional no código atual) -->
    </div>
</div>

<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script> <!-- Link para o jQuery -->
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script> <!-- Link para o jQuery UI -->
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script> <!-- Link para o Popper.js, utilizado pelo Bootstrap -->
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script> <!-- Link para o JavaScript do Bootstrap -->
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script> <!-- Link para o JavaScript das ondas (efeito visual) -->
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script> <!-- Link para o SlimScroll (scroll personalizado) -->

<!-- slimscroll js -->
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script> <!-- Link para o SlimScroll personalizado -->

<!-- menu js -->
<script src="assets/js/pcoded.min.js"></script> <!-- Link para o script principal do template -->
<script src="assets/js/vertical/vertical-layout.min.js "></script> <!-- Link para o layout vertical do template -->

<script type="text/javascript" src="assets/js/script.js "></script> <!-- Link para o script principal -->
</body>

</html>
