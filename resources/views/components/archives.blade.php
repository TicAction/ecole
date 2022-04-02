
    <div class="card">
        <div class="card-body">
            <h5 class="text-center">Archives</h5>
            <hr>
            <ul>
                @foreach($studies as $studie)

                    <li>
                        <a href="{{route('devoir.show',[$studie->id])}}">Semaine {{$studie->week}}</a>
                    </li>

                @endforeach

            </ul>


        </div>
    </div>
    <div class="col-2 text-center">
        {{$studies->links()}}
    </div>






