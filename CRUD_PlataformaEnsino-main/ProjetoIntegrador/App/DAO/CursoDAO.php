<?php

    class CursoDAO{

        private $connection;

        public function __construct()
        {
            $dsn = "mysql:host=localhost:3306;dbname=plataforma_ensino";

            $this->connection = new PDO($dsn, 'root', 'daniel123');
        }

        public function insert(CursoModel $model)
        {
            $sql = "INSERT INTO cursos (nomeCurso, descricaoCurso, objetivosCurso) VALUES (?, ?, ?) ";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->descricao);
            $stmt->bindValue(3, $model->objetivos);

            $stmt->execute();

        }

        public function update(CursoModel $model)
        {

        }

        public function select()
        {
            $sql = "SELECT * FROM cursos";

            $stmt = $this->connection->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
    }