@extends('students.layout')
@section('content')

    <div class='card' style='margin:20px;'>
        <div class='card-header'>
            <h1>Dados do(a) Aluno(a)</h1>
            <a href="/student" class='btn btn-dark btn-sm d-inline-block'><i class="fa-solid fa-arrow-left"></i> Voltar</a>
        </div>
        <div class='card-body'>
            <div class='card-body d-flex align-items-center justify-content-between'>
                <div>
                    <h5 class='card-title mb-3'>Nome : {{$students->name}}</h5>
                    <p class='card-text'>Endereço : {{$students->adress}}</p>
                    <p class='card-text'>E-mail : {{$students->email}}</p>
                    <p class='card-text'>Telefone : {{$students->mobile}}</p>
                    <p class='card-text'>CPF : {{$students->cpf}}</p>
                    <p class='card-text'>Curso : {{$students->course}}</p>
                    <p
                    
                    @if ($students->status === 'Cursando'){
                        return class='card-text text-warning fw-bold';
                    };
                    @endif
                    return class='card-text text-success fw-bold';
                    
                    >
                    <span class='text-dark'>Status</span> : {{$students->status}}</p>
                </div>
                <div>
                    <img src="{{ $students->pic }}" class='img-fluid img-thumbnail' style='max-height:250px;'>
                </div>
            </div>
        </div>
    </div>

@stop