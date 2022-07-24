<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                @foreach ($category as $value)
                    <li><a href="{{url('product-by-category/'.$value->category_ms_id)}}">{{$value->category_ms_name}}</a></li>
                @endforeach
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>