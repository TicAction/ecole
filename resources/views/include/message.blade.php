@if (session()->has('message'))
    <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3">
        {{ session('message') }}
    </div>
@endif
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">

        <strong>{{ $message }}</strong>
    </div>
@endif