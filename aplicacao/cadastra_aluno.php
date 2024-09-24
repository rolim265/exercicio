<?php
    // Verifica se a requisição foi feita via método POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Captura o nome do aluno enviado pelo formulário
        $nome_aluno = $_POST['nome'];
        // Captura o e-mail do aluno enviado pelo formulário
        $email_aluno = $_POST['email'];
        // Captura o ID do curso associado ao aluno enviado pelo formulário
        $id_curso = $_POST['curso_id'];

        // Cria um array com os dados do aluno a serem enviados
        $data = array("nome" => $nome_aluno, "email" => $email_aluno, "fk_cursos_id_curso" => $id_curso);
        
        // Define as opções para a requisição HTTP
        $options = array(
            'http' => array(
                // Define o cabeçalho da requisição como JSON
                'header'  => "Content-type: application/json\r\n",
                // Define o método HTTP como POST
                'method'  => 'POST',
                // Codifica o array de dados em JSON e o define como conteúdo da requisição
                'content' => json_encode($data),
            ),
        );

        // Cria um contexto de stream com as opções definidas
        $context  = stream_context_create($options);
        
        // Define a URL da API onde os dados serão enviados
        $url = 'http://localhost/exercicio/api.php/alunos';
        
        // Faz a requisição HTTP para a API e armazena o resultado
        $result = file_get_contents($url, false, $context);

        // Verifica se a requisição falhou
        if ($result === FALSE) {
            // Exibe uma mensagem de erro se a adição do aluno falhar
            echo "<p>Erro ao adicionar aluno.</p>";
        } else { ?>
            <script>
                // Exibe um alerta de sucesso
                alert('Operação concluída com sucesso!');

                // Após o usuário clicar em "OK", redireciona para a página 'lista_alunos.php'
                window.location.href = 'lista_alunos.php'; // Altere para a página de destino
            </script>
        <?php    
        }
    }
?>
