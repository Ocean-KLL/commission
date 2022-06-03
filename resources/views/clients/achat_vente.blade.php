@extends('layouts.header')
@section('content')
 <br>
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Vente & Achat</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Listing Content Wrapper Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="listings-top-meta d-flex justify-content-between mb-100">
                        <div class="view-area d-flex align-items-center">
                            <span>View as:</span>
                            <div class="grid_view ml-15"><a href="#" class="active"><i class="fa fa-th" aria-hidden="true"></i></a></div>
                            <div class="list_view ml-15"><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="order-by-area d-flex align-items-center">
                            <span class="mr-15">Ordre de :</span>
                            <select>
                              <option selected>Par défaut</option>
                              <option value="1">Appartements</option>
                              <option value="2">Villas</option>
                              <option value="3">Maisons</option>
                              <option value="3">Terrains</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h1 id="villas">Villas</h1>
                </div>
                <hr>
                <br><br>
                <div class="row">
                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/feature1.jpg" alt="">
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Villa in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/feature2.jpg" alt="">
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/feature3.jpg" alt="">
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <h1 id="appart">Appartéments</h1>
                </div>
                <hr>
                <br><br>
                <div class="row">
                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/feature4.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Villa in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/feature5.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/feature6.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <h1 id="maison">Maisons</h1>
                </div>
                <div class="row">
                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/feature7.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/feature8.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/feature9.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <span>pour plus d'informations sur la façon de vendre et d'acheter veuillez cliquer <a class="btn btn-info" href="{{route('infos')}}">ici</a></span>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
    <!-- ##### Listing Content Wrapper Area End ##### -->

@endsection