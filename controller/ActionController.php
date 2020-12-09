<?php 

    // Class that haves all encrypt actions
    class ActionController
    {
        function startAction()
        {
            // Getting the values / Pegando os valores
            $text   = $_POST["iText"];
            $opt    =  $_POST["options"];

            // Checking if the user inserted any text
            if(empty($text))
            {
                    // Stopping the action in case there's no text / Parando a ação caso não tenha nenhum texto
                include_once "view/Home.php";
                echo "<script> alert('Plase, insert the text! / Por favor, informe o texto!'); </script>";
            }
            else
            {
                // The two variables that'll keep the results / As variaveis que irão guardar os resultados
                $result;
                $type;

                // All the actions / Todas as ações
                switch ($opt)
                {
                    // SHA1 action
                    case 'csh':
                        // Encrypting the text / Criptografando o texto
                        $result = sha1($text);
                        $type = "Encrypted to SHA-1: ";
                        // Redirecting to the Result Page / Redirecionando para a página de resultado
                        include_once "view/HomeResult.php";
                        break;
                    
                    // MD5 action
                    case 'cmd':
                        // Encrypting the text / Criptografando o texto
                        $result = md5($text);
                        $type = "Encrypted to MD5: ";
                        // Redirecting to the Result Page / Redirecionando para a página resultado
                        include_once "view/HomeResult.php";
                        break;
                
                    // BASE 64 action    
                    case 'cb6':
                        // Encrypting the text / Criptografando o texto
                        $result = base64_encode($text);
                        $type = "Encrypted to Base 64: ";
                        // Redirecting to the Result Page / Redirecionando para a página resultado
                        include_once "view/HomeResult.php";
                        break;
            
                    // PASSWORD_HASH action
                    case 'cph':
                        // Encrypting the text / Criptografando o texto
                        $result = password_hash($text, PASSWORD_DEFAULT);
                        $type = "Encrypted to Password_Hash: ";
                        // Redirecting to the Result Page / Redirecionando para a página resultado
                        include_once "view/HomeResult.php";
                        break;
        
                    // User didn't choose any action / Usuário não escolheu nenhuma ação
                    default:
                        // Redirecting to the home page / Redirecionando para a página inicial
                        include_once "view/Home.php";
                        echo "<script> alert('Plase, choose an option! / Por favor, escolha uma opção!'); </script>";
                        break;
                }

            } 
        }
    }
?>