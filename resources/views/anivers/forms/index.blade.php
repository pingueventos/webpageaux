@extends('anivers.layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Formulário de Convidados</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('forms.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nome do Convidado</label>
                            <input name="nome" type="text" class="form-control" name="emp_name">
                        </div>
                        <div class="col-md-6">
                            <label>CPF</label>
                            <input name="CPF" type="number" class="form-control" name="dob">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Idade</label>
                            <input name="idade" type="number" class="form-control" name="phone">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Register">
                        </div>

                    </div>
                </form>
            </div>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Convidado</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Idade</th>
                    @auth
                        <th scope="col">Apagar</th>
                    @endauth
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $convidados as $key => $convidado )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $convidado->nome }}</td>
                            <td scope="col">{{ $convidado->CPF }}</td>
                            <td scope="col">{{ $convidado->idade }}</td>
                            <td scope="col">
                            
                        @auth
                            <form action="{{ route('forms.destroy', $convidado->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Remover</button>
                            </form>
                            </td>
                        </tr>

                        @endauth

                        @endforeach




                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:rgba(42, 120, 165, 0.692);
        }

    </style>
@endpush