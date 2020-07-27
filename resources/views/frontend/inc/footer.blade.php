<footer class="ps-footer">
        <div class="ps-container">
        @php
                    $generalsetting = \App\GeneralSetting::first();
                @endphp
            <div class="ps-footer__widgets">
                <aside class="widget widget_footer widget_contact-us">
                    <h4 class="widget-title">Contact us</h4>
                    <div class="widget_content">
                        <p>Call us 24/7</p>
                        <h3>{{ $generalsetting->phone }}</h3>
                        <p>{{ $generalsetting->email  }}</p>
                        <p>{{ $generalsetting->address }}</p>
                        <ul class="ps-list--social">
                        @if ($generalsetting->facebook != null)
                            <li><a class="facebook" href="{{ $generalsetting->facebook }}"><i class="fa fa-facebook"></i></a></li>
                       @endif
                       @if ($generalsetting->twitter != null)
                            <li><a class="twitter" href="{{ $generalsetting->twitter }}"><i class="fa fa-twitter"></i></a></li>
                            @endif
                            @if ($generalsetting->google_plus != null)
                            <li><a class="google-plus" href="{{ $generalsetting->google_plus }}"><i class="fa fa-google-plus"></i></a></li>
                            @endif
                            @if ($generalsetting->instagram != null)
                            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Quick links</h4>
                    <ul class="ps-list--link">
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Term & Condition</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Return</a></li>
                        <li><a href="faqs.html">FAQs</a></li>
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Company</h4>
                    <ul class="ps-list--link">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="#">Affilate</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Bussiness</h4>
                    <ul class="ps-list--link">
                        <li><a href="#">Our Press</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="my-account.html">My account</a></li>
                        <li><a href="shop-default.html">Shop</a></li>
                    </ul>
                </aside>
            </div>
           
            <div class="ps-footer__copyright">
                <p> © {{ date('Y') }} {{ $generalsetting->site_name }}</p>
                <p><span>We Using Safe Payment For:</span><a href="#"><img  src="{{ asset('frontend1/img/payment-method/1.jpg')}}"  alt=""></a><a href="#"><img src="{{ asset('frontend1/img/payment-method/2.jpg')}}" alt=""></a><a href="#"><img src="{{ asset('frontend1/img/payment-method/3.jpg')}}" alt=""></a><a href="#"><img src="{{ asset('frontend1/img/payment-method/4.jpg')}}" alt=""></a><a href="#"><img src="{{ asset('frontend1/img/payment-method/5.jpg')}}" alt=""></a></p>
            </div>
        </div>
    </footer>