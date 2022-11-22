<?php

class UsuarioDAO{

    //Crud - Create //
    public function create(PedalaAi $user){
        try{
            $sql = "INSERT INTO pedala_ai_user (pedala_ai_user, pedala_ai_nome, pedala_ai_data_nasc, pedala_ai_email, pedala_ai_telefone, pedala_ai_tipo_sangue, pedala_ai_alergias, pedala_ai_contato_emer, pedala_ai_convenio, pedala_ai_medicacoes, pedala_ai_password) 
            VALUES (:pedala_ai_user, :pedala_ai_nome, :pedala_ai_data_nasc, :pedala_ai_email, :pedala_ai_telefone, :pedala_ai_tipo_sangue, :pedala_ai_alergias, :pedala_ai_contato_emer, :pedala_ai_convenio, :pedala_ai_medicacoes, :pedala_ai_password)";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql-> bindValue(":pedala_ai_user", $user->getUser());
            $p_sql-> bindValue(":pedala_ai_nome", $user->getNome());
            $p_sql-> bindValue(":pedala_ai_data_nasc", $user->getData_nasc());
            $p_sql-> bindValue(":pedala_ai_email", $user->getEmail());
            $p_sql-> bindValue(":pedala_ai_telefone", $user->getTelefone());
            $p_sql-> bindValue(":pedala_ai_tipo_sangue", $user->getTipo_sangue());
            $p_sql-> bindValue(":pedala_ai_alergias", $user->getAlergias());
            $p_sql-> bindValue(":pedala_ai_contato_emer", $user->getContato_emer());
            $p_sql-> bindValue(":pedala_ai_convenio", $user->getConvenio());
            $p_sql-> bindValue(":pedala_ai_medicacoes", $user->getMedicacoes());
            $p_sql-> bindValue(":pedala_ai_password", $user->getPassword());

            return $p_sql->execute();
        }

        catch(Exception $e){
            print 'Erro ao insirir o Usuário <br>'. $e . '<br>';
        }
    }
    public function read() {
        try{

            $sql = "SELECT * FROM pedala_ai_user ORDER BY pedala_ai_nome ASC";
            $result = Conexao::getConexao()->query($sql);

            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            
            $f_lista = array();

            foreach($lista as $l){
                $f_lista[] = $this->listaUsuarios($l);
            }
            return $f_lista;

        }catch(Exception $e){
                print 'Erro ao tentar buscar resultados <br>'. $e . '<br>';
            }
    }

    public function update(PedalaAi $user){
        try{
            $sql = "UPDATE pedala_ai_user SET
            pedala_ai_nome = :pedala_ai_nome,
            pedala_ai_data_nasc = :pedala_ai_data_nasc,
            pedala_ai_email = :pedala_ai_email,
            pedala_ai_telefone = :pedala_ai_telefone,
            pedala_ai_tipo_sangue = :pedala_ai_tipo_sangue,
            pedala_ai_alergias = :pedala_ai_alergias,
            pedala_ai_contato_emer = :pedala_ai_contato_emer,
            pedala_ai_convenio = :pedala_ai_convenio,
            pedala_ai_medicacoes = :pedala_ai_medicacoes,
            pedala_ai_password = :pedala_ai_password

            WHERE pedala_ai_id = :pedala_ai_id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql-> bindValue(":pedala_ai_user", $user->getUser());
            $p_sql-> bindValue(":pedala_ai_nome", $user->getNome());
            $p_sql-> bindValue(":pedala_ai_data_nasc", $user->getData_nasc());
            $p_sql-> bindValue(":pedala_ai_email", $user->getEmail());
            $p_sql-> bindValue(":pedala_ai_telefone", $user->getTelefone());
            $p_sql-> bindValue(":pedala_ai_tipo_sangue", $user->getTipo_sangue());
            $p_sql-> bindValue(":pedala_ai_alergias", $user->getAlergias());
            $p_sql-> bindValue(":pedala_ai_contato_emer", $user->getContato_emer());
            $p_sql-> bindValue(":pedala_ai_convenio", $user->getConvenio());
            $p_sql-> bindValue(":pedala_ai_medicacoes", $user->getMedicacoes());
            $p_sql-> bindValue(":pedala_ai_password", $user->getPassword());
            $p_sql->bindValue(":pedala_ai_id", $user->getId());
            return $p_sql->execute();
        }
        catch(Exception $e){
            print 'Erro ao atualizar usuário.<br>'. $e . '<br>';

        }
    }

    public function delete(PedalaAi $user){
        try{
            $sql="DELETE FROM pedala_ai_user WHERE pedala_ai_id = :pedala_ai_id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":pedala_ai_id", $user->getId());
            return $p_sql->execute();
        }
        catch(Exception $e){
        }
    }

    private function listaUsuarios($row){
        $user = new PedalaAi();
        $user->setId($row['pedala_ai_id']);
        $user->setUser($row['pedala_ai_user']);
        $user->setNome($row['pedala_ai_nome']);
        $user->setData_nasc($row['pedala_ai_data_nasc']);
        $user->setEmail($row['pedala_ai_email']);
        $user->setTelefone($row['pedala_ai_telefone']);
        $user->setTipo_sangue($row['pedala_ai_tipo_sangue']);
        $user->setAlergias($row['pedala_ai_tipo_alergias']);
        $user->setContato_emer($row['pedala_ai_contato_emer']);
        $user->setConvenio($row['pedala_ai_convenio']);
        $user->setMedicacoes($row['pedala_ai_medicacoes']);
        $user->setPassword($row['pedala_ai_password']);
        return $user;
    }

}

