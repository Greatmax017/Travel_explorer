@extends ('layouts.app')
@section('content')
      <!-- Bread Crumb STRAT -->
      <section class="bread bread-banner">
        <div class="container">
          <div class="bread-detail text-center d-md-flex align-items-center justify-content-between">
            <h4 class="bread-title mb-3 mb-md-0">Hotel Detail</h4>
            <div class="bread-crumb">
              <ul>
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Hotels</a></li>
                <li class="breadcrumb-item active"><a href="#">Hotel Detail</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Bread Crumb END -->
  <!--package Block Start -->
      <section class="ptb-100 tour-detail">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="tour-item">
                <div class="detail-title">
                  <h2>Hotel Europe Saint Severin Paris</h2>
                </div>
                <div class="tour-rating mb-3">
                  <ul>
                    <li>
                      <button type="button" class="rating-star" data-toggle="modal" data-target="#star-btn">
                        <i class="fa fa-star" aria-hidden="true"></i> <span>4.5</span>
                      </button>
                    </li>
                    <li><a href="#review" class="page-scroll">Reviews</a></li>
                    <li><a href="#write_review" class="page-scroll">Write a review</a></li>
                  </ul>
                </div>
                <div class="tour-info pb-4">
                  <ul class="list-meta d-flex mb-0">
                    <li class="mr-2 mr-md-4">
                      <div class="places"><a href="#"><span><i class="fas fa-map-marker-alt"></i></span> 38-40 Rue Saint Séverin, Paris, Paris</a></div>
                    </li>
                    <li class="mr-2 mr-md-4">
                      <div class="views"><a href="#"><span><i class="fas fa-eye"></i></span> 5984</a></div>
                    </li>
                    <li class="mr-2 mr-md-4">
                      <div class="likes"><a href="#"><span><i class="fas fa-heart"></i></span> 4563</a></div>
                    </li>
                  </ul>
                </div>
                <div class="single-content-item ptb-25">
                  <div class="row">
                    <div class="col-lg-4 col-6">
                      <div class="single-tour-feature d-flex align-items-center mb-3">
                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0">
                          <span class="icon"><i class="fas fa-hotel"></i></span>
                        </div>
                        <div class="single-feature-titles">
                          <h5 class="title mb-1">Hotel Type</h5>
                          <span class="font-size-13">4 Star</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6">
                      <div class="single-tour-feature d-flex align-items-center mb-3">
                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0">
                          <span class="icon"><i class="fas fa-user"></i></span>
                        </div>
                        <div class="single-feature-titles">
                          <h5 class="title mb-1">Extra People</h5>
                          <span class="font-size-13">No Charge</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6">
                      <div class="single-tour-feature d-flex align-items-center mb-3">
                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0">
                          <span class="icon"><i class="far fa-money-bill-alt"></i></span>
                        </div>
                        <div class="single-feature-titles">
                          <h5 class="title mb-1">Security Deposit</h5>
                          <span class="font-size-13">$159</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6">
                      <div class="single-tour-feature d-flex align-items-center mb-3">
                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0">
                          <span class="icon"><i class="fas fa-globe-americas"></i></span>
                        </div>
                        <div class="single-feature-titles">
                          <h5 class="title mb-1">Country</h5>
                          <span class="font-size-13">France</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6">
                      <div class="single-tour-feature d-flex align-items-center mb-3">
                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0">
                          <span class="icon"><i class="fas fa-map"></i></span>
                        </div>
                        <div class="single-feature-titles">
                          <h5 class="title mb-1">City</h5>
                          <span class="font-size-13">Paris</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6">
                      <div class="single-tour-feature d-flex align-items-center mb-3">
                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0">
                          <span class="icon"><i class="fas fa-user"></i></span>
                        </div>
                        <div class="single-feature-titles">
                          <h5 class="title mb-1">Neighborhood</h5>
                          <span class="font-size-13">République</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native">
                  <a href="#"><img src="images/categories/hotels/hotel_detail_img_1.jpg" alt="TravelRide"></a>
                  <a href="#"><img src="images/categories/hotels/hotel_detail_img_2.jpg" alt="TravelRide"></a>
                  <a href="#"><img src="images/categories/hotels/hotel_detail_img_3.jpg" alt="TravelRide"></a>
                  <a href="#"><img src="images/categories/hotels/hotel_detail_img_4.jpg" alt="TravelRide"></a>
                  <a href="#"><img src="images/categories/hotels/hotel_detail_img_5.jpg" alt="TravelRide"></a>
                  <a href="#"><img src="images/categories/hotels/hotel_detail_img_6.jpg" alt="TravelRide"></a>
                  <a href="#"><img src="images/categories/hotels/hotel_detail_img_1.jpg" alt="TravelRide"></a>
                  <a href="#"><img src="images/categories/hotels/hotel_detail_img_2.jpg" alt="TravelRide"></a>
                  <a href="#"><img src="images/categories/hotels/hotel_detail_img_3.jpg" alt="TravelRide"></a>
                </div>
              </div>
              <div class="tour-detail-tab mt-60">
                <ul class="nav nav-tabs  mb-30" id="tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link btn active" id="description_tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn" id="amenities_tab" data-toggle="tab" href="#amenities" role="tab" aria-controls="amenities" aria-selected="false">Amenities</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn" id="hotelinfo_tab" data-toggle="tab" href="#hotelinfo" role="tab" aria-controls="hotelinfo" aria-selected="false">Hotel Info</a>
                  </li>
                </ul>
                <div class="tab-content" id="tab_content">
                  <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description_tab">
                    <div class="description"> <strong>The standard Lorem Ipsum passage, used since the 1500s</strong><br />
                      <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Ezonenic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets</p>
                      <p>Tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      <div class="row mt-30">
                        <div class="col-sm-6 col-12">
                          <h4 class="title pb-2">Included</h4>
                          <ul class="list-items">
                            <li><i class="fas fa-check text-success"></i>Accommodation</li>
                            <li><i class="fas fa-check text-success"></i>game zone</li>
                            <li><i class="fas fa-check text-success"></i>Food</li>
                            <li><i class="fas fa-check text-success"></i>Free Wi-Fi</li>
                          </ul>
                        </div>
                        <div class="col-sm-6 col-12 mt-3 mt-sm-0">
                          <h4 class="title pb-2">Not Included</h4>
                          <ul class="list-items">
                            <li><i class="fas fa-times text-danger"></i>Laundry Service</li>
                            <li><i class="fas fa-times text-danger"></i>Additional Services</li>
                            <li><i class="fas fa-times text-danger"></i>Gym</li>
                            <li><i class="fas fa-times text-danger"></i>Extra facilities</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="amenities" role="tabpanel" aria-labelledby="amenities_tab">
                    <div class="amenities-feature-item">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-wifi"></i></span> WI-FI</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-swimming-pool"></i></span> Swimming Pool</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-tv"></i></span> Television</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-mug-hot"></i></span> Coffee</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-tree"></i></span> Air Conditioning</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-dumbbell"></i></span> Fitness Facility</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-wine-glass-alt"></i></span> Wine Bar</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-music"></i></span> Entertainment</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-lock"></i></span> Secure Vault</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-car"></i></span> Pick And Drop</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-cog"></i></span> Room Service</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-utensils"></i></span> Breakfast</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-car"></i></span> Free Parking</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-wheelchair"></i></span> Handicap Accessible</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-hotel"></i></span> Elevator In Building</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-gift"></i></span> Suitable For Events</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-gamepad"></i></span> Play Place</div>
                        </div>
                        <div class="col-lg-4">
                          <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-video"></i></span> Security Guard</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="hotelinfo" role="tabpanel" aria-labelledby="hotelinfo_tab">
                    <div class="table-responsive ">
                      <h4 class="title pb-2">Hotel Info</h4>
                      <table class="table table-borderless mb-0  text-nowrap">
                        <tbody>
                          <tr>
                            <td class="pl-0">Established Year</td>
                            <td class="">2001</td>
                          </tr>
                          <tr>
                            <td class="pl-0">Services</td>
                            <td class="">Hotels, Staying, Accomdation</td>
                          </tr>
                          <tr>
                            <td class="pl-0">Payment Methods</td>
                            <td class="">VISA, Mastercard, Discover, American Express</td>
                          </tr>
                          <tr>
                            <td class="pl-0">Fax</td>
                            <td class="">+0 123-456-7890</td>
                          </tr>
                          <tr>
                            <td class="pl-0">TollFree</td>
                            <td class="">+0 123-456-7890</td>
                          </tr>
                          <tr>
                            <td class="pl-0">Certification</td>
                            <td class="">ISO Certified</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="available-rooms mt-60">
                <h3 class="sub-heading mb-30 mb-xs-15">Available Rooms</h3>
                <div class="available-room-part mb_-30">
                  <div class="available-room-item box-shadow card overflow-hidden mb-30">
                    <figure>
                      <div class="available-room-img">
                        <img src="images/categories/hotels/room_1.jpg" alt="TravelRide">
                      </div>
                      <figcaption>
                        <div class="card-body pl-md-0 p-25 p-xs-15">
                          <div class="available-room-detail">
                            <h4>Standard Family Room</h4>
                            <div class="row">
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-wifi"></i></span> Free Wi-Fi</div>
                              </div>
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-bed"></i></span> 2 Single beds</div>
                              </div>
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-hotel"></i></span> 15 m²</div>
                              </div>
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-shower"></i></span> Shower and bathtub</div>
                              </div>
                            </div>
                          </div>
                          <div class="available-room-price d-flex align-items-center justify-content-between">
                            <div class="price-box">
                              <div class="price-text mb-2">Per / Night</div>
                              <div class="d-flex align-items-center">
                                <div class="price mb-0 mr-2">$89</div>
                                <div class="price old-price mb-0"> $120</div>
                              </div>
                            </div>
                            <div class="custom-checkbox mb-0">
                              <div class="check-box">
                                <span>
                                  <input id="selectroom1" type="checkbox" name="selectroom1" class="checkbox">
                                  <label for="selectroom1" class="select-btn">Select</label>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="available-room-item box-shadow card overflow-hidden mb-30">
                    <figure>
                      <div class="available-room-img">
                        <img src="images/categories/hotels/room_2.jpg" alt="TravelRide">
                      </div>
                      <figcaption>
                        <div class="card-body pl-md-0 p-25 p-xs-15">
                          <div class="available-room-detail">
                            <h4>Single Bed Room</h4>
                            <div class="row">
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-wifi"></i></span> Free Wi-Fi</div>
                              </div>
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-bed"></i></span> 1 Single beds</div>
                              </div>
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-hotel"></i></span> 15 m²</div>
                              </div>
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-shower"></i></span> Shower and bathtub</div>
                              </div>
                            </div>
                          </div>
                          <div class="available-room-price d-flex align-items-center justify-content-between">
                            <div class="price-box">
                              <div class="price-text mb-2">Per / Night</div>
                              <div class="d-flex align-items-center">
                                <div class="price mb-0 mr-2">$89</div>
                                <div class="price old-price mb-0"> $120</div>
                              </div>
                            </div>
                            <div class="custom-checkbox mb-0">
                              <div class="check-box">
                                <span>
                                  <input id="selectroom2" type="checkbox" name="selectroom2" class="checkbox">
                                  <label for="selectroom2" class="select-btn">Select</label>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="available-room-item box-shadow card overflow-hidden mb-30">
                    <figure>
                      <div class="available-room-img">
                        <img src="images/categories/hotels/room_3.jpg" alt="TravelRide">
                      </div>
                      <figcaption>
                        <div class="card-body pl-md-0 p-25 p-xs-15">
                          <div class="available-room-detail">
                            <h4>Deluxe Single Room</h4>
                            <div class="row">
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-wifi"></i></span> Free Wi-Fi</div>
                              </div>
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-bed"></i></span> 2 Single beds</div>
                              </div>
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-hotel"></i></span> 15 m²</div>
                              </div>
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-shower"></i></span> Shower and bathtub</div>
                              </div>
                            </div>
                          </div>
                          <div class="available-room-price d-flex align-items-center justify-content-between">
                            <div class="price-box">
                              <div class="price-text mb-2">Per / Night</div>
                              <div class="d-flex align-items-center">
                                <div class="price mb-0 mr-2">$89</div>
                                <div class="price old-price mb-0"> $120</div>
                              </div>
                            </div>
                            <div class="custom-checkbox mb-0">
                              <div class="check-box">
                                <span>
                                  <input id="selectroom3" type="checkbox" name="selectroom3" class="checkbox">
                                  <label for="selectroom3" class="select-btn">Select</label>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
              <div class="tour-map mt-60">
                <div class="row">
                  <div class="col-12">
                    <h3 class="sub-heading mb-30 mb-xs-15">Location</h3>
                    <div class="map">
                      <iframe class="map-part" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190178.49401377814!2d13.253727274681411!3d52.52218428869219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a84e373f035901%3A0x42120465b5e3b70!2sBerlin%2C%20Germany!5e0!3m2!1sen!2sin!4v1627443069987!5m2!1sen!2sin" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div>
              </div>
             


            </div>
            <div class="col-lg-4">
              <div class="sidebar-block sidebar-block-1 pt-sm-60 mt-md-30">
                <div class="box-shadow radius-5px p-25 p-xs-15">
                  <div class="sidebar-box listing-box"> <span class="opener plus"></span>
                    <div class="sidebar-title">
                      <h3><span>Hotel Booking</span></h3>
                    </div>
                    <div class="sidebar-contant pt-4">
                      <div class=" main-form tour-search-detail">
                        <div class="price-box d-flex align-items-center mb-3">
                          <span class="mr-1">From</span>
                          <h3 class="price mr-1 mb-0">$89.00</h3>
                          <del class="old-price">$120.00</del>
                        </div>
                        <form class="main-form" action="#">
                          <div class="sidebar-date">
                            <div class="form-group">
                              <div class="input-inner mb-3 mb-xl-0">
                                <label for="datepicker-start">Check In</label>
                                <div class="input-box">
                                  <div class="input-icon">
                                    <span><i class="far fa-calendar-alt"></i></span>
                                  </div>
                                  <input id="datepicker-start" class="form-control datepicker datepick" type="text" required placeholder="MM/DD/YY">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-inner mb-3 mb-xl-0">
                                <label for="datepicker-end">Check Out</label>
                                <div class="input-box">
                                  <div class="input-icon">
                                    <span><i class="far fa-calendar-alt"></i></span>
                                  </div>
                                  <input id="datepicker-end" class="form-control datepicker datepick" type="text" required placeholder="MM/DD/YY">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-inner mb-3 mb-md-0">
                                <label>Select Rooms</label>
                                <select class="select" name="Rooms">
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
                          </div>
                          <div class="sidebar-guest">
                            <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                              <label class="">Adults <span>Age 18+</span></label>
                              <div class="product-qty ">
                                <div class="custom-qty">
                                  <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items" type="button">  </button>
                                  <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="qty">
                                  <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button">  </button>
                                </div>
                              </div>
                            </div>
                            <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                              <label class="">Children <span>2-17 years old</span></label>
                              <div class="product-qty ">
                                <div class="custom-qty">
                                  <button onclick="var result = document.getElementById('qty2'); var qty2 = result.value; if( !isNaN( qty2 ) &amp;&amp; qty2 &gt; 1 ) result.value--;return false;" class="reduced items" type="button">  </button>
                                  <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty2" name="qty">
                                  <button onclick="var result = document.getElementById('qty2'); var qty2 = result.value; if( !isNaN( qty2 )) result.value++;return false;" class="increase items" type="button">  </button>
                                </div>
                              </div>
                            </div>
                            <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                              <label class="">Infants <span>0-2 years old</span></label>
                              <div class="product-qty ">
                                <div class="custom-qty">
                                  <button onclick="var result = document.getElementById('qty3'); var qty3 = result.value; if( !isNaN( qty3 ) &amp;&amp; qty3 &gt; 1 ) result.value--;return false;" class="reduced items" type="button">  </button>
                                  <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty3" name="qty">
                                  <button onclick="var result = document.getElementById('qty3'); var qty3 = result.value; if( !isNaN( qty3 )) result.value++;return false;" class="increase items" type="button">  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tour-booking-btn pt-3">
                            <button  type="submit" class="btn btn-color w-100 mb-3">Book Now</button>
                            <a href="#" class="btn btn-light w-100">Add to Wishlist</a>
                            <div class="d-flex align-items-center justify-content-between pt-3">
                                <a href="#" class="btn btn-color small">
                                  <i class="fas fa-share"></i> Share
                                </a>
                                <div class="views"><a href="#"><span class="icon"><i class="fas fa-eye"></i></span> 5984</a></div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="sidebar-box listing-box"> <span class="opener plus"></span>
                    <div class="sidebar-title">
                      <h3><span>Hotel Organizer</span></h3>
                    </div>
                    <div class="sidebar-contant pt-4">
                      <div class="organizer ">
                        <div class="profile-details text-center">
                          <div class="profile-pic mb-0 mx-5">
                            <img src="images/organizer_logo.png" alt="user">
                          </div>
                          <div class="text-center mt-3">
                            <a href="userprofile.html" class="text-dark text-center">
                              <h5 class="mt-0 mb-1">Melody Marshall</h5>
                            </a>
                            <span class="mt-1">Organizer <b> Since Jun 2001</b></span>
                            <div><small class="text-muted">Listing Hotel Id <b>2568723</b></small></div>
                          </div>
                        </div>
                        <div class="sidebar-title">
                          <h3><span>Contact Info</span></h3>
                        </div>
                        <div class="contact-info pt-4">
                          <ul class="address">
                            <li class="item">
                              <div class="address-icon icon1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.3 501.7C27 291 0 269.4 0 192 0 86 86 0 192 0s192 86 192 192c0 77.4-27 99-172.3 309.7-9.5 13.7-29.9 13.7-39.4 0h0zM192 272c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80z" fill="#fff"/></svg>
                              </div>
                              <p class="address mb-0">150-A Appolo aprtment, opp. Hopewell Junction, Allen st Road, new york-405001.</p>
                            </li>
                            <li>
                              <div class="address-icon icon2">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" class="svg-inline--fa fa-phone-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>
                              </div>
                              <a href="#">+0 123-456-7890</a>
                            </li>
                            <li>
                              <div class="address-icon icon3">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
                              </div>
                              <a href="#">info@example.com</a>
                            </li>
                            <li>
                              <div class="address-icon icon4">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="globe-americas" class="svg-inline--fa fa-globe-americas fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm82.29 357.6c-3.9 3.88-7.99 7.95-11.31 11.28-2.99 3-5.1 6.7-6.17 10.71-1.51 5.66-2.73 11.38-4.77 16.87l-17.39 46.85c-13.76 3-28 4.69-42.65 4.69v-27.38c1.69-12.62-7.64-36.26-22.63-51.25-6-6-9.37-14.14-9.37-22.63v-32.01c0-11.64-6.27-22.34-16.46-27.97-14.37-7.95-34.81-19.06-48.81-26.11-11.48-5.78-22.1-13.14-31.65-21.75l-.8-.72a114.792 114.792 0 0 1-18.06-20.74c-9.38-13.77-24.66-36.42-34.59-51.14 20.47-45.5 57.36-82.04 103.2-101.89l24.01 12.01C203.48 89.74 216 82.01 216 70.11v-11.3c7.99-1.29 16.12-2.11 24.39-2.42l28.3 28.3c6.25 6.25 6.25 16.38 0 22.63L264 112l-10.34 10.34c-3.12 3.12-3.12 8.19 0 11.31l4.69 4.69c3.12 3.12 3.12 8.19 0 11.31l-8 8a8.008 8.008 0 0 1-5.66 2.34h-8.99c-2.08 0-4.08.81-5.58 2.27l-9.92 9.65a8.008 8.008 0 0 0-1.58 9.31l15.59 31.19c2.66 5.32-1.21 11.58-7.15 11.58h-5.64c-1.93 0-3.79-.7-5.24-1.96l-9.28-8.06a16.017 16.017 0 0 0-15.55-3.1l-31.17 10.39a11.95 11.95 0 0 0-8.17 11.34c0 4.53 2.56 8.66 6.61 10.69l11.08 5.54c9.41 4.71 19.79 7.16 30.31 7.16s22.59 27.29 32 32h66.75c8.49 0 16.62 3.37 22.63 9.37l13.69 13.69a30.503 30.503 0 0 1 8.93 21.57 46.536 46.536 0 0 1-13.72 32.98zM417 274.25c-5.79-1.45-10.84-5-14.15-9.97l-17.98-26.97a23.97 23.97 0 0 1 0-26.62l19.59-29.38c2.32-3.47 5.5-6.29 9.24-8.15l12.98-6.49C440.2 193.59 448 223.87 448 256c0 8.67-.74 17.16-1.82 25.54L417 274.25z"></path></svg>
                              </div>
                              <a href="#">travelrideworld.com</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="sidebar-box"> <span class="opener plus"></span>
                    <div class="sidebar-title">
                      <h3><span>Tags</span></h3>
                    </div>
                    <div class="sidebar-contant pt-3">
                      <ul class="tagcloud">
                        <li><a href="javascript:void(0)">Flights</a></li>
                        <li><a href="javascript:void(0)">Traveling</a></li>
                        <li><a href="javascript:void(0)">Tours</a></li>
                        <li><a href="javascript:void(0)">Cruises</a></li>
                        <li><a href="javascript:void(0)">Hotels</a></li>
                        <li><a href="javascript:void(0)">Booking</a></li>
                        <li><a href="javascript:void(0)">Countries</a></li>
                        <li><a href="javascript:void(0)">Trekking</a></li>
                        <li><a href="javascript:void(0)">Adventure</a></li>
                        <li><a href="javascript:void(0)">Air Rides</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="sidebar-box"> <span class="opener plus"></span>
                    <div class="sidebar-title">
                      <h3><span>Need Help</span></h3>
                    </div>
                    <div class="sidebar-contant pt-3">
                      <div class="support-service p-25 p-xs-15">
                        <span><i class="fas fa-phone-alt"></i></span>
                        <h3>0+ 1920-30-3324</h3>
                        <p class="m-0">Toll Free & 24/7 Available</p>
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