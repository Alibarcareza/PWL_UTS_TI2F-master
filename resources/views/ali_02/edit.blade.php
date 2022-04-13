@extends('sepatu.layout')
@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Edit Sepatu
</div>
<div class="card-body">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="post" action="{{ route('sepatu.update', $Sepatu->id) }}" id="myForm">
@csrf
@method('PUT')
<div class="form-group">
<label for="Warna">Warna</label>
<input type="text" name="Warna" class="form-control" id="Warna" value="{{ $Sepatu-
>Warna }}" aria-describedby="Warna" >
</div>
<div class="form-group">
<label for="Ukuran">Ukuran</label>
<input type="text" name="Ukuran" class="form-control" id="Ukuran" value="{{ $Sepatu-
>Ukuran }}" aria-describedby="Ukuran" >
</div>
<div class="form-group">
<label for="Bahan">Bahan</label>
<input type="Bahan" name="Bahan" class="form-control" id="Bahan" value="{{ $Sepatu-
>Bahan }}" aria-describedby="Bahan" >
</div>
<div class="form-group">
<label for="Harga">Harga</label>
<input type="Harga" name="Harga" class="form-control" id="Harga" value="{{ $Sepatu-
>Harga }}" aria-describedby="Harga" >
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection