<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            <div class="baixo">
                <br>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Email</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Ação</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Alterar</button>
                            <button type="button" class="btn btn-secondary btn-sm">Deletar</button></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Alterar</button>
                            <button type="button" class="btn btn-secondary btn-sm">Deletar</button></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Alterar</button>
                            <button type="button" class="btn btn-secondary btn-sm">Deletar</button></td>
                      </tr>
                    </tbody>
                </table>
                <br><br>
                <div class="card-body">
                    <h5 class="card-title">Cadastrar usuario</h5><br>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1">
                          </div>

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
                    <button type="button" class="btn btn-outline-secondary">Cadastrar</button>
                  </div>
            </div>
        </div>
      </div>
</body>
</html>