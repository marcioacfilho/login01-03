<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <h3>Novo Usuário</h3>
        <form action="" method="post">
          <div class="row">
            <div class="col-6">
              <div class="mt-1">
                <label class="form-label">Nome:</label>
                <input type="text" class="form-control" placeholder="informe o nome...">
              </div>
              <div class="row mt-1">
                <div class="col-5">
                  <label class="form-label">CPF:</label>
                  <input type="text" name="bairro" class="form-control" placeholder="inoforme o cpf...">
                </div>
                <div class="col-5">
                  <label class="form-label">Endereço:</label>
                  <input type="text" name="cidade" class="form-control" placeholder="informe o endereço...">
                </div>
                <div class="col-2 mt-1">
                  <label class="form-label">Nivel:</label>
                  <select name="Nivel" class="form-select">
                    <option selected>...</option>
                    <option></option>
                    <option></option>
                    <option></option>
                  </select>
                </div>
              </div>

              <div class="row mt-1">
                <div class="col-5">
                  <label class="form-label">Email:</label>
                  <input type="text" name="bairro" class="form-control" placeholder="inoforme o email...">
                </div>
                <div class="col-5">
                  <label class="form-label">Senha:</label>
                  <input type="text" name="cidade" class="form-control" placeholder="informe a senha...">
                </div>
                <div class="col-2 mt-1">
                  <label class="form-label">Status:</label>
                  <select name="Nivel" class="form-select">
                    <option selected>...</option>
                    <option></option>
                    <option></option>
                    <option></option>
                  </select>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>