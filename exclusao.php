<?php 
   include 'modelo.php';
   $modelo = new Modelo();
   $id = $_REQUEST['id'];
   $delete = $modelo->delete($id);

   if($delete){
      echo "<script>alert('Excluido com sucesso!');</script>";
      echo "<script>window.location.href = 'carros.php';</script>";
   }
?>
