<footer class="footer container-fluid">
    <a class="btn-go-top" href="#"><i class="hstb hstb-down-arrow"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="footer-menu">
                    <br><br><br><br>
                    <img src="{{asset('storage/'.$mainContent['footer_logo_'.app()->getLocale()])}}" height="{{$mainContent['footer_logo_height_'.app()->getLocale()]}}px" width="{{$mainContent['footer_logo_width_'.app()->getLocale()]}}px" alt="Logo">
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-6">
                <div class="footer-menu">
                    <h4 style="text-align: center">{{__('amd.address')}}</h4>
                    <ul>
                        <pre style="background-color: #444444; text-align: center; color: black; border: none"><li>{{$contact['address_'.app()->getLocale()]}}</li></pre>
                    </ul>
                    <img src="{{asset('website/images/map.png')}}" width="100%">
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="footer-menu custom-footer-menu" style="text-align: center">
                    <h4 style="text-align: center">{{__('amd.contact_us')}}</h4>
                    <ul class="social" style="text-align: center; padding: 0; margin-left: 30px;">
                        @foreach($socialMedia as $socialMedia)
                        <li><a href="https://{{$socialMedia->url}}" target="_blank"><i class="fa-brands fa-{{$socialMedia->icon}}"></i></a></li>

                        @endforeach
                    </ul>
                    <ul style="text-align: center">
                        <li><a>{{$contact->phone}}</a></li>
                        <li><a>{{$contact->email}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="row">
                <div class="col-md-4">
                    <div class="sub-footer-menu">
                        <ul>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="copyright">&copy; <?php echo date('Y'); ?> AMD United, Devolped by <a href="https://wa.me/775504221" style="color: #B2A461">Best sight</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
