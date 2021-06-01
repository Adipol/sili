<div>
    <div class="card">
        <div class="card-header">

            <input class="form-control w-100" placeholder="Escriba el usuario o email" type="text"
                wire:model="search" />

        </div>

        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Ip</th>
                        <th>Navegador</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha de actualización</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($devices as $device)
                        <tr>
                            <td>{{ $device->name }}</td>
                            <td>{{ $device->email }}</td>
                            <td>{{ $device->ip }}</td>
                            <td>{{ $device->device_type }}</td>
                            <td>{{ $device->created_at }}</td>
                            <td>{{ $device->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
