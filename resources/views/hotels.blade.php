@extends ('layouts.app')
@section('content')



      <!-- Inner Page Banner STRAT -->
      <section class="inner-banner ">
        <div class=" tour-search">
          <div class=" main-form tour-search-detail">

            <div class="container">
                <ul class="nav nav-tabs mb-30 mb-sm-15" id="tab2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link btn active" id="one_way_tab" data-toggle="tab" href="#one_way" role="tab"
                            aria-controls="one_way" aria-selected="true"><span></span>One Way</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" id="round_trip_tab" data-toggle="tab" href="#round_trip" role="tab"
                            aria-controls="round_trip" aria-selected="false"><span></span>Round Trip</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" id="multi_city_tab" data-toggle="tab" href="#multi_city" role="tab"
                            aria-controls="multi_city" aria-selected="false"><span></span>Multi City</a>
                    </li>
                </ul>

              <div class="search-form-wrapper">

                <form class="main-form" action="#">
                  <div class="row align-items-end justify-content-center">
                    <div class="form-group col-xl-3 col-md-6 col-12">
                      <div class="input-inner mb-3 mb-xl-0">
                        <label>Search for Hotels</label>
                        <div class="input-box">
                            <div class="input-icon">
                                <span><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <input id="from-one-way" class="form-control" type="text" required placeholder="From">
                        </div>
                        </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6">
                            <div class="input-inner mb-3">
                                <label>To</label>
                                <div class="input-box">
                                    <div class="input-icon">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input id="to-one-way" class="form-control" type="text" required placeholder="To">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6">
                            <div class="input-inner mb-3">
                                <label>Depart Date</label>
                                <div class="input-box">
                                    <div class="input-icon">
                                        <span><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input id="one-way-date" class="form-control datepicker datepick" type="text" required
                                        placeholder="MM/DD/YY">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-md-4 col-sm-6">
                            <div class="input-inner mb-3 mb-md-0">
                                <label>Class of travel</label>
                                <select class="select" name="Coach">
                                    <option value="ec">Economy</option>
                                    <option value="bu">Business</option>
                                    <option value="fr">First Class</option>
                                    <option value="pe">Premium Economy</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-md-4 col-6">
                            <div class="input-inner mb-3 mb-md-0">
                                <label>Adults</label>
                                <select class="select" name="adults">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-md-4 col-6">
                            <div class="input-inner mb-3 mb-md-0">
                                <label>Children</label>
                                <select class="select" name="children">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                        </div>


                    <div class="form-group col-xl-2 col-md-4 col-sm-6 col-12">
                      <div class="search-btn">
                        <button name="search" type="submit" class="btn btn-color w-100">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><path d="M11.35 1.94a6.67 6.67 0 0 0-9.41 0 6.67 6.67 0 0 0 0 9.41c2.31 2.31 5.91 2.56 8.5.75.05.26.18.5.38.7l3.78 3.78c.55.55 1.44.55 1.99 0s.55-1.44 0-1.99l-3.78-3.78c-.2-.2-.45-.33-.7-.38 1.8-2.58 1.55-6.17-.76-8.49zm-1.19 8.22c-1.94 1.94-5.09 1.94-7.02 0a4.98 4.98 0 0 1 0-7.02c1.94-1.94 5.09-1.94 7.02 0s1.94 5.08 0 7.02z" fill-rule="evenodd" fill="#fff"/></svg> Search Now
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Inner Page Banner END -->

      <!-- Bread Crumb STRAT -->
      <section class="bread bread-banner">
        <div class="container">
          <div class="bread-detail text-center d-md-flex align-items-center justify-content-between">
            <h4 class="bread-title mb-3 mb-md-0">Hotel List</h4>
            <div class="bread-crumb">
              <ul>
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Hotels</a></li>
                <li class="breadcrumb-item active"><a href="#">Hotel List</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Bread Crumb END -->

      <div id="map-show" class="main-container collapse">
        <div class="map">
          <iframe class="map-part" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190178.49401377814!2d13.253727274681411!3d52.52218428869219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a84e373f035901%3A0x42120465b5e3b70!2sBerlin%2C%20Germany!5e0!3m2!1sen!2sin!4v1627443069987!5m2!1sen!2sin" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>

      <!--package Block Start -->
      <section class="ptb-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-9 col-lg-8 order-lg-2">
              <!-- shorting  -->
              <div class="shorting mb-30 mb-xs-15">
                <div class="row ">
                  <div class="col-xl-6 col-12">
                    <div class="view">
                      <div class="list-types grid ">
                        <a>
                          <div class="grid-icon list-types-icon"></div>
                        </a>
                      </div>
                      <div class="list-types list active">
                        <a>
                          <div class="list-icon list-types-icon"></div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-12">
                    <div class="short-by float-left-lg float-right mt-lg-20">
                      <span>Sort By :</span>
                      <div class="select-item">
                        <div class=" select-dropdown ">
                          <div class="drop-option">
                            <div class="drop-list">
                              <span>Name : Z To A</span>
                              <div  class="dropdown-arrow"><i class="fa fa-angle-down"></i></div>
                            </div>
                              <div class="select-option" style="display: none;">
                                <a href="#">New Hotel</a>
                                <a href="#">Name : Z To A</a>
                                <a href="#">Price : Low &gt; High</a>
                                <a href="#">Price : High &gt; Low</a>
                                <a href="#">Rating : Highest</a>
                                <a href="#">Rating : Lowest</a>
                              </div>
                           </div>
                        </div>
                      </div>
                      <div class="map-show-btn float-right-lg">
                        <!-- <a href="#map-show" class="btn btn-color" data-toggle="collapse" aria-expanded="false">
                          <span class="show-map"> View On Map</span>
                          <span class="hide-map"> Hide Map</span> -->
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- shorting End -->

              <!--  Shop Product -->
              <div class="product-listing hotel-part list-type">
                <div class="inner-listing">
                  <div class="row">

                  @forelse ($hotels->Hotels as $h)
                    <div class="col-md-6 col-12 item-width mb-30">
                      <div class="product-item box-shadow card packages-box overflow-hidden">
                        <figure>
                          <div class="package-img position-relative">
                            <a href="#">
                              <img alt="Travelexplorer" src="{{$h->HotelMainImage}}">
                              <div class="effect"></div>
                            </a>
                            <div class="price-box position-absolute mt-2">
                              <div class=" d-flex align-items-center">
                                <div class="price mb-0">86</div>
                                <div class="price-text mb-0 ml-2"></div>
                              </div>
                            </div>
                          </div>
                          <figcaption>
                            <div class="card-body p-25 p-xs-15">
                              <div class="packages-details">
                                <h4><a href="hotel_details/4fcd24f9-4456-4830-afb3-4d022d5889b1" class="title">{{$h->HotelName}}</a></h4>
                                <div class="mt-2">
                                  <ul>
                                    <li>
                                      <div class="places"><span class="icon"><i class="fas fa-map-marker-alt"></i></span>{{$h->HotelAddress->StreetAddress}} {{$h->HotelAddress->CityName}}</div>
                                    </li>
                                  </ul>
                                </div>
                                <p class="my-2"></p>

                                <div class="hotel-features mb-0 mt-2 ">
                                  <div class="room-facilities mb-1">
                                    <span> Facilities</span>
                                  </div>
                                  <a class="" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Get Directions">
                                    <i class="fa fa-map-signs d-inline-block text-warning"></i>
                                  </a>

                                  </a>
                                  <a class="" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free Wifi">
                                    <i class="fa fa-wifi d-inline-block text-success"></i>
                                  </a>
                                  <a class="" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shower Bathroom">
                                    <i class="fa fa-shower d-inline-block text-info"></i>
                                  </a>
                                  <a class="" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free Food">
                                    <i class="fas fa-utensils d-inline-block text-blue"></i>
                                  </a>
                                </div>
                                <div class="packages-btn mt-30 mt-xs-20">
                                  <a class="btn btn-color mr-3" href="hotel_booking.html">Book Now</a>
                                  <a class="btn btn-light" href="hotel_details/4fcd24f9-4456-4830-afb3-4d022d5889b1">View Detail</a>
                                </div>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
                    @empty
                    <div class="col-md-6 col-12 item-width mb-30">
                      <div class="product-item box-shadow card packages-box overflow-hidden">
                        <figure>
                          <div class="package-img position-relative">
                            <a href="hotel_detail.html">
                              <img alt="TravelRide" src="images/categories/hotels/hotel_2.jpg">
                              <div class="effect"></div>
                            </a>
                            <div class="price-box position-absolute mt-2">
                              <div class=" d-flex align-items-center">
                                <div class="price mb-0">$89</div>
                                <div class="price-text mb-0 ml-2">/ Night</div>
                              </div>
                            </div>
                          </div>
                          <figcaption>
                            <div class="card-body p-25 p-xs-15">
                              <div class="packages-details">
                                <h4><a href="hotel_detail.html" class="title">Special Resdential Hotels</a></h4>
                                <div class="mt-2">
                                  <ul>
                                    <li>
                                      <div class="places"><span class="icon"><i class="fas fa-map-marker-alt"></i></span> 272 Bath Road, Harlington, England</div>
                                    </li>
                                  </ul>
                                </div>
                                <p class="my-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
                                <div class="rating-summary-block">
                                  <div class="rating-result" title="70%"> <span style="width:66%"></span> </div>
                                  <span class="label-review">10 Reviews</span>
                                </div>
                                <div class="hotel-features mb-0 mt-2 ">
                                  <div class="room-facilities mb-1">
                                    <span>Room Facilities</span>
                                  </div>
                                  <a class="" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Get Directions">
                                    <i class="fa fa-map-signs d-inline-block text-warning"></i>
                                  </a>
                                  <a class="" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="5 Star Hotel">
                                    <i class="fa fa-h-square d-inline-block text-secondary"></i>
                                  </a>
                                  <a class="" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free Wifi">
                                    <i class="fa fa-wifi d-inline-block text-success"></i>
                                  </a>
                                  <a class="" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shower Bathroom">
                                    <i class="fa fa-shower d-inline-block text-info"></i>
                                  </a>
                                  <a class="" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free Food">
                                    <i class="fas fa-utensils d-inline-block text-blue"></i>
                                  </a>
                                </div>
                                <div class="packages-btn mt-30 mt-xs-20">
                                  <a class="btn btn-color mr-3" href="hotel_booking.html">Book Now</a>
                                  <a class="btn btn-light" href="hotel_detail.html">View Detail</a>
                                </div>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
                  @endforelse
                  </div>
                  <hr>
                  <div class="d-md-flex align-items-center justify-content-between pt-30 text-center">
                    <div class="show-item">
                      <div class="mb-0">Showing <b>1 to 10</b> of 30 entries</div>
                    </div>
                    <div class="pagination-bar mt-sm-30">
                      <ul>
                        <li><a href="javascript:void(0)"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li>...</li>
                        <li><a href="javascript:void(0)">10</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!--  Shop Product -->
            </div>
            <div class="col-xl-3 col-lg-4 order-lg-1">
              <div class="sidebar-block sidebar-block-1 pt-sm-60 mb-md-30">
                <div class="box-shadow radius-5px p-25 p-xs-15">
                  <div class="sidebar-box listing-box"> <span class="opener plus"></span>
                    <div class="sidebar-title">
                      <h3><span>Airline</span></h3>
                    </div>
                    <div class="sidebar-contant pt-3">
                      <div id="accordion" class="  side-categories">
                        <ul id="categories" >
                          <li>
                            <div class="card">
                              <a class="categorie-title"  href="#asia" > Lufthansa </a>

                            </div>
                          </li>
                        <li>
                            <div class="card">
                                <a class="categorie-title" href="#asia"> Air Dolomiti S.p.a L.a.r.e </a>

                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <a class="categorie-title" href="#asia"> Brussels Airlines </a>

                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <a class="categorie-title" href="#asia"> Unknown </a>

                            </div>
                        </li>





                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="sidebar-box room-type"> <span class="opener plus"></span>
                    <div class="sidebar-title">
                      <h3><span>Hotel </span></h3>
                    </div>
                    <div class="sidebar-contant pt-3">
                      <div class="filter-checkboxs">
                        <label class="custom-control custom-checkbox mb-2">
                          <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                          <span class="custom-control-label">
                            <a class="text-dark">Non stop<span class="label label-light float-right">15</span></a>
                          </span>
                        </label>
                        <label class="custom-control custom-checkbox mb-2">
                          <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                          <span class="custom-control-label">
                            <a class="text-dark">One stop<span class="label label-light float-right">25</span></a>
                          </span>
                        </label>
                        <label class="custom-control custom-checkbox mb-2">
                          <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                          <span class="custom-control-label">
                            <a class="text-dark">Two stop<span class="label label-light float-right">11</span></a>
                          </span>
                        </label>


                      </div>
                    </div>
                  </div>
                  <div class="sidebar-box filters"> <span class="opener plus"></span>
                    <div class="sidebar-title">
                      <h3>Price range</h3>
                    </div>
                    <div class="sidebar-contant pt-3">
                      <div class="price-range">
                        <input class="price-txt" type="text" id="amount">
                        <div id="slider-range"></div>
                      </div>
                    </div>
                  </div>
                  <div class="sidebar-box"> <span class="opener plus"></span>
                    <div class="sidebar-title">
                      <h3><span>Flexibility</span></h3>
                    </div>
                    <div class="sidebar-contant pt-3">
                      <ul class="tagcloud">
                        <li><a href="javascript:void(0)">Pay small small</a></li>
                        <li><a href="javascript:void(0)">Refundable</a></li>
                        <li><a href="javascript:void(0)">None-Refundable</a></li>
                        <!-- <li><a href="javascript:void(0)">Cruises</a></li>
                        <li><a href="javascript:void(0)">Hotels</a></li>
                        <li><a href="javascript:void(0)">Booking</a></li>
                        <li><a href="javascript:void(0)">Countries</a></li>
                        <li><a href="javascript:void(0)">Trekking</a></li>
                        <li><a href="javascript:void(0)">Adventure</a></li>
                        <li><a href="javascript:void(0)">Air Rides</a></li> -->
                      </ul>
                    </div>
                  </div>
                  <div class="sidebar-box"> <span class="opener plus"></span>


                      <div class="filter-btn mt-40">
                        <a href="javascript:void(0)" class="btn btn-color w-100">Apply Filter</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--package Block End -->








@endsection