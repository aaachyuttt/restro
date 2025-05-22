<div>
    <!-- Food Menu section  S T A R T -->
    <section class="food-menu-section fix section-padding" id="menu">
        <div class="burger-shape">
            <img src="assets/img/shape/burger-shape.png" alt="img">
        </div>
        <div class="fry-shape">
            <img src="assets/img/shape/fry-shape.png" alt="img">
        </div>
        <div class="food-menu-wrapper style1">
            <div class="container">
                <div class="food-menu-tab-wrapper style-bg">
                    <div class="title-area">
                        <div class="sub-title text-center wow fadeInUp" data-wow-delay="0.5s">
                            <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon">FOOD MENU<img
                                class="ms-1" src="assets/img/icon/titleIcon.svg" alt="icon">
                        </div>
                        <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                            {{ env('APP_NAME') }} Foods Menu
                        </h2>
                    </div>


                    <div class="food-menu-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            @foreach ($categories as $category)
                                <li class="nav-item" role="presentation">
                                    <button wire:click="setActiveCategory({{ $category->id }})"
                                        class="nav-link {{ $activeCategory === $category->id ? 'active' : '' }}"
                                        id="pills-FastFood-tab" data-bs-toggle="pill" data-bs-target="#pills-FastFood"
                                        type="button" role="tab" aria-controls="pills-FastFood"
                                        aria-selected="true"><img src="{{ url('storage', $category->image) }}"
                                            height="36" alt="icon">{{ $category->name }}</button>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-FastFood" role="tabpanel"
                                aria-labelledby="pills-FastFood-tab" tabindex="0">
                                <div class="row gx-60">
                                    @php
                                        $columns = $products->chunk(ceil($products->count() / 2));
                                    @endphp
                                    @forelse ($columns as $column)
                                        <div class="col-lg-6">
                                            @foreach ($column as $product)
                                                <div class="single-menu-items">
                                                    <div class="details">
                                                        <div class="menu-item-thumb"><img
                                                                src="{{ url('storage', $product->images[0]) }}"
                                                                height="80" alt="thumb">
                                                        </div>
                                                        <div class="menu-content">
                                                            <a href="menu.php">
                                                                <h3>{{ $product->name }}</h3>
                                                            </a>
                                                            <p>It's a testament to our.</p>
                                                        </div>
                                                    </div>

                                                    <h6>$15.99</h6>
                                                </div>
                                            @endforeach
                                        </div>
                                    @empty
                                        <p class="text-center">No menu items available.</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="marquee-wrapper style-1 text-slider section-padding pt-0 mt-5">
            <div class="marquee-inner to-left">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item style1">
                        <span class="text-slider"></span><span class="text-slider text-style">chicken pizza</span>
                        <span class="text-slider"></span><span class="text-slider text-style">GRILLED CHICKEN</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN PIZZA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">FRESH PASTA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">ITALIANO FRENCH
                            FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">chicken pizza</span>
                        <span class="text-slider"></span><span class="text-slider text-style">GRILLED CHICKEN</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN PIZZA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">FRESH PASTA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">ITALIANO FRENCH
                            FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN FRY</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>
