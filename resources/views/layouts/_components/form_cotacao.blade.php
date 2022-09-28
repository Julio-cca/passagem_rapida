<form class="mt-4" action="{{route('site.cotacao')}}" method="Post">
     @csrf
    <h2 class="text-info ">Cotação de Passagens</h2>
    <div class="pt-1 @if($errors->has('nome'))@else form-group @endif">
        <input class="form-control" value="{{old('nome')}}" type="text" name="nome" placeholder="Nome" >@if($errors->has('nome')) O campo Nome é obrigatorio @endif       
    </div>
    <div class="pt-1 @if($errors->has('nome'))@else form-group @endif">
        <input class="form-control" value="{{old('email')}}" type="email" name="email" placeholder="Email"> @if($errors->has('email')) O campo email é obrigatorio @endif
    </div>
    <div class="pt-1 @if($errors->has('nome'))@else form-group @endif">
        <input class="form-control" value="{{old('telefone')}}" type="text" name="telefone" placeholder="Telefone"> @if($errors->has('telefone')) O Campo Telefone é obrigatorio @endif
    </div>
    <div class="pt-1 @if($errors->has('nome'))@else form-group @endif">
        <input class="form-control" value="{{old('partida')}}" type="text" name="partida" placeholder="Local de partida">@if($errors->has('partida')) O Campo Partida é obrigatorio @endif
    </div>
    <div class="pt-1 @if($errors->has('nome'))@else form-group @endif">
        <input class="form-control" value="{{old('destino')}}" type="text" name="destino" placeholder="Local de Destino">@if($errors->has('destino')) O Campo Destino é obrigatorio @endif
    </div>
    <div class="pt-1 @if($errors->has('nome'))@else form-group @endif">
        <input class="form-control" value="{{old('passageiro')}}" type="text" name="passageiro" placeholder="Quantidade de Passageiros">@if($errors->has('passageiro')) O Campo Quantidade de passageiros é obrigatorio @endif
    </div>
    <button type="submit" class="btn btn-info btn-block mb-2 btn-custom">Enviar</button> 
     
</form> 