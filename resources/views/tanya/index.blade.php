@extends('adminLTE.master')

@section ('content')
    <div class="card card-primary">
            <div class="ml-4 mt-3"> 
                <div class="card-header">
                    <h3 class="card-title">Data Pertanyaan</h3>
                    </div>
                    <!-- /.card-header -->

            @if(session ('success'))
                <div class="alert alert-success">
                    {{session ('success')}}
                </div>
            @endif

            <div class="show-table ml-4 mt-3 mr-4">
            <table class="table table-bordered" >
                        <tbody><tr>
                        <th style="width: 10px">No</th>
                        <th>Judul Pertanyaan</th>
                        <th>Isi Pertanyaan</th>
                        <th style="width: 40px">Aksi</th>
                        </tr>
                        @forelse($questions as $key => $question)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$question->judul}}</td>
                                <td>{{$question->isi}}</td>
                                <td >
                                    <a href="/pertanyaan/{{$question->id}} " class="btn btn-info">tampilkan</a>
                                    <a href="/pertanyaan/{{$question->id}}/edit " class="btn btn-secondary">edit</a>
                                    <form action="/pertanyaan/{{$question->id}}" method="post">
                                    @csrf
                                    <input type="submit" value="hapus" class="btn btn-danger">
                                    @method("DELETE")
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" align="center">Tidak ada pertanyaan</td>
                            </tr>
                            
                        @endforelse
                        </tbody></table>

                        <a class="btn btn-primary mb-5" href="/pertanyaan/create"> Buat pertanyaan </a>

            </div>
    </div>
</div>

@endsection