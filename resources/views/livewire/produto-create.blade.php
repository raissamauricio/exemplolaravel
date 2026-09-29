<div>
  <form wire:submit="salvar">
    <input type="text" wire:model="nome_produto">nome
    <br>
    <input type="number" wire:model="quantidade">quantidade
    <br>
    <input type="number" wire:model="valor">valor
    <br>
    <input type="text" wire:model="cor">cor
    <br>
    
    <button type="submit">Criar</button>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success')}}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error')}}
    </div>
    @endif
  </form>
</div>
