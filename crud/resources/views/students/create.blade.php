@extends('students.layout')
@section('content')

    <div class='card' style='margin:20px;'>
        <div class='card-header'>
            <h1>+ Adicionar Novo(a) Aluno(a)</h1>
        </div>
        <div class='card-body'>
            <form action="{{url('student')}}" method='post'>
                {!! csrf_field() !!}
                <label for="">Nome</label>
                <input type="text" name='name' id='name' class='form-control' required>
                <br>
                <label for="">Endereço</label>
                <input type="text" name='adress' id='adress' class='form-control' required>
                <br>
                <label for="">Telefone</label>
                <input type="text" name='mobile' id='mobile' class='form-control' required>
                <br>
                <input type="submit" value='Salvar' class='btn btn-success'>
                <br>
            </form>
        </div>
    </div>

@stop