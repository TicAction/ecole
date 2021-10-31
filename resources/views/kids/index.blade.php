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

                    <h1 class="text-center text-2xl">Liste des élèves avec observations</h1>
                    <bouton class="btn btn-primary mb-3">
                        <a href={{route('kid.create')}}>Créer un nouvel élève</a>
                    </bouton>

                    <table class="table table-striped">
                        <tr>
                            <th>Nom de l'élève</th>

                            <th>Modifier</th>
                            <th>Voir</th>
                            <th>Supprimer</th>

                        </tr>
                        @foreach($kids as $kid)
                            <tr>
                               <td>{{$kid->FullName}}</td>


                            <td><button class="btn btn-primary"><a href="{{route('kid.edit',$kid->id)}}">Éditer</a></button></td>
                            <td><button class="btn btn-success"><a href="{{route('kid.show',$kid->id)}}">Voir</a></button></td>
                            <td>
                                <form action="{{ route('kid.destroy',$kid->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
