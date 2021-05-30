<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link  rel = " shortcut icon " type = " image / x-icon " href = "../_estaticos/_imagens/_logoIcon.png" />
    <link rel="stylesheet" href="../_estaticos/_css/_estiloCadastro.css">
</head>
<body>
    <main class="container">
        <div class="box1">
            <img class="logo" src="../_estaticos/_imagens/_logoIF.png" alt="">
            <h1>CADASTRO</h1>            
        </div>

        <div class="box2">     
            <form autocomplete="off" name="FB_formulario" action="">
                <div class="inputs">
                    <input required type="text" name="nome" placeholder="Nome completo" maxlength="">
                    <span class="error"></span>
                </div>
               
                <div class="inputs">
                    
                    <input required id="fone" type="tel" name="telefone" placeholder="Telefone" maxlength="">
                    <span class="error"></span>
                </div>
               
                <div class="inputs">
                    
                    <input required type="user" name="usuario" placeholder="Usuário" maxlength="">
                    <span class="error"></span>
                </div>
                
                <div class="inputs">
                    
                    <input required type="email" name="email" placeholder="E-mail" maxlength="">
                    <span class="error"></span>
                </div>
                
                <div class="inputs">

                    <input required type="password" name="senha" placeholder="Senha" maxlength="">
                    <span class="error"></span>
                </div>                                
               
                <div class="inputs">
                    <input required type="password" name="confSenha" placeholder="Confirmar senha" maxlength="">
                    <span class="error"></span>
                </div>
                <button class="botao" type="submit">Cadastrar</button>
                <a href="..\index.php"><strong>Voltar</strong></a>
        
            </form>
        </div>
    </main>
</body>


</html>