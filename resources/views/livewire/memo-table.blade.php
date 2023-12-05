<div>
    {{-- Stop trying to control. --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">descrizione</th>
                <th scope="col">Modifica</th>
                <th scope="col">Elimina</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($memos as $memo)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $memo->title }}</td>
                    <td>{{ $memo->description }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('memo_edit', compact('memo')) }}">Modifica Memo
                        </a>
                    </td>
                    <td>
                        <button wire:confirm="Sicuro?" wire:click='delete({{ $memo }})'
                            class="btn btn-danger">Elimina Memo
                        </button>
                    <td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
