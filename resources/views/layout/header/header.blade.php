<header class="fixed-top header">
    <!-- top header -->
    <div class="top-header py-2 bg-white">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 text-center text-lg-left">
                    <a class="text-color mr-3" href="callto:+443003030266"><strong>CALL</strong> +44 300 303 0266</a>
                    <ul class="list-inline d-inline">
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i
                                    class="ti-facebook"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i
                                    class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i
                                    class="ti-linkedin"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i
                                    class="ti-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 text-center text-lg-right">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a
                                class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                href="notice.html">notice</a></li>
                        <li class="list-inline-item"><a
                                class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                href="research.html">research</a></li>
                        <li class="list-inline-item"><a
                                class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                href="scholarship.html">SCHOLARSHIP</a></li>
                        <li class="list-inline-item"><a
                                class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#"
                                data-toggle="modal" data-target="#loginModal">login</a></li>
                        <li class="list-inline-item"><a
                                class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#"
                                data-toggle="modal" data-target="#signupModal">register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a class="navbar-brand" href="index.html"><img
                        src="https://upload.wikimedia.org/wikipedia/commons/1/1e/RPC-JP_Logo.png"
                        style="width: 100px; height:80px;" alt="logo"></a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item @@home @if(Request::is('/')) active @endif">
                            <a class="nav-link"  href="/">Home</a>
                        </li>
                        <li class="nav-item @@news @if(Request::is('news','news/*')) active @endif">
                            <a class="nav-link "   href="/news">About</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
