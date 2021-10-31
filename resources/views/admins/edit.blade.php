<x-app-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
    <form action={{url('admin', $study->id)}} method="POST">
        @csrf
        @method('PUT')

        <div class="row row-cols-4">
            <div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Date start</strong>
                        <input type="date" name="start_date" value="{{$study->start_date->format('Y-m-d')}}" class="form-control ckeditor" placeholder="">
                </div>
                </div>
            </div>

            <div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Date end</strong>
                        <input type="date" name="end_date" value="{{$study->end_date->format('Y-m-d')}}"class="form-control" placeholder="">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lecture</strong>
                    <input type="text" name="reading" value="{{$study->reading}}" class="form-control" placeholder="">
                </div>
            </div>
        </div>
        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vocabulaire</strong>
                    <input type="text" name="vocabulary" value="{{$study->vocabulary}}" class="form-control" placeholder="">
                </div>
            </div>
        </div>

        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Grammaire</strong>
                    <input type="text" name="grammary" value="{{$study->grammary}}" class="form-control" placeholder="">
                </div>
            </div>
        </div>

        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Conjugaison</strong>
                    <input type="text" name="verbs" value="{{$study->verbs}}" class="form-control" placeholder="">
                </div>
            </div>
        </div>

        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mathématique</strong>
                    <input type="text" name="math" value="{{$study->math}}" class="form-control" placeholder="">
                </div>
            </div>
        </div>

        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Anglais</strong>
                    <input type="text" name="english" value="{{$study->english}}" class="form-control" placeholder="">
                </div>
            </div>
        </div>

        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Communication Orale</strong>
                    <input type="text" name="oral" value="{{$study->oral}}" class="form-control" placeholder="">
                </div>
            </div>
        </div>

        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Univers-Social</strong>
                    <input type="text" name="history" value="{{$study->history}}" class="form-control" placeholder="">
                </div>
            </div>
        </div>


        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Science</strong>
                    <input type="text" name="science" value="{{$study->science}}" class="form-control" placeholder="">
                </div>
            </div>
        </div>

        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Travail Mathématique</strong>
                    <textarea name="mathwork" id="mathwork" cols="30" rows="3" class="form-control ckeditor">{{$study->mathwork}}</textarea>
                </div>
            </div>
        </div>
        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Travail de français</strong>
                    <textarea name="frenchwork" id="frenchwork" cols="30" rows="3" class="form-control ckeditor">{{$study->frenchwork}}</textarea>
                </div>
            </div>
        </div>

        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Autres</strong>
                    <textarea name="other" id="other" cols="30" rows="10" class="form-control ckeditor">{{$study->other}}</textarea>
                </div>
            </div>
        </div>


        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Semaine</strong>
                    <select name="week" class="form-select" >
                        <option value="{{$study->week}}" selected>
                            {{$study->week}}
                        </option>
                        @for($i = 1; $i<=36; $i++  )

                            <option value="{{$i}}">
                                {{$i}}
                            </option>
                        @endfor
                    </select>
                </div>
            </div>
        </div>

        <div>
            <div class="form-group">
                <strong>Publier</strong>
                <div class="form-check-input">
                <input type="hidden" name="publish" value="off">
                <input type="checkbox" name="publish" id="publish" value="on" {{  ($study->publish === 'on' ? ' checked' : '') }}>
            </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary" > Soumettre </button>

        </div>


                    </div>
                </div>
            </div>
        </div>
    </form>
        <div class="text-center"><a href="{{url('admin')}}"><button class="btn btn-success">Retour</button></a></div>
        <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>

</x-app-layout>
