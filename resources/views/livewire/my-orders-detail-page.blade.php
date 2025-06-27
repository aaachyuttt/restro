<div>
    <div class="container my-5">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('my-orders') }}">My Orders</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order #ORD-12345</li>
            </ol>
        </nav>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h2">Order Details <small class="text-muted">#ORD-12345</small></h1>
            <div>
                <a href="{{ route('my-orders') }}" class="btn btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                    Back to Orders
                </a>
            </div>
        </div>

        <div class="card mb-4 p-4">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5 class="text-muted">Order Placed</h5>
                    <p class="lead mb-0">June 27, 2025 at 10:30 AM</p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-muted">Total Amount</h5>
                    <p class="lead mb-0">£25.50</p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-muted">Status</h5>
                    <p class="lead mb-0">
                        <span class="badge bg-success fs-6">Completed</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card p-4 mb-4">
                    <div class="section-header">
                        <h4 class="mb-0">Order Items</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-order-items">
                            <thead class="text-muted">
                                <tr>
                                    <th scope="col" class="py-3">Item</th>
                                    <th scope="col" class="py-3 text-end">Quantity</th>
                                    <th scope="col" class="py-3 text-end">Price</th>
                                    <th scope="col" class="py-3 text-end">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/60" class="me-3 rounded"
                                                alt="Item Image" style="width: 60px; height: 60px; object-fit: cover;">
                                            <div>
                                                <h6 class="mb-0">Spicy Pepperoni Pizza</h6>
                                                <small class="text-muted">Medium, Extra Cheese</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end align-middle">2</td>
                                    <td class="text-end align-middle">£10.00</td>
                                    <td class="text-end align-middle">£20.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/60" class="me-3 rounded"
                                                alt="Item Image" style="width: 60px; height: 60px; object-fit: cover;">
                                            <div>
                                                <h6 class="mb-0">Garlic Bread</h6>
                                                <small class="text-muted">Classic</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end align-middle">1</td>
                                    <td class="text-end align-middle">£3.50</td>
                                    <td class="text-end align-middle">£3.50</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/60" class="me-3 rounded"
                                                alt="Item Image" style="width: 60px; height: 60px; object-fit: cover;">
                                            <div>
                                                <h6 class="mb-0">Coca-Cola (Can)</h6>
                                                <small class="text-muted">330ml</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end align-middle">2</td>
                                    <td class="text-end align-middle">£1.00</td>
                                    <td class="text-end align-middle">£2.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card p-4">
                    <div class="section-header">
                        <h4 class="mb-0">Payment Summary</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 offset-md-6">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Subtotal:</span>
                                <span class="fw-bold">£25.50</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Delivery Fee:</span>
                                <span class="fw-bold">£2.00</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Discount:</span>
                                <span class="text-danger fw-bold">-£2.00</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center mb-3 fs-5">
                                <strong>Total:</strong>
                                <strong>£25.50</strong>
                            </div>
                            <div class="text-end">
                                <span class="badge bg-success fs-6">Paid with Card</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card p-4 mb-4">
                    <div class="section-header">
                        <h4 class="mb-0">Customer Details</h4>
                    </div>
                    <p class="mb-1"><strong>Name:</strong> John Doe</p>
                    <p class="mb-1"><strong>Email:</strong> john.doe@example.com</p>
                    <p class="mb-1"><strong>Phone:</strong> 07700 900123</p>
                </div>

                <div class="card p-4 mb-4">
                    <div class="section-header">
                        <h4 class="mb-0">Delivery Information</h4>
                    </div>
                    <p class="mb-1"><strong>Address:</strong> 123 Foodie Street</p>
                    <p class="mb-1">London, UK</p>
                    <p class="mb-1">EC1A 1AA</p>
                    <p class="mb-0 mt-3"><strong>Delivery Method:</strong> Delivery</p>
                    <p class="mb-0"><strong>Estimated Time:</strong> 30-45 mins</p>
                </div>

                <div class="card p-4 text-center">
                    <h5 class="mb-3">Need help with your order?</h5>
                    <a href="/contact" class="theme-btn w-100">Contact Support</a>
                </div>
            </div>
        </div>
    </div>
</div>
