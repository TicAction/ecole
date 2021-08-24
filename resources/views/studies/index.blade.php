<x-main>

    <div class="card">
        <div class="card-body">
    @foreach($studies as $studie)


    <h3 class="text-center" style="background-color: #cbd5e0">Travaux du  {{Carbon\Carbon::parse($studie->start_date)->translatedFormat('d F')}} au  {{Carbon\Carbon::parse($studie->end_date)->translatedFormat('d F')}}</h3>

        <table class="table ">

        <tr>
                <th>Lecture:</th>
                <td>{{$studie->reading}}</td>
        </tr>

        <tr>
                <th>Vocabulaire:</th>
                <td>{{$studie->vocabulary}}</td>
        </tr>
        <tr>
                <th>Grammaire:</th>
                <td>{{$studie->grammary}}</td>
        </tr>
        <tr>
                <th>Conjugaison:</th>
                <td>{{$studie->verbs}}</td>
        </tr>
        <tr>
                <th>Mathématique:</th>
                <td>{{$studie->math}}</td>
        </tr>
        <tr>
                <th>Exposé Oral:</th>
                <td>{{$studie->oral}}</td>
        </tr>
        <tr>
                <th>Univers Social:</th>
                <td>{{$studie->history}}</td>
        </tr>
        <tr>
                <th>Science:</th>
                <td>{{$studie->science}}</td>
        </tr>
        <tr>
                <th>Anglais:</th>
                <td>{{$studie->english}}</td>
        </tr>
        <tr>
                <th>Autres:</th>
                <td>{{$studie->other}}</td>
        </tr>

        </table>

        @endforeach
    </div>
        </div>


</x-main>
