<div>
    <div class=""
        style="background-image: url('/img/1.png'); background-size : cover; background-repeat :no-repeat; height  : 120vh;  background-position : center">
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
            <div class="col-12 col-lg-6 mt-3">

                <div>

                    <div class="mt-4">
                        <form wire:submit.prevent="save">

                            <div class="form-group" wire:ignore>
                                <label class="">Appointment</label>
                                <input class="did-floating-input datepicker" type="text">


                            </div>



                            @if ($times)
                                <div class="form-group ">
                                    <label class="form-label">Hour {{ count($times) }}</label>
                                    @error('time')
                                        <div class="text-danger">
                                            {{ $message }}</div>
                                    @enderror

                                    <div class="selectgroup w-100">
                                        <div class="row">
                                            @foreach ($times as $time)
                                                @if (in_array($time->hour, $getBookings->pluck('time')->toArray()))
                                                    <div class="col-3 mt-2">
                                                        <a href="{{ route('admin.booking.show',DB::table('bookings')->where('in_date', $appointment)->where('time', $time->hour)->get()[0]->id) }}"
                                                            class="text-decoration-none">
                                                            <div class="box rounded p-2"
                                                                style="width: 70px; height : 30px; background-color : grey">
                                                                <h6 class="text-white p-1">{{ $time->hour }}
                                                                </h6>
                                                            </div>
                                                        </a>

                                                    </div>
                                                @else
                                                    <div class="col-3 mt-2">
                                                        <a href="{{ route('create-booking', [$package->id, $time->hour, $appointment]) }}"
                                                            class="text-decoration-none">
                                                            <div class="box rounded p-2"
                                                                style="width: 70px; height : 30px; background-color : #1C3E3A">
                                                                <h6 class="text-white p-1">{{ $time->hour }}</h6>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>


                                    </div>

                                </div>

                                <div class="row justify-content-center mt-5">
                                    <div class="col-2">
                                        <h6 class="color-green rounded p-2 text-center text-white">Tersedia</h6>
                                    </div>
                                    <div class="col-3">
                                        <h6 class=" rounded p-2 text-center text-white"
                                            style="background-color: #808080">
                                            Tidak Tersedia</h6>
                                    </div>
                                </div>

                            @endif



                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <script>
        const today = new Date();
        const tomorrow = new Date(today);
        tomorrow.setDate(today.getDate());

        $(".datepicker").datepicker({
            minDate: tomorrow,
            onSelect: function(date) {
                console.log("aoskdok")
                Livewire.dispatch(
                    'updatedAppointment', {
                        date
                    }
                )
                // window.livewire.emit('updatedAppointment', date);
            }
        });
    </script>

    {{-- <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('data', () => ({
                open: false,

                toggle() {
                    this.open = !this.open
                }
            }))
        })
    </script> --}}


</div>
