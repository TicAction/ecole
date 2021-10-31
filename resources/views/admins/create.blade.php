
<x-app-layout>
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

<form action="{{url('admin')}}" method="POST">
    @csrf
    @method('POST')
    <div class="row row-cols-4">
         <div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Date start</strong>
                     <input type="date" name="start_date" class="form-control" placeholder="">
                 </div>
             </div>
         </div>

         <div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Date end</strong>
                     <input type="date" name="end_date" class="form-control" placeholder="">
                 </div>
             </div>
         </div>
    </div>
         <div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Lecture</strong>
                     <input type="text" name="reading" class="form-control" placeholder="">
                 </div>
             </div>
         </div>
         <div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Vocabulaire</strong>
                     <input type="text" name="vocabulary" class="form-control" placeholder="">
                 </div>
             </div>
         </div>

    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Grammaire</strong>
                <input type="text" name="grammary" class="form-control" placeholder="">
            </div>
        </div>
    </div>

    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Conjugaison</strong>
                <input type="text" name="verbs" class="form-control" placeholder="">
            </div>
        </div>
    </div>

    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mathématique</strong>
                <input type="text" name="math" class="form-control" placeholder="">
            </div>
        </div>
    </div>

    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Anglais</strong>
                <input type="text" name="english" class="form-control" placeholder="">
            </div>
        </div>
    </div>

    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Communication Orale</strong>
                <input type="text" name="oral" class="form-control" placeholder="">
            </div>
        </div>
    </div>

    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Univers-Social</strong>
                <input type="text" name="history" class="form-control" placeholder="">
            </div>
        </div>
    </div>


    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Science</strong>
                <input type="text" name="science" class="form-control" placeholder="">
            </div>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Travail mathématique</strong>
                <textarea name="mathwork" id="mathwork" cols="30" rows="3" class="form-control ckeditor"></textarea>
            </div>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Travail français</strong>
                <textarea name="frenchwork" id="frenchwork" cols="30" rows="3" class="form-control ckeditor"></textarea>

            </div>
        </div>
    </div>

    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Autres</strong>
                <textarea name="other" id="other" cols="30" rows="10" class="form-control ckeditor"></textarea>
            </div>
        </div>
    </div>


    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Semaine</strong>
                <select name="week">
                    @for($i = 0; $i<=36; $i++  )
                        <option>
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
                <input type="checkbox" name="publish">
            </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary" > Soumettre </button>
        </div>

</form>


</div>

                </div>
            </div>
        </div>
    </div>
{{--    <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>--}}

</x-app-layout>
