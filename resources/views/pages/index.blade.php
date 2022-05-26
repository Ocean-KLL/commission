@extends('layouts.header')
@section('content')
    <!-- La partie du sliders fait et revu -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(assets/hero1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Chercher une maison de reve...</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(assets/hero2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Les meilleurs de l'immobilier</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(assets/hero3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Vous trouverez la maison de vos reves</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Advance Search Area Start ##### -->
    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Recherche filtrée</p>
                        </div>
                        <!-- Search Form -->
                        <form action="#" method="post" id="advanceSearch">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="input" class="form-control" name="input" placeholder="Mot clé">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="cities">
                                            <option>Toutes les villes</option>
                                            <option>Kinshasa</option>
                                            <option>Mbuji-mayi</option>
                                            <option>Uvira</option>
                                            <option>Bukavu</option>
                                            <option>Beni</option>
                                            <option>Equateur</option>
                                            <option>Gemena</option>
                                            <option>Isiro</option>
                                            <option>Lubumbashi</option>
                                            <option>Kisangani</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="catagories">
                                            <option>Toutes catégories</option>
                                            <option>Appartement</option>
                                            <option>Bar</option>
                                            <option>Parcelle</option>
                                            <option>Maison</option>
                                            <option>Bureau</option>
                                            <option>Magasin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="offers">
                                            <option>Toutes les offres</option>
                                            <option>100% OFF</option>
                                            <option>75% OFF</option>
                                            <option>50% OFF</option>
                                            <option>25% OFF</option>
                                            <option>10% OFF</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-3">
                                    <div class="form-group">
                                        <select class="form-control" id="bedrooms">
                                            <option>Chambres</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-3">
                                    <div class="form-group">
                                        <select class="form-control" id="bathrooms">
                                            <option>Salle de bain</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-3">
                                    <div class="form-group">
                                        <select class="form-control" id="bathrooms">
                                            <option>Salon</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-3">
                                    <div class="form-group">
                                        <select class="form-control" id="bathrooms">
                                            <option>Cuisine</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 ">
                                    <!-- Bouton rechercher -->
                                    <div class="form-group mb-0 align-items-center ">
                                        <button type="submit" class="btn south-btn">Rechercher</button>
                                    </div>
                                </div>
                               </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->


     <!-- ##### Section propriétés ##### -->
     <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="col-12">

                <div class="row">
                        <!-- La propriétés recemment ajoutés -->
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                                <!-- Image de la propriété -->
                                <div class="property-thumb">
                                    <img src="assets/feature1.jpg" alt="">
                                    <div class="tag">
                                        <span>Recent</span>
                                    </div>
                                    <div class="list-price">
                                        <p>$945 679</p>
                                    </div>
                                </div>
                                <!-- Propriété détails -->
                                <div class="property-content">
                                    <h5>Villa à Kinshasa</h5>
                                    <p class="location"><img src="assets/icons/location.png" alt="">Kinshasa Ville, Gombe</p>
                                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                                        <div class="bathroom">
                                            <img src="assets/icons/bathtub.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <img src="assets/icons/garage.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="space">
                                            <img src="assets/icons/space.png" alt="">
                                            <span>120 sq ft</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- La propriétés recemment ajoutés -->
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                                <!-- Image de la propriété -->
                                <div class="property-thumb">
                                    <img src="assets/feature1.jpg" alt="">
                                    <div class="tag">
                                        <span>Recent</span>
                                    </div>
                                    <div class="list-price">
                                        <p>$945 679</p>
                                    </div>
                                </div>
                                <!-- Propriété détails -->
                                <div class="property-content">
                                    <h5>Villa à Kinshasa Golf</h5>
                                    <p class="location"><img src="assets/icons/location.png" alt="">Kinshasa Ville, Golf</p>
                                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                                        <div class="bathroom">
                                            <img src="assets/icons/bathtub.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <img src="assets/icons/garage.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="space">
                                            <img src="assets/icons/space.png" alt="">
                                            <span>120 sq ft</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- La propriétés recemment ajoutés -->
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                                <!-- Image de la propriété -->
                                <div class="property-thumb">
                                    <img src="assets/feature1.jpg" alt="">
                                    <div class="tag">
                                        <span>Recent</span>
                                    </div>
                                    <div class="list-price">
                                        <p>$945 679</p>
                                    </div>
                                </div>
                                <!-- Propriété détails -->
                                <div class="property-content">
                                    <h5>Maison Kasa-vubu</h5>
                                    <p class="location"><img src="assets/icons/location.png" alt="">Kinshasa Ville, Victoire</p>
                                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                                        <div class="bathroom">
                                            <img src="assets/icons/bathtub.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <img src="assets/icons/garage.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="space">
                                            <img src="assets/icons/space.png" alt="">
                                            <span>120 sq ft</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                                <!-- Image de la propriété -->
                                <div class="property-thumb">
                                    <img src="assets/feature1.jpg" alt="">
                                    <div class="tag">
                                        <span>Recent</span>
                                    </div>
                                    <div class="list-price">
                                        <p>$945 679</p>
                                    </div>
                                </div>
                                <!-- Propriété détails -->
                                <div class="property-content">
                                    <h5>Appartement à Kinshasa</h5>
                                    <p class="location"><img src="assets/icons/location.png" alt="">Kinshasa Ville, Gombe</p>
                                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                                        <div class="bathroom">
                                            <img src="assets/icons/bathtub.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <img src="assets/icons/garage.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="space">
                                            <img src="assets/icons/space.png" alt="">
                                            <span>120 sq ft</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <div class="row">
                <!-- les propriétés dans la pagination -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="assets/feature1.jpg" alt="">
                            <div class="list-price">
                                <p>$945 679</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Appartement à Kinshasa</h5>
                            <p class="location"><img src="assets/icons/location.png" alt=""></p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="assets/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="assets/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <img src="assets/icons/garage.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="space">
                                    <img src="assets/icons/space.png" alt="">
                                    <span>120 sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- ##### Fin Section propriétés ##### -->


                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="assets/feature2.jpg" alt="">
                            <div class="list-price">
                                <p>$945 679</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Town House in Los Angeles</h5>
                            <p class="location"><img src="assets/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="assets/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="assets/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <img src="assets/icons/garage.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="space">
                                    <img src="assets/icons/space.png" alt="">
                                    <span>120 sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="assets/feature3.jpg" alt="">
                            <div class="list-price">
                                <p>$945 679</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Town House in Los Angeles</h5>
                            <p class="location"><img src="assets/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="assets/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="assets/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <img src="assets/icons/garage.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="space">
                                    <img src="assets/icons/space.png" alt="">
                                    <span>120 sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="400ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="assets/feature4.jpg" alt="">
                            <div class="list-price">
                                <p>$945 679</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Villa in Los Angeles</h5>
                            <p class="location"><img src="assets/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="assets/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="assets/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <img src="assets/icons/garage.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="space">
                                    <img src="assets/icons/space.png" alt="">
                                    <span>120 sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="assets/feature5.jpg" alt="">
                            <div class="list-price">
                                <p>$945 679</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Town House in Los Angeles</h5>
                            <p class="location"><img src="assets/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="assets/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="assets/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <img src="assets/icons/garage.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="space">
                                    <img src="assets/icons/space.png" alt="">
                                    <span>120 sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="600ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="assets/feature6.jpg" alt="">
                            <div class="list-price">
                                <p>$945 679</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Town House in Los Angeles</h5>
                            <p class="location"><img src="assets/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="assets/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="assets/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <img src="assets/icons/garage.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="space">
                                    <img src="assets/icons/space.png" alt="">
                                    <span>120 sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->


@endsection

