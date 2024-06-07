{{-- <div>
    <div class="section-header">
        <h1>Booking</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No
                                        </th>
                                        <th>Invoice</th>
                                        <th>Nama</th>
                                        <th>No wa</th>
                                        <th>Date</th>
                                        <th>Total Price</th>
                                        <th>Status Pembayaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings->groupBy('order_id') as $booking => $value)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>{{ $booking }}</td>
                                            <td>
                                                {{ $value[0]->name }}
                                            </td>
                                            <td>
                                                {{ $value[0]->nowa }}
                                            </td>
                                            <td>
                                                {{ $value[0]->in_date }}
                                            </td>
                                            <td>Rp. {{ number_format((int) $value[0]->price_total, 0, ',', '.') }}</td>
                                            <td>
                                                @if ($value[0]->status_payment == 'DP 50%')
                                                    <div class="badge badge-info">{{ $value[0]->status_payment }}</div>
                                                @elseif ($value[0]->status_payment == 'Proses')
                                                    <div class="badge badge-warning">{{ $value[0]->status_payment }}
                                                    </div>
                                                @elseif ($value[0]->status_payment == 'Lunas')
                                                    <div class="badge badge-success">{{ $value[0]->status_payment }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.booking.show', $value[0]->id) }}"
                                                    class="btn btn-secondary">Detail</a>
                                                <a href="{{ route('admin.booking.edit', $value[0]->id) }}"
                                                    class="btn btn-info ms-2">Edit</a>
                                                <a wire:click="confirmDelete({{ $value[0]->id }})"
                                                    class="btn btn-danger ms-2 text-white">Delete</a>
                                                <a wire:click="confirmDelete('{{ $booking }}')"
                                                    class="btn btn-danger ms-2 text-white">Delete</a>

                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="text-end">

                        {{ $bookings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}




<div>
    <div class=""
        style="background-image: url('/img/2.png'); background-size : cover; background-repeat :no-repeat; height : 100vh; background-position : center">
        <div class="row justify-content-center">
            <div class="col-4 mt-5">
                <h2 class="text-center p-3 text-dark rounded">Dashboard Admin - Kasir
                </h2>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 250px">
            <a href="{{ route('choose-studio') }}" wire:navigate>
                <div class="box mr-5">
                    <h6 class="text-white">Pilih Studio</h6>
                </div>
            </a>
            <a href="{{ route('admin.booking.index') }}">
                <div class="box">
                    <h6 class="text-white">Database Konsumen + Upload Hasil</h6>
                </div>
            </a>
        </div>
    </div>

</div>
