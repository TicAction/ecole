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
                    <h1 class="text-center text-2xl">Liste des observations</h1>

                    <table class="table table-striped">
                        <tr>
                            <th>Date de début et fin</th>
                            <th>Enfant</th>
                            <th>Modifier</th>
                            <th>Voir</th>
                            <th>Supprimer</th>
                        </tr>
                        @foreach($observations as $obs)
                            <tr>

                                <td>
                                    {{Carbon\Carbon::parse($obs->observation_date)->translatedFormat('d-F')}}

                                </td>
                                <td>
                                    {{$obs->kid->FullName}}

                                </td>
                                <td><button class="btn btn-primary"><a href="{{route('observation.edit',$obs->id)}}">Éditer</a></button></td>
                                <td><button class="btn btn-success"><a href="{{route('observation.show',$obs->id)}}">Voir</a></button></td>
                                <td>
                                    <form action="{{ route('observation.destroy',$obs->id) }}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
