@extends('layouts.app')

@section('content')
<body onload="myFunction()">
      <!-- BANNER STRAT -->
      <section class="home-banner banner-wrapper">
        <div class="banner">
          <div class="banner-detail text-center">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-12">
                  <div class="banner-detail-inner slider-animation animated-1">

                    <h1 class="banner-title cd-headline zoom">
                      Search and Book your
                      <span class="cd-words-wrapper">
                        <b class="is-visible">Flight</b>
                        <b>Hotel</b>

                      </span>
                    </h1>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tour-search tour-wrapper mt-40">
            <div class=" main-form tour-search-detail">
              <div class="container">
                <ul class="nav nav-tabs" id="tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link btn active" id="flights_tab" data-toggle="tab" href="#flights" role="tab" aria-controls="flights"
                      aria-selected="false">Flights</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link btn" id="hotel_tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Hotels</a>
                  </li>

                </ul>
                <div class="search-form-wrapper">
                  <div class="tab-content" id="tab_content">

                    <div class="tab-pane" id="hotel" role="tabpanel" aria-labelledby="hotel_tab">
                      <form class="main-form" method="POST" action="/hotels">
                      {{ csrf_field() }}
                        <div class="row align-items-end justify-content-center">
                          <div class="form-group col-xl-3 col-md-6 col-12">
                            <div class="input-inner mb-3 mb-xl-0">
                              <label class="label-text">Going to ?</label>
                              <div class="input-box">
                                <div class="input-icon">
                                  <span><i class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <input id="hotel-destinationss" name="city_name" class="label-text" type="text" required placeholder="City">
                              </div>
                            </div>
                          </div>
                          <div class="form-group col-xl-2 col-md-3 col-sm-6">
                            <div class="input-inner mb-3 mb-xl-0">
                              <label class="label-text">Check In</label>
                              <div class="input-box">
                                <div class="input-icon">
                                  <span><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input id="hotel-start-date" name="checkindate" class="form-control datepicker datepick" type="text" required placeholder="MM/DD/YY">
                              </div>
                            </div>
                          </div>
                          <div class="form-group col-xl-2 col-md-3 col-sm-6">
                            <div class="input-inner mb-3 mb-xl-0">
                              <label class="label-text">Check Out</label>
                              <div class="input-box">
                                <div class="input-icon">
                                  <span><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input id="hotel-start-end" name="checkoutdate" class="form-control datepicker datepick" type="text" required placeholder="MM/DD/YY">
                              </div>
                            </div>
                          </div>
                          <div class="form-group col-xl-3 col-md-8 col-sm-12">
                            <div class="row">
                              <div class="col-4">
                                <div class="input-inner mb-3 mb-md-0">
                                  <label class="label-text">Rooms</label>
                                  <select class="select" name="rooms">
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
                              <div class="col-4">
                                <div class="input-inner mb-3 mb-md-0">
                                  <label class="label-text">Adults (16+)</label>
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
                              <div class="col-4">
                                <div class="input-inner mb-3 mb-md-0">
                                  <label class="label-text">Children</label>
                                  <select class="select" name="children">
                                    <option value="0">0</option>
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
                          </div>
                          <div class="form-group col-xl-2 col-md-4 col-sm-6 col-12">
                            <div class="search-btn">
                              <button name="search" type="submit" class="btn btn-color w-100">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><path d="M11.35 1.94a6.67 6.67 0 0 0-9.41 0 6.67 6.67 0 0 0 0 9.41c2.31 2.31 5.91 2.56 8.5.75.05.26.18.5.38.7l3.78 3.78c.55.55 1.44.55 1.99 0s.55-1.44 0-1.99l-3.78-3.78c-.2-.2-.45-.33-.7-.38 1.8-2.58 1.55-6.17-.76-8.49zm-1.19 8.22c-1.94 1.94-5.09 1.94-7.02 0a4.98 4.98 0 0 1 0-7.02c1.94-1.94 5.09-1.94 7.02 0s1.94 5.08 0 7.02z" fill-rule="evenodd" fill="#fff"/></svg> Search Hotels
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane show active" id="flights" role="tabpanel" aria-labelledby="flights_tab">
                      <div class="section-tab-2">

                     <ul class="nav nav-tabs mb-30 mb-sm-15" id="tab2" role="tablist">

                       <li class="nav-item">
                            <a class="nav-link btn active" id="round_trip_tab" data-toggle="tab" href="#round_trip" role="tab" aria-controls="round_trip" aria-selected="false"><span></span>Round Trip</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link btn" id="one_way_tab" data-toggle="tab" href="#one_way" role="tab" aria-controls="one_way" aria-selected="true"><span></span>One Way</a>


                          <li class="nav-item">
                            <a class="nav-link btn" id="multi_city_tab" data-toggle="tab" href="#multi_city" role="tab" aria-controls="multi_city" aria-selected="false"><span></span>Multi City</a>
                          </li>
                        </ul>

                        <div class="tab-content" id="tab_content2">
                          <div class="tab-pane fade" id="one_way" role="tabpanel" aria-labelledby="one_way_tab">
                            <form class="main-form" method="POST" action="/flights">
                              {{ csrf_field() }}
                              <div class="row align-items-end justify-content-center">
                                <div class="form-group col-lg-4 col-md-4 col-sm-6">
                                  <div class="input-inner mb-3">
                                    <label class="label-text">From</label>
                                    <div class="input-box">
                                      <div class="input-icon">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                      </div>
                                      <input id="autocomplete" name="from1" class="label-text" type="text" required placeholder="From">
                                    </div>
                                  </div>
                                </div>
                                <script>
                                  var options = {
  shouldSort: true,
  threshold: 0.4,
  maxPatternLength: 32,
  keys: [{
    name: 'iata',
    weight: 0.5
  }, {
    name: 'name',
    weight: 0.3
  }, {
    name: 'city',
    weight: 0.2
  }]
};

var fuse = new Fuse(airports, options)


var ac = $('#autocomplete')
  .on('click', function(e) {
    e.stopPropagation();
  })
  .on('focus keyup', search)
  .on('keydown', onKeyDown);

var wrap = $('<div>')
  .addClass('autocomplete-wrapper')
  .insertBefore(ac)
  .append(ac);

var list = $('<div>')
  .addClass('autocomplete-results')
  .on('click', '.autocomplete-result', function(e) {
    e.preventDefault();
    e.stopPropagation();
    selectIndex($(this).data('index'));
  })
  .appendTo(wrap);

$(document)
  .on('mouseover', '.autocomplete-result', function(e) {
    var index = parseInt($(this).data('index'), 10);
    if (!isNaN(index)) {
      list.attr('data-highlight', index);
    }
  })
  .on('click', clearResults);

function clearResults() {
  results = [];
  numResults = 0;
  list.empty();
}

function selectIndex(index) {
  if (results.length >= index + 1) {
    ac.val(results[index].iata);
    clearResults();
  }
}

var results = [];
var numResults = 0;
var selectedIndex = -1;

function search(e) {
  if (e.which === 38 || e.which === 13 || e.which === 40) {
    return;
  }

  if (ac.val().length > 0) {
    results = _.take(fuse.search(ac.val()), 7);
    numResults = results.length;

    var divs = results.map(function(r, i) {
        return '<div class="autocomplete-result" data-index="'+ i +'">'
             + '<div><b>'+ r.iata +'</b> - '+ r.name +'</div>'
             + '<div class="autocomplete-location">'+ r.city +', '+ r.country +'</div>'
             + '</div>';
     });

    selectedIndex = -1;
    list.html(divs.join(''))
      .attr('data-highlight', selectedIndex);

  } else {
    numResults = 0;
    list.empty();
  }
}

