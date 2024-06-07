<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ecommerce Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="/stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/stisla/dist/assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">


    <!-- Template CSS -->
    <link rel="stylesheet" href="/stisla/dist/assets/css/style.css">
    <link rel="stylesheet" href="/stisla/dist/assets/css/components.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    @livewireStyles
    <!-- /END GA -->
</head>

<body>


    @yield('content')
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
    <script src="/stisla/dist/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="/stisla/dist/assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="/stisla/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="/stisla/dist/assets/js/page/index.js"></script>

    <!-- Page Specific JS File -->
    <script src="/stisla/dist/assets/js/page/forms-advanced-forms.js"></script>

    <!-- Template JS File -->
    <script src="/stisla/dist/assets/js/scripts.js"></script>
    <script src="/stisla/dist/assets/js/custom.js"></script>
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
