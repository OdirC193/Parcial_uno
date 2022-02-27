<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Parcial_Uno_1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="recibe_clientes.php">
                    Clientes
                </a>
                </li>
                
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <div class="container my-4">

    <div class="bg-white shadow-sm p-4 rounded">

        <div class="d-flex justify-content-between align-items-center">
            <h4>Listado de Clientes</h4>
            
        </div>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DUI</th>
                    <th>Direccion</th>
                    <th>Telefono </th>
                    <th>Email</th>

                    
                </tr>
            </thead>
            <tbody>
            <a href="form_clientes.php" class="btn btn-primary">Nuevo</a>
                <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
                <tr>
                    <td><?php echo $_POST["codigo"]; ?></td>
                    <td><?php echo $_POST["nombres"]; ?></td>
                    <td><?php echo $_POST["apellidos"]; ?></td>
                    <td><?php echo $_POST["dui"]; ?></td>
                    <td><?php echo $_POST["direccion"]; ?></td>
                    <td><?php echo $_POST["telefono"]; ?></td>
                    <td><?php echo $_POST["email"]; ?></td>
                </tr>
                <?php endif?>
            </tbody>
        </table>
    </div>



    </div>

</body>
</html>
