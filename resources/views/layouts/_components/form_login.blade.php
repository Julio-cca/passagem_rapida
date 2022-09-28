<form action="{{route('site.valida_login')}}" method="post">
    @csrf
    <div>
        <div>
            <input name="usuario" class="form-control" value="{{old('usuario')}}" type="text" placeholder="Digite o Usuario" >
        </div>
        <div >
            <input name="senha" class="form-control" value="{{old('senha')}}" type="password" placeholder="Digite a Senha">
        </div> 
        <div>
            <button class="btn btn-info btn-block" type="submit">Entrar</button>
        </div>	
        <div>
            <a href="{{route('site.principal')}}" class="btn btn-info btn-block">Voltar</a>
        </div>                 
    </div> 
    
    @isset($_GET['erro'])
        @if($_GET['erro'] == 2)
            Login ou senha Invalidos
        @endif
        @if($_GET['erro'] == 3)
            Acesso Negado
        @endif
    @endisset
    @if($errors->has('usuario'))
        Campo usuario obrigatorio
        <br>
    @endif
    @if($errors->has('senha'))
        Campo senha obrigatorio
    @endif
</form>