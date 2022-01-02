<?php
    require_once "Conexao.php";

    class Usuario{
        private $idusuario;
        private $nome;
        private $email;
        private $senha;
        private $objCon;
    
        function __construct(){
            $this->idusuario = 0;
            $this->nome = "";
            $this->email = "";
            $this->senha = "";
            $this->objCon = new Conexao();
        }
    
        public function getIdusuario(){
          return $this->idusuario;
        }
    
        public function setIdusuario($idusuario){
          $this->idusuario = $idusuario;
        }
    
        public function getNome(){
          return $this->nome;
        }
    
        public function setNome($nome){
          $this->nome = $nome;
        }
    
        public function getEmail(){
          return $this->email;
        }
    
        public function setEmail($email){
          $this->email = $email;
        }
    
        public function getSenha(){
          return $this->senha;
        }
    
        public function setSenha($senha){
          $this->senha = $senha;
        }
    
        function cadastrar(){
          $conexao = $this->objCon->conectar();
          $sql = "INSERT INTO usuario VALUES(0, :nome, :email, sha1(:senha))";
          $comando = $conexao->prepare($sql);
          $comando->bindParam(":nome", $this->nome);
          $comando->bindParam(":email", $this->email);
          $comando->bindParam(":senha", $this->senha);
          $comando->execute();
        }
        function logar(){
          $sql = "SELECT idusuario, email, nome, count(*) 'qtd' FROM usuario WHERE email=:email AND senha=sha1(:senha)";
          $conexao = $this->objCon->conectar();
          $comando = $conexao->prepare($sql);
          $comando->bindParam(":email", $this->email);
          $comando->bindParam(":senha", $this->senha);
          $comando->execute();
          $dados = $comando->fetch(PDO::FETCH_OBJ);
          if ($dados->qtd == 1) {
            session_start();
            $_SESSION["idusuario"] = $dados->idusuario; 
            return true;
          } else {
            return false;
          }
          
        }
    }
?>