function onKeyDown(e) {
  switch(e.which) {
    case 38: // up
      selectedIndex--;
      if (selectedIndex <= -1) {
        selectedIndex = -1;
      }
      list.attr('data-highlight', selectedIndex);
      break;
    case 13: // enter
      selectIndex(selectedIndex);
      break;
    case 9: // enter
      selectIndex(selectedIndex);
      e.stopPropagation();
      return;
    case 40: // down
      selectedIndex++;
      if (selectedIndex >= numResults) {
        selectedIndex = numResults-1;
      }
      list.attr('data-highlight', selectedIndex);
      break;

    default: return; // exit this handler for other keys
  }
  e.stopPropagation();
  e.preventDefault(); // prevent the default action (scroll / move caret)
}
                                </script>
                                <div class="form-group col-lg-4 col-md-4 col-sm-6">
                                  <div class="input-inner mb-3">
                                    <label class="label-text">To</label>
                                    <div class="input-box">
                                      <div class="input-icon">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                      </div>
                                      <input id="to-one-way" name="to1" class="label-text" type="text" required placeholder="To">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-4 col-sm-6">
                                  <div class="input-inner mb-3">
                                    <label class="label-text">Depart Date</label>
                                    <div class="input-box">
                                      <div class="input-icon">
                                        <span><i class="far fa-calendar-alt"></i></span>
                                      </div>
                                      <input id="one-way-date" name="DepartureDate1" class="label-text datepicker datepick" type="text" required placeholder="MM/DD/YY">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-lg-3 col-md-4 col-sm-6">
                                  <div class="input-inner mb-3 mb-md-0">
                                    <label class="label-text">Cabin class</label>
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
                                    <label class="label-text">Adults</label>
                                    <select class="select" name="Adults">
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
                                    <label class="label-text">Children</label>
                                    <select class="select" name="children">
                                      <option value="1">0</option>
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
                                <div class="form-group col-lg-3 col-md-4 col-sm-6 col-12">
                                  <div class="search-btn mt-lg-0 mt-md-3 mt-sm-0">
                                    <button name="search" type="submit" class="btn btn-color w-100">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><path d="M11.35 1.94a6.67 6.67 0 0 0-9.41 0 6.67 6.67 0 0 0 0 9.41c2.31 2.31 5.91 2.56 8.5.75.05.26.18.5.38.7l3.78 3.78c.55.55 1.44.55 1.99 0s.55-1.44 0-1.99l-3.78-3.78c-.2-.2-.45-.33-.7-.38 1.8-2.58 1.55-6.17-.76-8.49zm-1.19 8.22c-1.94 1.94-5.09 1.94-7.02 0a4.98 4.98 0 0 1 0-7.02c1.94-1.94 5.09-1.94 7.02 0s1.94 5.08 0 7.02z" fill-rule="evenodd" fill="#fff"/></svg> Search Flight
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="tab-pane fade show active" id="round_trip" role="tabpanel" aria-labelledby="round_trip_tab">
                            <form class="main-form" method="POST" action="/flights">
                               {{ csrf_field() }}
                              <div class="row align-items-end justify-content-center">
                                <div class="form-group col-lg-4 col-sm-6 col-12">
                                  <div class="input-inner mb-3">
                                    <label class="label-text">From</label>
                                    <div class="input-box">
                                      <div class="input-icon">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                      </div>
                                      <input id="from-round-trip" name="from1" class="label-text" type="text" required placeholder="From">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-lg-4 col-sm-6 col-12">
                                  <div class="input-inner mb-3">
                                    <label class="label-text">To</label>
                                    <div class="input-box">
                                      <div class="input-icon">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                      </div>
                                      <input id="to-round-trip" name="to1" class="label-text" type="text" required placeholder="To">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-6">
                                  <div class="input-inner mb-3">
                                    <label class="label-text">Depart & Return Date</label>
                                    <div class="input-box">
                                      <div class="input-icon">
                                        <span><i class="far fa-calendar-alt"></i></span>
                                      </div>
                                      <input id="round-trip-date" class="label-text datepicker datepick" type="text" name="DepartureDate1"  required placeholder="MM/DD/YY">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-lg-3 col-md-6 col-sm-6">
                                  <div class="input-inner mb-3 mb-lg-0">
                                    <label class="label-text">Class of travel</label>
                                    <select class="select" name="flightClass">
                                      <option value="economy">Economy</option>
                                      <option value="business">Business</option>
                                      <option value="first">First Class</option>

                                    </select>
                                  </div>
                                </div>




                                <div id="myDIV2" class="form-group col-lg-3 col-md-4 col-6">
                                  <div class="input-inner mb-3 mb-md-0">
                                    <label class="label-text">Adults</label>
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
                                <div id="myDIV" class="form-group col-lg-3 col-md-4 col-6">
                                  <div class="input-inner mb-3 mb-md-0">
                                    <label class="label-text">Children</label>
                                    <select class="select" name="children">
                                      <option value="0">0</option>
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

                                <div class="form-group col-lg-3 col-md-4 col-sm-6 col-12">
                                  <div class="search-btn">
                                    <button name="search" type="submit" class="btn btn-color w-100">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><path d="M11.35 1.94a6.67 6.67 0 0 0-9.41 0 6.67 6.67 0 0 0 0 9.41c2.31 2.31 5.91 2.56 8.5.75.05.26.18.5.38.7l3.78 3.78c.55.55 1.44.55 1.99 0s.55-1.44 0-1.99l-3.78-3.78c-.2-.2-.45-.33-.7-.38 1.8-2.58 1.55-6.17-.76-8.49zm-1.19 8.22c-1.94 1.94-5.09 1.94-7.02 0a4.98 4.98 0 0 1 0-7.02c1.94-1.94 5.09-1.94 7.02 0s1.94 5.08 0 7.02z" fill-rule="evenodd" fill="#fff"/></svg> Search Flight
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="tab-pane fade" id="multi_city" role="tabpanel" aria-labelledby="multi_city_tab">
                            <form class="main-form" action="#">
                              <div class="row align-items-end justify-content-center">
                                <div class="form-group col-lg-4 col-md-4 col-12">
                                  <div class="input-inner mb-3">
                                    <label class="label-text">From</label>
                                    <div class="input-box">
                                      <div class="input-icon">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                      </div>
                                      <input id="from-multi-city" class="label-text" type="text" required placeholder="From">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-4 col-12">
                                  <div class="input-inner mb-3">
                                    <label class="label-text">To</label>
                                    <div class="input-box">
                                      <div class="input-icon">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                      </div>
                                      <input id="to-multi-city" class="label-text" type="text" required placeholder="To">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-4 col-12">
                                  <div class="input-inner mb-3">
                                    <label class="label-text">Depart Date</label>
                                    <div class="input-box">
                                      <div class="input-icon">
                                        <span><i class="far fa-calendar-alt"></i></span>
                                      </div>
                                      <input id="multi-city-date" class="form-control datepicker datepick" type="text" required placeholder="MM/DD/YY">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-4 col-12">
                                  <div class="input-inner mb-3">
                                    <label class="label-text">From</label>
                                    <div class="input-box">
                                      <div class="input-icon">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                      </div>
                                      <input id="from-multi-city2" class="label-text" type="text" required placeholder="From">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-4 col-12">
                                  <div class="input-inner mb-3">
                                    <label class="label-text">To</label>
                                    <div class="input-box">
                                      <div class="input-icon">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                      </div>
                                      <input id="to-multi-city2" class="label-text" type="text" required placeholder="To">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-4 col-12">
                                  <div class="input-inner mb-3">
                                    <label class="label-text">Depart Date</label>
                                    <div class="input-box">
                                      <div class="input-icon">
                                        <span><i class="far fa-calendar-alt"></i></span>
                                      </div>
                                      <input id="multi-city-date2" class="form-control datepicker datepick" type="text" required placeholder="MM/DD/YY">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-xl-3 col-lg-3 col-md-4 col-12">
                                  <div class="input-inner mb-3 mb-md-0">
                                    <label class="label-text">Class of travel</label>
                                    <select class="select" name="Coach">
                                      <option value="ec">Economy</option>
                                      <option value="bu">Business</option>
                                      <option value="fr">First Class</option>
                                      <option value="pe">Premium Economy</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group col-xl-3 col-lg-3 col-md-4 col-6">
                                  <div class="input-inner mb-3 mb-md-0">
                                    <label class="label-text">Adults</label>
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
                                <div class="form-group col-xl-3 col-lg-3 col-md-4 col-6">
                                  <div class="input-inner mb-3 mb-md-0">
                                    <label class="label-text">Children</label>
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
                                <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                  <div class="search-btn mt-lg-0 mt-md-3 mt-sm-0">
                                    <button name="search" type="submit" class="btn btn-color w-100">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><path d="M11.35 1.94a6.67 6.67 0 0 0-9.41 0 6.67 6.67 0 0 0 0 9.41c2.31 2.31 5.91 2.56 8.5.75.05.26.18.5.38.7l3.78 3.78c.55.55 1.44.55 1.99 0s.55-1.44 0-1.99l-3.78-3.78c-.2-.2-.45-.33-.7-.38 1.8-2.58 1.55-6.17-.76-8.49zm-1.19 8.22c-1.94 1.94-5.09 1.94-7.02 0a4.98 4.98 0 0 1 0-7.02c1.94-1.94 5.09-1.94 7.02 0s1.94 5.08 0 7.02z" fill-rule="evenodd" fill="#fff"/></svg> Search Flight
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- BANNER END -->

      <!-- CONTAIN START -->

      <!--  Categorie Start  -->


          <div class="categorie categorie_2">
            <div class="row">
              <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 col-6 mb-30 the-world">
                <div class="categorie-box card">
                  <div class="card-body p-0">
                    <div class="cat-item text-center">

                      <div class="cat-desc">
                        <h5 class="mb-0 mt-3">Hassle-free Booking</h5>
                         <a href="tour_grid.html" class="btn btn-color">  Find all what you need for a peaceful travel in one place, from Flight to accommodation to holiday packages.</a>                        </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 col-6 mb-30 the-world">
                <div class="categorie-box card">
                  <div class="card-body p-0">
                    <div class="cat-item text-center">

                      <div class="cat-desc">
                        <h5 class="mb-0 mt-3">Pay Small Small</h5>
                         <a href="tour_grid.html" class="btn btn-color"> At Travel Explorer Limited, we support you to travel the world the way you want and pay in convenient installments.</a>
                      </div>
                    </div>
                  </div>


            </div>
          </div>
        </div>
      </div>
      <!--  Categorie Block End  -->

      <!-- Popular Tour Packages Start -->
      <section class="pb-100">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-12">
              <div class="heading-part text-center mb-30 mb-sm-20">

                <br>
				<h2 class="main_title heading mb-15">Top <span>Flight Deals</span></h2>
                <p class="heading-des">*Subject to availability</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div id="packages-part" class="packages-part owl-carousel">
              <div class="item">
                <div class="card packages-box box-shadow overflow-hidden">
                  <div class="package-img">
                    <a href="tour_detail.html">
                      <img alt="TravelRide" src="images/packages_img_1.jpg">
                      <div class="effect"></div>
                    </a>
                  </div>
                  <div class="card-body p-25 p-xs-15">
                    <div class="packages-details">
                      <h4><a href="tour_detail.html" class="title">Los Angeles to San Francisco..</a></h4>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="70%"> <span style="width:66%"></span> </div>
                        <span class="label-review">10 Reviews</span>
                      </div>
                      <div class="d-flex align-items-center mt-2 mt-sm-4">
                        <div class="tour-info">
                          <ul>
                            <li>
                              <div class="days"><span><i class="far fa-clock"></i></span> 4 Days,3 Nights</div>
                            </li>
                            <li>
                              <div class="places"><span><i class="fas fa-map-marker-alt"></i></span> America - 4 Places</div>
                            </li>
                          </ul>
                        </div>
                        <div class="price-box ml-auto mt-0 border-left pl-2 pl-lg-5 pl-md-3 pl-sm-5 text-center">
                          <div class="price-text mb-1">Price</div>
                          <div class="price mb-0">$750</div>
                        </div>
                      </div>
                      <div class="packages-btn mt-30 mt-xs-20">
                        <a class="btn btn-color mr-3" href="tour_booking.html">Book Now</a>
                        <a class="btn btn-light" href="tour_detail.html">View Detail</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card packages-box box-shadow overflow-hidden">
                  <div class="package-img">
                    <a href="tour_detail.html">
                      <img alt="TravelRide" src="images/packages_img_2.jpg">
                      <div class="effect"></div>
                    </a>
                  </div>
                  <div class="card-body p-25 p-xs-15">
                    <div class="packages-details">
                      <h4><a href="tour_detail.html" class="title">Los Angeles to San Francisco..</a></h4>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="70%"> <span style="width:66%"></span> </div>
                        <span class="label-review">10 Reviews</span>
                      </div>
                      <div class="d-flex align-items-center mt-4">
                        <div class="tour-info">
                          <ul>
                            <li>
                              <div class="days"><span><i class="far fa-clock"></i></span> 4 Days,3 Nights</div>
                            </li>
                            <li>
                              <div class="places"><span><i class="fas fa-map-marker-alt"></i></span> America - 4 Places</div>
                            </li>
                          </ul>
                        </div>
                        <div class="price-box ml-auto mt-0 border-left  pl-2 pl-lg-5 pl-md-3 pl-sm-5 text-center">
                          <div class="price-text mb-1">Price</div>
                          <div class="price mb-0">$750</div>
                        </div>
                      </div>
                      <div class="packages-btn mt-30 mt-xs-15">
                        <a class="btn btn-color mr-3" href="tour_booking.html">Book Now</a>
                        <a class="btn btn-light" href="tour_detail.html">View Detail</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card packages-box box-shadow overflow-hidden">
                  <div class="package-img">
                    <a href="tour_detail.html">
                      <img alt="TravelRide" src="images/packages_img_3.jpg">
                      <div class="effect"></div>
                    </a>
                  </div>
                  <div class="card-body p-25 p-xs-15">
                    <div class="packages-details">
                      <h4><a href="tour_detail.html" class="title">Los Angeles to San Francisco..</a></h4>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="70%"> <span style="width:66%"></span> </div>
                        <span class="label-review">10 Reviews</span>
                      </div>
                      <div class="d-flex align-items-center mt-4">
                        <div class="tour-info">
                          <ul>
                            <li>
                              <div class="days"><span><i class="far fa-clock"></i></span> 4 Days,3 Nights</div>
                            </li>
                            <li>
                              <div class="places"><span><i class="fas fa-map-marker-alt"></i></span> America - 4 Places</div>
                            </li>
                          </ul>
                        </div>
                        <div class="price-box ml-auto mt-0 border-left  pl-2 pl-lg-5 pl-md-3 pl-sm-5 text-center">
                          <div class="price-text mb-1">Price</div>
                          <div class="price mb-0">$750</div>
                        </div>
                      </div>
                      <div class="packages-btn mt-30 mt-xs-15">
                        <a class="btn btn-color mr-3" href="tour_booking.html">Book Now</a>
                        <a class="btn btn-light" href="tour_detail.html">View Detail</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card packages-box box-shadow overflow-hidden">
                  <div class="package-img">
                    <a href="tour_detail.html">
                      <img alt="TravelRide" src="images/packages_img_4.jpg">
                      <div class="effect"></div>
                    </a>
                  </div>
                  <div class="card-body p-25 p-xs-15">
                    <div class="packages-details">
                      <h4><a href="tour_detail.html" class="title">Los Angeles to San Francisco..</a></h4>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="70%"> <span style="width:66%"></span> </div>
                        <span class="label-review">10 Reviews</span>
                      </div>
                      <div class="d-flex align-items-center mt-4">
                        <div class="tour-info">
                          <ul>
                            <li>
                              <div class="days"><span><i class="far fa-clock"></i></span> 4 Days,3 Nights</div>
                            </li>
                            <li>
                              <div class="places"><span><i class="fas fa-map-marker-alt"></i></span> America - 4 Places</div>
                            </li>
                          </ul>
                        </div>
                        <div class="price-box ml-auto mt-0 border-left  pl-2 pl-lg-5 pl-md-3 pl-sm-5 text-center">
                          <div class="price-text mb-1">Price</div>
                          <div class="price mb-0">$750</div>
                        </div>
                      </div>
                      <div class="packages-btn mt-30 mt-xs-15">
                        <a class="btn btn-color mr-3" href="tour_booking.html">Book Now</a>
                        <a class="btn btn-light" href="tour_detail.html">View Detail</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card packages-box box-shadow overflow-hidden">
                  <div class="package-img">
                    <a href="tour_detail.html">
                      <img alt="TravelRide" src="images/packages_img_5.jpg">
                      <div class="effect"></div>
                    </a>
                  </div>
                  <div class="card-body p-25 p-xs-15">
                    <div class="packages-details">
                      <h4><a href="tour_detail.html" class="title">Los Angeles to San Francisco..</a></h4>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="70%"> <span style="width:66%"></span> </div>
                        <span class="label-review">10 Reviews</span>
                      </div>
                      <div class="d-flex align-items-center mt-4">
                        <div class="tour-info">
                          <ul>
                            <li>
                              <div class="days"><span><i class="far fa-clock"></i></span> 4 Days,3 Nights</div>
                            </li>
                            <li>
                              <div class="places"><span><i class="fas fa-map-marker-alt"></i></span> America - 4 Places</div>
                            </li>
                          </ul>
                        </div>
                        <div class="price-box ml-auto mt-0 border-left  pl-2 pl-lg-5 pl-md-3 pl-sm-5 text-center">
                          <div class="price-text mb-1">Price</div>
                          <div class="price mb-0">$750</div>
                        </div>
                      </div>
                      <div class="packages-btn mt-30 mt-xs-15">
                        <a class="btn btn-color mr-3" href="tour_booking.html">Book Now</a>
                        <a class="btn btn-light" href="tour_detail.html">View Detail</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Popular Tour Packages End -->

      <!-- parallax Start -->
      <section>

      </section>
      <!-- parallax End -->




      <!-- counter Start -->
      <section class="counter-area-home">
        <div class="counter-area number-counters ptb-100">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-12 mb-md-30 text-center">
                <div class="counters-item">
                  <div class="counter-icon clients">
                    <img alt="TravelRide" src="images/counter_icon_1.png">
                  </div>
                  <div class="count-text"><span class="counter">12,898</span><span>+</span></div>
                  <div class="info-text">Happy Clients</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 mb-md-30 text-center">
                <div class="counters-item">
                  <div class="counter-icon project">
                    <img alt="TravelRide" src="images/counter_icon_2.png">
                  </div>
                  <div class="count-text"><span class="counter">400</span><span>+</span></div>
                  <div class="info-text">Amazing Tours</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 mb-sm-30 text-center">
                <div class="counters-item">
                  <div class="counter-icon advisors">
                    <img alt="TravelRide" src="images/counter_icon_3.png">
                  </div>
                  <div class="count-text"><span class="counter">1,450</span><span>+</span></div>
                  <div class="info-text">Customer Review</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 text-center">
                <div class="counters-item">
                  <div class="counter-icon achived">
                    <img alt="TravelRide" src="images/counter_icon_4.png">
                  </div>
                  <div class="count-text"><span class="counter">15251</span><span>+</span></div>
                  <div class="info-text">Flight Bookings</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- counter End -->


<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  if (y.style.display === "none") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }
}
</script>


      <!-- CONTAINER END -->

</body>
@endsection