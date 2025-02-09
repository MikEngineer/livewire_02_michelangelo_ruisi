<div>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <form class="" wire:submit="store">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo*</label>
                        <input wire:model.blur="title" type="text" class="form-control" id="title"
                            aria-describedby="textlHelp">
                        <div>
                            @error('title') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo*</label>
                        <input wire:model.blur="subtitle" type="text" class="form-control" id="subtitle"
                            aria-describedby="textlHelp">
                        <div>
                            @error('subtitle') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Contenuto dell'articolo*</label>
                        <textarea wire:model.blur="body" type="text" class="form-control" id="body"
                            aria-describedby="textlHelp"></textarea>
                        <div>
                            @error('body') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>