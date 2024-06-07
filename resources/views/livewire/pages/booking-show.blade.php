<div>
    <div>
        <div class="">
            <div class="invoice"
                style="background-image: url('/img/1.png'); background-size : cover; background-repeat :no-repeat; height  : 150vh;  background-position : center">
                <div class="row justify-content-center">
                    <div class="col-4 mt-3">
                        <h2 class="text-center p-3 text-dark rounded">Dashboard Admin - Kasir
                        </h2>
                    </div>
                </div>
                <div class="invoice-print text-white mt-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="invoice-title mb-5 text-center">
                                @if ($booking->link_file)
                                    <a class="text-center p-3 color-green rounded text-decoration-none text-white"
                                        style="cursor: pointer">Sudah Terkirim</a>
                                @else
                                    <a href="{{ route('admin.booking.approve', $booking->id) }}"
                                        class="text-center p-3 color-green rounded text-decoration-none text-white"
                                        style="cursor: pointer">KLIK
                                        UNTUK SELESAI
                                        PHOTO</a>
                                @endif
                            </div>
                            <div class="invoice-title">
                                <h2>Invoice</h2>
                                <div class="invoice-number">{{ $booking->order_id }}</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <strong>Billed To:</strong><br>
                                        {{ $booking->name }}<br>
                                        {{ $booking->email }}<br>
                                        {{ $booking->nowa }}<br>
                                    </address>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Studio</strong><br>
                                        {{ $booking->studio }}<br>
                                        {{ $booking->service }}<br>
                                        {{ $booking->package }}<br>
                                    </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <strong>Additional</strong><br>
                                        Main Background : {{ $booking->main_background }}<br>
                                        @if ($booking->additional_background != '0')
                                            Additional Background : {{ $booking->additional_background }}
                                        @endif
                                    </address>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Booking Date:</strong><br>
                                        {{ $booking->in_date }} - {{ $booking->time }}<br><br>
                                    </address>
                                </div>
                                <div class="col-md-6 text-md-left">
                                    <address>
                                        <strong>Status Pembayaran:</strong><br>
                                        @if ($booking->status_payment == 'Proses')
                                            <td>
                                                <div class="badge badge-warning">{{ $booking->status_payment }}</div>
                                            </td>
                                        @endif
                                        @if ($booking->status_payment == 'Lunas')
                                            <td>
                                                <div class="badge badge-success">{{ $booking->status_payment }}</div>
                                            </td>
                                        @endif
                                        @if ($booking->status_payment == 'DP 50%')
                                            <td>
                                                <div class="badge badge-info">{{ $booking->status_payment }}</div>
                                            </td>
                                        @endif

                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th>Package</th>
                                        <th class="text-center">Price</th>
                                    </tr>
                                    <tr>
                                        <th>{{ $booking->package }}</th>
                                        <th class="text-center">Rp.
                                            {{ number_format((int) $booking->price_package, 0, ',', '.') }}</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th>Item</th>
                                        <th class="text-center">Price</th>
                                    </tr>
                                    @if ($booking->additional)
                                        @foreach ($booking->additional as $key => $value)
                                            <tr>
                                                <th>{{ $key }}</th>
                                                @if ($value == 'FREE')
                                                    <th class="text-center">{{ $value }}</th>
                                                @else
                                                    <th class="text-center">Rp.
                                                        {{ number_format((int) $value, 0, ',', '.') }}</th>
                                                @endif
                                            </tr>
                                        @endforeach

                                    @endif
                                </table>
                            </div>


                            <div class="row mt-4 justify-content-end">
                                <div class="col-lg-4 text-right">
                                    <hr class="mt-2 mb-2">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name text-white">Total</div>
                                        <div class="invoice-detail-value invoice-detail-value-lg">Rp.
                                            {{ number_format((int) $booking->price_total, 0, ',', '.') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>

</div>
