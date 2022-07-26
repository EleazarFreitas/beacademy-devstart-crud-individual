@extends('students.layout')
@section('content')

    <div class='card' style='margin:20px;'>
        <div class='card-header'>
            <h1>Dados do(a) Aluno(a)</h1>
        </div>
        <div class='card-body'>
            <div class='card-body'>
                <h5 class='card-title mb-3'>Nome : {{$students->name}}</h5>
                <p class='card-text'>Endereço : {{$students->adress}}</p>
                <p class='card-text'>Telefone : {{$students->mobile}}</p>
                <p class='card-text'>Curso : {{$students->course}}</p>
                <p class='card-text'>Status : {{$students->status}}</p>
            </div>
        </div>
    </div>

@stop