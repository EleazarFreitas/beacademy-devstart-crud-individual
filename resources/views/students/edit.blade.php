@extends('students.layout')
@section('content')

    <div class='card w-75 mx-auto' style='margin:20px;'>
        @if (session('flash_message'))

        <div class='alert alert-success'>
            {{session('flash_message')}}
        </div>
            
        @endif
        <div class='card-header'>
            <h1>Editar Aluno(a)</h1>
            <a href="/student" class='btn btn-dark btn-sm d-inline-block'><i class="fa-solid fa-arrow-left"></i> Voltar</a>
        </div>
        <div class='card-body'>
            <form action="{{url('student/'.$students->id)}}" method='post'>
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <label for="">E-mail</label>
                    <input minlength="3" maxlength="255" type="email" name='email' id='email' value='{{$students->email}}' class='form-control' placeholder="exemplo@email.com" required>
                    <br>
                    <label for="">Celular</label>
                    <input type="text" maxlength="13" pattern="[0-9]{2}-[0-9]{4,5}-[0-9]{4}" name='mobile' id='mobile' value='{{$students->mobile}}' class='form-control' placeholder="00-00000-0000" required>
                    <br>
                    <label for="">Endereço</label>
                    <input minlength="6" maxlength="255" type="text" name='adress' id='adress' value='{{$students->adress}}' class='form-control' required>
                    <br>
                    <label for="">Foto</label>
                    <input type="text" name='pic' id='pic' value='{{$students->pic}}' class='form-control' placeholder="URL" value="{{$students->pic}}" required>
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
                        <br>
                          <input type="radio" id="status" name="status" value="Cursando" checked>
                          <label for="status">Cursando</label>
                        <br>
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
