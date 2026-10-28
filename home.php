<?php
ob_start();
?>
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to Smart Plant Sensors</h2>
        <p class="text-muted mb-0">Your one-stop shop for Smart Plant Sensors & Environmental Monitors</p>
    </div>
</div>

<div id="homeCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner rounded shadow-sm">
        <div class="carousel-item active">
            <img src="images/product01.jpg" class="d-block w-100" alt="Product 1" style="height: 380px; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="images/product02.jpg" class="d-block w-100" alt="Product 2" style="height: 380px; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="images/product03.jpg" class="d-block w-100" alt="Product 3" style="height: 380px; object-fit: cover;">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="row g-3">
    <div class="col-md-3">
        <a href="products.php" class="text-decoration-none">
            <div class="card shadow-sm text-center h-100 border-0">
                <div class="card-body py-4">
                    <i class="bi bi-box-seam-fill fs-1 text-primary"></i>
                    <h5 class="mt-2 mb-0 text-dark">Products</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="customers.php" class="text-decoration-none">
            <div class="card shadow-sm text-center h-100 border-0">
                <div class="card-body py-4">
                    <i class="bi bi-people-fill fs-1 text-success"></i>
                    <h5 class="mt-2 mb-0 text-dark">Customers</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="staffs.php" class="text-decoration-none">
            <div class="card shadow-sm text-center h-100 border-0">
                <div class="card-body py-4">
                    <i class="bi bi-person-badge-fill fs-1 text-warning"></i>
                    <h5 class="mt-2 mb-0 text-dark">Staffs</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="orders.php" class="text-decoration-none">
            <div class="card shadow-sm text-center h-100 border-0">
                <div class="card-body py-4">
                    <i class="bi bi-cart-check-fill fs-1 text-info"></i>
                    <h5 class="mt-2 mb-0 text-dark">Orders</h5>
                </div>
            </div>
        </a>
    </div>
</div>
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>