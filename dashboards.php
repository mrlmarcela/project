<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Projetos</title>
<style>
    .line-vertical {
        height: 41px;
        border-right: 3px solid gray;
    }
</style>
<div class="container">
    <div class="row mt-5 mb-2">
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-3 col-1">
            <div class="row">
                <div class="fs-3 col-xxl-8 col-xl-9 col-lg-7 col-md-9 col-sm-8 col-8">
                    <p class="fs-3 text-dark">Dashboards</p>
                </div>
                <div class="line-vertical col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-8">
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-3 col-8">
            <a href="projetos.php" style="text-decoration: none" class="fs-3 text-secondary">Projetos</a>
        </div>
    </div>
    <div class="row col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-2">
            <button class="btn border w-100 p-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                        Todos os projetos
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-8">
                        <img class="float-end mt-1" src="./img/seta-para-baixo.png" height="20" width="20">
                    </div>
                </div>
            </button>
            <ul class="dropdown-menu col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Todos os projetos</a></li>
                <li><a class="dropdown-item" href="#">Escolher projeto</a></li>
            </ul>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
            <div class="card">
                <div class="card-body p-1">
                    <div class="row d-flex justify-content-start ms-1">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2">
                            <img class="mt-1" src="./img/gerente.png" height="20" width="20">
                        </div>
                        <div class="p-1 ms-2 text-dark col-xxl-8 col-xl-7 col-lg-8 col-md-8 col-sm-8">Gerente</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
            <div class="card">
                <div class="card-body p-1">
                    <div class="row d-flex justify-content-start ms-1">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2">
                            <img class="mt-1" src="./img/entidade.png" height="20" width="20">
                        </div>
                        <div class="p-1 ms-2 text-dark col-xxl-8 col-xl-7 col-lg-8 col-md-8 col-sm-8">Cliente</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
            <div class="card">
                <div class="card-body p-1">
                    <div class="row d-flex justify-content-start ms-1">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2">
                            <img class="mt-1" src="./img/status.png" height="20" width="20">
                        </div>
                        <div class="p-1 ms-2 text-dark col-xxl-8 col-xl-7 col-lg-8 col-md-8 col-sm-8">Status</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-4">
            <div class="row me-3 col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                <div class="card rounded-3 mb-4 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="height:132px">
                    <div class="row mt-3">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                            <p class="fs-5">Projetos</p>
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                            <p class="fs-1 fw-bold">22</p>
                        </div>
                    </div>
                </div>
                <div class="card rounded-3 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="height:132px">
                    <div class="row mt-3">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                            <p class="fs-5">Tarefas</p>
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                            <p class="fs-1 fw-bold">102</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 rounded-3 card">
                <div class="row mt-3">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                        <p class="fs-5">Tarefas x Status</p>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mt-2">
                        <div style="height:180px">
                            <?php
                            include './charts/tarefasxstatus.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-4">
            <div class="row me-3 col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                <div class="card rounded-3 mb-4 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="height:132px">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                            <div class="row text-center">
                                <span class="fs-5 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-2">Esforço estimado</span>
                                <span class="fs-6 text-secondary col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">Em horas</span>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                            <span class="fs-1 fw-bold">657h</span>
                        </div>
                    </div>
                </div>
                <div class="card rounded-3 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="height:132px">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                            <div class="row text-center">
                                <span class="fs-5 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-2">Esforço realizado</span>
                                <span class="fs-6 text-secondary col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">Em horas</span>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                            <p class="fs-1 fw-bold">254h</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 rounded-3 card">
                <div class="row mt-3">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                        <p class="fs-5">Projetos x Clientes</p>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mt-2">
                        <div style="height:180px">
                            <?php
                            include './charts/projetosxclientes.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-4">
            <div class="row me-3 col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                <div class="card rounded-3 mb-4 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="height:132px">
                    <div class="row mt-3">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                            <p class="fs-5">Colaboradores</p>
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                            <p class="fs-1 fw-bold">10</p>
                        </div>
                    </div>
                </div>
                <div class="card rounded-3 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="height:132px">
                    <div class="row mt-3">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                            <p class="fs-5 text-center">Projetos atrasados</p>
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                            <p class="fs-1 fw-bold">3</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 rounded-3 card">
                <div class="row mt-3">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                        <p class="fs-5">Custos estimados x Custos realizados</p>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mt-2">
                        <div style="width:50%">
                            <?php
                            include './charts/custos.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>