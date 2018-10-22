@extends('layouts.master')

@section('content')
    <table class="table table-bordered table-hover" width="100%">
        <tr>
            <th>Nom d'agenece</th>
            <th>Wilaya</th>
            <th>Adresse</th>
            <th>Tel</th>
        </tr>
        @foreach($agence as $val)
        <tr>
            <td>{{$val['name']}}</td>
            <td>{{$val['wilaya']}}</td>
            <td>{{$val['adresse']}}</td>
            <td>{{$val['tel']}}</td>
        </tr>
        @endforeach
    </table>
@endsection()