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
                    <h1 class="text-center text-2xl">Liste des Travaux</h1>

                    <table width="100%">
                        <tr>
                            <th>Nom du travail</th>
                            <th>Date de remise</th>
                            <th>Modifier</th>
                            <th>Voir</th>
                            <th>Effacer</th>
                        </tr>
                        @foreach($homeworks as $homework)
                        <tr>
                            <td> {{$homework->homework_name}}</td>
                            <td>{{$homework->homework_date->format('Y-m-d')}}</td>
                            <td>
                                <button class="btn btn-primary"><a href="{{route('homework.edit',$homework->id)}}">Éditer</a></button>
                            </td>
                            <td>
                                <button class="btn btn-primary"><a href="{{route('homework.edit',$homework->id)}}">Voir</a></button>
                            </td>
                            <td>

                                <form action="{{ route('homework.destroy',$homework->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Suprimer</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </table>





                </div>
            </div>
        </div>
    </div>
</x-app-layout>
