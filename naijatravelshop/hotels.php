<?php include('includes/header.php'); ?>

        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#">United States</a>
                </li>
                <li>
                    <a href="#">New York (NY)</a>
                </li>
                <li>
                    <a href="#">New York City</a>
                </li>
                <li class="active">New York City Hotels</li>
            </ul>
            <div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" id="search-dialog">
                <h3>Search for Hotel</h3>
                <form>
                    <div class="form-group form-group-lg form-group-icon-left">
                        <i class="fa fa-map-marker input-icon input-icon-highlight"></i>
                        <label>Where are you going?</label>
                        <input class="typeahead form-control" placeholder="City, Airport, Point of Interest, Hotel Name or U.S. Zip Code" type="text"
                        />
                    </div>
                    <div class="input-daterange" data-date-format="M d, D">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-icon-left">
                                    <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                    <label>Check-in</label>
                                    <input class="form-control" name="start" type="text" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-icon-left">
                                    <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                    <label>Check-out</label>
                                    <input class="form-control" name="end" type="text" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-select-plus">
                                    <label>Rooms</label>
                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" />1</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />2</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />3</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />3+</label>
                                    </div>
                                    <select class="form-control hidden">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option selected="selected">4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-select-plus">
                                    <label>Gutests</label>
                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />1</label>
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" />2</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />3</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />3+</label>
                                    </div>
                                    <select class="form-control hidden">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option selected="selected">4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Search for Hotels</button>
                </form>
            </div>
            <h3 class="booking-title">521 hotels in New York on Mar 22 - Apr 17 for 1 adult
                <small>
                    <a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Change search</a>
                </small>
            </h3>
            <div class="row">
                <div class="col-md-3">
                    <aside class="booking-filters text-white">
                        <h3>Filter By:</h3>
                        <ul class="list booking-filters-list">
                            <li>
                                <h5 class="booking-filters-title">Price</h5>
                                <input type="text" id="price-slider">
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Star Rating</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />5 star (220)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />4 star (112)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />3 star (75)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />2 star (60)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />1 star (20)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Facility</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Wi-Fi (55)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Parking (264)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Airport Shuttle (137)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Fitness Center (15)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Non-Smoking Rooms (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Indoor Pool (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Spa (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Family Rooms (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Pet Friendly (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Restaurant (20)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Room Facility</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Air conditioning (55)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Bathtub (264)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Flat-screen TV (137)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Kitchen/kitchenette (15)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Patio (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Soundproof (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Spa tub (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Terrace (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />View (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Washing machine (20)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Hotel Theme</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Romance / Honeymoon (225)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Spa / Relaxation (178)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Family (70)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Budget / Backpacker (15)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />City Trip (53)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Luxury (134)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Design (80)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Shopping (93)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Countryside (4)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Gourmet (15)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Castle (1)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Golf / Sports (37)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Business (210)</label>
                                </div>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="nav-drop booking-sort">
                        <h5 class="booking-sort-title">
                            <a href="#">Sort: Availability
                                <i class="fa fa-angle-down"></i>
                                <i class="fa fa-angle-up"></i>
                            </a>
                        </h5>
                        <ul class="nav-drop-menu">
                            <li>
                                <a href="#">Price (low to high)</a>
                            </li>
                            <li>
                                <a href="#">Price (hight to low)</a>
                            </li>
                            <li>
                                <a href="#">Ranking</a>
                            </li>
                            <li>
                                <a href="#">Distance</a>
                            </li>
                            <li>
                                <a href="#">Number of Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row row-wrap">
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb last-minute-card">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/waldorf-astoria.png" alt="Waldorf Astoria New York" title="Waldorf Astoria New York" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="last-minute-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="thumb-title">
                                        <a class="text-darken" href="#">Waldorf Astoria New York</a>
                                    </h5>
                                    <p class="mb0">
                                        <small>
                                            <i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <p class="mb0 text-darken">
                                        <span class="text-lg lh1em text-color">NGN 30,000</span>
                                        <small> per night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <small>521 hotels found in New York. &nbsp;&nbsp;Showing 1 – 15</small>
                            </p>
                            <ul class="pagination">
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">6</a>
                                </li>
                                <li>
                                    <a href="#">7</a>
                                </li>
                                <li class="dots">...</li>
                                <li>
                                    <a href="#">43</a>
                                </li>
                                <li class="next">
                                    <a href="#">Next Page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Not what you're looking for?
                                <a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Try your search again</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>



        <?php include('includes/footer.php'); ?>