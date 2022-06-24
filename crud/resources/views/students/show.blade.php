@extends('students.layout')
@section('content')

    <div class='card' style='margin:20px;'>
        <div class='card-header'>
            Dados do(a) Aluno(a)
        </div>
        <div class='card-body'>
            <div class='card-body'>
                <h5 class='card-title'>Nome : {{$students->name}}</h5>
                <p class='card-text'>Endereço : {{$students->adress}}</p>
                <p class='card-text'>Telefone : {{$students->mobile}}</p>
            </div>
        </div>
    </div>