<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tugas;

class ControllerTugas extends Controller
{
    public  function index(){
        $data= Tugas::all(); //ambil semua dr database select *from tugas
        return view('tugasview.daftar_tugas')->with('data',$data);
    }

    public  function create(){
        return view('tugasview.buat_tugas');
    }

    public function store(Request $request){ //menyimpan ke database
        //insert into tugas(....) value (...)
        Tugas::create($request->all());
        return redirect('tugas');
    }

    public function show($id){
        //select * from tugas where id= $id
        //jadi mengambil id nya terus ditampilkan
        //mengarahkan ke detail tugas
        //mengirim $data ke ruangan detail tugas
        $data = Tugas::find($id);
        return view('tugasview.detail_tugas')->with('data',$data);
    }

    public  function edit($id){
        //mengarahkan ke ruangan edit
        //mengirim $data ke ruangan edit
        $data = Tugas::find($id);
        return view('tugasview.edit_tugas')->with('data',$data);
    }

    public  function update(Request $request,$id){
        //update tugas
        Tugas::find($id)->update($request->all());
        return redirect('tugas');
    }

    public  function destroy($id){
        Tugas::find($id)->delete();
         return redirect('tugas');
    }

    public function editModal(Request $request,$id){

        Tugas::find($id)->update($request->all());
        return redirect('tugas');
    }
}
