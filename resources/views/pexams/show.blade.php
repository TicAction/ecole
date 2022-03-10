<x-main>

<div class="card">
    <div class="card-body">
        <h1 class="text-center">Description de l'évaluation</h1>
        <table class="table table-striped">
            <tr>
                <th>Date prévue</th>
                <th>Nom de l'examen</th>
                <th>Matière</th>
                <th>Manuel</th>

            </tr>

            <tr>
                <td>{{Carbon\Carbon::parse($exam->date_exam)->translatedFormat('d F Y')}}</td>
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
                <td>{!! $exam->description !!}</td>
            </tr>
        </table>
        <div class="text-center"><a href="{{url('/')}}"><button class="btn btn-success">Retour</button></a></div>

    </div>
</div>


</x-main>
