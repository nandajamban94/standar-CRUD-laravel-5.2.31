@extends ('layout')
@section('judul')
Buat Tugas
@endsection
@section('konten')
    <form action="{{url('tugas')}}" method="post" accept-charset="utf-8">
        {{csrf_field()}}
        <label>Judul</label>
        <input type="text" name="judul" class="form-control"> </input>
        <label>Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control"> </input>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
@endsection