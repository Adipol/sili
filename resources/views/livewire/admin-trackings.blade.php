<div>
    <div class="card">
        <div class="card-header">
            <input class="form-control w-100" placeholder="Escriba un nombre">
        </div>
        {{-- @if ($users->count()) --}}
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>device type</th>
                        <th>Email</th>
                        <th>Entidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($devices as $device)

                        <tr>
                            <td>1</td>
                            <td>{{ $device->device_type }}</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="card-footer">
                {{ $users->links() }}
            </div> --}}
        {{-- @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif --}}
    </div>
</div>
