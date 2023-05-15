@extends('site.layouts.basico')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Listagem de alunos</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('site.matricula') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Cpf</th>
                    <th scope="col">Email</th>
                    <th scope="col">Curso</th>
                </tr>
            </thead>
            <tbody>
                @foreach($matriculas as $matricula)
                   
                    <tr class ="table-light">
                        <td>{{$matricula->nome}}</td>
                        <td>{{$matricula->telefone}}</td>
                        <td>{{$matricula->cpf}}</td>
                        <td>{{$matricula->email}}</td>
                        @if($matricula->curso == 1)
                            <td>Inglês</td>
                        @elseif($matricula->curso == 2)
                            <td>Espanhol</td>
                        @else   
                            <td>Mandarim</td>
                        @endif
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection