@extends('students.layout')
@section('content')

    <div class='card w-75 mx-auto' style='margin:20px;'>
        <div class='card-header'>
            <h1>+ Adicionar Novo(a) Aluno(a)</h1>
            <a href="/student" class='btn btn-dark btn-sm d-inline-block'><i class="fa-solid fa-arrow-left"></i> Voltar</a>
        </div>
        <div class='card-body'>
            <form action="{{url('student')}}" method='post'>
                {!! csrf_field() !!}
                <label for="">Nome</label>
                <input minlength="3" maxlength="255" type="text" name='name' id='name' class='form-control' required>
                <br>
                <label for="">Endereço</label>
                <input maxlength="255" type="text" name='adress' id='adress' class='form-control' required>
                <br>
                <label for="">E-mail</label>
                <input minlength="6" maxlength="255" type="email" name='email' id='email' class='form-control' placeholder="exemplo@email.com" required>
                <br>
                <label for="">Telefone</label>
                <input minlength="11" maxlength="14" type="tel" name='mobile' id='mobile' class='form-control' placeholder="(00) 00000 - 0000" required>
                <br>
                <label for="">CPF</label>
                <input minlength="11" maxlength="11" type="text" name='cpf' id='cpf' class='form-control' placeholder="000.000.000-00" required>
                <br>
                <label for="">Foto</label>
                <input minlength="11" maxlength="255" type="text" name='pic' id='pic' class='form-control' placeholder="URL" required>
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
                      <input type="radio" id="status" name="status" value="Cursando">
                      <label for="status">Cursando</label>
                    <br>
                      <input type="radio" id="status" name="status" value="Finalizado">
                      <label for="status">Finalizado</label>
                </div>
                <br>
                <input type="submit" value='Salvar' class='btn btn-success'>
                <br>
            </form>
        </div>
    </div>

@stop