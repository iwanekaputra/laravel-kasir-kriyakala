<div>
    <div class=""
        style="background-image: url('/img/1.png'); background-size : cover; background-repeat :no-repeat; height  : 200vh;  background-position : center">
        <div class="row justify-content-center">
            <div class="col-4 mt-5">
                <h2 class="text-center p-3 text-dark rounded">Dashboard Admin - Kasir
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="box" style="width: 400px; height : 100px;">
                <h6 class="text-white rounded">{{ $studio }} <br> {{ $service }}</h6>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="col-12 col-lg-4 mt-3">
                <div>
                    <div class="mt-4">
                        <form wire:submit.prevent="save" class="bg-white p-5 rounded">
                            <div class="did-floating-label-content">
                                <input class="did-floating-input" type="text" placeholder="" wire:model="name">
                                <label class="did-floating-label">Name</label>
                                @error('name')
                                    <div class="text-danger">
                                        {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="did-floating-label-content">


                                <input class="did-floating-input" type="email" placeholder="" wire:model="email">
                                <label class="did-floating-label">Email</label>
                                @error('email')
                                    <div class="text-danger">
                                        {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="did-floating-label-content">


                                <input class="did-floating-input" type="number" placeholder="" wire:model="nowa">
                                <label class="did-floating-label">No. Whatsapp</label>
                                @error('nowa')
                                    <div class="text-danger">
                                        {{ $message }}</div>
                                @enderror
                                <div class="text-danger" style="font-size: 14px">Note : Informasi pesanan akan kami
                                    kirim lewat wa</div>

                            </div>

                            @if ($serviceAdditionals->count())
                                <label class="d-block color-salmon">Additional</label>
                                <div class="form-group">
                                    @foreach ($serviceAdditionals as $serviceAdditional)
                                        @if ($serviceAdditional->type_input == 'number')
                                            @if (strtolower($serviceAdditional->name) == 'sesi foto 5 menit')
                                                <div class="d-flex">
                                                    <input class="mr-2 "
                                                        style="width : 20px; height
                                                    20px; margin-top : -20px"
                                                        type="checkbox"
                                                        wire:model.live="isDisable.{{ $serviceAdditional->name }}">

                                                    <div class="did-floating-label-content w-100  mt-3">
                                                        <input class="did-floating-input "
                                                            min="{{ $serviceAdditional->default_value }}" type="number"
                                                            placeholder=""
                                                            wire:model.live="selectedServiceAdditional.{{ $serviceAdditional->name }}"
                                                            @if (!$isDisable[$serviceAdditional->name]) disabled @endif>
                                                        <label
                                                            class="did-floating-label">{{ $serviceAdditional->name }}</label>
                                                        <div class="text-danger" style="font-size : 14px">Note : Isi
                                                            1 = Penambahan
                                                            {{ $serviceAdditional->name }}</div>

                                                    </div>

                                                </div>
                                            @else
                                                <div class="d-flex">
                                                    <input class="mr-2"
                                                        style="width : 20px; height
                                                20px; margin-top : -20px"
                                                        type="checkbox"
                                                        wire:model.live="isDisable.{{ $serviceAdditional->name }}">

                                                    <div class="did-floating-label-content  w-100  mt-3">


                                                        <input class="did-floating-input"
                                                            min="{{ $serviceAdditional->default_value }}"
                                                            @if ($serviceAdditional->max_value) max="{{ $serviceAdditional->max_value }}" @endif
                                                            type="number" placeholder=""
                                                            wire:model.live="selectedServiceAdditional.{{ $serviceAdditional->name }}"
                                                            @if (!$isDisable[$serviceAdditional->name]) disabled @endif>
                                                        <label
                                                            class="did-floating-label">{{ $serviceAdditional->name }}</label>
                                                        <div class="text-danger" style="font-size: 14px">Note : Isi
                                                            1 =
                                                            Penambahan
                                                            {{ $serviceAdditional->name }}</div>

                                                    </div>
                                                </div>
                                            @endif
                                        @elseif ($serviceAdditional->type_input == 'checkbox')
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    wire:model="selectedServiceAdditional.{{ $serviceAdditional->name }}">
                                                <label class="form-check-label color-grey"
                                                    for="{{ $serviceAdditional->name }}">
                                                    {{ $serviceAdditional->name }}
                                                </label>
                                            </div>
                                        @endif
                                    @endforeach


                                    @if ($backgroundColors->count())
                                        <div class="form-group mt-3">
                                            <label class="d-block color-salmon">Main Background</label>
                                            @error('mainBackground')
                                                <div class="text-danger">
                                                    {{ $message }}</div>
                                            @enderror
                                            <div class="row">
                                                @foreach ($backgroundColors as $backgroundColor)
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input @error('mainBackground')
                                            border-danger
                                        @enderror"
                                                                type="radio" name="{{ $backgroundColor->name }}"
                                                                id="{{ $backgroundColor->name }}"
                                                                value="{{ $backgroundColor->name }}"
                                                                wire:model="mainBackground">
                                                            <label class="form-check-label color-grey"
                                                                for="{{ $backgroundColor->name }}">
                                                                {{ $backgroundColor->name }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    @endif



                                </div>
                            @endif

                            <button class="btn w-100 btn-secondary" type="submit">
                                Reserve Now
                            </button>

                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>



</div>
