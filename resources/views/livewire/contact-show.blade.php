<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Listagem de contatos') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <table class="table-fixed border-4 border-light-blue-500 border-opacity-7 w-full text-center">
              <thead>
                <tr>
                  <th class="w-1/4">Nome</th>
                  <th class="w-2/4">E-mail</th>
                  <th class="w-2/4">Telefone</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                      <td>{{ $contact->name }}</td>
                      <td>{{ $contact->email }}</td>
                      <td>{{ $contact->phone }}</td>
                    </tr>
                @endforeach                
              </tbody>
            </table>
        </div>
    </div>
</div>
    