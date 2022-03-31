<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
    <script language="Javascript">
    function confirmacao() {
     var resposta = confirm("Deseja salvar as irformações desse carro?");
     if (resposta == true) {
          window.location.href = "modelo.php?id="+id;
     }
}
    </script>
  </head>
  <body>
    <div class="container">
        <div class="row">
        <div class="col-md-12 mt-5">
         <h1 class ="text-center" style="font-family:verdana">Controle Estacionamento Fatec Prudente</h1> 
         <hr style="height: 1px; color: black; background-color:black;">
        </div>
     </div>
     <div class="row">
     <div class="col-md-5 mx-auto"> 
         <?php
           include 'modelo.php';
           $modelo = new Modelo();
           $insert = $modelo->insert();
         ?>
         <form action="" method="post">
            <div class="form-group">
              <label for=""><strong>Placa:</strong></label> 
              <input type="text" name="placa" class="form-control">
           </div>
           <div class="form-group">
              <label for=""><strong>Modelo:</strong></label> 
              <input type="text" name="modelo" class="form-control">
           </div>
           <div class="form-group">
              <label for=""><strong>Cor:</strong></label> 
              <input type="text" name="cor" class="form-control">
           </div>
           <div class="form-group">
              <label for=""><strong>Proprietário:</strong></label> 
              <input type="text" name="proprietario" class="form-control">
           </div>
           <div class="form-group">
              <label for=""><strong>Telefone:</strong></label> 
              <input type="text" name="telefone" class="form-control">
           </div>
           <div class="form-group">
            <br><button type="submit" name="submit" class="btn btn-success" onclick="confirmacao('1')">Salvar</button>
           </div>
           </form>
           <div>
           <br><button name="" onclick = "letchangepage()" class="btn btn-info"> Ver carros</button>
           </div>
        </div>
      </div>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script> function letchangepage () { 
    window.location.assign("carros.php");  
   } </script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <?php 
      if(!isset($_GET['id'])) {
         echo "<script>
         document.querySelector('form').addEventListener( 'submit', (event) => {
            var msg = confirm('Atenção: Deseja Salvar esse Registro?');

            if (msg){
               
               
        
            }
            else{
               event.preventDefault();
        
        
            }
           
         })
         </script>";
      }
      else {
         echo "<script>
         document.querySelector('form').addEventListener( 'submit', (event) => {
            var msg = confirm('Atenção: Deseja Alterar esse Registro?');

            if (msg){
               
               
        
            }
            else{
               event.preventDefault();
        
        
            }
           
         })
         </script>";
      }
    ?>
  </body>
</html>
