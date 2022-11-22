<?php
    include_once "Conexao.php";
    include_once "dao/UsuarioDAO.php";
    include_once "model/Usuario.php";

    //Instancia das Classes
    $user = new PedalaAi();
    $usuariodao = new UsuarioDAO();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuário</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    

</head>
<body>
    <div class="container">
        <h3>Usuários cadastrados: </h3>
        <div class="table-responsive">
            <table class="table table-sm table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID: </th>
                        <th>Usuário: </th>
                        <th>Nome: </th>
                        <th>Data de Nascimento: </th>
                        <th>E-mail: </th>
                        <th>Telefone: </th>
                        <th>Tipo Sanguíneo: </th>
                        <th>Alergias: </th>
                        <th>Contato de Emergência</th>
                        <th>Convenio: </th>
                        <th>Medicações: </th>
                        <th>Senha: </th> <!-- a gente deixa a senha no listar????    -b -->
                        <th>Ações: </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($usuariodao->read() as $user): ?>
                    <tr>
                        <td><?= $user->getId()?></td>
                        <td><?= $user->getUser()?></td>
                        <td><?= $user->getNome()?></td>
                        <td><?= $user->getData_nasc()?></td>
                        <td><?= $user->getEmail()?></td>
                        <td><?= $user->getTelefone()?></td>
                        <td><?= $user->getTipo_sangue()?></td>
                        <td><?= $user->getAlergias()?></td>
                        <td><?= $user->getContato_emer()?></td>
                        <td><?= $user->getConvenio()?></td>
                        <td><?= $user->getMedicacoes()?></td>
                        <td><?= $user->getPassword()?></td>
                    <td>
                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editar><?=$user->getId()?>"> <!-- esse aqui ainda não vai ;-;  -b -->
                        Editar
                    </button>
                        
                        <a href="control/UsuarioController.php?del=<?= $user->getId() ?>">
                            <button class="btn btn-danger btn-sm">
                                Excluir
                            </button>
                        </a>
                    </td>
                    </tr>
                    <!--modal-->
                    <div class="modal fade" id="editar><?=  $user->getId() ?>" tabindex="1" role="dialog" ariala>
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Editar</h5> <!-- esse aqui ainda não vai pt. 2 T-T  -b -->
                                </div>
                                <div class="modal-body">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
    
    
</body>
</html>