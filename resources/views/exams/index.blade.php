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

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    <h1 class="text-center text-2xl">Liste des évaluation de l'année</h1>
                    <table class="table table-striped">
                        <tr>
                            <th>Date prévue</th>
                            <th>Date inscrit</th>
                            <th>Nom de l'examen</th>
                            <th>Matière</th>
                            <th>Manuel</th>
                            <th>Voir</th>
                            <th>Modifier</th>
                            <th>Effacer</th>
                        </tr>
                        @foreach($exams as $exam)
                            <tr>
                                <td>{{Carbon\Carbon::parse($exam->date_exam)->translatedFormat('l d-F-Y')}}</td>
                                <td>{{Carbon\Carbon::parse($exam->created_at)->translatedFormat('l d-F-Y')}}</td>
                                <td>{{$exam->name}}</td>
                                <td>{{$exam->notion}}</td>
                                <td>{{$exam->manuel}}</td>
                                <td><button class="btn btn-primary"><a href="{{route('exam.edit',$exam->id)}}">Éditer</a></button></td>
                                <td><button class="btn btn-success"><a href="{{route('exam.show',$exam->id)}}">Voir</a></button></td>
                                <td>
                                    <form action="{{ route('exam.destroy',$exam->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
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
