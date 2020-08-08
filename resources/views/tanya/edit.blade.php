@extends('adminLTE.master')

@section('content')


<div class="card card-primary">
            <div class="ml-4 mt-3"> 
                <div class="card-header">
                    <h3 class="card-title">Ubah Pertanyaan </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="/pertanyaan/{{$question->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul', $question->judul)}}" placeholder="masukkan judul pertanyaan">
                            @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                        <label>Pertanyaan</label>
                        <textarea class="form-control" rows="3" name="isi"  placeholder="tulis pertanyaan anda disini...">{{old('isi',$question->isi)}}</textarea>
                            @error('isi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                        
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                    </form>
                </div>

            </div>

@endsection