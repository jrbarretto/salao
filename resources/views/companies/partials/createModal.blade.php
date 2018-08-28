<!-- Modal -->
<div class="modal fade" id="companyCreateModal" tabindex="-1" role="dialog" aria-labelledby="companyCreateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="companyCreateModalLabel">Cadastro de Empresas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <h3>Empresas: Inclusão</h3>
                    {!! Form::open(['route' => ['companies.store']]) !!}
                        @include('companies.partials.form')
                    {!! Form::close()!!}    
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>