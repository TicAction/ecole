<x-main>
<div class="card">
    <div class="card-body">
        <h3 class="text-center" style="background-color: #cbd5e0">Travaux du  {{Carbon\Carbon::parse($study->start_date)->translatedFormat('d F ')}}  au  {{Carbon\Carbon::parse($study->end_date)->translatedFormat('d F')}}</h3>

        <table class="table" >

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

    </div>
</div>

</x-main>
