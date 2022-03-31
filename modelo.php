<?php

class Modelo{
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "poo_crud";
    private $conn;

    public function __construct()
    {
        try{
            $this->conn = new mysqli($this-> server, $this->username, $this->password, $this->db);
        }catch(Exception $e){
           echo "A conexão falhou!" . $e->getMessage();
        }
    }
        public function insert()
        {
            if (isset($_POST['submit']))
            {  if(isset($_POST['placa'])&& isset($_POST['modelo']) && isset($_POST['cor']) && isset($_POST['proprietario']) && isset($_POST['telefone'])){
               if(!empty($_POST ['placa']) && !empty($_POST ['modelo']) && !empty($_POST ['cor']) && !empty($_POST ['proprietario']) && !empty($_POST ['telefone']) ){
                  
                    $placa = $_POST['placa'];
                    $modelo = $_POST['modelo'];
                    $cor = $_POST['cor'];
                    $proprietario = $_POST['proprietario'];
                    $telefone = $_POST['telefone'];

                    $query = "INSERT INTO carros (placa, modelo, cor ,proprietario, telefone) 
                               VALUES ('$placa' , '$modelo' , '$cor' , '$proprietario' , '$telefone')";
                    if($sql = $this->conn->query($query)) {
                     echo "<script>alert('Carro adicionado com sucesso!');</script>";
                     echo "<script>window.location.href = 'index.php';</script>";
                    }else{
                        echo "<script>alert('Falhou!');</script>";
                        echo "<script>window.location.href = 'index.php';</script>";
                    }        

               }else{
                   echo "<script>alert('Nenhuma informação digitada!');</script>";
                   echo "<script>window.location.href = 'index.php';</script>";
               }
            }   
        }    
    }
    public function fetch(){
      $data = null;

      $query = "SELECT * FROM carros";
      if($sql = $this->conn->query($query)){
         while($row = mysqli_fetch_assoc($sql)){
           $data[] = $row;
         } 
      }
      return $data;
    }

    public function delete($id)
    {
        $query = "DELETE FROM carros WHERE id ='$id'";
        if($sql = $this->conn->query($query))
        {
            return true;
        }else{
            return false;
        }
    }

    public function fetch_single($id){

      $data = null;
      $query = "SELECT * FROM carros WHERE id ='$id'";
      if($sql = $this->conn->query($query)){
          while($row = $sql->fetch_assoc()){
            $data = $row;
          }
      }
      return $data;
    }

    public function edit($id)
    {
        $data = null;
        $query = "SELECT * FROM carros WHERE id = '$id'";
        if($sql = $this->conn->query($query)){
            while($row = $sql->fetch_assoc()){
              $data = $row;
              }
        }
        return $data;
    }

    public function update($data){
        $query = "UPDATE carros SET placa = '$data[placa]', modelo = '$data[modelo]', cor = '$data[cor]', proprietario = '$data[proprietario]', telefone = '$data[telefone]' 
                  WHERE id='$data[id]' ";
        if($sql = $this->conn->query($query)){
            return true;
        }else{
          return false;
        } 
    } 
}
?>       