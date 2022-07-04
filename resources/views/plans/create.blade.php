
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

<form action="{{url('plan')}}" method="POST">
    @csrf
    @method('POST')
    <div class="row row-cols-4">

    </div>
         <div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Date</strong>
                     <input type="date" name="plan_date" class="form-control" placeholder="">
                 </div>
             </div>
         </div>
         <div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Manuel</strong>
                     <input type="text" name="plan_work" class="form-control" placeholder="">
                 </div>
             </div>
         </div>
        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pages</strong>
                    <input type="text" name="plan_page" class="form-control" placeholder="">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">

                <button type="submit" class="btn btn-primary" > Soumettre </button>
        </div>

</form>


</div>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>
