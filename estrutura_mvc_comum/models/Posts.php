<?php

class Posts extends model{

    public function getPosts($limit = 0){
        $retorno = array();

        $query = "Select * FROM posts";
        if($limit > 0){
            $query .= " LIMIT {$limit}";
        }
        $query = $this->db->query($query);

        if( $query->rowCount() > 0 ){
            $retorno = $query->fetchAll();
        }

        return $retorno;
    }

}