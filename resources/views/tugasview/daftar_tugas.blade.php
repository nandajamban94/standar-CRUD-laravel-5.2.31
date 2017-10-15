@extends ('layout')
@section('judul')
Daftar Tugas
@endsection
@section('konten')

    <table class="table table-hover">
        <thead>
            <tr>
                <th>judul</th>
                <th>deskripsi</th>
                <th>edit</th>
                <th>hapus </th>
                <th> Edit dengan Modal</th>
            </tr>
        </thead>
        <tbody>
          @foreach($data as $a)
              <tr>
                  <td>{{$a->judul}}</td> <!--mengambil dari database-->
                  <td>
                      <a href="{{url('tugas/'.$a->id)}}" class="btn btn-primary"> See More</a>
                  </td><!--mengambil dari database-->
                  <td>
                      <a href="{{url('tugas/'.$a->id.'/edit')}}" class="btn btn-info"> Edit</a>
                  </td>
                  <td>
                      <form action="{{url ('tugas/'.$a->id)}}" method="post">
                          {{csrf_field()}}
                          <input type="hidden" name="_method" value="DELETE">
                          <button class="btn btn-danger ">hapus</button>
                      </form>
                  </td>
                  <td>
                    
                      <form action="{{url('tugas/'.$a->id)}}" method="post">
                          <input type="hidden" name="_method" value="PUT">
                          {{csrf_field()}}
                      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Edit</button>
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-body">
                                          <div class="form-group">
                                              <label for="recipient-name" class="form-control-label">Judul</label>
                                              <input type="text" name="judul" value="{{$a->judul}}" class="form-control"> </input>
                                          </div>
                                          <div class="form-group">
                                              <label for="message-text" class="form-control-label">Deskripsi</label>
                                              <input type="text" name="deskripsi" value="{{$a->deskripsi}}" class="form-control"> </input>
                                          </div>
                                          <input type="submit" class="btn btn-success" value="Simpan">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </form>


                  </td>
              </tr>

          @endforeach
        </tbody>
    </table>

@endsection