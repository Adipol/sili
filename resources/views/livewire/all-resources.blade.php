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
                                    carga</label>
                                <input type="date" name="fecha-carga" id="fecha_carga" autocomplete="given-name"
                                    required="required" wire:model="fecha_carga"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
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
                    <strong>Datos de Carga</strong>
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
                                        Fecha de registro
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Fecha de carga
                                    </th>
                                    {{-- <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Archivo XLSX
                                    </th> --}}
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Archivo CSV
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($lists as $list)
                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $list->updated_at->isoFormat('lll') }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $list->date->isoFormat('ll') }}
                                        </td>
                                        {{-- <td class="flex px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            @livewire('incremental-xlsx',['list'=>$list],key('user-profile-one-'.$list->id))
                                        </td> --}}
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            @livewire('incremental-csv',['list'=>$list],key('user-profile-two-'.$list->id))
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
</div>
