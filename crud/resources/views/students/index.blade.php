@extends('students.layout')
@section('content')

    <div class='container'>
        <div class='row' style='margin:20px;'>
            <div class='col-12'>
                <div class='card'>
                    <div class='card-header'>
                        <h1>Alunos DevStart</h1>
                        <p>Laravel 9 - CRUD (Create, Read, Update e Delete)</p>
                    </div>
                    <div class='card-body'>
                        <a href="{{url('/student/create')}}" class='btn btn-success btn-sm' title='Add New Student'>
                            + Adicionar Novo(a) Aluno(a)
                        </a>
                        <br>
                        <br>
                        <div class='table-responsive'>
                            <table class='table table-striped table-hover'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome Completo</th>
                                        <th>Endereço</th>
                                        <th>Telefone</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->adress}}</td>
                                        <td>{{$item->mobile}}</td>
                                        <td>
                                            <a href="{{url('/student/'.$item->id)}}" title='View Student'><button class='btn btn-info btn-sm'><i class="fa-solid fa-eye" aria-hidden='true'></i> Ver</button></a>
                                            <a href="{{url('/student/'.$item->id . '/edit')}}" title='Edit Student'><button class='btn btn-primary btn-sm'><i class="fa-solid fa-pen-to-square" aria-hidden='true'></i> Editar</button></a>
                                            <form method='POST' action="{{ url('/student'.'/'.$item->id) }}" accept-charset='UTF-8' style='display:inline;'>
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <button type='submit' class='btn btn-danger btn-sm' title='Delete Student'><i class="fa-solid fa-trash-can" aria-hidden='true'></i> Deletar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection