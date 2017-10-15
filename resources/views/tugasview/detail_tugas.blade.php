@extends ('layout')
@section('judul')
    Detail Tugas
@endsection
@section('konten')
    <table class="table table-hover">
        <thead>
        <tr>
           <th>judul</th>
            <th>deskripsi</th>
            <th>Dibuat pada tanggal</th>
        </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$data->judul}}</td>
                <td>{{$data->deskripsi}}</td>
                <td>{{$data->created_at}}</td>
            </tr>
        </tbody>
    </table>
@endsection