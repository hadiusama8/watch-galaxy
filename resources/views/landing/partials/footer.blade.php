<footer class="bg-dark text-light py-5 mt-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="font-display fs-3 text-white mb-2">
                    <i class="bi bi-stars text-gold me-1"></i>{{ config('app.name', 'Watch Galaxy') }}
                </div>
                <p class="text-white-50 small mb-0">Curated timepieces with certified authenticity, careful servicing, and a calm shopping experience from cart to wrist.</p>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="text-uppercase small text-white-50 mb-3">Shop</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2"><a href="#collections" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">Collections</a></li>
                    <li class="mb-2"><a href="#featured" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">New in</a></li>
                    <li class="mb-2"><a href="#newsletter" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">Offers</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="text-uppercase small text-white-50 mb-3">Support</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2"><a href="#" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">Shipping</a></li>
                    <li class="mb-2"><a href="#" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">Returns</a></li>
                    <li class="mb-2"><a href="#" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">Warranty</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h6 class="text-uppercase small text-white-50 mb-3">Visit</h6>
                <p class="small text-white-50 mb-1"><i class="bi bi-geo-alt text-gold me-2"></i>128 Meridian Arcade, Geneva Row</p>
                <p class="small text-white-50 mb-0"><i class="bi bi-envelope text-gold me-2"></i>hello@watchgalaxy.example</p>
            </div>
        </div>
        <hr class="border-secondary my-4">
        <p class="small text-white-50 text-center mb-0">&copy; {{ date('Y') }} {{ config('app.name', 'Watch Galaxy') }}. All rights reserved.</p>
    </div>
</footer>
