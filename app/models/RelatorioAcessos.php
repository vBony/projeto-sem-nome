<?php
class RelatorioAcessos extends modelHelper{
    private $tabela = 'relatorio_acessos';

    public function incluir($ip){
        $data_hora = date("Y-m-d H:i:s");

        try{
            $sql = "INSERT INTO relatorio_acessos(ra_id, ra_ip, ra_data_hora) 
                    VALUES (NULL, :ip, :data_hora)";
            
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":ip", $ip);
            $sql->bindValue(":data_hora", $data_hora);
            $sql->execute();
        }catch(Exception $e){
            return var_dump($e->getMessage());
        }
    }

    public function getUltimoAcesso($ip){
        $sql = "SELECT * FROM $this->tabela WHERE ra_ip = :ip ORDER BY ra_id DESC LIMIT 1";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(":ip", $ip);
        $sql->execute();

        if($sql->rowCount() > 0){
            return $sql->fetch(PDO::FETCH_ASSOC);
        }else{
            return null;
        }
    }
}