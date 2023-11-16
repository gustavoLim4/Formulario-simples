<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="./css/responsivel.css">
    <title>formuçario</title>
</head>

<body>
    <header>
        <div class="site">
            <div class="fundo">
                <h2>Formulario</h2>

                <form action="#" method="post">
                    <div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Email :</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Senha :</label>
                        </div>
                        <div class="form-floating ">
                            <input type="email" class="form-control" id="floatingInput" placeholder="12345-6789" required>
                            <label for="floatingInput">Número de celular :</label>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" for="floatingPassword" placeholder="Digite sua mensagem :" required></textarea>
                        </div>

                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selecione seu sexo</option>
                            <option value="1"> MASCULINO</option>
                            <option value="2">FEMININO</option>
                        </select>

                        <div class="data">
                            <label for="date">Data de nascimento </label>
                            <input type="date" name="date" id="date">
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="" required>
                            <label for="floatingInput">Nome da rua :</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="123.456.789-10" required>
                            <label for="floatingInput">Cep : 123.456.789-10</label>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <img src="./img/sem-foto.png" alt="Imagem Sem Foto" id="imgFoto">
                                    <input type="file" class="form-control" id="foto" name="foto" style="display:none;">
                                    <label for="foto"> Carregue sua imagem facial !!!</label>
                                </div>
                            </div>
                        </div>
                        <div class="btn">
                            <button type="submit" class="btn btn-primary">Enviar Formulario</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </header>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script>
    document.getElementById('imgFoto').addEventListener('click', function() {
        document.getElementById('foto').click();
    });

    document.getElementById('foto').addEventListener('change', function(e) {

        let imgFoto = document.getElementById('imgFoto');
        let arquivo = e.target.files[0];

        if (arquivo) {
            let carregar = new FileReader();

            carregar.onload = function(e) {
                imgFoto.src = e.target.result;
                console.log(imgFoto.src);
            }

            carregar.readAsDataURL(arquivo);
        }

    });
</script>

</html>