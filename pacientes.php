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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="./src/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="./src/fontawesome/css/brands.css" rel="stylesheet">
    <link href="./src/fontawesome/css/solid.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Shantell+Sans:wght@400;500;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@400;500;800&display=swap" rel="stylesheet">
</head>

<body class='p-5' style="background: rgb(158,64,239);
background: linear-gradient(138deg, rgba(158,64,239,1) 0%, rgba(247,61,96,1) 100%) ;height: 100vh !important; background-attachment: fixed;">

    <div class="main container" style="font-size: 24px;">
        <!-- MENU -->
        <nav class="navbar bg-light navbar-expand-lg  rounded" data-bs-theme="light">
            <div class="container-fluid">
                <a class="navbar-brand fs-4 fw-bold" href="#">
                    <img class="me-2" src="../src/images/logoglow.png" alt="Logo" width="60" height="55" class="d-inline-block align-text-top">

                    Glow</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0 fw-semibold ">
                        <li class="nav-item me-5">

                            <a class="nav-link active  " aria-current="page" href="#">
                                <i class="fa-solid fa-house me-2"></i>Home</a>
                        </li>
                        <li class="nav-item ms-1 me-5">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-hospital-user me-2"></i></i>Pacientes</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-headset me-2"></i>Contato</a>
                        </li>


                    </ul>
                    <!-- <span>usuario</span> -->
                    <span class="ms-2">Sair</span>

                </div>
            </div>
        </nav>
        <!-- FIM MENU -->
        <div class="container bg-white mt-3 p-5 rounded" style="height: 70vh">
            <div class="container d-flex justify-content-center">
                <h1>Bem vindo a Glow</h1>

            </div>
            <div class="container d-flex justify-content-center">
                <h3>Médico(a): Luciano Braga</h3>
            </div>
            <hr>
            <div class="row w-100">
                    <h2>Pacientes Cadastrados</h2>
                </div>
            <div class="container d-flex justify-content-center mt-4">
              
                <div class="row w-100">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOME</th>
                                <th scope="col">DATA DE NASCIMENTO</th>
                                <th scope="col">CPF</th>
                                <th class="text-center"scope="col">AÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Luciano Gouveia</td>
                                <td>13/07/1989</td>
                                <td>97482552634</td>
                                <td class="d-flex justify-content-evenly">
                                <button type="button " class="btn btn-success fw-bold fs-6"">
                                <i class="fa-solid fa-user-pen me-2"></i>    
                                Editar</button>
                                <button type="button" class="btn btn-warning fw-bold fs-6">
                                <i class="fa-solid fa-file-medical me-2"></i> 
                                Exames</button>
                                </td>
                               
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Letícia Jatobá</td>
                                <td>17/12/1998</td>
                                <td>97482552634</td>
                                <td class="d-flex justify-content-evenly">
                                <button type="button " class="btn btn-success fw-bold fs-6"">
                                <i class="fa-solid fa-user-pen me-2"></i>    
                                Editar</button>
                                <button type="button" class="btn btn-warning fw-bold fs-6">
                                <i class="fa-solid fa-file-medical me-2"></i> 
                                Exames</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td >Jéssica Santos</td>
                                <td>30/12/1971</td>
                                <td>97482552634</td>
                                <td class="d-flex justify-content-evenly">
                                <button type="button " class="btn btn-success fw-bold fs-6"">
                                <i class="fa-solid fa-user-pen me-2"></i>    
                                Editar</button>
                                <button type="button" class="btn btn-warning fw-bold fs-6">
                                <i class="fa-solid fa-file-medical me-2"></i> 
                                Exames</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>