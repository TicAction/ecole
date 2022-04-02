<x-main>
<div class="card">
    <div class="card-body">
        <h3 class="text-center" style="background-color: #cbd5e0">Travaux du  {{Carbon\Carbon::parse($study->start_date)->translatedFormat('l d F ')}}  au  {{Carbon\Carbon::parse($study->end_date)->translatedFormat('l d F')}}</h3>

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
                <th colspan="2" class="text-center"><h3 style="background-color: #cbd5e0">Travaux de la semaine</h3></th>
            </tr>
            <tr>
                <th>Travaux de Mathématique :</th>
                <td>{!! $study->mathwork !!}</td>
            </tr>
            <tr>
                <th>Travaux de Français :</th>
                <td>{!! $study->frenchwork !!}</td>
            </tr>
            <tr>
                <th colspan="4" class="text-center"><h3 style="background-color: #cbd5e0">Autres</h3></th>
            </tr>
            <tr>

                <td colspan="4">{!! $study->other!!}</td>
            </tr>

        </table>
        <div class="text-center"><a href="{{url('/')}}"><button class="btn btn-success">Retour</button></a></div>

    </div>
</div>

</x-main>
