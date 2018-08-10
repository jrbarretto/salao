<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estabsData as $estab)
        <tr>
            <td>{{ $estab->id}} </td>
            <td>{{ $estab->name}} </td>
            <td>
                <a href="{{ route('usuarios.establishment.remove',['user_id' => $user->id, 'estab_id' => $estab->id])}}" class="btn btn-sm btn-danger">Remover</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>