{{-- es el archivo para cargar el csv no tocar --}}
<x-import-layout>
    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        @if (Session::has('success'))
            <div class="
    my-3
    block
    text-sm text-left text-white
    bg-green-500
    h-12
    flex
    items-center
    p-4
    rounded-md
  "
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w-6 h-6 mx-2 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                {{ Session::get('success') }}

            </div>
        @endif
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="px-4 py-6 mx-auto overflow-hidden bg-white shadow sm:rounded-lg max-w-7xl sm:px-6 lg:px-8">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Listas de Control (Honduras)
                    </h3>
                    <p class="max-w-2xl mt-1 text-sm text-gray-500">
                        Información de la importación
                    </p>
                </div>
                <div class="border-t border-yellow-500">
                    <div class="px-5 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <div class="text-gray-500">
                            <p class="text-lg font-medium">Registros:</p>
                            <p> {{ $amount }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('importExcel.honduras') }}" class="form-horizontal" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="month" class="block text-sm font-medium text-gray-700">Fecha de
                                        carga</label>
                                    <input type="date" name="date" id="date" autocomplete="given-name"
                                        required="required"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="month" class="block text-sm font-medium text-gray-700">Detalle de
                                        carga</label>
                                    <select id="detail" name="detail" autocomplete="detail" required
                                        class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option disabled selected hidden>Seleccione fecha</option>
                                        @foreach ($details as $detail)
                                            <option {{ (int) old('detail') === $detail->id ? 'selected' : '' }}
                                                value="{{ $detail->id }}">{{ $detail->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Archivo
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
                                                    <span>Seleccione un Archivo</span>
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
                                Cargar archivo
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <article class="mb-6 card px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
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
                                        Fecha de carga
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Detalle de carga
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($expenses as $expense)
                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $expense->date->isoFormat('ll') }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $expense->detail->name }}
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
</x-import-layout>
