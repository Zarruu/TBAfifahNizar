@extends('layouts.nav2')

@section('container')

      <h1 style="text-align: center;">Data Keluhan</h1>
<br>
      
    <table style="background-color: aliceblue">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Obat</th>
                <th>Gejala</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $i =1; ?>
            @foreach ($nama_obat as $no)
                
            
            <tr>
                <td><?= $i ?></td>
                {{-- <td>{!! $no->nama!!}</td> --}}
                <td>{!! $no->nama!!}</td>
                <td>{!! $no->gejala!!}</td>
                <td>    
                    <a href="{{ route('edit.medicine')}}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('delete.medicine')}}"class="btn btn-danger btn-sm">Del</a>
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach
            </tr>
            <tr>
                <td>2</td>
                <td>Batuk</td>
                <td>sakit kepala, nyeri dada, nyeri tenggorokan</td>
                <td>
                    <a href="/login">
                        <button class="button_delete">
                            DELETE
                        </button>
                        <button class= "button_edit">
                            EDIT
                        </button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Diare</td>
                <td>nyeri bagian perut,mencret</td>
                <td>
                    <a href="/login">
                        <button class="button_delete">
                            DELETE
                        </button>
                        <button class= "button_edit">
                            EDIT
                        </button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection('container')