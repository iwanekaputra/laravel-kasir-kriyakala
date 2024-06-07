{{-- <footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2024 <div class="bullet"></div> Design By <a href="{{ url('/') }}">Kriyakala Studio
        </a>
    </div>
    <div class="footer-right">

    </div>
</footer> --}}
</div>
</div>

<a href="{{ route('admin-index') }}" id="floating-action-button"><i class="fa fa-home" aria-hidden="true"></i></a>


<!-- General JS Scripts -->
<script src="/stisla/dist/assets/modules/jquery.min.js"></script>
<script src="/stisla/dist/assets/modules/popper.js"></script>
<script src="/stisla/dist/assets/modules/tooltip.js"></script>
<script src="/stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="/stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="/stisla/dist/assets/modules/moment.min.js"></script>
<script src="/stisla/dist/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="/stisla/dist/assets/modules/jquery.sparkline.min.js"></script>
<script src="/stisla/dist/assets/modules/chart.min.js"></script>
<script src="/stisla/dist/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="/stisla/dist/assets/modules/summernote/summernote-bs4.js"></script>
<script src="/stisla/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Page Specific JS File -->
<script src="/stisla/dist/assets/js/page/index.js"></script>

<!-- Template JS File -->
<script src="/stisla/dist/assets/js/scripts.js"></script>
<script src="/stisla/dist/assets/js/custom.js"></script>

<!-- JS Libraies -->
<script src="/stisla/dist/assets/modules/datatables/datatables.min.js"></script>
<script src="/stisla/dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="/stisla/dist/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="/stisla/dist/assets/modules/jquery-ui/jquery-ui.min.js"></script>

<!-- Page Specific JS File -->
<script src="/stisla/dist/assets/js/page/modules-datatables.js"></script>
@livewireScripts

<script>
    window.addEventListener('swal:modal', event => {
        swal({
            title: event.detail.message,
            text: event.detail.text,
            icon: event.detail.type,
            timer: 3000
        }).then(function() {
            window.livewire.emit(event.detail.redirect);
        });
    });

    window.addEventListener('swal:confirm', event => {
        swal({
                title: event.detail.message,
                text: event.detail.text,
                icon: event.detail.type,
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.livewire.emit(event.detail.action);
                }
            });
    });
</script>
</body>

</html>
