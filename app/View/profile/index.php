<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>GeVac</title>
</head>
<body>
    <div class="row">
        <div class="col-4 menu">
            <p class="title" href="#">GeVac</p>
            <hr>
            <div class="buttons">
                <button type="button" class="btn btn-lg btn-outline-success">Dashboard</button><br>
                <button type="button" class="btn btn-lg btn-outline-success">Controle</button><br>
                <button type="button" class="btn btn-lg btn-outline-success">Profile</button><br>
                <button type="button" class="btn btn-lg btn-outline-success">Logout</button><br>
            </div>
        </div>
        <div class="col-8 corpo">
            <div class="topo">
                <div class="content">
                    <i class="bi bi-person" style="font-size: 100px;"></i>

                    <div class="row" style="width: 100%;">
                        <div class="col-sm-6">
                        <div class="card" style="border: 0;">
                            <div class="card-body">
                            <h5 class="card-title">Usuario: nome</h5>
                            <p class="card-text">Email: teste@gmail.com</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <br>
            <div class="baixo">
                <div class="card-body">
                    <h5 class="card-title">Edit profile</h5><br>
                    <h6 class="card-subtitle mb-2 text-muted">
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                          </div>
                          <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                        </div>
      
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                          </div>
                          <input type="password" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1">
                        </div>
                    </h6>
                    <button class="btn btn-primary" type="submit">Solicitar</button>
                    <button type="button" class="btn btn-outline-secondary">Redefinir senha</button>
                  </div>
            </div>
        </div>
      </div>
</body>
</html>