<div>
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-table>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Nombre
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Tipo de Documento
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Nro. de Documento
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Tipo
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Opciones</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($peps as $pep)
                        <tr>
                            <td class="px-6 py-4 text-xs font-medium whitespace-nowrap ">
                                {{ $pep->full_name }}
                            </td>
                            <td class="px-6 py-4 text-xs font-medium whitespace-nowrap ">
                                {{ $pep->type_document }}
                            </td>
                            <td class="px-6 py-4 text-xs font-medium whitespace-nowrap ">
                                {{ $pep->nro_document }}
                            </td>
                            <td class="px-6 py-4 text-xs font-medium whitespace-nowrap ">
                                {{ $pep->code }}</>
                                {{-- <div class="text-sm text-gray-500">{{ $pep->code }}</div> --}}
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-table>
    </div>
</div>