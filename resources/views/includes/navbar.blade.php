<div id="premium-bar">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{ asset('html/img/logo-grinsur.png') }}" alt="logo" width="400"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="{{ route('about_us') }}">Nosotros</a></li>
                    <li><a href="{{ route('property_list') }}">Inmuebles</a></li>
                    <li><a href="{{ route('micky_express') }}">Micky Express</a></li>
                    <li><a href="{{ route('contact_us') }}">Contacto</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
        </nav>
    </div>
</div>