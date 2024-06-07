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
                <h6 class="text-center p-3 text-white rounded" style="background-color: #1C3E3A">Silahkan Pilih Studio
                </h6>
            </div>
        </div>

        <div class="row justify-content-center" style="margin-top: 200px">
            <a href="{{ route('choose-service', '1') }}" wire:navigate>
                <div class="box mr-5">
                    <h6 class="text-white">Studio 1 (studio
                        depan)
                        SelfPhoto
                        monochrome</h6>
                </div>
            </a>
            <a href="{{ route('choose-service', '2') }}" wire:navigate>
                <div class="box mr-5">
                    <h6 class="text-white">Studio 2 (studio
                        tengah)
                        Photo Studio</h6>
                </div>
            </a>
            <a href="{{ route('choose-service', '4') }}" wire:navigate>
                <div class="box">
                    <h6 class="text-white">Studio 3 (studio
                        belakang)
                        SelfPhoto Colorful</h6>
                </div>
            </a>
        </div>
    </div>
</div>
