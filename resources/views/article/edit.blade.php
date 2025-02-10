<x-layout>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12">
                <h1 class="m-5">Modifica articolo</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12">
                <livewire:edit-article :article=$article />

            </div>
        </div>
    </div>
</x-layout>