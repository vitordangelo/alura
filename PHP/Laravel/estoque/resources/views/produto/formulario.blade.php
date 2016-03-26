@extends('layout.principal')

@section('conteudo')
	
	@if($errors->all())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="/produtos/adiciona" method="post">
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label>Nome</label>
			<input type="text" class="form-control" name="nome">
		</div>
		<div class="form-group">
			<label>Valor</label>
			<input type="text" class="form-control" name="valor">
		</div>
		<div class="form-group">
			<label>Quantidade</label>
			<input type="text" class="form-control" name="quantidade">
		</div>
		<div class="form-group">
			<label>Tamanho</label>
			<input type="text" class="form-control" name="tamanho">
		</div>
		<div class="form-group">
			<label>Descrição</label>
			<textarea class="form-control" name="descricao"></textarea>
		</div>

		<button class="btn btn-primary" type="submit">Adicionar</button>
	</form>
@stop