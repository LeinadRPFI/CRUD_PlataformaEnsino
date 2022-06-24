<?php

    class CursoController{

        public static function index()
        {
            include 'View/modules/Curso/ListCurso.php';

            include 'Model/CursoModel.php';

            $model = new CursoModel();
            $model->getALLRows();
        }

        public static function form()
        {
            include 'View/modules/Curso/FormCurso.php';
        }

        public static function save()
        {
            include 'Model/CursoModel.php';

            $model = new CursoModel();

            $model->nome = $_POST['nome'];
            $model->descricao = $_POST['descricao'];
            $model->objetivos = $_POST['objetivos'];

            $model->save();

            echo "AOUBa";

            header("Location: /curso");
        }
    }