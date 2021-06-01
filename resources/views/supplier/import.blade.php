<x-app-layout>

    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">

            <div class="px-4 py-6 mx-auto overflow-hidden bg-white shadow sm:rounded-lg max-w-7xl sm:px-6 lg:px-8">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Listas de Control
                    </h3>
                    <p class="max-w-2xl mt-1 text-sm text-gray-500">
                        Información de la importación
                    </p>
                </div>
                <div class="border-t border-yellow-500">
                    <div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Cantidad de registros
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $amount }}
                            </dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Fecha de registros
                            </dt>
                            @if ($control_three)
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $control_three->report_date }}
                                </dd>
                            @else
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    No disponible
                                </dd>
                            @endif

                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Fecha de importación
                            </dt>
                            @if ($control_three)
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $control_three->created_at }}
                                </dd>
                            @else
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    No disponible
                                </dd>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('importExcel') }}" class="form-horizontal" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">Año</label>
                                    <input type="text" name="year" id="year" autocomplete="given-name"
                                        value="{{ old('year') }}" required="required"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="month" class="block text-sm font-medium text-gray-700">Mes</label>
                                    <select id="month" name="id_month" autocomplete="month" required
                                        class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option disabled selected hidden>Seleccione un mes</option>
                                        @foreach ($months as $month)
                                            <option {{ (int) old('id_month') === $month->id ? 'selected' : '' }}
                                                value="{{ $month->id }}">{{ $month->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="detail" class="block text-sm font-medium text-gray-700">Detalle de
                                        carga</label>
                                    <select id="detail" name="id_detail" autocomplete="detail" required
                                        class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option disabled selected hidden>Seleccione el tipo de carga</option>
                                        @foreach ($details as $detail)
                                            <option {{ (int) old('id_detail') === $detail->id ? 'selected' : '' }}
                                                value="{{ $detail->id }}">{{ $detail->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">Fecha de
                                        Inicio</label>
                                    <input type="date" name="description_beginning" id="description_beginning"
                                        autocomplete="given-name" required="required"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Fecha de
                                        Final</label>
                                    <input type="date" name="description_final" id="description_final"
                                        autocomplete="family-name" required="required"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                <div class="col-span-6">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Cargar Archivo
                                    </label>

                                    <div
                                        class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor"
                                                fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path
                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file-upload"
                                                    class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span>Cargar un Archivo</span>
                                                    <input id="file-upload" name="import_file" type="file"
                                                        class="sr-only" required="required">
                                                </label>
                                                {{-- <p class="pl-1">o arrastrar y soltar</p> --}}
                                            </div>
                                            <p class="text-xs text-gray-500">
                                                CSV UTF-8 con separador ;
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-900 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Importar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="flex flex-col px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 ">
                                    Año
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 ">
                                    Mes
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 ">
                                    Detalle de carga
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 ">
                                    Desde
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 ">
                                    Hasta
                                </th>

                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 ">
                                    Descarga
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 ">
                                    Opciones
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($imports as $import)
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $import->year }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $import->month->name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $import->detail->name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $import->description_beginning->format('d-m-Y') }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $import->description_final->format('d-m-Y') }}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-left whitespace-nowrap ">
                                        <a href="{{ route('exportCsv', $import->description_final) }}"><button
                                                class="mt-4 mr-2 btn btn-blue">Archivo Csv</button></a>
                                        <a href="{{ route('exportXlsx', $import->description_final) }}"><button
                                                class="mt-4 mr-2 btn btn-green">Archivo Xlsx</button></a>
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-left whitespace-nowrap ">
                                        <form action="{{ route('import.destroy', $import->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="mt-4 mr-2 btn btn-red">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
