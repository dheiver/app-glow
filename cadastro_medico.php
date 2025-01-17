
<!-- Esse código é uma página HTML que representa um formulário de cadastro de usuários para um sistema chamado "Glow". 
Ele utiliza o framework Bootstrap para estilização e validação dos campos do formulário. A página tem um fundo degradê 
de cores roxo e rosa e exibe o logotipo do Glow no topo. O formulário consiste em campos para informações de login 
(email e senha) e dados pessoais do usuário (nome completo, CPF, CRM, endereço, data de nascimento, bairro, CEP, cidade e estado). 
Há também um botão "Cadastrar" para enviar as informações para o servidor. O código inclui links para arquivos CSS e JavaScript necessários 
para o funcionamento do Bootstrap. -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Glow</title>
    <link rel="icon" type="image/png" href="../src/images/logoglow.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@400;500;800&display=swap" rel="stylesheet">
</head>

<body class='p-5' style="background: rgb(158,64,239);
background: linear-gradient(138deg, rgba(158,64,239,1) 0%, rgba(247,61,96,1) 100%) ;height: 100vh !important; background-attachment: fixed; font-size:18px !important; font-weight: semi-bold;">




    <div class="container mt-5" style="background-color: whitesmoke; width:800px;padding: 45px;border-radius: 23px;">
        <div class="mb-2 ms-5 d-flex justify-content-center align-items-center">

            <div class="col-12 p-1 d-flex justify-content-center align-items-center">
                <img class="me-1" src="../src/images/logoglow.png" width="100px">
                <h1>Glow</h1>
            </div>
        </div>
        <form action="cadastros.php" method="POST">
            <h4>Dados Login</h4>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input name="senha" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <hr>
            <h4>Dados Pessoais</h4>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
                <input name="nome_completo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3 d-flex">
                <div class="col-4">
                    <label for="exampleInputPassword1" class="form-label">CPF</label>
                    <input name='cpf' type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-8 ms-1">
                    <label for="exampleInputEmail1" class="form-label">CRM</label>
                    <input name='crm' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Endereço</label>
                <input name='endereco' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Data Nascimento</label>
                <input name='data_nascimento' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3 d-flex">
                <div class="col-8">
                    <label for="exampleInputPassword1" class="form-label">Bairro</label>
                    <input name='bairro' type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-4 ms-1">
                    <label for="exampleInputEmail1" class="form-label">CEP</label>
                    <input name='cep' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="mb-3 d-flex">
                <div class="col-8">
                    <label for="exampleInputPassword1" class="form-label">Cidade</label>
                    <input name='cidade' type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-4 ms-1">
                    <label for="exampleInputPassword1" class="form-label">Estado</label>
                    <input name='estado' type="text" class="form-control" id="exampleInputPassword1">
                </div>

            </div>

            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" style="min-width: 160px;background: rgb(158,64,239);
background: linear-gradient(138deg, rgba(158,64,239,1) 0%, rgba(247,61,96,1) 100%) no-repeat; height: 100%; border:none;box-shadow: 9px 10px 15px -3px rgba(0,0,0,0.75);">Cadastrar</button>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>
