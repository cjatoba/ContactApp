<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Criar um novo contato') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="border-4">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" wire:submit.prevent="create" method="post">
                    <div>
                        @if (session()->has('message'))
                            <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md" role="alert">
                              <div class="flex">
                                <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                <div>
                                  <p class="font-bold">{{ session('message') }}</p>
                                </div>
                              </div>
                            </div>
                        @endif
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2">Nome</label>

                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" wire:model="name">

                        <div class="error-message">
                            @error('name')
                                {{$message}}
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Email</label>

                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" wire:model="email">

                        <div class="error-message">
                            @error('email')
                                {{$message}}
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Telefone</label>

                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" wire:model="phone">

                        <div class="error-message">
                            @error('phone')
                                {{$message}}
                            @enderror
                        </div>
                    </div>

                    <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline type="submit">
                        Adicionar Contato
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>