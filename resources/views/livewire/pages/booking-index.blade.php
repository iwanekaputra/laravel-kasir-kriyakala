<div>

    <div
        style="background-image: url('/img/2.png'); background-size : cover; background-repeat :no-repeat; height : 150vh; background-position : center">
        <div class="row justify-content-center">
            <div class="col-4 mt-3">
                <h2 class="text-center p-3 text-dark rounded">Dashboard Admin - Kasir
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10 text-white">
                <div class="">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead class="bg-dark ">
                                    <tr class="">
                                        <th class="text-center text-white">
                                            No
                                        </th>
                                        <th class="text-white">Invoice</th>
                                        <th class="text-white">Nama</th>
                                        <th class="text-white">No wa</th>
                                        <th class="text-white">Status Pembayaran</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-dark">
                                    {{-- @dd($bookings->count()); --}}
                                    @forelse ($bookings->groupBy('order_id') as $booking => $value)
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


                                            </td>

                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
