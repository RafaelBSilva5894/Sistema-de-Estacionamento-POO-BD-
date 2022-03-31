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
    function confirmacao(id) {
     var resposta = confirm("Deseja remover as irformações desse carro?");
     if (resposta == true) {
          window.location.href = "exclusao.php?id="+id;
     }
}
    </script>
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col-md-12 mt-5">  
            <h1 class="text-center" style="font-family:verdana">Controle Estacionamento Fatec Prudente</h1>
            <hr style="height: 1px; color: black; background-color: black;">
          </div>
        </div>
    <div class="row">
     <div class="col-md-12">
       <table table class="table table-light">
        <thead>
         <tr>
             <th scope="col">ID</th>
             <th scope="col">Placa</th>
             <th scope="col">Modelo</th>
             <th scope="col">Cor</th>
             <th scope="col">Proprietário</th>
             <th scope="col">Telefone</th>
             <th scope="col">Ação</th>
         </tr>
        </thead>
        <tbody>
            <?php 
              include 'modelo.php';
              $modelo = new Modelo();
              $rows = $modelo->fetch();
              $i = 1;
              if(!empty($rows)){
                foreach($rows as $row){
              ?> 
              <tr>
               <td scope="row"><?php echo $i++; ?></td>
               <td scope="row"><?php echo $row['placa']; ?></td>
               <td scope="row"><?php echo $row['modelo']; ?></td>
               <td scope="row"><?php echo $row['cor']; ?></td>
               <td scope="row"><?php echo $row['proprietario']; ?></td>
               <td scope="row"><?php echo $row['telefone']; ?></td>
               <td scope="row">
                <a href="leitura.php?id=<?php echo $row ['id']; ?>" style="font-family:verdana" class="btn btn-info">Detalhes
                </a>&nbsp;&nbsp;
                <a href="exclusao.php?id=<?php echo $row ['id']; ?>" style="font-family:verdana" class="btn btn-danger" onclick="confirmacao('1')">Excluir
                </a>&nbsp;&nbsp;
                <a href="alterar.php?id=<?php echo $row ['id'];  ?>" style="font-family:verdana" class="btn btn-warning">Alterar
                </a>&nbsp;
               </td>
              </tr> 

              <?php   
                }
              }else{
                  echo "Sem informações cadastradas!";
              }
             ?>
        </tbody>
       </table>
       <div>
             <br><button name="" onclick = "letchangepage()" class="btn btn-primary"> Página Principal</button>
             </div>
     </div>
    </div>
   </div>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script> function letchangepage () { 
    window.location.assign("index.php"); 
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
