@extends('adminLTE.master')

@section('content')
<div class="mt-5 ml-5">
    <h4> {{$question->judul}} </h4>
    <p> {{$question->isi}} </p>
</div>
   
@endsection