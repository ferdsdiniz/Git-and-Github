<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud - OO</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

 <!--falta deixar bonitinho, mas ta aqui :)    -b-->
</head>
<body>
    <div class="container-sm border">
        <form action="control/UsuarioController.php" method="post">
                <div class="col-md-3">
                    <label for="pedala_ai_user">Usuário: </label>
                    <input type="text" name="pedala_ai_user" id="pedala_ai_user" class="form-control" require/>
                </div>
                <div class="col-md-3">
                    <label for="pedala_ai_nome">Nome: </label>
                    <input type="text" name="pedala_ai_nome" id="pedala_ai_nome" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label for="pedala_ai_data_nasc">Data de Nascimento: </label>
                    <input type="date" name="pedala_ai_data_nasc" id="pedala_ai_data_nasc" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label for="pedala_ai_email">E-mail: </label>
                    <input type="email" name="pedala_ai_email" id="pedala_ai_email" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label for="pedala_ai_telefone">Telefone: </label>
                    <input type="tel" name="pedala_ai_telefone" id="pedala_ai_telefone" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label for="pedala_ai_tipo_sangue">Tipo Sanguíneo: </label>
                    <select name="pedala_ai_tipo_sangue" id="pedala_ai_tipo_sangue" class="form-control" require>
                        <option value="Apos">A+</option>
                        <option value="Aneg">A-</option>
                        <option value="ABpos">AB+</option>
                        <option value="ABneg">AB-</option>
                        <option value="Bpos">B+</option>
                        <option value="Bneg">B-</option>
                        <option value="Opos">O+</option>
                        <option value="Oneg">O-</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="pedala_ai_alergias">Alergias: </label>
                    <input type="text" name="pedala_ai_alergias" id="pedala_ai_alergias" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label for="pedala_ai_contato_emer">Contato de Emergência: </label>
                    <input type="text" name="pedala_ai_contato_emer" id="pedala_ai_contato_emer" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label for="pedala_ai_convenio">Convênio </label>
                    <input type="text" name="pedala_ai_convenio" id="pedala_ai_convenio" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label for="pedala_ai_medicacoes">Medicações: </label>
                    <input type="text" name="pedala_ai_medicacoes" id="pedala_ai_medicacoes" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label for="pedala_ai_password">Senha: </label>
                    <input type="password" name="pedala_ai_password" id="pedala_ai_password" minlenght ="8" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <br>
                    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                </div>
        </form>
    </div>
    
</body>
</html>