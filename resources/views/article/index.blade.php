<x-layout>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12">
                <h1 class="m-5">{{$page}}</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12 col-md-4">
                <livewire:card-article />
            </div>
        </div>
    </div>
</x-layout>