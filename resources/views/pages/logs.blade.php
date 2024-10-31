{{-- resources/views/pages/index.blade.php --}}
@extends('app')

@section('title', 'Logs')

@section('content')
<div class="container">
    <form action="{{ route('logs.filter') }}">
        <input type="date" id="dateFilter" placeholder="Filtrer par date" class="mb-4 border border-gray-300 rounded p-2">
        <button class="bg-slate-700 py-2 px-1 rounded-md text-white duration-500 transition-all hover:bg-slate-200" type="submit">Filtrer</button>
    </form>

    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table id="logstable" class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">ID</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Nom</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Matricule</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Cartes utilisés</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Dates</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Heures de premier entrés</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Heures de dernière sortie</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Nombre de pause</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Volume des pause</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($results as $logunique )
                            <tr>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{$logunique['id']}}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{$logunique['Name']}}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{$logunique['pin']}}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{$logunique['card_no']}}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{$logunique['time']}}

                                    </p>
                                </td>

                                <td class="p-4 border-b border-blue-gray-50">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{$logunique['event_point_name']}}
                                    </p>
                                </td>
                                @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection