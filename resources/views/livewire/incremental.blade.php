<div class="mt-5 md:mt-0 md:col-span-2">
    <article class="mb-6 card">
        <div class="text-sm card-body bh-gray-100">
            <header class="flex items-center justify-between">
                <h1> <i class="far fa-calendar-alt"></i>
                    <strong>AMLC</strong> Lista completa
                </h1>
            </header>

            <form class="form-horizontal" wire:submit.prevent="save">
                @csrf

                <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Fecha de
                                    inicio</label>
                                <input type="date" name="first-name" id="first-name" autocomplete="given-name"
                                    required="required" wire:model="fecha_ini"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Fecha de
                                    finalización</label>
                                <input type="date" name="first-name" id="first-name" autocomplete="given-name"
                                    required="required" wire:model="fecha_fin"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    ASO-PEP</label>
                                <input type="number" name="first-name" id="first-name" autocomplete="given-name"
                                    wire:model="new_aso_pep"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    ASO-PEP</label>
                                <input type="number" name="first-name" id="first-name" autocomplete="given-name"
                                    wire:model="update_aso_pep"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    FBI</label>
                                <input type="number" name="new_fbi" id="first-name" autocomplete="given-name"
                                    wire:model="new_fbi"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    FBI</label>
                                <input type="number" name="update_fbi" id="first-name" autocomplete="given-name"
                                    wire:model="update_fbi"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    F-PEP</label>
                                <input type="number" name="new_f_pep" id="first-name" autocomplete="given-name"
                                    wire:model="new_f_pep"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    F-PEP</label>
                                <input type="number" name="update_f_pep" id="first-name" autocomplete="given-name"
                                    wire:model="update_f_pep"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    GAFI</label>
                                <input type="number" name="new_gafi" id="first-name" autocomplete="given-name"
                                    wire:model="new_gafi"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    GAFI</label>
                                <input type="number" name="update_gafi" id="first-name" autocomplete="given-name"
                                    wire:model="update_gafi"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    INTERPOL</label>
                                <input type="number" name="new_interpol" id="first-name" autocomplete="given-name"
                                    wire:model="new_interpol"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    INTERPOL</label>
                                <input type="number" name="update_interpol" id="first-name" autocomplete="given-name"
                                    wire:model="update_interpol"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_ofac" class="block text-sm font-medium text-gray-700">Nuevo
                                    OFAC</label>
                                <input type="number" name="new_ofac" id="new_ofac" autocomplete="given-name"
                                    wire:model="new_ofac"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    OFAC</label>
                                <input type="number" name="update_ofac" id="update_ofac" autocomplete="given-name"
                                    wire:model="update_ofac"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_onu" class="block text-sm font-medium text-gray-700">Nuevo
                                    ONU</label>
                                <input type="number" name="new_onu" id="new_onu" autocomplete="given-name"
                                    wire:model="new_onu"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    ONU</label>
                                <input type="number" name="update_onu" id="update_onu" autocomplete="given-name"
                                    wire:model="update_onu"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_opi" class="block text-sm font-medium text-gray-700">Nuevo
                                    OPI</label>
                                <input type="number" name="new_opi" id="new_opi" autocomplete="given-name"
                                    wire:model="new_opi"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_opi" class="block text-sm font-medium text-gray-700">Actualización
                                    OPI</label>
                                <input type="number" name="update_opi" id="update_opi" autocomplete="given-name"
                                    wire:model="update_opi"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_pep_ex" class="block text-sm font-medium text-gray-700">Nuevo
                                    PEP-EX</label>
                                <input type="number" name="new_pep_ex" id="new_pep_ex" autocomplete="given-name"
                                    wire:model="new_pep_ex"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    PEP-EX</label>
                                <input type="number" name="update_pep_ex" id="update_pep_ex" autocomplete="given-name"
                                    wire:model="update_pep_ex"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_pep_nal" class="block text-sm font-medium text-gray-700">Nuevo
                                    PEP-NAL</label>
                                <input type="number" name="new_pep_nal" id="new_pep_nal" autocomplete="given-name"
                                    wire:model="new_pep_nal"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_pep_nal"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    PEP-NAL</label>
                                <input type="number" name="update_pep_nal" id="update_pep_nal" autocomplete="given-name"
                                    wire:model="update_pep_nal"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_pepu_ex" class="block text-sm font-medium text-gray-700">Nuevo
                                    PEPU-EX</label>
                                <input type="number" name="new_pepu_ex" id="new_pepu_ex" autocomplete="given-name"
                                    wire:model="new_pepu_ex"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_pepu_ex"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    PEPU-EX</label>
                                <input type="number" name="update_pepu_ex" id="update_pepu_ex" autocomplete="given-name"
                                    wire:model="update_pepu_ex"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_pepu_nal" class="block text-sm font-medium text-gray-700">Nuevo
                                    PEPU-NAL</label>
                                <input type="number" name="new_pepu_nal" id="new_pepu_nal" autocomplete="given-name"
                                    wire:model="new_pepu_nal"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_pepu_nal"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    PEPU-NAL</label>
                                <input type="number" name="update_pepu_nal" id="update_pepu_nal"
                                    autocomplete="given-name" wire:model="update_pepu_nal"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_ue" class="block text-sm font-medium text-gray-700">Nuevo
                                    UE</label>
                                <input type="number" name="new_ue" id="new_ue" autocomplete="given-name"
                                    wire:model="new_ue"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_ue" class="block text-sm font-medium text-gray-700">Actualización
                                    UE</label>
                                <input type="number" name="update_ue" id="update_ue" autocomplete="given-name" r
                                    wire:model="update_ue"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>
                        <div class="col-span-6 mt-5">
                            <label for="about" class="block text-sm font-medium text-gray-700">
                                Observaciones
                            </label>
                            <div class="mt-1">
                                <textarea id="description" name="description" rows="3" wire:model="description"
                                    class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            </div>
                        </div>
                        <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-900 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Guardar
                            </button>
                        </div>
                    </div>

            </form>
        </div>

    </article>
    <article class="mb-6 card">
        <div class="text-sm card-body bh-gray-100">
            <header class="flex items-center justify-between">
                <h1> <i class="far fa-calendar-alt"></i>
                    <strong>Datos de carga</strong>
                </h1>
            </header>
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Fecha de inicio
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Fecha de finalización
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Archivo Xlsx
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Archivo Csv
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($controls as $control)
                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $control->description_beginning }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $control->description_final }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            @livewire('incremental-original-xlsx',['control'=>$control],key('user-profile-one-'.$control->id))
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            @livewire('incremental-original-csv',['control'=>$control],key('user-profile-two-'.$control->id))
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            <a href="" class="btn btn-red"> <i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </article>
    @push('scripts')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        </script>
    @endpush

</div>
