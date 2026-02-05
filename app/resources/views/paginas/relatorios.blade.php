<x-layout titulo="Relatórios - Senac">
     <!-- Abas -->
        <ul class="nav nav-pills gap-2 mb-4">
            <li class="nav-item">
                <a class="btn btn-primary" href="/dashboardAdm.html"><i
                        class="bi bi-speedometer2 me-1"></i>Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="/cursos.html"><i class="bi bi-clipboard2-check me-1"></i> Cursos</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="/unidadesCurriculares.html"><i class="bi bi-people me-1"></i> UCs</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="/docentes.html"><i class="bi bi-calendar2-event me-1"></i> Docentes</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="/alunos.html"><i class="bi bi-graph-up-arrow me-1"></i>
                    Alunos</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="/turmas.html"><i class="bi bi-graph-up-arrow me-1"></i>
                    Turmas</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary active" href="/relatórios.html"><i class="bi bi-graph-up-arrow me-1"></i>
                    Relatórios</a>
            </li>
        </ul>

        <!-- Conteudo Principal -->

        <section class="container-fluid">

            <!-- Cabeçalho -->
            <h2 class="fw-bold">Relatórios de Avaliação</h2>
            <p class="text-muted mb-4">Revise e aprove os relatórios enviados pelos docentes</p>

            <!-- Cards -->
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="card card-resumo p-3 hover-shadow">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <small class="text-muted">Pendentes</small>
                                <h4 class="fw-bold text-warning">2</h4>
                            </div>
                            <i class="bi bi-clock text-warning fs-3"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-resumo p-3 hover-shadow">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <small class="text-muted">Aprovados</small>
                                <h4 class="fw-bold text-success">1</h4>
                            </div>
                            <i class="bi bi-check-circle text-success fs-3"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-resumo p-3 hover-shadow">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <small class="text-muted">Rejeitados</small>
                                <h4 class="fw-bold text-danger">0</h4>
                            </div>
                            <i class="bi bi-x-circle text-danger fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filtro -->
            <div class="d-flex justify-content-end align-items-center mb-3 gap-3 flex-wrap">
                

                <div class="filter-tabs btn-group shadow-sm">
                    <button class="btn btn-light">Todos</button>
                    <button class="btn btn-light">Pendentes</button>
                    <button class="btn btn-light">Aprovados</button>
                    <button class="btn btn-light">Rejeitados</button>
                </div>
            </div>

            <!-- TABELA -->
            <div class="card border-0 shadow-sm">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="text-muted">Aluno</th>
                                <th class="text-muted">UC</th>
                                <th class="text-muted">Docente</th>
                                <th class="text-muted">Resultado</th>
                                <th class="text-muted">Data</th>
                                <th class="text-muted">Status</th>
                                <th class="text-muted">Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <strong>Ana Carolina Moreira de Andrade Sanitária</strong><br>
                                    <small class="text-muted">RA: 1143086799</small>
                                </td>
                                <td>Desenvolvimento de Banco de Dados</td>
                                <td>Allan Sobral da Silva</td>
                                <td>
                                    <span class="badge badge-soft-success">Desenvolvido</span>
                                </td>
                                <td>19/01/2026</td>
                                <td>
                                    <span class="badge badge-soft-warning">Pendente</span>
                                </td>
                                <td>
                                    <button class="btn btn-outline-secondary btn-sm">
                                        <i class="bi bi-file-earmark-text"></i> Ver
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
</x-layout>