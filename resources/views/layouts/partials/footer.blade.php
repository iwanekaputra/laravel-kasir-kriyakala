<a href="{{ route('admin-index') }}" id="floating-action-button"><i class="fa fa-home" aria-hidden="true"></i></a>


@livewireScripts



<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="/js/active.js"></script>
<script>
    function leftScroll(type) {
        const left = document.querySelector(".scroll-" + type);
        left.scrollBy(-200, 0);
    }

    function rightScroll(type) {
        const right = document.querySelector(".scroll-" + type);
        right.scrollBy(200, 0);
    }

    function autoSlide(type) {
        const right = document.querySelector(".scroll-" + type);
        right.scrollBy(200, 0);
    }

    // setInterval(() => {
    //     autoSlide('self-foto')
    //     autoSlide('graduation')
    //     autoSlide('family')
    //     autoSlide('group')
    //     autoSlide('maternity')
    //     autoSlide('prewedding')
    // }, 3000);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script>
    Fancybox.bind('[data-fancybox]', {
        //
    });
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BFF49HX" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>
