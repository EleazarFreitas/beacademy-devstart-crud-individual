@extends('students.layout')
@section('content')

    <div class='card' style='margin:20px;'>
        <div class='card-header'>
            <h1>Editar Aluno(a)</h1>
        </div>
        <div class='card-body'>
            <form action="{{url('student/'.$students->id)}}" method='post'>
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <input type="hidden" name='id' id='id' value='{{$students->id}}'>
                    <label for="">Nome</label>
                    <input type="text" name='name' id='name' value='{{$students->name}}' class='form-control' required>
                    <br>
                    <label for="">Endereço</label>
                    <input type="text" name='adress' id='adress' value='{{$students->adress}}' class='form-control' required>
                    <br>
                    <label for="">Telefone</label>
                    <input type="text" name='mobile' id='mobile' value='{{$students->mobile}}' class='form-control' required>
                    <br>
                    <label for="course">Curso:</label>
                    <select id="course" name="course">
                        <option value="PHP">PHP</option>
                        <option value="Laravel">Laravel</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="Banco de dados">Banco de dados</option>
                    </select>
                    <br>
                    <div class='py-3'>
                        <span>Status:</span>
                        <br>
                          <input type="radio" id="status" name="status" value="Cursando">
                          <label for="status">Cursando</label><br>
                          <input type="radio" id="status" name="status" value="Finalizado">
                          <label for="status">Finalizado</label>
                    </div>
                    <br>
                    <input type="submit" value="Atualizar" class='btn btn-success'>
                    <br>
                </form>
        </div>
    </div>

@stop