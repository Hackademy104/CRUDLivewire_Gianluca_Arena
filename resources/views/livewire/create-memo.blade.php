<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div>
        {{-- The best athlete wants his opponent at his best. --}}
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form wire:submit.prevent='store'>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input wire:model.live='title' type="text" class="form-control" id="title" placeholder="Dentista...">
                
            </div>
            <div class="form-floating mb-3">
                <textarea wire:model.live='description' class="form-control" id="description" style="height: 100px"></textarea>
                <label for="description">Descrizione</label>
                
            </div>

            <button type='submit' class="btn btn-primary">Conferma</button>
        </form>
    </div>
</div>
