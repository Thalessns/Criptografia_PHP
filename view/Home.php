<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <!-- Div container has all the content / A div container tem todo o conteúdo -->
    <div id="container">
        <!-- Div header has the title and an row to separate the contents / A div headher teo o título e uma linha que separa os conteúdos  -->
        <div id="header">
            <h1>Encrypting Texts</h1>
            <hr style="color: rgb(255, 204, 0); width: 65%;">
        </div>
        <!-- Div body has the principal content of the page / A div body tem o conteúdo principal da página -->
        <div id="body">
            <!-- The form of the page / Formulario da página -->
            <form action="index.php?method=startAction" method="POST">
                <!-- Space for the text / Espaço para o texto -->
                <input type="text" name="iText" id="txt" placeholder="Insert the text"> <br>

                <!-- Options that the user have / Opções que o usuário têm -->
                <select name="options" id="sel">
                    <option value="" disbaled selected>Choose an action </option>
                    <option value="csh">Encrypt to SHA-1 </option>
                    <option value="cmd">Encrypt to MD5 </option>
                    <option value="cb6">Encrypt to Base 64 </option>
                    <option value="cph">Encrypt to Password_Hash </option>
                </select> <br>

                <!-- Button that triggers the action / Botão que desencadeia a ação -->
                <input type="submit" id="btn" value="Calculate">
            <!-- End of the form / Fim do formulário -->
            </form>
            <!-- The footer contains the project creator's nick / Footer tem o nick do criador do projeto  -->
            <footer>
                <i>Thalessns</i> ©
            </footer>
        </div>
    </div>

</body>
</html>