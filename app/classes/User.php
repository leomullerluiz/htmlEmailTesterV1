<?php
    namespace app\classes;

    class User{

        private $id, $email, $password;

        public function getId(){
            return $this->id;
        }
        
        public function setId($id){
            $this->id = $id;
        }

        public function getEmail(){
            return $this->email;
        }
        
        public function setEmail($email){
            $this->email = $email;
        }

        public function getPassword(){
            return $this->password;
        }
        
        public function setPassword($password){
            $this->password = $password;
        }

    }
?>