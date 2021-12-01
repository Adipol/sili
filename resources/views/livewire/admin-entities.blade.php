<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control w-100" placeholder="Escriba el nombre de la entidad">
        </div>
        @if ($entities->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($entities as $entity)
                            <tr>
                                <td>{{ $entity->name }}</td>
                                <td width="10px">
                                    {{-- <a class="btn btn-primary"
                                        href="{{ route('admin.entity.edit', $entity) }}">Editar</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $entities->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
