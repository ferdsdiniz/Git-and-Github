<?php

include_once "../Conexao.php";
include_once "../model/Usuario.php";
include_once "../dao/UsuarioDAO.php";

//Instancia as Classes

$user = new PedalaAi();
$usuariodao = new UsuarioDAO();

//Pegar todos os dados passando via POST

$form = filter_input_array(INPUT_POST);

//Se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){
   $user->setUser($form['pedala_ai_user']);
   $user->setNome($form['pedala_ai_nome']);
   $user->setData_nasc($form['pedala_ai_data_nasc']);
   $user->setEmail($form['pedala_ai_email']);
   $user->setTelefone($form['pedala_ai_telefone']);
   $user->setTipo_sangue($form['pedala_ai_tipo_sangue']);  
   $user->setAlergias($form['pedala_ai_alergias']);  
   $user->setContato_emer($form['pedala_ai_contato_emer']);  
   $user->setConvenio($form['pedala_ai_convenio']);  
   $user->setMedicacoes($form['pedala_ai_medicacoes']);  
   $user->setPassword($form['pedala_ai_password']);  

   $usuariodao->create($user);

   header("Location: ../listar.php");
}

//Se a operação for deletar

else if(isset($_GET['del'])){
   $user->setId($_GET['del']);
   $usuariodao->delete($user);
   header("Location: ../listar.php");
}

//Se a operação for atualizar
      //---------EDITAR AINDA NÃO ESTÁ FUNCIONAL------
else if(isset($_POST['editar'])){
   $user->setUser($form['pedala_ai_user']);
   $user->setNome($form['pedala_ai_nome']);
   $user->setData_nasc($form['pedala_ai_data_nasc']);
   $user->setEmail($form['pedala_ai_email']);
   $user->setTelefone($form['pedala_ai_telefone']);
   $user->setTipo_sangue($form['pedala_ai_tipo_sangue']);  
   $user->setAlergias($form['pedala_ai_alergias']);  
   $user->setContato_emer($form['pedala_ai_contato_emer']);  
   $user->setConvenio($form['pedala_ai_convenio']);  
   $user->setMedicacoes($form['pedala_ai_medicacoes']);  
   $user->setPassword($form['pedala_ai_password']);  
   

   $usuariodao->update($user);
   header("Location: ../listar.php");
}

else {
   header("Location: ../listar.php");
}


// <?php
//    if (isset($_GET['edit'])){
//       $id = $_GET['edit'];
//       $update = true;
//       $record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

//       if (count($record) == 1){
//          $u = mysqli_fetch_array($record);
//          $pedalauser = $u['pedalauser'];
//          $pedalanome = $u['pedalanome'];
//          $pedaladatanasc = $u['pedaladatanasc'];
//          $pedalaemail = $u['pedalaemail'];
//          $pedalatelefone = $u['pedalatelefone'];
//          $pedalatiposangue = $u['pedalatiposangue'];
//          $pedalaalergias = $u['pedalaalergias'];
//          $pedalacontatoemer = $u['pedalacontatoemer'];
//          $pedalaconvenio = $u['pedalaconvenio'];
//          $pedalamedicacoes = $u['pedalamedicacoes'];
//          $pedalapassword = $u['pedalapassword'];
//          }
//    }

//    if(isset($_POST['update'])){
//       $pedalaid = $_POST['pedalaid'];
//       $pedalanome = $_POST['pedalanome'];
//       $pedaladatanasc = $_POST['pedaladatanasc'];
//       $pedalaemail = $_POST['pedalaemail'];
//       $pedalatelefone = $_POST['pedalatelefone'];
//       $pedalatiposangue = $_POST['pedalatiposangue'];
//       $pedalaalergias = $_POST['pedalaalergias'];
//       $pedalacontatoemer = $_POST['pedalacontatoemer'];
//       $pedalaconvenio = $_POST['pedalaconvenio'];
//       $pedalamedicacoes = $_POST['pedalamedicacoes'];
//       $pedalapassword = $_POST['pedalapassword'];

//       mysqli_query($db, "UPDATE info SET pedalaid='$pedalaid', pedalanome='$pedalanome', pedaladatanasc='$pedaladatanasc', 
//       pedalaemail='$pedalaemail', pedalatelefone='$pedalatelefone', pedalatiposangue='$pedalatiposangue', pedalaalergias='$pedalaalergias',
//       pedalacontatoemer='$pedalacontatoemer', pedalaconvenio='$pedalaconvenio', pedalamedicacoes='$pedalamedicacoes', 
//       pedalapassword='$pedalapassword' WHERE id=$id");
//       $_SESSION['message'] = "Dados Atualizados!";
//    }
  
<?php

$pedalaid = :pedalaid;
$pedalanome = :pedalanome;

try {
  $pdo = new PDO('mysql:host=localhost;dbname=nossoBancoDeDados', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('UPDATE pedalaAiTabela SET pedalanome = :pedalanome WHERE pedalaid = :pedalaid');
  $stmt->execute(array(
    ':pedalaid'   => $pedalaid,
    ':pedalanome' => $pedalanome
  ));

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>