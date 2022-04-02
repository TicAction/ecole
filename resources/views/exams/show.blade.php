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

                    <h1 class="text-center">Description de l'évaluation</h1>
                    <table class="table table-striped">
                        <tr>
                            <th>Date prévue</th>
                            <th>Nom de l'examen</th>
                            <th>Matière</th>
                            <th>Manuel</th>

                        </tr>

                            <tr>
                                <td>{{Carbon\Carbon::parse($exam->date_exam)->translatedFormat('l d F Y')}}</td>
                                <td>{{$exam->name}}</td>
                                <td>{{$exam->notion}}</td>
                                <td>{{$exam->manuel}}</td>

                            </tr>

                    </table>

                    <table>
                        <tr>
                            <th>
                           Description
                            </th>
                        </tr>
                        <tr>
                            <td>{{$exam->description}}</td>
                        </tr>
                    </table>
                        <div class="text-center"><a href="{{url('admin')}}"><button class="btn btn-success">Retour</button></a></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
