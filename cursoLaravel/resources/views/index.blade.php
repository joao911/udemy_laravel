@extends ('site')
@section('titulo')
Contato
@endsection

@section('conteudo')
<h3>essa é minha view index</h3>
<!-- contatos está vindo de contattoController -->
@foreach($contatos as $contato)
<p>{{$contato['nome']}}</p>
<p>{{$contato['telefone']}}</p>
@endforeach

@endsection



