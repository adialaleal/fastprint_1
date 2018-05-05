@extends('template.default')
@section('content')

@if(empty($job))
<div class="alert alert-danger">
	Você não possui jobs cadastrados.
</div>
@else
<div class="container">
	<h1 align="center" style="padding-top: 35px; padding-bottom: 15px;">Jobs de Impressão</h1>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Posição</th>
				<th align="center">Nome</th>
				<th>Ramal</th>
				<th align="center">Setor</th>
				<th align="center">Opções</th>
				<th align="center"></th>
				<th align="center"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$p->id}}</td>
				<td>R${{$p->inputNome}}</td>
				<td>{{$p->inputRamal}}</td>
				<td align="center">{{$p->inputSetor}}</td>
				<td align="center"><a href="/list/{{$p->id}}"><i class="material-icons">search</i></a></td>
				<td align="center"><a href="{{action('JobsController@remove', $p->id)}}"><i class="material-icons">delete</i></a></td>
				<td align="center"><a href="{{action('ProdutoController@edit', $p->id)}}"><i class="material-icons">mode_edit</i></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endif
<small class="pull-right alert alert-danger">Um ou menos itens no estoque.</small>
<br>
@if(old('nome'))
<div class="alert alert-success"> O produto {{old('nome')}} foi adicionado com sucesso.</div>
@endif
@stop

