@extends('layouts.landing')

@section('title', config('app.name', 'Watch Galaxy'))

@section('content')
    @include('landing.partials.nav')

    <section class="hero-landing pt-5 mt-5">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-1 order-2">
                    <p class="text-uppercase small tracking-wide text-gold mb-2">Time, elevated</p>
                    <h1 class="display-3 fw-semibold mb-3">Watches worth wearing every day.</h1>
                    <p class="lead mb-4">From minimal dials to statement chronographs — hand-picked pieces with transparent specs, fair pricing, and concierge support.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#featured" class="btn btn-gold btn-lg rounded-pill px-4">Shop new arrivals</a>
                        <a href="#collections" class="btn btn-outline-light btn-lg rounded-pill px-4">Browse collections</a>
                    </div>
                    <div class="row row-cols-3 g-3 mt-5 pt-lg-2 text-center text-lg-start">
                        <div>
                            <div class="font-display fs-2 text-gold mb-0">48h</div>
                            <small class="text-white-50">Dispatch</small>
                        </div>
                        <div>
                            <div class="font-display fs-2 text-gold mb-0">2yr</div>
                            <small class="text-white-50">Warranty</small>
                        </div>
                        <div>
                            <div class="font-display fs-2 text-gold mb-0">100%</div>
                            <small class="text-white-50">Authentic</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 text-center">
                    <img
                        src="https://images.unsplash.com/photo-1524592094714-0f0654e20314?auto=format&fit=crop&w=900&q=80"
                        class="img-fluid rounded-4 shadow-lg"
                        alt="Classic wristwatch on a dark surface"
                        width="600"
                        height="600"
                    >
                </div>
            </div>
        </div>
    </section>

    <section id="collections" class="py-5">
        <div class="container py-4">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <p class="text-uppercase small text-muted mb-2">Collections</p>
                    <h2 class="display-5 fw-semibold">Three moods. One standard of quality.</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522312346379-dc352dec0d31?auto=format&fit=crop&w=800&q=80" class="card-img-top" style="height:200px;object-fit:cover;" alt="Minimal watch">
                        <div class="card-body">
                            <h3 class="h4 font-display">Atelier</h3>
                            <p class="text-muted small mb-0">Slim cases, quiet dials, and straps that patina beautifully.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1614162692292-7ef56ec16364?auto=format&fit=crop&w=800&q=80" class="card-img-top" style="height:200px;object-fit:cover;" alt="Sport watch">
                        <div class="card-body">
                            <h3 class="h4 font-display">Horizon</h3>
                            <p class="text-muted small mb-0">Water-ready builds, luminous markers, weekend-proof lume.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1533139502658-0198f920d3e8?auto=format&fit=crop&w=800&q=80" class="card-img-top" style="height:200px;object-fit:cover;" alt="Dress watch">
                        <div class="card-body">
                            <h3 class="h4 font-display">Gala</h3>
                            <p class="text-muted small mb-0">Evening metals, refined indices, and bracelets that sing under light.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="featured" class="section-muted py-5">
        <div class="container py-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
                <div>
                    <p class="text-uppercase small text-muted mb-2">Featured</p>
                    <h2 class="display-6 fw-semibold mb-0">This week on the wrist</h2>
                </div>
                <a href="#" class="btn btn-outline-dark rounded-pill">View catalog</a>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-product h-100">
                        <img src="https://images.unsplash.com/photo-1526045431048-f857369baa09?auto=format&fit=crop&w=800&q=80" alt="Steel diver watch">
                        <div class="card-body">
                            <span class="badge bg-dark-subtle text-dark mb-2">New</span>
                            <h3 class="h5 font-display">Mariner Automatic</h3>
                            <p class="text-muted small mb-3">316L steel, ceramic bezel, 200m depth rating.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold">$1,240</span>
                                <a href="#" class="btn btn-sm btn-dark rounded-pill">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-product h-100">
                        <img src="https://images.unsplash.com/photo-1522312346379-dc352dec0d31?auto=format&fit=crop&w=800&q=80" alt="Minimal silver watch">
                        <div class="card-body">
                            <span class="badge bg-secondary-subtle text-secondary-emphasis mb-2">Bestseller</span>
                            <h3 class="h5 font-display">Nordic 38</h3>
                            <p class="text-muted small mb-3">Domed sapphire, Swiss quartz, quick-release strap.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold">$420</span>
                                <a href="#" class="btn btn-sm btn-dark rounded-pill">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-product h-100">
                        <img src="https://images.unsplash.com/photo-1612817288484-6f916006741a?auto=format&fit=crop&w=800&q=80" alt="Chronograph watch">
                        <div class="card-body">
                            <span class="badge text-bg-warning mb-2">Limited</span>
                            <h3 class="h5 font-display">Pace Chrono</h3>
                            <p class="text-muted small mb-3">Column-wheel feel, tachymeter ring, exhibition caseback.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold">$2,180</span>
                                <a href="#" class="btn btn-sm btn-dark rounded-pill">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="story" class="py-5">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1587836374828-4dbafa94cf0e?auto=format&fit=crop&w=900&q=80" class="img-fluid rounded-4 shadow" alt="Watchmaker workspace">
                </div>
                <div class="col-lg-6">
                    <p class="text-uppercase small text-muted mb-2">Our story</p>
                    <h2 class="display-5 fw-semibold mb-4">We obsess over the details you notice at arm&apos;s length.</h2>
                    <p class="text-muted">Every listing is photographed in-house, timed on a scope, and checked for bracelet stretch and case polish. If it is not a watch we would wear ourselves, it does not ship.</p>
                    <ul class="list-unstyled mt-4">
                        <li class="d-flex mb-3"><i class="bi bi-check-circle-fill text-gold me-3 fs-5"></i><span>Multi-point inspection before dispatch</span></li>
                        <li class="d-flex mb-3"><i class="bi bi-check-circle-fill text-gold me-3 fs-5"></i><span>Complimentary sizing on metal bracelets</span></li>
                        <li class="d-flex"><i class="bi bi-check-circle-fill text-gold me-3 fs-5"></i><span>30-day returns on unworn pieces</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="newsletter" class="pb-5">
        <div class="container">
            <div class="rounded-4 p-4 p-lg-5 text-center text-white position-relative overflow-hidden" style="background: linear-gradient(120deg, #1a222d, #0f1419);">
                <div class="position-absolute top-0 end-0 opacity-25" style="font-size: 12rem; line-height: 1;"><i class="bi bi-watch"></i></div>
                <div class="position-relative">
                    <h2 class="font-display display-6 mb-3">Join the early list</h2>
                    <p class="text-white-50 mx-auto mb-4" style="max-width: 32rem;">Be first to see drops, restocks, and private appointments. No spam — one polished note per week.</p>
                    <form class="row g-2 justify-content-center" action="#" method="get">
                        <div class="col-12 col-sm-8 col-md-5">
                            <label for="newsletterEmail" class="visually-hidden">Email</label>
                            <input type="email" class="form-control form-control-lg rounded-pill px-4" id="newsletterEmail" placeholder="you@example.com" autocomplete="email">
                        </div>
                        <div class="col-12 col-sm-auto">
                            <button type="button" class="btn btn-gold btn-lg rounded-pill px-4 w-100">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('landing.partials.footer')
@endsection
