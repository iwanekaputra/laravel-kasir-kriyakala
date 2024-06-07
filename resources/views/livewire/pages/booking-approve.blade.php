<div>

    <div class=""
        style="background-image: url('/img/1.png'); background-size : cover; background-repeat :no-repeat; height  : 100vh;  background-position : center">
        <div class="row justify-content-center">
            <div class="col-4 mt-5">
                <h2 class="text-center p-3 text-dark rounded">Dashboard Admin - Kasir
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="box" style="width: 400px; height : 100px; ">
                <h6 class="text-white rounded">{{ $service->studio->name }} <br> {{ $service->name }}</h6>
            </div>
        </div>

        <div class="row justify-content-center" style="margin-top: 100px">
            <div class="col-6">
                <h4 class="text-dark text-center">Nama {{ $booking->name }}</h4>
                <h4 class="text-dark text-center">Sudah selesai melakukan photoshoot</h4>
            </div>
            {{--
            <a href="{{ route('choose-service', '4') }}" wire:navigate>
                <div class="box">
                    <h6 class="text-white">Studio 3 (studio
                        belakang)
                        SelfPhoto Colorful</h6>
                </div>
            </a> --}}
        </div>

        <div class="row justify-content-center">
            <div class="box" style="width: 200px; height : 50px; margin-top:50px">
                <h6 class="text-white rounded">Kirim Link File Photo</h6>
            </div>
        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-lg-4">
                <form wire:submit.prevent="update">
                    <div class="did-floating-label-content">
                        <input class="did-floating-input" type="text" placeholder="" wire:model="link_file">
                        @error('link_file')
                            <div class="text-danger">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn w-100 btn-secondary" type="submit">
                        Kirim
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>
