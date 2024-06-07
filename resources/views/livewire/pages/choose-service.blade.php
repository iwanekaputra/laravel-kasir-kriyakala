<div>
    <div class=""
        style="background-image: url('/img/2.png'); background-size : cover; background-repeat :no-repeat; height  : 100vh;  background-position : center">
        <div class="row justify-content-center">
            <div class="col-4 mt-5">
                <h2 class="text-center p-3 text-dark rounded">Dashboard Admin - Kasir
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <h6 class="text-center p-3 text-white rounded" style="background-color: #1C3E3A">Silahkan Pilih Layanan
                </h6>
            </div>
        </div>

        <div class="row justify-content-center" style="margin-top: 200px">
            @foreach ($services as $service)
                <a href="{{ route('choose-package', $service->id) }}" wire:navigate>
                    <div class="box mr-5">
                        <h6 class="text-white">{{ $service->name }}</h6>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
