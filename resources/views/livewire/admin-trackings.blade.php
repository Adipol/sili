<div>
    <div class="card">
        <div class="card-header">
            <input class="form-control w-100" placeholder="Escriba el usuario a buscar">
        </div>
        @if ($devices->count())
            <div class="card-body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Ip</th>
                            <th>Navegador</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha de actualización</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($devices as $device)

                            <tr>
                                <td>2</td>
                                <td>{{ $device->name }}</td>
                                <td>{{ $device->ip }}</td>
                                <td>{{ $device->device_type }}</td>
                                <td>{{ $device->created_at }}</td>
                                <td>{{ $device->updated_at }}</td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <div class="row justify-content-center">
                {{ $devices->links() }}
            </div> --}}
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
