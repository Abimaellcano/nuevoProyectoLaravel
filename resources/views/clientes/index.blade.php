{{-- <table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>email</th>
            <th>teléfono</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->telefono }}</td>
            </tr>
        @endforeach
    </tbody>
</table> --}}


@extends('layouts.tailwind')

@section('content')
    <div class="max-w-6xl mx-auto py-8 px-4" x-data="{ showModal: false }">
        <h1 class="text-2xl font-bold mb-6">Listado de Clientes</h1>
        {{-- Botón para abrir el modal --}}
        <div class="mb-4 text-right">
            <button data-modal-target="crearClienteModal" data-modal-toggle="crearClienteModal"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + Nuevo Cliente
            </button>
        </div>

        <table class="w-full border-collapse table-auto">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="border px-4 py-2">Nombre</th>
                    <th class="border px-4 py-2">Correo</th>
                    <th class="border px-4 py-2">Teléfono</th>
                    <th class="border px-4 py-2 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clientes as $cliente)
                    <tr class="hover:bg-gray-50">
                        <td class="border px-4 py-2">{{ $cliente->nombre }}</td>
                        <td class="border px-4 py-2">{{ $cliente->email }}</td>
                        <td class="border px-4 py-2">{{ $cliente->telefono }}</td>
                        <td class="border px-4 py-2 text-center space-x-2">
                            <a href="#" class="text-blue-600 hover:underline">Editar</a>
                            {{-- Eliminar --}}
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="inline"
                                onsubmit="return confirm('¿Estás seguro de eliminar este Cliente?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="border px-4 py-4 text-center text-gray-500">
                            No hay clientes registrados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Modal crear producto -->
        <div id="crearClienteModal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Nuevo Cliente
                        </h3>
                        <button type="button" data-modal-hide="crearClienteModal"
                            class="text-gray-400 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center">
                            ✕
                        </button>
                    </div>

                    <!-- Modal body -->
                    <div class="p-4 space-y-4">
                        <form action="{{ route('clientes.store') }}" method="POST" id="formCrearCliente">
                            @csrf
                            <div class="mb-4">
                                <label for="nombre" class="block font-medium text-gray-700 dark:text-white">Nombre</label>
                                <input type="text" name="nombre" id="nombre"
                                    class="w-full border rounded p-2 dark:bg-gray-600 dark:text-white" required>
                            </div>
                            <div class="mb-4">
                                <label for="correo" class="block font-medium text-gray-700 dark:text-white">Correo</label>
                                <input type="text" name="correo" id="correo"
                                    class="w-full border rounded p-2 dark:bg-gray-600 dark:text-white" required>
                            </div>
                            <div class="mb-4">
                                <label for="telefono" class="block font-medium text-gray-700 dark:text-white">Correo</label>
                                <input type="text" name="telefono" id="telefono"
                                    class="w-full border rounded p-2 dark:bg-gray-600 dark:text-white" required>
                            </div>



                            <!-- Modal footer -->
                            <div class="flex justify-end pt-4 border-t border-gray-200 dark:border-gray-600 space-x-2">
                                <button type="button" data-modal-hide="crearClienteModal"
                                    onclick="document.getElementById('formCrearProducto').reset();"
                                    class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300 dark:bg-gray-600 dark:text-white">
                                    Cancelar
                                </button>
                                <button type="submit" id="btnGuardarCliente"
                                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center space-x-2 disabled:opacity-50 disabled:cursor-not-allowed">

                                    <!-- Texto normal -->
                                    <span id="textGuardar">Guardar</span>

                                    <!-- Texto con animación de carga (oculto por defecto) -->
                                    <span id="textEnviando" class="hidden items-center space-x-2">
                                        <svg aria-hidden="true" class="w-4 h-4 text-white animate-spin fill-white"
                                            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M50 0a50 50 0 1 0 50 50A50 50 0 0 0 50 0Zm0 93.75a43.75 43.75 0 1 1 43.75-43.75A43.75 43.75 0 0 1 50 93.75Z"
                                                fill="currentColor" />
                                            <path
                                                d="M93.97 39.04a4.02 4.02 0 0 0-4.9-2.83 4.06 4.06 0 0 0-2.83 4.9A35.937 35.937 0 1 1 14.1 39.04a4.02 4.02 0 0 0-7.76-2.07 43.75 43.75 0 1 0 87.64 2.07Z"
                                                fill="currentFill" />
                                        </svg>
                                        <span>Enviando...</span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
