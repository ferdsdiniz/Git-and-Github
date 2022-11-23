<?php

include_once "../Conexao.php";
include_once "../model/Usuario.php";
include_once "../dao/UsuarioDAO.php";

//Instancia as Classes

$user = new PedalaAi();
$usuariodao = new UsuarioDAO();

//Pegar todos os dados passando via POST

// echo "<pre>";
// print_r($_POST);
// exit();

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
   $user->setId($form['pedala_ai_id']);
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
