<x-import-layout>

    <h1 class="text-2xl font-bold">Importar la lista completa</h1>
    <hr class="mt-2 mb-6 border-2 border-yellow-500">

    <article class="mb-6 card">
        <div class="text-sm text-justify text-gray-500 card-body bh-gray-100">
            <p>Estimado Usuario</p>
            <p>Usted puede importar las listas de control completa en formato Excel o Csv (archivo plano)</p>
        </div>
    </article>

    <article class="mb-6 card">
        <div class="text-sm card-body bh-gray-100">
            <header class="flex items-center justify-between">
                <h1> <i class="far fa-calendar-alt"></i>
                    <strong>AMLC</strong> Lista completa
                </h1>
            </header>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('importExcel') }}" class="form-horizontal" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">Cantidad de
                                        registros</label>
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                        required="required"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">Tipo de
                                        archivo</label>
                                    <select id="detail" name="id_detail" autocomplete="detail" required
                                        class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option disabled selected hidden>Seleccione el tipo de carga</option>
                                        @foreach ($details as $detail)
                                            <option {{ (int) old('id_detail') === $detail->id ? 'selected' : '' }}
                                                value="{{ $detail->id }}">{{ $detail->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-span-6">
                                <label class="block text-sm font-medium text-gray-700">
                                    Cargar Archivo
                                </label>

                                <div
                                    class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48" aria-hidden="true">
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
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            Archivo comprimido;
                                        </p>
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

    </article>
</x-import-layout>