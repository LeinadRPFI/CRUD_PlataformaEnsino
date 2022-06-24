<?php

    class CursoModel{
        
        public $id, $nome, $descricao, $objetivos;

        public $rows;

        public function save()
        {
            include 'DAO/CursoDAO.php';

            $dao = new CursoDAO();

            $dao->insert($this);
        }

        public function getALLRows()
        {
            include 'DAO/CursoDAO.php';

            $dao = new CursoDAO();

            $this->rows = $dao->select();
        }
    }