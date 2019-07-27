@extends('layouts.masterTwo')
@section('title', 'Index')

@section('content')
    <div class="backgrounds">
        <div class="texts">
            <div class="options">
                <form>
                    <div class="form-head">Find your next holiday with available destination</div>
                    <div class="location">
                        <div class="form-title">Location</div>
                        <div class="form-input">
                            <i class="material-icons">place</i>
                            <input type="text" placeholder="Where to go?">
                        </div>
                    </div>
                    <div class="locations">
                        <div class="form-title">Price: Rs <span id="demo"></span></div>
                        <div class="slidecontainer">
                            <input type="range" min="3000" max="20000" value="50" class="slider" id="myRange">
                        </div>
                    </div>
                    <div class="location">
                        <div class="form-title">Start</div>
                        <div class="form-input">
                            <i class="material-icons">date_range</i>
                            <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                        </div>
                    </div>
                    <div class="location">
                        <div class="form-title">End</div>
                        <div class="form-input">
                            <i class="material-icons">date_range</i>
                            <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                        </div>
                    </div>
                    <div class="location">
                        <div class="form-title">Location</div>
                        <div class="form-input">
                            <i class="material-icons">group </i>
                            <input type="text" placeholder="No of People">
                        </div>

                    </div>
                    <button class="find">
                        <i class="material-icons">search</i>
                        <span>Search</span>
                    </button>
                </form>
            </div>
        </div>
        <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="{{asset('image/cc.jpeg')}}" style="width:100%; height: 100vh; opacity: 0.5">
                <div class="description-image">
                    <div class="top-text">Discover Great Places</div>
                    <div class="bottom-text">Welcome to spark. Spark is a personalized travel planner which helps to
                        plan
                        the trip for you. And find out the places travel in your country</div>
                    <div class="discover">
                        <button>Discover</button>
                    </div>
                </div>
            </div>
            <div class="mySlides fade">
                <img src="{{asset('image/slider2.jpg')}}" style="width:100%; height: 100vh; opacity: 0.5">
                <div class="description-image">
                    <div class="top-text">Discover Great Places</div>
                    <div class="bottom-text">Welcome to spark. Spark is a personalized travel planner which helps to
                        plan
                        the trip for you. And find out the places travel in your country</div>
                    <div class="discover">
                        <button>Discover</button>
                    </div>
                </div>
            </div>
            <div class="mySlides fade">
                <img src="{{asset('image/zz.jpg')}}" style="width:100%; height: 100vh; opacity: 0.5">
                <div class="description-image">
                    <div class="top-text">Discover Great Places</div>
                    <div class="bottom-text">Welcome to spark. Spark is a personalized travel planner which helps to
                        plan
                        the trip for you. And find out the places travel in your country</div>
                    <div class="discover">
                        <button>Discover</button>
                    </div>
                </div>
            </div>
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
    <div class="services">
        <div class="services-all">
            <div class="top-service">
                <div class="service-title">Find Your Services</div>
                <div class="service-subtitle">Services that are available for your trip</div>
            </div>
            <div class="category">
                <div class="all-category">
                    <i class="material-icons">golf_course </i>
                    <span>Sport</span>
                </div>
                <div class="all-category">
                    <i class="material-icons">hotel</i>
                    <span>Hotel</span>
                </div>
                <div class="all-category">
                    <i class="material-icons">fastfood </i>
                    <span>Restaurant</span>
                </div>
                <div class="all-category">
                    <i class="material-icons">shopping_cart</i>
                    <span>Shopping</span>
                </div>
                <div class="all-category">
                    <i class="material-icons">confirmation_number </i>
                    <span>Art & Culture</span>
                </div>
                <div class="all-category">
                    <i class="material-icons">local_bar </i>
                    <span>NightLife</span>
                </div>
            </div>
        </div>
    </div>
    <div class="destination">
        <div class="top-blog">
            <div class="service-title">Our Destination</div>
            <div class="service-subtitle">The Best Destination which are liked by customer itself</div>
        </div>
        <div class="destination-item">
            <div class="destination-place">
                <img src="{{asset('image/aa.jpg')}}">
                <div class="overlay">
                    <div class="destination-package">Packages</div>
                    <div class="destination-places">
                        <div>Fewa Lake</div>
                        <div>pakauda</div>
                        <div>begnas lake</div>
                    </div>
                    <button class="destination-btn">View Destination</button>
                </div>
                <div class="destination-over">
                    <div class="destination-package-name">Pokhara Tour</div>
                    <div class="destination-packages">3 Packages</div>
                </div>
            </div>
            <div class="destination-place">
                <img src="{{asset('image/pokhara.jpg')}}">
                <div class="overlay">
                    <div class="destination-package">Packages</div>
                    <div class="destination-places">
                        <div>Fewa Lake</div>
                        <div>pakauda</div>
                        <div>begnas lake</div>
                    </div>
                    <button class="destination-btn">View Destination</button>
                </div>
                <div class="destination-over">
                    <div class="destination-package-name">Pokhara Tour</div>
                    <div class="destination-packages">3 Packages</div>
                </div>
            </div>
            <div class="destination-place">
                <img src="{{asset('image/mustangtwo.jpg')}}">
                <div class="overlay">
                    <div class="destination-package">Packages</div>
                    <div class="destination-places">
                        <div>Fewa Lake</div>
                        <div>pakauda</div>
                        <div>begnas lake</div>
                    </div>
                    <button class="destination-btn">View Destination</button>
                </div>
                <div class="destination-over">
                    <div class="destination-package-name">Pokhara Tour</div>
                    <div class="destination-packages">3 Packages</div>
                </div>
            </div>
            <div class="destination-place">
                <img src="{{asset('image/aa.jpg')}}">
                <div class="overlay">
                    <div class="destination-package">Packages</div>
                    <div class="destination-places">
                        <div>Fewa Lake</div>
                        <div>pakauda</div>
                        <div>begnas lake</div>
                    </div>
                    <button class="destination-btn">View Destination</button>
                </div>
                <div class="destination-over">
                    <div class="destination-package-name">Pokhara Tour</div>
                    <div class="destination-packages">3 Packages</div>
                </div>
            </div>
            <div class="destination-place">
                <img src="{{asset('image/aa.jpg')}}">
                <div class="overlay">
                    <div class="destination-package">Packages</div>
                    <div class="destination-places">
                        <div>Fewa Lake</div>
                        <div>pakauda</div>
                        <div>begnas lake</div>
                    </div>
                    <button class="destination-btn">View Destination</button>
                </div>
                <div class="destination-over">
                    <div class="destination-package-name">Pokhara Tour</div>
                    <div class="destination-packages">3 Packages</div>
                </div>
            </div>
            <div class="destination-place">
                <img src="{{asset('image/aa.jpg')}}">
                <div class="overlay">
                    <div class="destination-package">Packages</div>
                    <div class="destination-places">
                        <div>Fewa Lake</div>
                        <div>pakauda</div>
                        <div>begnas lake</div>
                    </div>
                    <button class="destination-btn">View Destination</button>
                </div>
                <div class="destination-over">
                    <div class="destination-package-name">Pokhara Tour</div>
                    <div class="destination-packages">3 Packages</div>
                </div>
            </div>
        </div>
    </div>
    <div class="blogs">
        <div class="blog-inside">
            <div class="blog-left">
                <div class="blog-title">Amazing Places To Enjoy Your Travel</div>
                <div class="blog-description">The diverse landscape and cultural heritages of Nepal makes it one of the
                    top travel destinations in the world. The elevation of the country ranges from less than 100 meters
                    from sea level to highest altitude of the world 8,848 meters (Mount Everest). Nepal is enough to
                    make your holiday one of the most exciting and lifetime unforgettable travel experience.</div>
                <button>Read More</button>
            </div>
            <div class="blog-right">
                <img src="{{asset('image/slider.jpg')}}">
            </div>
        </div>
    </div>
    <div class="top-hotel">
        <div class="top-blog">
            <div class="service-title">Top-rated Hotels</div>
            <div class="service-subtitle">Hotels that are available for your trip</div>
        </div>
        <div class="hotel-all">
            <div class="box-hotel">
                <div class="image-top">
                    <img src="{{asset('image/onehotel.jpg')}}">
                    <div class="image-over">
                        <i class="material-icons">favorite_border</i>
                    </div>
                    <div class="rate">9.1</div>
                </div>
                <div class="hotel-description">
                    <div class="hotel-hour">
                        <i class="material-icons">access_time</i>
                        <span id="hour">Open</span>
                        <span>until 8:00 PM</span>
                    </div>
                    <div class="hotel-title">Fifteen cusine kitchen</div>
                    <div class="rating">
                        <div class="review-left">
                            <span>Cafe</span>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                        </div>
                        <div class="review">
                            <i class="material-icons"> sms</i>
                            <span>43 Reviews</span>
                        </div>
                    </div>
                    <div class="hotel-location">
                        <i class="material-icons"> place</i>
                        <span>Lazimpat, Kathmandu</span>
                    </div>
                </div>
            </div>
            <div class="box-hotel">
                <div class="image-top">
                    <img src="{{asset('image/hoteltwo.jpg')}}">
                    <div class="image-over">
                        <i class="material-icons">favorite_border</i>
                    </div>
                    <div class="rate">9.1</div>
                </div>
                <div class="hotel-description">
                    <div class="hotel-hour">
                        <i class="material-icons">access_time</i>
                        <span id="hour">Open</span>
                        <span>until 8:00 PM</span>
                    </div>
                    <div class="hotel-title">Fifteen cusine kitchen</div>
                    <div class="rating">
                        <div class="review-left">
                            <span>Cafe</span>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                        </div>
                        <div class="review">
                            <i class="material-icons"> sms</i>
                            <span>43 Reviews</span>
                        </div>
                    </div>
                    <div class="hotel-location">
                        <i class="material-icons"> place</i>
                        <span>Lazimpat, Kathmandu</span>
                    </div>
                </div>
            </div>
            <div class="box-hotel">
                <div class="image-top">
                    <img src="{{asset('image/hotelthree.jpg')}}">
                    <div class="image-over">
                        <i class="material-icons">favorite_border</i>
                    </div>
                    <div class="rate">9.1</div>
                </div>
                <div class="hotel-description">
                    <div class="hotel-hour">
                        <i class="material-icons">access_time</i>
                        <span id="hour">Open</span>
                        <span>until 8:00 PM</span>
                    </div>
                    <div class="hotel-title">Fifteen cusine kitchen</div>
                    <div class="rating">
                        <div class="review-left">
                            <span>Cafe</span>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                        </div>
                        <div class="review">
                            <i class="material-icons"> sms</i>
                            <span>43 Reviews</span>
                        </div>
                    </div>
                    <div class="hotel-location">
                        <i class="material-icons"> place</i>
                        <span>Lazimpat, Kathmandu</span>
                    </div>
                </div>
            </div>
            <div class="box-hotel">
                <div class="image-top">
                    <img src="{{asset('image/hotelfour.jpg')}}">
                    <div class="image-over">
                        <i class="material-icons">favorite_border</i>
                    </div>
                    <div class="rate">9.1</div>
                </div>
                <div class="hotel-description">
                    <div class="hotel-hour">
                        <i class="material-icons">access_time</i>
                        <span id="hour">Open</span>
                        <span>until 8:00 PM</span>
                    </div>
                    <div class="hotel-title">Fifteen cusine kitchen</div>
                    <div class="rating">
                        <div class="review-left">
                            <span>Cafe</span>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                        </div>
                        <div class="review">
                            <i class="material-icons"> sms</i>
                            <span>43 Reviews</span>
                        </div>
                    </div>
                    <div class="hotel-location">
                        <i class="material-icons"> place</i>
                        <span>Lazimpat, Kathmandu</span>
                    </div>
                </div>
            </div>
            <div class="box-hotel">
                <div class="image-top">
                    <img src="{{asset('image/hotelfive.jpg')}}">
                    <div class="image-over">
                        <i class="material-icons">favorite_border</i>
                    </div>
                    <div class="rate">9.1</div>
                </div>
                <div class="hotel-description">
                    <div class="hotel-hour">
                        <i class="material-icons">access_time</i>
                        <span id="hour">Open</span>
                        <span>until 8:00 PM</span>
                    </div>
                    <div class="hotel-title">Fifteen cusine kitchen</div>
                    <div class="rating">
                        <div class="review-left">
                            <span>Cafe</span>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                            <i class="material-icons"> attach_money</i>
                        </div>
                        <div class="review">
                            <i class="material-icons"> sms</i>
                            <span>43 Reviews</span>
                        </div>
                    </div>
                    <div class="hotel-location">
                        <i class="material-icons"> place</i>
                        <span>Lazimpat, Kathmandu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tips">
        <div class="steps">
            <div class="top-work">
                <div class="service-title">How Its Work</div>
                <div class="service-subtitle">Blogs which are rated by visitor itself</div>
            </div>
            <div class="stepbystep">
                <div class="step-one">
                    <i class="material-icons">map </i>
                    <p>PLAN YOUR TRIP</p>
                    <span>Customize our recommended itineraries or do it yourself.</span>
                </div>
                <div class="step-one">
                    <i class="material-icons">domain </i>
                    <p>GET BEST DEALS FROM AGENTS </p>
                    <span>Get the best price, services, feedbacks from trusted travel agents.</span>
                </div>
                <div class="step-one">
                    <i class="material-icons">directions_car </i>
                    <p>BOOK & GO</p>
                    <span>Select the best offer, book with money back guarantee and just go.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="list-blog">
        <div class="top-blog">
            <div class="service-title">Top Blogs</div>
            <div class="service-subtitle">Blogs which are rated by visitor itself</div>
        </div>
        <div class="blog-all">
            <div class="blog-number">
                <div class="blog-top">
                    <div class=" blog-image">
                        <img src="{{asset('image/hhh.jpg')}}">
                    </div>
                    <div class="blog-date">
                        2018/12/25
                    </div>
                </div>
                <div class="blog-bottom">
                    <div class="titles">Travel The World</div>
                    <div class="blog-tags">LifeStyle, Mountain, Adventure</div>
                    <div class="blog-middle">
                        The diverse landscape and cultural heritages of Nepal makes it one of the
                        top travel destinations in the world.....
                    </div>
                    <div class="more"><a href="#">Continue Reading....</a></div>
                </div>
            </div>
            <div class="blog-number">
                <div class="blog-top">
                    <div class=" blog-image">
                        <img src="{{asset('image/register.jpg')}}">
                    </div>
                    <div class="blog-date">
                        2018/12/25
                    </div>
                </div>
                <div class="blog-bottom">
                    <div class="titles">Travel The World</div>
                    <div class="blog-tags">LifeStyle, Mountain, Adventure</div>
                    <div class="blog-middle">
                        The diverse landscape and cultural heritages of Nepal makes it one of the
                        top travel destinations in the world.....
                    </div>
                    <div class="more"><a href="#">Continue Reading....</a></div>
                </div>
            </div>
            <div class="blog-number">
                <div class="blog-top">
                    <div class=" blog-image">
                        <img src="{{asset('image/login.jpg')}}">
                    </div>
                    <div class="blog-date">
                        2018/12/25
                    </div>
                </div>
                <div class="blog-bottom">
                    <div class="titles">Travel The World</div>
                    <div class="blog-tags">LifeStyle, Mountain, Adventure</div>
                    <div class="blog-middle">
                        The diverse landscape and cultural heritages of Nepal makes it one of the
                        top travel destinations in the world.....
                    </div>
                    <div class="more"><a href="#">Continue Reading....</a></div>
                </div>
            </div>
            <div class="blog-number">
                <div class="blog-top">
                    <div class=" blog-image">
                        <img src="{{asset('image/blog.jpg')}}">
                    </div>
                    <div class="blog-date">
                        2018/12/25
                    </div>
                </div>
                <div class="blog-bottom">
                    <div class="titles">Travel The World</div>
                    <div class="blog-tags">LifeStyle, Mountain, Adventure</div>
                    <div class="blog-middle">
                        The diverse landscape and cultural heritages of Nepal makes it one of the
                        top travel destinations in the world.....
                    </div>
                    <div class="more"><a href="#">Continue Reading....</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="packages">
        <div class="top-blog">
            <div class="service-title">Our Packages</div>
            <div class="service-subtitle">The Best Packages which are made by customer itself</div>
        </div>
        <div class="package-box">
            <div class="tour">
                <div class="package-image">
                    <img src="{{asset('image/pokhara.jpg')}}">
                </div>
                <div class="package-description">
                    <div class="package-name">Pokhara Holiday Tour</div>
                    <div class="package-second">
                        <div class="package-duration">
                            <i class="material-icons">access_time</i>
                            <span>7 days</span>
                        </div>
                        <div class="package-people">
                            <i class="material-icons">group</i>
                            <span>Max people : 5<span>
                        </div>
                    </div>
                    <div class="package-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut
                        efficitur ante. Donec dapibus dictum scelerisque.</div>
                    <div class="package-price">
                        <span>Rs 8000</span>
                        <i class="material-icons">arrow_forward</i>
                    </div>
                </div>
            </div>
            <div class="tour">
                <div class="package-image">
                    <img src="{{asset('image/aa.jpg')}}">
                </div>
                <div class="package-description">
                    <div class="package-name">Pokhara Holiday Tour</div>
                    <div class="package-second">
                        <div class="package-duration">
                            <i class="material-icons">access_time</i>
                            <span>7 days</span>
                        </div>
                        <div class="package-people">
                            <i class="material-icons">group</i>
                            <span>Max people : 5<span>
                        </div>
                    </div>
                    <div class="package-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut
                        efficitur ante. Donec dapibus dictum scelerisque.</div>
                    <div class="package-price">
                        <span>Rs 8000</span>
                        <i class="material-icons">arrow_forward</i>
                    </div>
                </div>
            </div>
            <div class="tour">
                <div class="package-image">
                    <img src="{{asset('image/mustangtwo.jpg')}}">
                </div>
                <div class="package-description">
                    <div class="package-name">Pokhara Holiday Tour</div>
                    <div class="package-second">
                        <div class="package-duration">
                            <i class="material-icons">access_time</i>
                            <span>7 days</span>
                        </div>
                        <div class="package-people">
                            <i class="material-icons">group</i>
                            <span>Max people : 5<span>
                        </div>
                    </div>
                    <div class="package-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut
                        efficitur ante. Donec dapibus dictum scelerisque.</div>
                    <div class="package-price">
                        <span>Rs 8000</span>
                        <i class="material-icons">arrow_forward</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection