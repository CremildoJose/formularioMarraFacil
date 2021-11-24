<div class="card" style="background-color: #cee2ce;">
    <div class="card-header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


        <h4 class="mb-0">
            <center><span>Quadros em Excel de dados da produção de 2019/20</span></center>
        </h4>
    </div>
    <body>
    <div class="card-body">

        <div id="accordion">

            <div class="card">
                <div class="card-header" id="header_seccao_g">
                    <h2 class="mb-0">
                        Insira a questao
                    </h2>
                </div>

                <div >
                    <div class="card-body">
                        <form action="{{ URL::to('/insert') }}" method="get">
                            @csrf
                            <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="nivel" id="nivel" required>
                                <option selected>Que nivel E?</option>
                                <option value="basico">Secundario</option>
                                <option value="superior">Universitario</option>
                            </select>
                            </div>
                            <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="instituicao" id="instituicao" required>
                                <option selected>Indique a instituicao</option>
                                <option value="uem">UEM</option>
                                <option value="up">UP</option>
                                <option value="up">Secundario</option>
                            </select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="disciplina" id="instituicao" required>
                                    <option selected>Indique a Disciplina</option>
                                    <option value="Matematica">Matematica</option>
                                    <option value="Portugues">Portugues</option>
                                    <option value="Fisica">Fisica</option>
                                    <option value="Quimica">Quimica</option>
                                    <option value="Biologia">Biologia</option>
                                    <option value="Ingles">Ingles</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><b>Questao</b></label>
                                <input type="text" class="form-control" id="questao" name="questao" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="formFileDisabled" class="form-label">Escolha uma foto</label>
                                <input class="form-control" type="file" id="ficheiro" name="ficheiro" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Opcao Correcta</label>
                                <input type="text" class="form-control" id="opcao_corecta" name="opcao_corecta">
                                <div id="emailHelp" class="form-text">Insira aqui a opcao correcta. Nao implica esta ordem na resulucao!</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Opcao 2</label>
                                <input type="text" class="form-control" id="opcao1" name="opcao1" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Opcao 3</label>
                                <input type="text" class="form-control" id="opcao2" name="opcao2">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Opcao 4</label>
                                <input type="text" class="form-control" id="opcao3" name="opcao3">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>
    </body>
</div>
