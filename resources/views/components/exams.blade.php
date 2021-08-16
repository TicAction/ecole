
    <div class="card">
        <div class="card-body">
            <h5 class="text-center">Évaluations à venir</h5>
            <hr>
            <ul>
                @foreach($exams as $exam)

                    <li>
                        <a href="{{route('parent.exam',[$exam->id])}}">Le {{Carbon\Carbon::parse($exam->date_exam)->translatedFormat('d F')}}</a>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>

