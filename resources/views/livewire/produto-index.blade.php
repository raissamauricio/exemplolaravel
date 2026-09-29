<div>
   <table class="table table-striped">
    <thead>
        <tr>
            <th> Nome do produto </th>
            <th> Quantidade </th>
            <th> Preço </th>
            <th> Cor </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->quantidade }}</td>
            <td>{{ $produto->preço }}</td>
            <td>{{ $produto->cor }}</td>
        </tr>
        @endforeach
    </tbody>
   </table>
</div>
