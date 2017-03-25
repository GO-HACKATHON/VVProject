<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll">
                    <span class="light">VV</span>
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    @if (Request::path() == '/')
                    <li>
                        <a class="get-recommendation-nav-button" href="{{ url('/about') }}">WHAT AM I ?</a>
                    </li>
                    @else
                    <li>
                        <a class="get-recommendation-nav-button" href="{{ url('/') }}">GET RECOMMENDATION</a>
                    </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>