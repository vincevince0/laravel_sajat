@extends('layout')

@section('content')
<h1>Karosszériák</h1>
<div>
    <table>
        <thead>
            <tr><th>#</th><th>Megnevezés</th><th>Logo</th></tr>
        </thead>
        <tbody>
        @foreach($models as $model)
        <tr class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
        <td>{{ $model->id}}</td>
        <td>{{ $model->name}}</td>
        <td><img src="{{ $model->logo }}" alt=""></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>