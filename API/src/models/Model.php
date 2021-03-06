<?php

    namespace src\models;
    use src\config\Connection;

    class Model extends Connection{


        private $id;
        private $nome;
        private $email;
        private $telefone;
        private $mensagem;


        public function __construct(){
            parent::__construct();
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * @param mixed $mensagem
         */
        public function setMensagem($mensagem)
        {
            $this->mensagem = $mensagem;
        }

        /**
         * @param mixed $nome
         */
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        /**
         * @return mixed
         */
        public function getNome()
        {
            return $this->nome;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @return mixed
         */
        public function getTelefone()
        {
            return $this->telefone;
        }

        /**
         * @return mixed
         */
        public function getMensagem()
        {
            return $this->mensagem;
        }

        /**
         * @param mixed $telefone
         */
        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }


        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }











        public function getFeed(){
            $sql = $this->pdo->prepare(
                "SELECT * from feed ORDER BY date ASC"
            );

            $sql->execute();

            if($sql->rowCount() < 1)
                throw new \Exception("Nenhum feed cadastrado");

            return $sql->fetchAll(\PDO::FETCH_ASSOC);
        }



        public function getAllContacts(){
            $sql = $this->pdo->prepare(
                "SELECT * from contact ORDER BY id ASC"
            );
            $sql->execute();

            if($sql->rowCount() < 1)
                throw new \Exception("Nenhum Contato Cadastrado!");

            return $sql->fetchAll(\PDO::FETCH_ASSOC);
        }




        public function storeContacts(){

            $nome = $this->getNome();
            $email = $this->getEmail();
            $telefone = $this->getTelefone();
            $mensagem = $this->getMensagem();

            $sql = $this->pdo->prepare(

                "INSERT INTO contact (name,email, phone, mensagem ) 
                            VALUES (:name,:email, :phone, :post)"

            );

            $sql->bindValue(":name", $nome);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":phone", $telefone);
            $sql->bindValue(":post", $mensagem);

            $sql->execute();

            if($sql->rowCount() !== 1)
                throw new \Exception("Falha ao Enviar Contato!");

            return "Contato salvo com Sucesso!";

        }


        public function FeedSearch(){

            $id = $this->getId();


            $sql = $this->pdo->prepare(

                "SELECT * from feed where id = :id"

            );

            $sql->bindValue(":id", $id);


            $sql->execute();

            if($sql->rowCount() !== 1)
                throw new \Exception("Erro ao procurar Feed");

            return $sql->fetchAll(\PDO::FETCH_ASSOC);

        }




    }
