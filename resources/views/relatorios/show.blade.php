
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pull-left">
                    <h2>Detalhes do Relatório</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Título:</strong>
                    {{ $relatorio->titulo }}
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    {{ $relatorio->descricao }}
                </div>
            </div>
            <div class="col-lg-12">
                <a class="btn btn-primary" href="{{ route('relatorios.index') }}">Voltar</a>
            </div>
        </div>
    </div>
