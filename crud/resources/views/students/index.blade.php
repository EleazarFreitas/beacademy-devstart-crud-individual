@extends('students.layout')
@section('content')

    <div class='container'>
        <div class='row' style='margin:20px;'>
            <div class='col-12'>
                <div class='card'>
                    <div class='card-header'>
                        <div class='d-flex justify-content-between'>
                            <h1>Alunos DevStart</h1>
                            <form action="{{route('logout')}}" method='post'>
                                @csrf
                                <button type='submit' class='btn btn-dark btn-sm' style='background-color:#1f2937;'><i class="fa-solid fa-arrow-right-from-bracket"></i> Sair</button>
                            </form>
                        </div>             
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
                                        <th>Curso</th>
                                        <th>Status</th>
                                        <th class='w-25'>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td id='identifier'>{{$item->name}}</td>
                                        <td>{{$item->course}}</td>
                                        <td
                                        @if ($item->status === 'Cursando'){
                                            return class='text-warning fw-bold';
                                        };
                                        @endif
                                        return class='text-success fw-bold';
                                        >{{$item->status}}</td>
                                        <td>
                                            <a href="{{url('/student/'.$item->id)}}" title='View Student'><button class='btn btn-info btn-sm'><i class="fa-solid fa-eye" aria-hidden='true'></i> Ver</button></a>
                                            <a href="{{url('/student/'.$item->id . '/edit')}}" title='Edit Student'><button class='btn btn-primary btn-sm'><i class="fa-solid fa-pen-to-square" aria-hidden='true'></i> Editar</button></a>
                                            <form id="form" method='POST' action="{{ url('/student'.'/'.$item->id) }}" style='display:inline;'>
                                                @method('DELETE')
                                                @csrf
                                                <button onclick="confirmDelete()" type='submit' class='btn btn-danger btn-sm'><i class="fa-solid fa-trash-can" aria-hidden='true'></i> Deletar</button>
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