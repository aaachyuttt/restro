<div>
    <!-- Food Menu section  S T A R T -->
    {{--
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
    </section> --}}

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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-area text-center mb-5">
                                <div class="sub-title">
                                    <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon">FOOD MENU
                                    <img class="ms-1" src="assets/img/icon/titleIcon.svg" alt="icon">
                                </div>
                                <h2 class="title">{{ env('APP_NAME') }} Foods Menu</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Sidebar for category navigation -->
                        <aside class="col-md-3 d-none d-md-block sticky-top border p-3 rounded shadow-sm"
                            style=" z-index: auto; height: 50vh;">
                            <ul class="nav flex-column ">
                                @foreach ($categories as $category)
                                    <li class="nav-item">
                                        <a class="nav-link text-dark fw-semibold" href="#category-{{ $category->id }}">

                                            <img src="{{ url('storage', $category->image) }}" height="24"
                                                class="me-2" alt="icon">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>

                        <!-- Main content with all food items grouped by category -->
                        <div class="col-md-9 col-12">
                            @foreach ($categories as $category)
                                <section id="category-{{ $category->id }}" class="mb-5 pt-3">
                                    <h3 class="border-bottom pb-2">{{ $category->name }}</h3>
                                    <div class="row g-4">
                                        @forelse ($category->products as $product)
                                            <div class="col-12">
                                                <div class="d-flex align-items-start gap-3 pt-3">
                                                    <div class="flex-shrink-0">
                                                        @if (!empty($product->images))
                                                            <img src="{{ url('storage', $product->images[0]) }}"
                                                                alt="{{ $product->name }}" class="rounded-circle"
                                                                style="width: 80px; height: 80px; object-fit: cover;">
                                                        @endif
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex justify-content-between align-items-start">
                                                            <h5 class="fw-bold mb-1">{{ $product->name }}</h5>
                                                            <span
                                                                class="text-danger fw-bold">${{ number_format($product->price, 2) }}</span>
                                                        </div>
                                                        <p class="text-muted mb-0 small">
                                                            {{ Str::limit($product->description, 60, '...') ?? 'No description available.' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-12">
                                                <p>No items in this category.</p>
                                            </div>
                                        @endforelse

                                    </div>
                                </section>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Marquee Section -->
        <div class="marquee-wrapper style-1 text-slider section-padding pt-0 mt-5">
            <div class="marquee-inner to-left">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item style1">
                        <span class="text-slider text-style">Chicken Pizza</span>
                        <span class="text-slider text-style">Grilled Chicken</span>
                        <span class="text-slider text-style">Burger</span>
                        <span class="text-slider text-style">Fresh Pasta</span>
                        <span class="text-slider text-style">Italiano French Fry</span>
                        <span class="text-slider text-style">Chicken Fry</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>



</div>
