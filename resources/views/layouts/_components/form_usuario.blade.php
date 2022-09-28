<form action="{{route('app.cadastro.usuario')}}" method="post">
    @csrf
    <div>
        <div>
            <input name="nome_usuario" class="form-control" value="{{old('nome_usuario')}}" type="text" placeholder="Nome de Usuario" >
            @if($errors->has('nome_usuario')) O campo Nome de Usuario é obrigatorio @endif
        </div>
        <div >
            <input name="senha" class="form-control" value="{{old('senha')}}" type="password" placeholder="Senha">
            @if($errors->has('senha')) O campo Senha é obrigatorio @endif
        </div> 
        <div >
            <input name="permissao" class="form-control" value="{{old('permissao')}}" type="number" placeholder="Permissao">
            @if($errors->has('permissao')) O campo Permissão é obrigatorio e deve conter valores entre 1 e 9 @endif
        </div> 
        <div>
            <button class="btn btn-success btn-block" type="submit">Cadastrar</button>
        </div>	
        <div>
            <a href="{{route('app.usuario')}}" class="btn btn-success btn-block">Voltar</a>
        </div>                 
    </div> 
</form>