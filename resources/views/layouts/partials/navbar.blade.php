   <!-- ##### Header Area Start ##### -->
   <header class="header-area">
       <!-- Navbar Area -->
       <div class="palatin-main-menu">
           <div class="classy-nav-container breakpoint-off">
               <div class="container">
                   <!-- Menu -->
                   <nav class="classy-navbar justify-content-between align-items-center " id="palatinNav">

                       <!-- Nav brand -->
                       <a href="{{ url('/') }}" class="nav-brand"><img src="/img/img_salmon_logo.webp" alt=""
                               width="60"></a>
                       <a href="{{ url('/') }}" class=""><img src="/img/img_salmon_logo.webp"
                               class="is-sticky-logo" alt="" width="60"></a>

                       <!-- Navbar Toggler -->
                       <div class="classy-navbar-toggler">
                           <span class="navbarToggler"><span></span><span></span><span></span></span>
                       </div>

                       <!-- Menu -->
                       <div class="classy-menu">

                           <!-- close btn -->
                           <div class="classycloseIcon">
                               <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                           </div>

                           <!-- Nav Start -->
                           <div class="classynav">
                               <a href="{{ url('/') }}" class="mobile-logo d-sm-none d-block text-center mb-4"><img
                                       src="/img/img_white_logo.webp" alt="" width="60"></a>
                               <ul>
                                   <li class="{{ Request::is('/') ? 'active' : '' }}"><a
                                           href="{{ url('/') }}">Home</a></li>
                                   <li class="{{ Request::is('products') ? 'active' : '' }}"><a
                                           href="{{ route('product.show', 31) }}">Promo Group</a></li>
                                   <li class="{{ Request::is('products') ? 'active' : '' }}"><a
                                           href="{{ url('/products') }}">Product</a></li>
                                   {{-- <li class="{{ Request::is('service') ? 'active' : '' }}"><a
                                           href="{{ url('/service') }}">Services</a></li>
                                   <li class="{{ Request::is('portfolio') ? 'active' : '' }}"><a
                                           href="{{ url('/portfolio') }}">Portfolio</a></li>
                                   <li class="{{ Request::is('contact') ? 'active' : '' }}"><a
                                           href="{{ url('/contact') }}">Contact</a></li> --}}
                               </ul>

                               <div class="mt-3 text-center d-block d-sm-none" data-wow-delay="600ms">
                                   <a href="https://www.facebook.com/Kriyakalastudio"><i
                                           class="fa fa-facebook text-white px-2" style="font-size: 20px;"
                                           aria-hidden="true"></i></a>
                                   <a href="https://www.instagram.com/kriyakala_studio/"><i
                                           class="fa fa-instagram text-white px-2" style="font-size: 20px;"
                                           aria-hidden="true"></i></a>
                               </div>

                               <!-- Button -->
                               <div class="menu-btn d-sm-block" style="margin-left: 90px">
                                   <a href="{{ url('products') }}" class="btn "></a>
                               </div>

                           </div>
                           <!-- Nav End -->
                       </div>
                   </nav>
               </div>
           </div>
       </div>
   </header>
   <!-- ##### Header Area End ##### -->
