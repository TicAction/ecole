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

    <h3 class="text-center">Travaux du  {{\Carbon\Carbon::parse($study->start_date)->translatedFormat('d F Y ')}}  au  {{\Carbon\Carbon::parse($study->end_date)->translatedFormat('d F Y ')}}</h3>

    <table class="table table-striped">

        <tr>
            <th>Lecture:</th>
            <td>{{$study->reading}}</td>
        </tr>
        <tr>
            <th>Vocabulaire:</th>
            <td>{{$study->vocabulary}}</td>
        </tr>
        <tr>
            <th>Grammaire:</th>
            <td>{{$study->grammary}}</td>
        </tr>
        <tr>
            <th>Conjugaison:</th>
            <td>{{$study->verbs}}</td>
        </tr>
        <tr>
            <th>Mathématique:</th>
            <td>{{$study->math}}</td>
        </tr>
        <tr>
            <th>Exposé Oral:</th>
            <td>{{$study->oral}}</td>
        </tr>
        <tr>
            <th>Univers Social:</th>
            <td>{{$study->history}}</td>
        </tr>
        <tr>
            <th>Science:</th>
            <td>{{$study->science}}</td>
        </tr>
        <tr>
            <th>Anglais:</th>
            <td>{{$study->english}}</td>
        </tr>
        <tr>
            <th>Autres:</th>
            <td>{{$study->other}}</td>
        </tr>

    </table>

                    <a href="{{url('admin')}}"><button class="btn btn-success">Retour</button></a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
