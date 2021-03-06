<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
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
             <div class="col-md-5 mx-auto">
               <?php 
                 include 'modelo.php';
                 $modelo = new Modelo();
                 $id = $_REQUEST['id'];
                 $row = $modelo->fetch_single($id);
                 if(!empty($row)){
               ?>
              <div class="card"> 
               <div class="card-header">
               <strong> Informação do Carro </strong>
              </div>
               <div class="card-body">
                   <p><strong>Placa:</strong> <?php echo $row['placa']; ?></p>
                   <p><strong>Modelo:</strong> <?php echo $row['modelo']; ?></p>
                   <p><strong>Cor:</strong> <?php echo $row['cor']; ?></p>
                   <p><strong>Proprietário:</strong> <?php echo $row['proprietario']; ?></p>
                   <p><strong>Telefone:</strong> <?php echo $row['telefone']; ?></p>
            </div>
           </div>
           <div>
             <br><button name="" onclick = "letchangepage()" class="btn btn-secondary"> Anterior</button>
           </div>
           <div>
             <br><button name="" onclick = "letchange()" class="btn btn-primary"> Página principal</button>
           </div>
           <?php 
            }else{
              echo "no data";
            } 
            ?>
          </div>
         </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script> function letchangepage () { 
    window.location.assign("carros.php"); 
   } </script>

   <script> function letchange () { 
    window.location.assign("index.php"); 
   } </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
