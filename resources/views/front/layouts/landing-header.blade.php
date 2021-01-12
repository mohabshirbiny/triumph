<header class="inner-page overlay-black">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="menu">
                    <div class="brand-logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('assets/triumph-logo.png')}}" alt=""
                                class="img-fluid blur-up lazyload">
                        </a>
                    </div>
                    <div class="header-right" style="position: absolute;right: 0;">
                        <ul class="header-right">
                       
                            <li class="front-setting">
                                <form id="changeLanguage" class="" action="{{url('/locale')}}" method="post">
                                    @csrf
                                    <select name='locale'>
                                        <option onclick="changeLanguage()" @if (app()->getLocale() == 'en') selected @endif value="en">ENG</option>
                                        <option  onclick="changeLanguage()" @if (app()->getLocale() == 'ar') selected @endif value="ar">عربي</option>
                                    
                                    </select>
                                </form>
                            </li>
                            
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>