<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                  @include('include/message')
                    <h1 class="text-center text-2xl">Liste des devoirs et leçons de l'année</h1>

                    <table class="table table-striped">
                        <tr>
                            <th>Semaine</th>
                            <th class="text-center">Date de début et fin</th>
                            <th>Modifier</th>
                            <th>Voir</th>
                            <th>Supprimer</th>
                            <th>Publier</th>
                        </tr>
                        @foreach($studies as $studie)
                            <tr>
                                <td>{{$studie->week}}</td>
                                <td>Du
                                    {{Carbon\Carbon::parse($studie->start_date)->translatedFormat('d-F')}} //
                                   Au
                                    {{Carbon\Carbon::parse($studie->end_date)->translatedFormat('d-F')}}
                                </td>
                                <td><button class="btn btn-primary"><a href="{{route('admins.edit',$studie->id)}}">Éditer</a></button></td>
                                <td><button class="btn btn-success"><a href="{{route('admins.show',$studie->id)}}">Voir</a></button></td>
                                <td>
                                    <form action="{{ route('admins.destroy',$studie->id) }}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td>

                                    <input type="checkbox" {{$studie->publish === 'on'? 'checked' : ''}}


                                </td>

                                </td>
                            </tr>

                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
