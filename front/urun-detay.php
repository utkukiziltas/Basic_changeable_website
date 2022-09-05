<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title></title>

    <?php include 'inc/header.php'; ?>
</head>
<body>


<?php include 'inc/navbar.php' ?>


<!-- Product section-->
<section class="py-5 w-auto">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="assets/img/urun3.jpeg" alt="..."/></div>
            <div class="col-md-6">
                <div class="small mb-1">SKU: BST-498</div>
                <h1 class="display-5 fw-bolder">Shop item template</h1>
                <div class="fs-5 mb-5 mt-3">
                    <span class="text-decoration-line-through">$45.00</span>
                    <span>$40.00</span>
                </div>
                <div class="row">
                    <div class="col-lg-6 mt-3">
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <span class="mr-3">whatsaap ile iletişime geç</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor"
                                 class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <button class="btn btn-outline-success flex-shrink-0" type="button">
                            <span class="mr-3">Dolapta göster</span>
                            <img alt="product-item" src="https://cdn.dolap.com/web/images/logo-2.svg" width="42">
                        </button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label>
                            <select class="form-select d-block">
                                <option selected value="1">S</option>
                                <option value="2">M</option>
                                <option value="3">XL</option>
                            </select>
                        </label>
                    </div>
                </div>
                <p class="lead mb-3 mt-5 py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>
        </div>
    </div>
</section>
<!-- Related items section-->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Benzer Ürünler</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-main text-white position-absolute" style="top: 0.5rem; right: 0.5rem">İndirim
                    </div>
                    <!-- Product image-->
                    <img class="card-img-top" src="assets/img/urun4.jpeg" alt="..."/>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <span class="text-muted text-decoration-line-through">$20.00</span>
                            $18.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark main-color mt-auto" href="#">İncele</a></div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

<style>
    .social-buttons a {
        border: none;
    }

    p.lead {
        font-family: initial;
    }

    svg.bi.bi-whatsapp {
        margin-left: 8px;
    }

    .ma-le {
        margin-left: 20px;
    }
</style>


</body>
<?php include 'inc/footer.php' ?>
