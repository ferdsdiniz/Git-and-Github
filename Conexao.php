<?php

class Conexao{

    private static $instance;

    private function __construct()
    { }

    public static function getConexao(){

        if (is_null(self::$instance)){
            self::$instance = new PDO('mysql:host=localhost;dbname=pedala_ai', 'root', '');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            self::$instance->exec('set names utf8');
        }
        return self::$instance;
    }

}
/*                                         para conexão no bd da locaweb:
            self::$instance = new PDO('mysql:host=sisinfobd.msql.dbaas.com.br;dbname=sisinfobd', 'sisinfobd', 'SisInfo22!');

                                           pra não ter confusão do que é o que na nova config:
                            nome do BD: pedala_ai
                            nome da tabela: pedala_ai_user
                            nome das colunas:   pedala_ai_id, 
                                                pedala_ai_user, 
                                                pedala_ai_nome, 
                                                pedala_ai_data_nasc, 
                                                pedala_ai_email, 
                                                pedala_ai_telefone, 
                                                pedala_ai_tipo_sangue,
                                                pedala_ai_alergias, 
                                                pedala_ai_contato_emer, 
                                                pedala_ai_convenio, 
                                                pedala_ai_medicacoes, 
                                                pedala_ai_password

                                                                               -b

*/