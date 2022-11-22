<?php

class PedalaAi{

    private $id;
    private $user;
    private $nome;
    private $email;
    private $telefone;
    private $tipo_sangue;
    private $alergias;
    private $contato_emer;
    private $convenio;
    private $medicacoes;
    private $password;

//--------------------------------------------GET----------------------------------------

    function getId(){
        return $this->id;
    }

    function getUser(){
        return $this->user;
    }

    function getNome(){
        return $this->nome;
    }
    
    function getData_nasc(){
        return $this->data_nasc;
    }
    function getEmail(){
        return $this->email;
    }

    function getTelefone(){
        return $this->telefone;
    }

    function getTipo_sangue(){
        return $this->tipo_sangue;
    }

    function getAlergias(){
        return $this->alergias;
    }

    function getContato_emer(){
        return $this->contato_emer;
    }
    
    function getConvenio(){
        return $this->convenio;
    }

    function getMedicacoes(){
        return $this->medicacoes;
    }

    function getPassword(){
        return $this->password;
    }
//--------------------------------------SET--------------------------------------

    function setId($id){
        $this->id = $id;
    }
    function setNome($nome){
        $this->nome = $nome;
    }

    function setUser($user){
        $this->user = $user;
    }

    function setData_nasc($data_nasc){
        $this->data_nasc = $data_nasc;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    
    function setTipo_sangue($tipo_sangue){
        $this->tipo_sangue = $tipo_sangue;
    }

    function setAlergias($alergias){
        $this->alergias = $alergias;
    }

    function setContato_emer($contato_emer){
        $this->contato_emer = $contato_emer;
    }

    function setConvenio($convenio){
        $this->convenio = $convenio;
    }

    function setMedicacoes($medicacoes){
        $this->medicacoes = $medicacoes;
    }

    function setPassword($password){
        $this->password = $password;
    }

}


