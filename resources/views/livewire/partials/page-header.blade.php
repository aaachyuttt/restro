<div>
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            @isset($pageTitle)
                                <h1 class="breadcumb-title">{{ $pageTitle }}</h1>

                                <ul class="breadcumb-menu">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li class="text-white">/</li>
                                    <li class="active">{{ $pageTitle }}</li>
                                </ul>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
