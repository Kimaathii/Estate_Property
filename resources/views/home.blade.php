        @extends('welcome')
        @section('content')

            <!-- Home Banner -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="banner-content" data-aos="fade-down">
                                <h1>Find Your Best Dream House for <span>Rental, Buy & Sell...</span></h1>
                                <p>Properties for buy / rent in in your location. We have more than 3000+ listings for you to choose</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-search"  data-aos="fade-down">
                                <div class="banner-tab">
                                    <ul class="nav nav-tabs" id="bannerTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="buy-property" data-bs-toggle="tab" href="#buy_property" role="tab" aria-controls="buy_property" aria-selected="true">
                                                <img src="assets/img/icons/buy-icon.svg" alt="icon"> Buy a Property
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="rent-property" data-bs-toggle="tab" href="#rent_property" role="tab" aria-controls="rent_property" aria-selected="false">
                                                <img src="assets/img/icons/rent-icon.svg" alt="icon"> Rent a Property
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="bannerTabContent">
                                    <div class="tab-pane fade show active" id="buy_property" role="tabpanel" aria-labelledby="buy-property">
                                        <div class="banner-tab-property">
                                            <form action="#">
                                                <div class="banner-property-info">
                                                    <div class="banner-property-grid">
                                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                                    </div>
                                                    <div class="banner-property-grid">
                                                        <select class="select">
                                                            <option value="0">Property Type</option>
                                                            <option value="1" >Buy Property</option>
                                                            <option value="2" >Rent Property</option>
                                                        </select>
                                                    </div>
                                                    <div class="banner-property-grid">
                                                        <input type="email" class="form-control" placeholder="Enter Address">
                                                    </div>
                                                    <div class="banner-property-grid">
                                                        <input type="text" class="form-control" placeholder="Min Price">
                                                    </div>
                                                    <div class="banner-property-grid">
                                                        <input type="text" class="form-control" placeholder="Max Price">
                                                    </div>
                                                    <div class="banner-property-grid">
                                                        <a href="buy-property-grid.html" class="btn-primary"><span><i class='feather-search'></i></span></a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="rent_property" role="tabpanel" aria-labelledby="rent-property">
                                        <div class="banner-tab-property">
                                            <form action="#">
                                                <div class="banner-property-info">
                                                    <div class="banner-property-grid">
                                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                                    </div>
                                                    <div class="banner-property-grid">
                                                        <select class="select">
                                                            <option value="0">Property Type</option>
                                                            <option value="1" >Buy Property</option>
                                                            <option value="2" >Rent Property</option>
                                                        </select>
                                                    </div>
                                                    <div class="banner-property-grid">
                                                        <input type="email" class="form-control" placeholder="Enter Address">
                                                    </div>
                                                    <div class="banner-property-grid">
                                                        <input type="text" class="form-control" placeholder="Min Price">
                                                    </div>
                                                    <div class="banner-property-grid">
                                                        <input type="text" class="form-control" placeholder="Max Price">
                                                    </div>
                                                    <div class="banner-property-grid">
                                                        <a href="rent-property-grid.html" class="btn-primary"><span><i class='feather-search'></i></span></a>
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
            </section>
            <!-- /Home Banner -->

            <!-- How It Work -->
            <section class="howit-work">
                <div class="container">
                    <div class="section-heading text-center">
                        <h2>How It Works</h2>
                        <div class="sec-line">
                            <span class="sec-line1"></span>
                            <span class="sec-line2"></span>
                        </div>
                        <p>Follow these 3 steps to book your place</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="howit-work-card" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="100">
                                <div class="work-card-icon">
									<span>
										<img src="assets/img/icons/work-icon-1.svg" alt="icon">
									</span>
                                </div>
                                <h4>01. Search for Location</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio…</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="howit-work-card" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
                                <div class="work-card-icon">
									<span class="bg-red">
										<img src="assets/img/icons/work-icon-2.svg" alt="icon">
									</span>
                                </div>
                                <h4>02. Select Property Type</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio…</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="howit-work-card" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="300">
                                <div class="work-card-icon">
									<span class="bg-green">
										<img src="assets/img/icons/work-icon-3.svg" alt="icon">
									</span>
                                </div>
                                <h4>03. Book Your Property</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio…</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /How It Work -->
            <!-- How It Work -->
            <section class="howit-work">
                <div class="container1" >
                    <div class="section-heading text-center">
                        <h2>Insight & Tools</h2>
                        <div class="sec-line">
                            <span class="sec-line2"></span>
                            <span class="sec-line1"></span>
                            <span class="sec-line2"></span>
                        </div>
                        {{-- <p>Follow these 3 steps to book your place</p> --}}
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 cardpop" >
                            <div class="howit-work-card" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="100" style="background: #ffedba;">
                                <div class="workHeader">
									<span>
										<img src="{{ asset('assets\img\insight\svgexport-4.png') }}" alt="icon">
									</span>
                                    <h3>Property Rates & Price Trends</h3>
                                </div>
                                
                                <p>Market rates, data analytics & registered transactions of top project & localities</p>
                                <div><img src="{{ asset('assets\img\insight\price-trends-img.png') }}" alt=""></div>
                                <div class="btnBox">
                                    Explore Now<em class="icon-angle-right"></em> </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 cardpop" >
                            <div class="howit-work-card" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="100" style="background: #c5f4e5;">
                                <div class="workHeader">
									<span>
										<img src="{{ asset('assets\img\insight\svgexport-5.png') }}" alt="icon">
									</span>
                                    <h3>Property Rates Heatmap</h3>
                                </div>
                                
                                <p>An Interactive Map to help you understand a City’s Real Estate</p>
                                <div><img src="{{ asset('assets\img\insight\property-rates-heatmap-img.png') }}" alt=""></div>
                                <div class="details"><em>Explore</em></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 cardpop" >
                            <div class="howit-work-card" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="100" style="background: #ffd9f8;">
                                <div class="workHeader">
									<span>
										<img src="{{ asset('assets\img\insight\svgexport-6.png') }}" alt="icon">
									</span>
                                    <h3>Valuation Report</h3>
                                </div>
                                
                                <p>Get an instant & comprehensive Valuation Report of any property - downloadable in PDF</p>
                                <div><img src="{{ asset('assets\img\insight\valuation-report-img.png') }}" alt=""></div>
                                <div class="details"><em>Explore</em></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 cardpop"  >
                            <div class="howit-work-card" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="100" style="background: #ffdebc;">
                                <div class="workHeader">
									<span>
										<img src="{{ asset('assets\img\insight\svgexport-7.png') }}" alt="icon">
									</span>
                                    <h3>Project Reviews & Ratings</h3>
                                </div>
                                
                                <p>Don't just take our word for it; See what other residents, tenants & agents say about a project or locality</p>
                                <div><img src="{{ asset('assets\img\insight\reviews-ratings-img.png') }}" alt=""></div>
                                <div class="details"><em>Explore</em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /How It Work -->

      
            {{-- progress bar --}}
            <section class="property-type-sec">
                <div class="section-shape-imgs">
                    <img src="assets/img/shapes/property-sec-bg-1.png" class="rectangle-left" alt="icon">
                    <img src="assets/img/shapes/property-sec-bg-2.png" class="rectangle-right" alt="icon">
                    <img src="assets/img/icons/red-circle.svg" class="bg-09" alt="Image">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-heading" data-aos="fade-down" data-aos-duration="1000">
                                <h2>Explore by Property Type</h2>
                                <div class="sec-line">
                                    <span class="sec-line1"></span>
                                    <span class="sec-line2"></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed </p>
                            </div>
                            <div class="owl-navigation">
                                <div class="owl-nav mynav1 nav-control"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="property-type-slider owl-carousel">
                                <div class="property-card" data-aos="fade-down" data-aos-duration="1000">
                                    <div class="property-img">
                                        <img src="assets/img/icons/property-icon-1.svg" alt="icon">
                                    </div>
                                    <div class="property-name">
                                        <h4>Houses</h4>
                                        <p>30 Properties</p>
                                    </div>
                                </div>
                                <div class="property-card" data-aos="fade-down" data-aos-duration="1000">
                                    <div class="property-img">
                                        <img src="assets/img/icons/property-icon-2.svg" alt="icon">
                                    </div>
                                    <div class="property-name">
                                        <h4>Offices</h4>
                                        <p>25 Properties</p>
                                    </div>
                                </div>
                                <div class="property-card" data-aos="fade-down" data-aos-duration="1000">
                                    <div class="property-img">
                                        <img src="assets/img/icons/property-icon-3.svg" alt="icon">
                                    </div>
                                    <div class="property-name">
                                        <h4>Villas</h4>
                                        <p>40 Properties</p>
                                    </div>
                                </div>
                                <div class="property-card" data-aos="fade-down" data-aos-duration="1000">
                                    <div class="property-img">
                                        <img src="assets/img/icons/property-icon-4.svg" alt="icon">
                                    </div>
                                    <div class="property-name">
                                        <h4>Apartment</h4>
                                        <p>35 Properties</p>
                                    </div>
                                </div>
                                <div class="property-card" data-aos="fade-down" data-aos-duration="1000">
                                    <div class="property-img">
                                        <img src="assets/img/icons/property-icon-3.svg" alt="icon">
                                    </div>
                                    <div class="property-name">
                                        <h4>Villas</h4>
                                        <p>40 Properties</p>
                                    </div>
                                </div>
                                <div class="property-card" data-aos="fade-down" data-aos-duration="1000">
                                    <div class="property-img">
                                        <img src="assets/img/icons/property-icon-1.svg" alt="icon">
                                    </div>
                                    <div class="property-name">
                                        <h4>Houses</h4>
                                        <p>30 Properties</p>
                                    </div>
                                </div>
                                <div class="property-card" data-aos="fade-down" data-aos-duration="1000">
                                    <div class="property-img">
                                        <img src="assets/img/icons/property-icon-4.svg" alt="icon">
                                    </div>
                                    <div class="property-name">
                                        <h4>Apartment</h4>
                                        <p>35 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Property Type -->
            
            <!-- /Property Type -->
            {{-- insight and tools  --}}
            <section class="insightTools">
                <div class="insightToolsText">
                    <h2>Everything you Need at One Place</h2>
                <h3>In-House Services</h3>
                </div>
                
            <div class="grid-box">
                <!-- Row 1 -->
                <div class="grid-item">
                    <figure><img src="{{ asset('assets\img\insight\home-loan.png') }}" alt="Home loan icon"></figure>
                    <div class="newServiceBox"><a href="#">Home Loan</a></div>
                    
                </div>
                
                <div class="grid-item">
                    <figure><img src="{{ asset('assets\img\insight\home-interior.png') }}" alt=""></figure>
                    <div class="newServiceBox"><a href="#">Home Interior</a></div>
                </div>
                <div class="grid-item">
                    <figure><img src="{{ asset('assets\img\insight\propery-legal-services.png') }}" alt=""></figure>
                    <div class="newServiceBox"><a href="#">Property Legal Service</a></div>
                </div>
                <div class="grid-item">
                    <figure><img src="{{ asset('assets\img\insight\property-management.png') }}" alt=""></figure>
                    <div class="newServiceBox"><a href="#"> Property Management</a></div>
                </div>
                <div class="grid-item">
                    <figure><img src="{{ asset('assets\img\insight\escrow-services.png') }}" alt=""></figure>
                    <div class="newServiceBox"><a href="#">Escrow Services</a></div>
                </div>
                <div class="grid-item">
                    <figure><img src="{{ asset('assets\img\insight\online-rent-agreement.png') }}" alt=""></figure>
                    <div class="newServiceBox"><a href="#">Online Rent Agreement</a></div>
                </div>
                <!-- Row 2 -->
                <div class="grid-item">
                    <figure><img src="{{ asset('assets\img\insight\online-rent-receipt-generator.png') }}" alt=""></figure>
                    <div class="newServiceBox"><a href="#">Online Rent Receipt Generator</a></div>
                </div>
                <div class="grid-item">
                    <figure><img src="{{ asset('assets\img\insight\sell-or-rent-property.png') }}" alt=""></figure>
                    <div class="newServiceBox"><a href="#">Sell or Rent Property</a></div>
                </div>
                <div class="grid-item">
                    <figure><img src="{{ asset('assets\img\insight\title-search.png') }}" alt=""></figure>
                    <div class="newServiceBox"><a href="#">Title Search</a></div>
                </div>
                <div class="grid-item">
                    <figure><img src="{{ asset('assets\img\insight\litigation.png') }}" alt=""></figure>
                    <div class="newServiceBox"><a href="#">Litigation</a></div>
                </div>
                <div class="grid-item">
                    <figure><img src="{{ asset('assets\img\insight\valuation.png') }}" alt=""></figure>
                    <div class="newServiceBox"><a href="#">Valuation</a></div>
                </div>
                <div class="grid-item">
                    <figure><img src="{{ asset('assets\img\insight\property-registration.png') }}" alt=""></figure>
                    <div class="newServiceBox"><a href="#">Property Registeration</a></div>
                </div>
              </div> 
            </section>
            <section class="otherService" style="">
                <div class="insightToolsText">
                    <h2>Partner Services</h2>
                </div>
              
            <div class="single-row-grid">
                <div class="custom-box">
                    <figure><img src="{{ asset('assets\img\insight\painting-services.png') }}" alt="Home loan icon"></figure>
                    <div class="newServiceBox"><a href="#">Painting Services</a></div>
                </div>
                <div class="custom-box">
                    <figure><img src="{{ asset('assets\img\insight\rental-furniture.png') }}" alt="Home loan icon"></figure>
                    <div class="newServiceBox"><a href="#">Rental Furniture</a></div>
                </div>
                <div class="custom-box">
                    <figure><img src="{{ asset('assets\img\insight\packers-movers.png') }}" alt="Home loan icon"></figure>
                    <div class="newServiceBox"><a href="#">Parkers Movers</a></div>
                </div>
                <div class="custom-box">
                    <figure><img src="{{ asset('assets\img\insight\property-inspection.png') }}" alt="Home loan icon"></figure>
                    <div class="newServiceBox"><a href="#">Property Inspection</a></div>
                </div>
                <div class="custom-box">
                    <figure><img src="{{ asset('assets\img\insight\vastu-consultation.png') }}" alt="Home loan icon"></figure>
                    <div class="newServiceBox"><a href="#">Vastu Consultation</a></div>
                </div>
                <div class="custom-box">
                    <figure><img src="{{ asset('assets\img\insight\solar-rooftop.png') }}" alt="Home loan icon"></figure>
                    <div class="newServiceBox"><a href="#">Solar Rooftop</a></div>
                </div>
              </div>
            </section>

   
    
       <section class="estateDev">

            <div class="estateBox">
                <div class="estatelid">
                    <h2>For Real Estate Developers</h2>
                    <div class="estateBoxinner">
                        <div class="estatetitle">
                            <div class="titleHead"> 
                                <img class="img-responsive lazy"  alt="prime-connect" src="{{ asset('assets\img\insight\propvr.svg') }}">
                            <div class="PropVR estateclr">
                                <h3>PropVR</h3>
                                <span></span>
                            </div>
                        </div>

                        <ul>
                            <li><i class='bx bxs-checkbox-checked'></i>Get all 3D visualisation under one roof</li>
                            <li><i class='bx bxs-checkbox-checked'></i>Virtual Sales Tool for remote showcase</li>
                            <li><i class='bx bxs-checkbox-checked'></i>Tech-enabled Experience Center Solutions</li>
                        </ul>
                        <a class="btn" target="_blank" href="#">Know more <i class='bx bx-right-arrow-alt' ></i></a>

                    </div>
                    <div class="estateimg">
                        <img src="{{ asset('assets\img\insight\propvr-side.svg') }}" alt="image">
                    </div>
                </div>
            </div>
            </div>

            <div class=" estateBox" id="agent">
                <div class="agentlid estatelid">
                    <h2>For Agents</h2>
                    <div class="agentinner estateBoxinner">
                        <div class="agentTitle estatetitle">
                            <div class="titleHead"> 
                            <img class="img-responsive lazy"  alt="prime-connect" src="{{ asset('assets\img\insight\square-connect.svg') }}">
                            <div class="PropVR " id="agentClr">
                                <h3>Square Connect</h3>
                                <span></span>
                            </div>

                        </div>
                        <ul>
                            <li><i class='bx bxs-checkbox-checked'></i>Free Listing &amp; Leads</li>
                            <li><i class='bx bxs-checkbox-checked'></i>Higher Visibility using In-app marketing tools</li>
                            <li><i class='bx bxs-checkbox-checked'></i>Exclusive Deals &amp; Higher commission Slabs</li>
                        </ul>
                        {{-- <ul>
                            <li><i class='bx bxs-checkbox-checked'>Free Listing &amp; Leads</li>
                            <li><i class='bx bxs-checkbox-checked'>Higher Visibility using In-app marketing tools</li>
                            <li><i class='bx bxs-checkbox-checked'>Exclusive Deals &amp; Higher commission Slabs</li>
                        </ul> --}}
                        <a class="btn" target="_blank" href="#">Know more <i class='bx bx-right-arrow-alt' ></i></a>

                    </div>
                    <div class="estateimg" id="agentimg">
                        <img src="{{ asset('assets\img\insight\square-connect-side.png') }}" alt="image">
                    </div>
                </div>
            </div>



       </section>
    
            


            
        

            <section class="locality">
                <div class="container">
                    <div class="section-heading">
                        <h2>Top Locations</h2>
                        <div class="sec-line">
                            <span class="sec-line1"></span>
                            <span class="sec-line2"></span>
                        </div>
                        {{-- <p>What our happy client says</p> --}}
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial-slider owl-carousel">
                                <div class="location-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="topheader">
                                        <div>
                                            <img data-src="" alt="Mira Road, Mumbai Map" width="81" height="49" class="img-responsive lazy" src=""> 
                                        </div>
                                        <div>
                                            <div class="cardHeading">
                                                <div class="headingLink">
                                                <strong><a href="">Mira Road</a></strong>
                                                <em></em>
                                                </div>
                                                <div class="totalProjects">
                                                <a href="" target="_blank">1591 Projects <span>in Mira Road, Mumbai</span></a>
                                                </div>
                                                </div>
                                        </div>
                                        <div class="starRatingBox">
                                            <div class="starRating">
                                            <span>3.9<i class="fa-solid fa-star"></i></span>
                                            <em class="review icon-rated"></em>
                                            </div>
                                            <a class="totalReview" href="#"> 12 Reviews</a>
                                            </div>
                                    </div>
                                        
                                            <div class="cardSec">
                                                <div class="buyPrice">
                                                <div class="iconBox rentIconBox"><img class="img-responsive lazy" data-src="" alt="Rent Icon" src="">
                                                </div>
                                                <div class="detailPrice"> <span>Rent:</span> <strong>₹ 38 Per Sq. Ft</strong> </div>
                                                </div>
                                                <a href="" target="_blank" class="totalProperty">
                                                <div class="detailPrice">
                                                <strong>1378 Properties for Rent <span>in Mira Road, Mumbai</span></strong>
                                                </div>
                                                </a>
                                                </div>
                                        
                                   
                                                <div class="cardSec">
                                                    <div class="buyPrice">
                                                    <div class="iconBox rentIconBox"><img class="img-responsive lazy" data-src="" alt="Rent Icon" src="{{ asset('') }}">
                                                    </div>
                                                    <div class="detailPrice"> <span>Rent:</span> <strong>₹ 17 Per Sq. Ft</strong> </div>
                                                    </div>
                                                    <a href="#" target="_blank" class="totalProperty">
                                                    <div class="detailPrice">
                                                    <strong>3637 Properties for Rent <span>in Dombivli East, Thane</span></strong>
                                                    </div>
                                                    </a>
                                                    </div>
                                    
                                </div>
                                <div class="location-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="topheader">
                                        <div>
                                            <img data-src="" alt="Mira Road, Mumbai Map" width="81" height="49" class="img-responsive lazy" src=""> 
                                        </div>
                                        <div>
                                            <div class="cardHeading">
                                                <div class="headingLink">
                                                <strong><a href="">Mira Road</a></strong>
                                                <em></em>
                                                </div>
                                                <div class="totalProjects">
                                                <a href="" target="_blank">1591 Projects <span>in Mira Road, Mumbai</span></a>
                                                </div>
                                                </div>
                                        </div>
                                        <div class="starRatingBox">
                                            <div class="starRating">
                                            <span>3.9<i class="fa-solid fa-star"></i></span>
                                            <em class="review icon-rated"></em>
                                            </div>
                                            <a class="totalReview" href="#"> 12 Reviews</a>
                                            </div>
                                    </div>
                                        
                                            <div class="cardSec">
                                                <div class="buyPrice">
                                                <div class="iconBox rentIconBox"><img class="img-responsive lazy" data-src="" alt="Rent Icon" src="">
                                                </div>
                                                <div class="detailPrice"> <span>Rent:</span> <strong>₹ 38 Per Sq. Ft</strong> </div>
                                                </div>
                                                <a href="" target="_blank" class="totalProperty">
                                                <div class="detailPrice">
                                                <strong>1378 Properties for Rent <span>in Mira Road, Mumbai</span></strong>
                                                </div>
                                                </a>
                                                </div>
                                        
                                   
                                    <div class="cardSec">
                                        <div class="buyPrice">
                                        <div class="iconBox rentIconBox"><img class="img-responsive lazy" data-src="" alt="Rent Icon" src="">
                                        </div>
                                        <div class="detailPrice"> <span>Rent:</span> <strong>₹ 38 Per Sq. Ft</strong> </div>
                                        </div>
                                        <a href="#" target="_blank" class="totalProperty">
                                        <div class="detailPrice">
                                        <strong>1378 Properties for Rent <span>in Mira Road, Mumbai</span></strong>
                                        </div>
                                        </a>
                                        </div>
                                    
                                </div>
                                <div class="location-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="topheader">
                                        <div>
                                            <img data-src="" alt="Mira Road, Mumbai Map" width="81" height="49" class="img-responsive lazy" src=""> 
                                        </div>
                                        <div>
                                            <div class="cardHeading">
                                                <div class="headingLink">
                                                <strong><a href="">Mira Road</a></strong>
                                                <em></em>
                                                </div>
                                                <div class="totalProjects">
                                                <a href="" target="_blank">1591 Projects <span>in Mira Road, Mumbai</span></a>
                                                </div>
                                                </div>
                                        </div>
                                        <div class="starRatingBox">
                                            <div class="starRating">
                                            <span>3.9<i class="fa-solid fa-star"></i></span>
                                            <em class="review icon-rated"></em>
                                            </div>
                                            <a class="totalReview" href="#"> 12 Reviews</a>
                                            </div>
                                    </div>
                                        
                                            <div class="cardSec">
                                                <div class="buyPrice">
                                                <div class="iconBox rentIconBox"><img class="img-responsive lazy" data-src="" alt="Rent Icon" src="">
                                                </div>
                                                <div class="detailPrice"> <span>Rent:</span> <strong>₹ 38 Per Sq. Ft</strong> </div>
                                                </div>
                                                <a href="" target="_blank" class="totalProperty">
                                                <div class="detailPrice">
                                                <strong>1378 Properties for Rent <span>in Mira Road, Mumbai</span></strong>
                                                </div>
                                                </a>
                                                </div>
                                        
                                   
                                    <div class="cardSec">
                                        <div class="buyPrice">
                                        <div class="iconBox rentIconBox"><img class="img-responsive lazy" data-src="" alt="Rent Icon" src="">
                                        </div>
                                        <div class="detailPrice"> <span>Rent:</span> <strong>₹ 38 Per Sq. Ft</strong> </div>
                                        </div>
                                        <a href="" target="_blank" class="totalProperty">
                                        <div class="detailPrice">
                                        <strong>1378 Properties for Rent <span>in Mira Road, Mumbai</span></strong>
                                        </div>
                                        </a>
                                        </div>
                                    
                                </div>
                                <div class="location-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="topheader">
                                        <div>
                                            <img data-src="" alt="Mira Road, Mumbai Map" width="81" height="49" class="img-responsive lazy" src=""> 
                                        </div>
                                        <div>
                                            <div class="cardHeading">
                                                <div class="headingLink">
                                                <strong><a href="">Mira Road</a></strong>
                                                <em></em>
                                                </div>
                                                <div class="totalProjects">
                                                <a href="#" target="_blank">1591 Projects <span>in Mira Road, Mumbai</span></a>
                                                </div>
                                                </div>
                                        </div>
                                        <div class="starRatingBox">
                                            <div class="starRating">
                                            <span>3.9<i class="fa-solid fa-star"></i></span>
                                            <em class="review icon-rated"></em>
                                            </div>
                                            <a class="totalReview" href="#"> 12 Reviews</a>
                                            </div>
                                    </div>
                                        
                                            <div class="cardSec">
                                                <div class="buyPrice">
                                                <div class="iconBox rentIconBox"><img class="img-responsive lazy" data-src="" alt="Rent Icon" src="">
                                                </div>
                                                <div class="detailPrice"> <span>Rent:</span> <strong>₹ 38 Per Sq. Ft</strong> </div>
                                                </div>
                                                <a href="" target="_blank" class="totalProperty">
                                                <div class="detailPrice">
                                                <strong>1378 Properties for Rent <span>in Mira Road, Mumbai</span></strong>
                                                </div>
                                                </a>
                                                </div>
                                        
                                   
                                    <div class="cardSec">
                                        <div class="buyPrice">
                                        <div class="iconBox rentIconBox"><img class="img-responsive lazy" data-src="" alt="Rent Icon" src="">
                                        </div>
                                        <div class="detailPrice"> <span>Rent:</span> <strong>₹ 38 Per Sq. Ft</strong> </div>
                                        </div>
                                        <a href="#" target="_blank" class="totalProperty">
                                        <div class="detailPrice">
                                        <strong>1378 Properties for Rent <span>in Mira Road, Mumbai</span></strong>
                                        </div>
                                        </a>
                                        </div>
                                    
                                </div>
                                <div class="location-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="topheader">
                                        <div>
                                            <img data-src="" alt="Mira Road, Mumbai Map" width="81" height="49" class="img-responsive lazy" src=""> 
                                        </div>
                                        <div>
                                            <div class="cardHeading">
                                                <div class="headingLink">
                                                <strong><a href="">Mira Road</a></strong>
                                                <em></em>
                                                </div>
                                                <div class="totalProjects">
                                                <a href="" target="_blank">1591 Projects <span>in Mira Road, Mumbai</span></a>
                                                </div>
                                                </div>
                                        </div>
                                        <div class="starRatingBox">
                                            <div class="starRating">
                                            <span>3.9<i class="fa-solid fa-star"></i></span>
                                            <em class="review icon-rated"></em>
                                            </div>
                                            <a class="totalReview" href="#"> 12 Reviews</a>
                                            </div>
                                    </div>
                                        
                                            <div class="cardSec">
                                                <div class="buyPrice">
                                                <div class="iconBox rentIconBox"><img class="img-responsive lazy" data-src="" alt="Rent Icon" src="">
                                                </div>
                                                <div class="detailPrice"> <span>Rent:</span> <strong>₹ 38 Per Sq. Ft</strong> </div>
                                                </div>
                                                <a href="" target="_blank" class="totalProperty">
                                                <div class="detailPrice">
                                                <strong>1378 Properties for Rent <span>in Mira Road, Mumbai</span></strong>
                                                </div>
                                                </a>
                                                </div>
                                        
                                   
                                    <div class="cardSec">
                                        <div class="buyPrice">
                                        <div class="iconBox rentIconBox"><img class="img-responsive lazy" data-src="" alt="Rent Icon" src="">
                                        </div>
                                        <div class="detailPrice"> <span>Rent:</span> <strong>₹ 38 Per Sq. Ft</strong> </div>
                                        </div>
                                        <a href="" target="_blank" class="totalProperty">
                                        <div class="detailPrice">
                                        <strong>1378 Properties for Rent <span>in Mira Road, Mumbai</span></strong>
                                        </div>
                                        </a>
                                        </div>
                                    
                                </div>
                                <div class="location-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="topheader">
                                        <div>
                                            <img data-src="" alt="Mira Road, Mumbai Map" width="81" height="49" class="img-responsive lazy" src=""> 
                                        </div>
                                        <div>
                                            <div class="cardHeading">
                                                <div class="headingLink">
                                                <strong><a href="">Mira Road</a></strong>
                                                <em></em>
                                                </div>
                                                <div class="totalProjects">
                                                <a href="" target="_blank">1591 Projects <span>in Mira Road, Mumbai</span></a>
                                                </div>
                                                </div>
                                        </div>
                                        <div class="starRatingBox">
                                            <div class="starRating">
                                            <span>3.9<i class="fa-solid fa-star"></i></span>
                                            <em class="review icon-rated"></em>
                                            </div>
                                            <a class="totalReview" href="#"> 12 Reviews</a>
                                            </div>
                                    </div>
                                        
                                            <div class="cardSec">
                                                <div class="buyPrice">
                                                <div class="iconBox rentIconBox"><img class="img-responsive lazy" data-src="" alt="Rent Icon" src="">
                                                </div>
                                                <div class="detailPrice"> <span>Rent:</span> <strong>₹ 38 Per Sq. Ft</strong> </div>
                                                </div>
                                                <a href="" target="_blank" class="totalProperty">
                                                <div class="detailPrice">
                                                <strong>1378 Properties for Rent <span>in Mira Road, Mumbai</span></strong>
                                                </div>
                                                </a>
                                                </div>
                                        
                                   
                                    <div class="cardSec">
                                        <div class="buyPrice">
                                        <div class="iconBox rentIconBox"><img class="img-responsive lazy" data-src="" alt="Rent Icon" src="">
                                        </div>
                                        <div class="detailPrice"> <span>Rent:</span> <strong>₹ 38 Per Sq. Ft</strong> </div>
                                        </div>
                                        <a href="#" target="_blank" class="totalProperty">
                                        <div class="detailPrice">
                                        <strong>1378 Properties for Rent <span>in Mira Road, Mumbai</span></strong>
                                        </div>
                                        </a>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- more  section --}}
            {{-- <div class="devAgentBx">
                <div class="forDeveloperBx">
                <div class="headingBx">
                <h2>For Real Estate Developers</h2>
                </div>
                <div class="mainTileBx scrollBarHide">
                <div class="tile bg2"> <img class="img-responsive sideImg fullImg lazy" data-src="/assets/images/broker-performance/propvr-side.svg" alt="" src="/assets/images/broker-performance/propvr-side.svg">
                <div class="titleHead"> <img class="img-responsive lazy" data-src="/assets/images/broker-performance/propvr.svg" alt="prime-connect" src="/assets/images/broker-performance/propvr.svg">
                <h3>PropVR</h3>
                </div>
                <ul>
                <li>Get all 3D visualisation under one roof</li>
                <li>Virtual Sales Tool for remote showcase</li>
                <li>Tech-enabled Experience Center Solutions</li>
                </ul>
                <a class="btn" target="_blank" href="https://propvr.ai">Know more <em class="icon-angle-right"></em></a> </div>
                </div>
                </div>
                <div class="forAgentBx">
                <div class="headingBx">
                <h2>For Agents</h2>
                </div>
                <div class="mainTileBx scrollBarHide">
                <div class="tile bg3"> <img class="img-responsive sideImg rightGap lazy" data-src="/assets/images/broker-performance/square-connect-side.png" alt="" src="/assets/images/broker-performance/square-connect-side.png">
                <div class="titleHead"> <img class="img-responsive lazy" data-src="/assets/images/broker-performance/square-connect.svg" alt="prime-connect" src="/assets/images/broker-performance/square-connect.svg">
                <h3>Square Connect</h3>
                </div>
                <ul>
                <li>Free Listing &amp; Leads</li>
                <li>Higher Visibility using In-app marketing tools</li>
                <li>Exclusive Deals &amp; Higher commission Slabs</li>
                </ul>
                <a class="btn" target="_blank" href="https://www.squareconnect.in">Know more <em class="icon-angle-right"></em></a> </div>
                </div>
                </div>
                </div> --}}
            <!-- Feature Properties For Sale-->
            <section class="feature-property-sec">
                <div class="container">
                    <div class="section-heading text-center">
                        <h2>Featured Properties for Sales</h2>
                        <div class="sec-line">
                            <span class="sec-line1"></span>
                            <span class="sec-line2"></span>
                        </div>
                        <p>Hand-Picked selection of quality places</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature-slider owl-carousel">
                                <div class="slider-col">
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="1000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-1.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <span>$41,000</span>
                                                </div>
                                                <div class="feature-rating">
                                                    <div>
                                                        <div class="featured">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="new-featured">
                                                            <span>New</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <div class="favourite selected">
                                                            <span><i class="fa-regular fa-heart"></i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="user-avatar">
                                                    <img src="assets/img/profiles/avatar-01.jpg" alt="User">
                                                </div>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <p class="rating-review"><span>5.0</span>(20 Reviews)</p>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Place perfect for nature</a>
                                                </h3>
                                                <p><span><i class="feather-map-pin"></i></span>318-S Oakley Blvd, Chicago, IL 60612, USA</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        4 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        4 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        35000 Sqft
                                                    </li>
                                                </ul>

                                                <ul class="property-category d-flex justify-content-between">
                                                    <li>
                                                        <span class="list">Listed on : </span>
                                                        <span class="date">16 Jan 2023</span>
                                                    </li>
                                                    <li>
                                                        <span class="category list">Category : </span>
                                                        <span class="category-value date">Apartment</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="1000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-2.jpg">
                                                </a>
                                                <div class="feature-rating">
                                                    <div>
                                                        <div class="featured">
                                                            <span>Featured</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <div class="favourite">
                                                            <span><i class="fa-regular fa-heart"></i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="product-amount">
                                                    <span>$78,000</span>
                                                </div>
                                                <div class="user-avatar">
                                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User">
                                                </div>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                    <p class="rating-review"><span>3.0</span>(10 Reviews)</p>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Beautiful Condo Room</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i>470 Park Ave S, New York, NY 10016</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        3 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        2 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        15000 Sqft
                                                    </li>
                                                </ul>

                                                <ul class="property-category d-flex justify-content-between">
                                                    <li>
                                                        <span class="list">Listed on : </span>
                                                        <span class="date">17 Jan 2023</span>
                                                    </li>
                                                    <li>
                                                        <span class="category list">Category : </span>
                                                        <span class="category-value date">Condos</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-col">
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="1000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-3.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <span>$63,000</span>
                                                </div>
                                                <div class="feature-rating">
                                                    <div>
                                                        <div class="featured">
                                                            <span>Featured</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <div class="favourite">
                                                            <span><i class="fa-regular fa-heart"></i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="user-avatar">
                                                    <img src="assets/img/profiles/avatar-03.jpg" alt="User">
                                                </div>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                    <p class="rating-review"><span>4.0</span>(28 Reviews)</p>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Summer house</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i>82-25 Parsons Blvd, Jamaica, NY 11432, USA</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        2 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        1 Bath
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        5000 Sqft
                                                    </li>
                                                </ul>

                                                <ul class="property-category d-flex justify-content-between">
                                                    <li>
                                                        <span class="list">Listed on : </span>
                                                        <span class="date">13 Jan 2023</span>
                                                    </li>
                                                    <li>
                                                        <span class="category list">Category : </span>
                                                        <span class="category-value date">House</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="1000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-detail-viewhtml.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-4.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <span>$51,000</span>
                                                </div>
                                                <div class="feature-rating">
                                                    <div>
                                                        <div class="featured">
                                                            <span>Featured</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <div class="favourite">
                                                            <span><i class="fa-regular fa-heart"></i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="user-avatar">
                                                    <img src="assets/img/profiles/avatar-04.jpg" alt="User">
                                                </div>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <p class="rating-review"><span>5.0</span>(15 Reviews)</p>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Minimalist and bright flat</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i>518-520 8th Ave, New York, NY 10018, USA</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        3 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        1 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        25000 Sqft
                                                    </li>
                                                </ul>

                                                <ul class="property-category d-flex justify-content-between">
                                                    <li>
                                                        <span class="list">Listed on : </span>
                                                        <span class="date">18 Jan 2023</span>
                                                    </li>
                                                    <li>
                                                        <span class="category list">Category : </span>
                                                        <span class="category-value date">Flats</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-col">
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="1000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-5.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <span>$29,000</span>
                                                </div>
                                                <div class="feature-rating">
                                                    <div>
                                                        <div class="featured">
                                                            <span>Featured</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <div class="favourite">
                                                            <span><i class="fa-regular fa-heart"></i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="user-avatar">
                                                    <img src="assets/img/profiles/avatar-05.jpg" alt="User">
                                                </div>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <p class="rating-review"><span>5.0</span>(20 Reviews)</p>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Two storey modern flat</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i>470 Park Ave S, New York, NY 10016</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        2 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        2 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        31000 Sqft
                                                    </li>
                                                </ul>

                                                <ul class="property-category d-flex justify-content-between">
                                                    <li>
                                                        <span class="list">Listed on : </span>
                                                        <span class="date">19 Jan 2023</span>
                                                    </li>
                                                    <li>
                                                        <span class="category list">Category : </span>
                                                        <span class="category-value date">Flat</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="1000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-2.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <span>$80,000</span>
                                                </div>
                                                <div class="feature-rating">
                                                    <div>
                                                        <div class="featured">
                                                            <span>Featured</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <div class="favourite">
                                                            <span><i class="fa-regular fa-heart"></i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="user-avatar">
                                                    <img src="assets/img/profiles/avatar-06.jpg" alt="User">
                                                </div>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                    <p class="rating-review"><span>4.0</span>(12 Reviews)</p>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Modern apartment</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i>122 N Morgan St, Chicago, IL 60607, USA</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        3 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        3 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        12000 Sqft
                                                    </li>
                                                </ul>

                                                <ul class="property-category d-flex justify-content-between">
                                                    <li>
                                                        <span class="list">Listed on : </span>
                                                        <span class="date">20 Jan 2023</span>
                                                    </li>
                                                    <li>
                                                        <span class="category list">Category : </span>
                                                        <span class="category-value date">Apartment</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-col">
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="1000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-4.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <span>$51,000</span>
                                                </div>
                                                <div class="feature-rating">
                                                    <div>
                                                        <div class="featured">
                                                            <span>Featured</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <div class="favourite">
                                                            <span><i class="fa-regular fa-heart"></i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="user-avatar">
                                                    <img src="assets/img/profiles/avatar-07.jpg" alt="User">
                                                </div>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <span class="rating-review">5.0 (60 Reviews)</span>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Minimalist and bright flat</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i>518-520 8th Ave, New York, NY 10018, USA</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        4 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        2 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        23000 Sqft
                                                    </li>
                                                </ul>

                                                <ul class="property-category d-flex justify-content-between">
                                                    <li>
                                                        <span class="list">Listed on : </span>
                                                        <span class="date">21 Jan 2023</span>
                                                    </li>
                                                    <li>
                                                        <span class="category list">Category : </span>
                                                        <span class="category-value date">Flats</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="1000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-3.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <span>$41000</span>
                                                </div>
                                                <div class="feature-rating">
                                                    <div>
                                                        <div class="featured">
                                                            <span>Featured</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <div class="favourite">
                                                            <span><i class="fa-regular fa-heart"></i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="user-avatar">
                                                    <img src="assets/img/profiles/avatar-05.jpg" alt="User">
                                                </div>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <span class="rating-review">5.0 (50 Reviews)</span>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Place perfect for nature</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i>318-S Oakley Blvd, Chicago, IL 60612, USA</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        2 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        4 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        15000 Sqft
                                                    </li>
                                                </ul>

                                                <ul class="property-category d-flex justify-content-between">
                                                    <li>
                                                        <span class="list">Listed on : </span>
                                                        <span class="date">16 Jan 2023</span>
                                                    </li>
                                                    <li>
                                                        <span class="category list">Category : </span>
                                                        <span class="category-value date">Apartment</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-property-btn d-flex justify-content-center"  data-aos="fade-down" data-aos-duration="1000">
                                <a href="rent-property-grid.html" class="btn-primary">View All Properties</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-imgs">
                    <img src="assets/img/bg/price-bg.png" class="bg-01" alt="icon">
                    <img src="assets/img/icons/blue-circle.svg" class="bg-02" alt="icon">
                    <img src="assets/img/icons/red-circle.svg" class="bg-03" alt="icon">
                </div>
            </section>
            <!-- /Feature Properties For Sale -->
            <div class="container">
                <div class="row">
                  <!-- Box 1 -->
                  <div class="col-md-2">
                    <div class="card">
                      <img src="path/to/image1.jpg" class="card-img-top" alt="Image 1">
                      <div class="card-body">
                        <p class="card-text">Text for Box 1</p>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Box 2 -->
                  <div class="col-md-2">
                    <div class="card">
                      <img src="path/to/image2.jpg" class="card-img-top" alt="Image 2">
                      <div class="card-body">
                        <p class="card-text">Text for Box 2</p>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Repeat the pattern for the remaining boxes -->
                  
                  <!-- Box 6 -->
                  <div class="col-md-2">
                    <div class="card">
                      <img src="path/to/image6.jpg" class="card-img-top" alt="Image 6">
                      <div class="card-body">
                        <p class="card-text">Text for Box 6</p>
                      </div>
                    </div>
                  </div>
                </div>
                


                
                <!-- Second Row -->
                <div class="row">
                  <!-- Box 7 -->
                  <div class="col-md-2">
                    <div class="card">
                      <img src="path/to/image7.jpg" class="card-img-top" alt="Image 7">
                      <div class="card-body">
                        <p class="card-text">Text for Box 7</p>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Box 8 -->
                  <div class="col-md-2">
                    <div class="card">
                      <img src="path/to/image8.jpg" class="card-img-top" alt="Image 8">
                      <div class="card-body">
                        <p class="card-text">Text for Box 8</p>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Repeat the pattern for the remaining boxes -->
                  
                  <!-- Box 12 -->
                  <div class="col-md-2">
                    <div class="card">
                      <img src="path/to/image12.jpg" class="card-img-top" alt="Image 12">
                      <div class="card-body">
                        <p class="card-text">Text for Box 12</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>   
           
            <!-- Cities List -->
            <section class="cities-list-sec">
                <div class="container">
                    <div class="section-heading">
                        <h2>Cities With Listing</h2>
                        <div class="sec-line">
                            <span class="sec-line1"></span>
                            <span class="sec-line2"></span>
                        </div>
                        <p>Destinations we love the most</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="city-card-slider owl-carousel">
                                <div class="city-first-card"  data-aos="fade-down" data-aos-duration="2000">
                                    <div class="city-list">
                                        <div class="city-img">
                                            <img src="assets/img/city/city-1.jpg" alt="City">
                                        </div>
                                        <div class="city-name">
                                            <h5>New York</h5>
                                            <p>300 Properties</p>
                                        </div>
                                        <div class="arrow-overlay">
                                            <a href="rent-property-grid.html"><i class='fa-solid fa-arrow-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="city-list">
                                        <div class="city-img">
                                            <img src="assets/img/city/city-2.jpg" alt="City">
                                        </div>
                                        <div class="city-name">
                                            <h5>Singapore</h5>
                                            <p>400 Properties</p>
                                        </div>
                                        <div class="arrow-overlay">
                                            <a href="rent-property-grid.html"><i class='fa-solid fa-arrow-right'></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="city-card-two"  data-aos="fade-down" data-aos-duration="2000">
                                    <div class="city-list">
                                        <div class="city-img">
                                            <img src="assets/img/city/city-3.jpg" alt="City">
                                        </div>
                                        <div class="city-name">
                                            <h5>Thailand</h5>
                                            <p>200 Properties</p>
                                        </div>
                                        <div class="arrow-overlay">
                                            <a href="rent-property-grid.html"><i class='fa-solid fa-arrow-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="city-list">
                                        <div class="city-img">
                                            <img src="assets/img/city/city-4.jpg" alt="City">
                                        </div>
                                        <div class="city-name">
                                            <h5>Argentina</h5>
                                            <p>740 Properties</p>
                                        </div>
                                        <div class="arrow-overlay">
                                            <a href="rent-property-grid.html"><i class='fa-solid fa-arrow-right'></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="city-card-three"  data-aos="fade-down" data-aos-duration="2000">
                                    <div class="city-list">
                                        <div class="city-img">
                                            <img src="assets/img/city/city-5.jpg" alt="City">
                                        </div>
                                        <div class="city-name">
                                            <h5>United Kingdom</h5>
                                            <p>1450 Properties</p>
                                        </div>
                                        <div class="arrow-overlay">
                                            <a href="rent-property-grid.html"><i class='fa-solid fa-arrow-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="city-list">
                                        <div class="city-img">
                                            <img src="assets/img/city/city-1.jpg" alt="City">
                                        </div>
                                        <div class="city-name">
                                            <h5>United Arab Emirates</h5>
                                            <p>100 Properties</p>
                                        </div>
                                        <div class="arrow-overlay">
                                            <a href="rent-property-grid.html"><i class='fa-solid fa-arrow-right'></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="city-first-card"  data-aos="fade-down" data-aos-duration="2000">
                                    <div class="city-list">
                                        <div class="city-img">
                                            <img src="assets/img/city/city-1.jpg" alt="City">
                                        </div>
                                        <div class="city-name">
                                            <h5>USA</h5>
                                            <p>320 Properties</p>
                                        </div>
                                        <div class="arrow-overlay">
                                            <a href="rent-property-grid.html"><i class='fa-solid fa-arrow-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="city-list">
                                        <div class="city-img">
                                            <img src="assets/img/city/city-2.jpg" alt="City">
                                        </div>
                                        <div class="city-name">
                                            <h5>Singapore</h5>
                                            <p>500 Properties</p>
                                        </div>
                                        <div class="arrow-overlay">
                                            <a href="rent-property-grid.html"><i class='fa-solid fa-arrow-right'></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Cities List -->

            <!-- Feature Property For Rent -->
            <section class="feature-property-sec for-rent">
                <div class="container">
                    <div class="section-heading text-center">
                        <h2>Featured Properties for Rent</h2>
                        <div class="sec-line">
                            <span class="sec-line1"></span>
                            <span class="sec-line2"></span>
                        </div>
                        <p>Hand-picked selection of quality places</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="feature-slider owl-carousel">
                                <div class="slider-col">
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="2000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-6.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <h5><span>$2,200 </span> / Night</h5>
                                                </div>
                                                <div class="featured">
                                                    <span>Featured</span>
                                                </div>
                                                <div class="new-featured">
                                                    <span>New</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <div class="favourite selected">
                                                        <span><i class="fa-regular fa-heart"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <span class="rating-review">Excellent</span>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Beautiful Condo Room</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i> 318-S Oakley Blvd, Chicago, IL 60612, USA</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        4 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        4 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        35000 Sqft
                                                    </li>
                                                </ul>
                                                <ul class="property-category d-flex justify-content-between align-items-center">
                                                    <li class="user-info">
                                                        <a href="rent-details.html"><img src="assets/img/profiles/avatar-01.jpg" class="img-fluid avatar" alt="User"></a>
                                                        <div class="user-name">
                                                            <h6><a href="rent-details.html">Marc Silva</a></h6>
                                                            <p>Newyork</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="rent-details.html" class="btn-primary">Book Now</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="2000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-7.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <h5><span>$1,400 </span> / Night</h5>
                                                </div>
                                                <div class="featured">
                                                    <span>Featured</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <div class="favourite">
                                                        <span><i class="fa-regular fa-heart"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <span class="rating-review">Excellent</span>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Grand Mahaka</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i> 470 Park Ave S, New York, NY 10016</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        4 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        4 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        35000 Sqft
                                                    </li>
                                                </ul>
                                                <ul class="property-category d-flex justify-content-between align-items-center">
                                                    <li class="user-info">
                                                        <a href="javascript:void(0);"><img src="assets/img/profiles/avatar-02.jpg" class="img-fluid avatar" alt="User"></a>
                                                        <div class="user-name">
                                                            <h6><a href="rent-details.html">Karen Maria</a></h6>
                                                            <p>South Dokata</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="rent-details.html" class="btn-primary">Book Now</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-col">
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="2000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-8.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <h5><span>$1,500 </span> / Night</h5>
                                                </div>
                                                <div class="featured">
                                                    <span>Featured</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <div class="favourite selected">
                                                        <span><i class="fa-regular fa-heart"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <span class="rating-review">Excellent</span>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Royal Apartment</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i> 82-25 Parsons Blvd, Jamaica, NY 11432, USA</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        2 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        3 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        12000 Sqft
                                                    </li>
                                                </ul>
                                                <ul class="property-category d-flex justify-content-between align-items-center">
                                                    <li class="user-info">
                                                        <a href="rent-details.html"><img src="assets/img/profiles/avatar-03.jpg" class="img-fluid avatar" alt="User"></a>
                                                        <div class="user-name">
                                                            <h6><a href="rent-details.html">Scott Gwin</a></h6>
                                                            <p>Minipoliies</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="rent-details.html" class="btn-primary">Book Now</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="2000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-9.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <h5><span>$3,500 </span> / Night</h5>
                                                </div>
                                                <div class="featured">
                                                    <span>Featured</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <div class="favourite">
                                                        <span><i class="fa-regular fa-heart"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <span class="rating-review">Excellent</span>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Lunaria Residence</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i> 518-520 8th Ave, New York, NY 10018, USA</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        3 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        2 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        23000 Sqft
                                                    </li>
                                                </ul>
                                                <ul class="property-category d-flex justify-content-between align-items-center">
                                                    <li class="user-info">
                                                        <a href="rent-details.html"><img src="assets/img/profiles/avatar-04.jpg" class="img-fluid avatar" alt="User"></a>
                                                        <div class="user-name">
                                                            <h6><a href="rent-details.html">Burdette</a></h6>
                                                            <p>Cambridge</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="rent-details.html" class="btn-primary">Book Now</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-col">
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="2000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-10.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <h5><span>$4,500 </span> / Night</h5>
                                                </div>
                                                <div class="featured">
                                                    <span>Featured</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <div class="favourite">
                                                        <span><i class="fa-regular fa-heart"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <span class="rating-review">Excellent</span>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Grand Villa house</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i> 470 Park Ave S, New York, NY 10016</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        4 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        3 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        5000 Sqft
                                                    </li>
                                                </ul>
                                                <ul class="property-category d-flex justify-content-between align-items-center">
                                                    <li class="user-info">
                                                        <a href="rent-details.html"><img src="assets/img/profiles/avatar-05.jpg" class="img-fluid avatar" alt="User"></a>
                                                        <div class="user-name">
                                                            <h6><a href="rent-details.html">Kell Robinson</a></h6>
                                                            <p>USA</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="rent-details.html" class="btn-primary">Book Now</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="2000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-11.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <h5><span>$2,400 </span> / Night</h5>
                                                </div>
                                                <div class="featured">
                                                    <span>Featured</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <div class="favourite">
                                                        <span><i class="fa-regular fa-heart"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <span class="rating-review">Excellent</span>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Stephen Alexander Homes</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i> 122 N Morgan St, Chicago, IL 60607, USA</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        2 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        3 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        25000 Sqft
                                                    </li>
                                                </ul>
                                                <ul class="property-category d-flex justify-content-between align-items-center">
                                                    <li class="user-info">
                                                        <a href="rent-details.html"><img src="assets/img/profiles/avatar-07.jpg" class="img-fluid avatar" alt="User"></a>
                                                        <div class="user-name">
                                                            <h6><a href="rent-details.html">Pittman</a></h6>
                                                            <p>Cambridge</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="rent-details.html" class="btn-primary">Book Now</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-col">
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="2000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-7.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <h5><span>$1,400 </span> / Night</h5>
                                                </div>
                                                <div class="featured">
                                                    <span>Featured</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <div class="favourite">
                                                        <span><i class="fa-regular fa-heart"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <span class="rating-review">Excellent</span>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Minimalist and bright flat</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i> 518-520 8th Ave, New York, NY 10018, USA</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        2 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        2 Baths
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        18000 Sqft
                                                    </li>
                                                </ul>
                                                <ul class="property-category d-flex justify-content-between align-items-center">
                                                    <li class="user-info">
                                                        <a href="rent-details.html"><img src="assets/img/profiles/avatar-10.jpg" class="img-fluid avatar" alt="User"></a>
                                                        <div class="user-name">
                                                            <h6><a href="rent-details.html">John Doe</a></h6>
                                                            <p>Newyork</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="rent-details.html" class="btn-primary">Book Now</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-custom"  data-aos="fade-down" data-aos-duration="2000">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="rent-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Property Image" src="assets/img/product/product-9.jpg">
                                                </a>
                                                <div class="product-amount">
                                                    <h5><span>$3,500 </span> / Night</h5>
                                                </div>
                                                <div class="featured">
                                                    <span>Featured</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <div class="favourite">
                                                        <span><i class="fa-regular fa-heart"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <span class="rating-review">Excellent</span>
                                                </div>
                                                <h3 class="title">
                                                    <a href="rent-details.html">Place perfect for nature</a>
                                                </h3>
                                                <p><i class="feather-map-pin"></i> 318-S Oakley Blvd, Chicago, IL 60612, USA</p>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                        3 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        1 Bath
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        12000 Sqft
                                                    </li>
                                                </ul>
                                                <ul class="property-category d-flex justify-content-between align-items-center">
                                                    <li class="user-info">
                                                        <a href="rent-details.html"><img src="assets/img/profiles/avatar-12.jpg" class="img-fluid avatar" alt="User"></a>
                                                        <div class="user-name">
                                                            <h6><a href="rent-details.html">Richard</a></h6>
                                                            <p>Newyork</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="rent-details.html" class="btn-primary">Book Now</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-property-btn d-flex justify-content-center"  data-aos="fade-down" data-aos-duration="2000">
                                <a href="rent-property-grid.html" class="btn-primary">View All Properties</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-imgs">
                    <img src="assets/img/bg/price-bg.png" class="bg-04" alt="Image">
                </div>
            </section>
            <!-- /Feature Property For Rent -->

            <!-- Couter -->
            <section class="counter-sec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                            <div class="counter-box flex-fill"  data-aos="fade-down" data-aos-duration="2000">
                                <div class="counter-icon">
                                    <img src="assets/img/icons/counter-icon-1.svg" alt="icon">
                                </div>
                                <div class="counter-value">
                                    <h3 class="dash-count"><span class="counter-up">50</span>K</h3>
                                    <h5>Listings Added </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                            <div class="counter-box flex-fill"  data-aos="fade-down" data-aos-duration="2000">
                                <div class="counter-icon">
                                    <img src="assets/img/icons/counter-icon-2.svg" alt="icon">
                                </div>
                                <div class="counter-value">
                                    <h3 class="dash-count"><span class="counter-up">3000</span>+</h3>
                                    <h5>Agents Listed </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                            <div class="counter-box flex-fill"  data-aos="fade-down" data-aos-duration="2000">
                                <div class="counter-icon">
                                    <img src="assets/img/icons/counter-icon-3.svg" alt="icon">
                                </div>
                                <div class="counter-value">
                                    <h3 class="dash-count"><span class="counter-up">2000</span>+</h3>
                                    <h5>Sales Completed </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                            <div class="counter-box flex-fill"  data-aos="fade-down" data-aos-duration="2000">
                                <div class="counter-icon">
                                    <img src="assets/img/icons/counter-icon-4.svg" alt="icon">
                                </div>
                                <div class="counter-value">
                                    <h3 class="dash-count"><span class="counter-up">5000</span>+</h3>
                                    <h5>Users</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Couter -->

            <!-- Main Property -->
            <section class="main-property-sec">
                <div class="container">
                    <div class="main-property-details">
                        <div class="row justify-content-center">

                            <!-- Buy Property -->
                            <div class="col-lg-4 col-md-6"  data-aos="fade-down" data-aos-duration="2000">
                                <div class="single-property-card">
                                    <div class="img-card">
                                        <a href="buy-property-grid.html"><img src="assets/img/city/property-img-1.jpg" alt="Property Image"></a>
                                    </div>
                                    <div class="buy-property">
                                        <h4><a href="buy-property-grid.html">Buy a Property</a></h4>
                                        <a href="buy-property-grid.html" class="arrow buy-arrow"><i class='fa-solid fa-arrow-right'></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Buy Property -->

                            <!-- Sell Property -->
                            <div class="col-lg-4 col-md-6"  data-aos="fade-down" data-aos-duration="2000">
                                <div class="single-property-card">
                                    <div class="img-card">
                                        <a href="rent-property-grid.html"><img src="assets/img/city/property-img-2.jpg" alt="Property Image"></a>
                                    </div>
                                    <div class="buy-property">
                                        <h4><a href="rent-property-gridhtml.html">Sell a Property</a></h4>
                                        <a href="rent-property-grid.html" class="arrow sell-arrow"><i class='fa-solid fa-arrow-right'></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Sell Property -->

                            <!-- Rent Property -->
                            <div class="col-lg-4 col-md-6"  data-aos="fade-down" data-aos-duration="2000">
                                <div class="single-property-card">
                                    <div class="img-card">
                                        <a href="rent-property-grid.html"><img src="assets/img/city/property-img-3.jpg" alt="Property Image"></a>
                                    </div>
                                    <div class="buy-property">
                                        <h4><a href="rent-property-grid.html">Rent a Property</a></h4>
                                        <a href="rent-property-grid.html" class="arrow rent-arrow"><i class='fa-solid fa-arrow-right'></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Rent Property -->

                        </div>


                        <div class="bg-imgs">
                            <img src="assets/img/bg/prop-bg.png" class="bg-10" alt="icon">
                        </div>
                    </div>

                    <!-- Partners -->
                    <div class="partners-sec">
                        <div class="section-heading text-center">
                            <h2>Hundreds of Partners Around  the World</h2>
                            <div class="sec-line">
                                <span class="sec-line1"></span>
                                <span class="sec-line2"></span>
                            </div>
                            <p> Every day, we build trust through  communication, transparency, and results.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="partners-slider owl-carousel">
                                    <div class="partner-icon">
                                        <img src="assets/img/icons/partner-icon-1.svg" alt="Partners">
                                    </div>
                                    <div class="partner-icon">
                                        <img src="assets/img/icons/partner-icon-2.svg" alt="Partners">
                                    </div>
                                    <div class="partner-icon">
                                        <img src="assets/img/icons/partner-icon-3.svg" alt="Partners">
                                    </div>
                                    <div class="partner-icon">
                                        <img src="assets/img/icons/partner-icon-4.svg" alt="Partners">
                                    </div>
                                    <div class="partner-icon">
                                        <img src="assets/img/icons/partner-icon-5.svg" alt="Partners">
                                    </div>
                                    <div class="partner-icon">
                                        <img src="assets/img/icons/partner-icon-6.svg" alt="Partners">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Partners -->

                </div>
                <div class="bg-imgs">
                    <img src="assets/img/icons/blue-circle.svg" class="bg-08" alt="icon">
                </div>
            </section>
            <!-- /Main Property -->

            <!-- Testimonial -->
            <section class="testimonial-sec">
                <div class="container">
                    <div class="section-heading">
                        <h2>Testimonials</h2>
                        <div class="sec-line">
                            <span class="sec-line1"></span>
                            <span class="sec-line2"></span>
                        </div>
                        <p>What our happy client says</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial-slider owl-carousel">
                                <div class="testimonial-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="user-icon">
                                        <a href="javascript:void(0);"><img src="assets/img/profiles/avatar-01.jpg" alt="User"></a>
                                    </div>
                                    <p>Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...</p>
                                    <h4><a href="javascript:void(0);">Horace Cole</a></h4>
                                    <div class="rating">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                </div>
                                <div class="testimonial-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="user-icon">
                                        <a href="javascript:void(0);"><img src="assets/img/profiles/avatar-02.jpg" alt="User"></a>
                                    </div>
                                    <p>Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...</p>
                                    <h4><a href="javascript:void(0);">Karen Maria</a></h4>
                                    <div class="rating">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                </div>
                                <div class="testimonial-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="user-icon">
                                        <a href="javascript:void(0);"><img src="assets/img/profiles/avatar-03.jpg" alt="User"></a>
                                    </div>
                                    <p>Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...</p>
                                    <h4><a href="javascript:void(0);">Jack Nitzsche</a></h4>
                                    <div class="rating">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                </div>
                                <div class="testimonial-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="user-icon">
                                        <a href="javascript:void(0);"><img src="assets/img/profiles/avatar-04.jpg" alt="User"></a>
                                    </div>
                                    <p>Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...</p>
                                    <h4><a href="javascript:void(0);">Sofia Retz</a></h4>
                                    <div class="rating">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                </div>
                                <div class="testimonial-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="user-icon">
                                        <a href="javascript:void(0);"><img src="assets/img/profiles/avatar-05.jpg" alt="User"></a>
                                    </div>
                                    <p>Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...</p>
                                    <h4><a href="javascript:void(0);">John Doe</a></h4>
                                    <div class="rating">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Testimonial -->

            <!-- Pricing -->
            <section class="price-section">
                <div class="container">
                    <div class="pricing-tab">
                        <div class="section-heading">
                            <h2>Pricing & Subscriptions</h2>
                            <div class="sec-line">
                                <span class="sec-line1"></span>
                                <span class="sec-line2"></span>
                            </div>
                            <p>Checkout our package, choose your package wisely</p>
                        </div>
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#monthly-price" type="button" role="tab" aria-controls="monthly-price" aria-selected="true">Monthly</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#yearly-price" type="button" role="tab" aria-controls="yearly-price" aria-selected="false">Yearly</button>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">

                        <!-- Monthly Price -->
                        <div class="tab-pane fade active show" id="monthly-price" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row justify-content-center">

                                <!-- Price Item -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-card aos" data-aos="flip-right" data-aos-easing="ease-out-cubic">
                                        <div class="price-title">
                                            <h3>Standard</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                        </div>
                                        <div class="price-features">
                                            <h5>Key Features</h5>
                                            <ul>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>10 Listing Per Login</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>100+ Users</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Enquiry On Listing</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>24 Hrs Support</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Custom Review</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Impact Reporting</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Onboarding & Account</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>API Access</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Transaction Tracking</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Branding</li>
                                            </ul>
                                        </div>
                                        <div class="price-btn">
                                            <a href="login.html" class="btn-primary">Get Quote</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Price Item -->

                                <!-- Price Item -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-card" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                        <div class="price-sticker">
                                            <img src="assets/img/icons/pricing-icon.svg" alt="price-sticker">
                                        </div>
                                        <div class="price-title">
                                            <h3>Professional</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                        </div>
                                        <div class="price-features professional">
                                            <h5>Key Features</h5>
                                            <ul>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>20 Listing Per Login</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>100+ Users</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Enquiry On Listing</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>24 Hrs Support</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Custom Review</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Impact Reporting</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Onboarding & Account</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>API Access</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Transaction Tracking</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Branding</li>
                                            </ul>
                                        </div>
                                        <div class="price-btn">
                                            <a href="login.html" class="btn-primary">Get Quote</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Price Item -->

                                <!-- Price Item -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-card" data-aos="flip-right"  data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                        <div class="price-title">
                                            <h3>Enterprise</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                        </div>
                                        <div class="price-features enterprise">
                                            <h5>Key Features</h5>
                                            <ul>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>30 Listing Per Login</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>100+ Users</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Enquiry On Listing</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>24 Hrs Support</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Custom Review</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Impact Reporting</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Onboarding & Account</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>API Access</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Transaction Tracking</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Branding</li>
                                            </ul>
                                        </div>
                                        <div class="price-btn">
                                            <a href="login.html" class="btn-primary">Get Quote</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Price Item -->

                            </div>
                        </div>
                        <!-- /Monthly Price -->

                        <!-- Yearly Price -->
                        <div class="tab-pane fade" id="yearly-price" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row justify-content-center">

                                <!-- Price Item -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-card">
                                        <div class="price-title">
                                            <h3>Standard</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                        </div>
                                        <div class="price-features">
                                            <h5>Key Features</h5>
                                            <ul>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>50 Listing per login</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>150+ Users</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Enquiry on listing</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>24 hrs Support</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Custom Review</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Impact Reporting</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Onboarding & Account</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>API Access</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Transaction tracking</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Branding</li>
                                            </ul>
                                        </div>
                                        <div class="price-btn">
                                            <a href="login.html" class="btn-primary">Get Quote</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Price Item -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-card">
                                        <div class="price-title">
                                            <h3>Professional</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                        </div>
                                        <div class="price-features professional">
                                            <h5>Key Features</h5>
                                            <ul>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>80 Listing per login</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>200+ Users</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Enquiry on listing</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>24 hrs Support</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Custom Review</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Impact Reporting</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Onboarding & Account</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>API Access</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Transaction tracking</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Branding</li>
                                            </ul>
                                        </div>
                                        <div class="price-btn">
                                            <a href="login.html" class="btn-primary">Get Quote</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Price Item -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-card">
                                        <div class="price-title">
                                            <h3>Enterprise</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                        </div>
                                        <div class="price-features enterprise">
                                            <h5>Key Features</h5>
                                            <ul>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>70 Listing per login</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>300+ Users</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Enquiry on listing</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>24 hrs Support</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Custom Review</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Impact Reporting</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Onboarding & Account</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>API Access</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Transaction tracking</li>
                                                <li><span><i class="fa-regular fa-square-check"></i></span>Branding</li>
                                            </ul>
                                        </div>
                                        <div class="price-btn">
                                            <a href="login.html" class="btn-primary">Get Quote</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Price Item -->

                            </div>
                        </div>
                        <!-- /Yearly Price -->

                    </div>
                </div>
                <div class="bg-imgs">
                    <img src="assets/img/bg/price-bg.png" class="bg-05" alt="icon">
                </div>
            </section>
            <!-- /Pricing -->

            <!-- Faq -->
            <section class="faq-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="faq-img">
                                <img src="assets/img/faq-img.jpg" alt="icon">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="section-heading" data-aos="fade-down" data-aos-duration="2000">
                                <h2>Frequently Asked Questions</h2>
                                <div class="sec-line">
                                    <span class="sec-line1"></span>
                                    <span class="sec-line2"></span>
                                </div>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
                            </div>
                            <div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqone" aria-expanded="false">1. What are the costs to buy a house?</a>
                                </h4>
                                <div id="faqone" class="card-collapse collapse">
                                    <div class="faq-info">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">2. What are the steps to sell a house?</a>
                                </h4>
                                <div id="faqtwo" class="card-collapse collapse">
                                    <div class="faq-info">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
                                <h4 class="faq-title">
                                    <a class="" data-bs-toggle="collapse" href="#faqthree" aria-expanded="false">3. Do you have loan consultants?</a>
                                </h4>
                                <div id="faqthree" class="card-collapse collapse show">
                                    <div class="faq-info">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">4. When will the project be completed?</a>
                                </h4>
                                <div id="faqfour" class="card-collapse collapse">
                                    <div class="faq-info">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqfive" aria-expanded="false">5.What are the steps to rent a house?</a>
                                </h4>
                                <div id="faqfive" class="card-collapse collapse">
                                    <div class="faq-info">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Faq -->

            <!-- Agent Register -->
            <section class="agent-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="section-heading" data-aos="fade-down" data-aos-duration="2000">
                                <h2>Become a Real Estate Agent</h2>
                                <div class="sec-line">
                                    <span class="sec-line1"></span>
                                    <span class="sec-line2"></span>
                                </div>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="register-btn" data-aos="fade-down" data-aos-duration="2000">
                                <a href="register.html" class="btn-primary">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-imgs">
                    <img src="assets/img/icons/blue-circle.svg" class="bg-06" alt="icon">
                    <img src="assets/img/icons/red-circle.svg" class="bg-07" alt="icon">
                </div>
            </section>
            <!-- /Agent Register -->

            <!-- Latest Blog -->
            <section class="latest-blog-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="section-heading text-center">
                                <h2>Latest Blog</h2>
                                <div class="sec-line">
                                    <span class="sec-line1"></span>
                                    <span class="sec-line2"></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmodtempor incididunt</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-slider owl-carousel">

                                <!-- Blog -->
                                <div class="blog-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/blog-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-property">
                                            <span>Property</span>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="blog-details.html">How to achieve financial independence</a></h3>
                                            <p>There are many variations of passages of lorem ipsum available.</p>
                                        </div>
                                        <ul class="property-category d-flex justify-content-between align-items-center">
                                            <li class="user-info">
                                                <a href="javascript:void(0);"><img src="assets/img/profiles/avatar-01.jpg" class="img-fluid avatar" alt="User"></a>
                                                <div class="user-name">
                                                    <h6><a href="javascript:void(0);">Doe John</a></h6>
                                                    <p>Posted on : 15 Jan 2023</p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="blog-details.html"><span><i class='fa-solid fa-arrow-right'></i></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Blog -->

                                <!-- Blog -->
                                <div class="blog-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/blog-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-property">
                                            <span>Advantages</span>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="blog-details.html">The most popular cities for homebuyers</a></h3>
                                            <p>There are many variations of passages of lorem ipsum available.</p>
                                        </div>
                                        <ul class="property-category d-flex justify-content-between align-items-center">
                                            <li class="user-info">
                                                <a href="javascript:void(0);"><img src="assets/img/profiles/avatar-03.jpg" class="img-fluid avatar" alt="User"></a>
                                                <div class="user-name">
                                                    <h6><a href="javascript:void(0);">John</a></h6>
                                                    <p>Posted on : 15 Jan 2023</p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="blog-details.html"><span><i class='fa-solid fa-arrow-right'></i></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Blog -->

                                <!-- Blog -->
                                <div class="blog-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/blog-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-property">
                                            <span>Finanace</span>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="blog-details.html">Learn how real estate really shapes our future</a></h3>
                                            <p>There are many variations of passages of lorem ipsum available.</p>
                                        </div>
                                        <ul class="property-category d-flex justify-content-between align-items-center">
                                            <li class="user-info">
                                                <a href="javascript:void(0);"><img src="assets/img/profiles/avatar-05.jpg" class="img-fluid avatar" alt="User"></a>
                                                <div class="user-name">
                                                    <h6><a href="javascript:void(0);">Eric Krok</a></h6>
                                                    <p>Posted on : 15 Jan 2023</p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="blog-details.html"><span><i class='fa-solid fa-arrow-right'></i></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Blog -->

                                <!-- Blog -->
                                <div class="blog-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/blog-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-property">
                                            <span>Property</span>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="blog-details.html">The most popular cities for homebuyers</a></h3>
                                            <p>There are many variations of passages of lorem ipsum available.</p>
                                        </div>
                                        <ul class="property-category d-flex justify-content-between align-items-center">
                                            <li class="user-info">
                                                <a href="javascript:void(0);"><img src="assets/img/profiles/avatar-07.jpg" class="img-fluid avatar" alt="User"></a>
                                                <div class="user-name">
                                                    <h6><a href="javascript:void(0);">Francis</a></h6>
                                                    <p>Posted on : 12 May 2023</p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="blog-details.html"><span><i class='fa-solid fa-arrow-right'></i></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Blog -->

                                <!-- Blog -->
                                <div class="blog-card" data-aos="fade-down" data-aos-duration="2000">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/blog-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-property">
                                            <span>Property</span>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="blog-details.html">How to achieve financial independence</a></h3>
                                            <p>There are many variations of passages of lorem ipsum available.</p>
                                        </div>
                                        <ul class="property-category d-flex justify-content-between align-items-center">
                                            <li class="user-info">
                                                <a href="javascript:void(0);"><img src="assets/img/profiles/avatar-03.jpg" class="img-fluid avatar" alt="User"></a>
                                                <div class="user-name">
                                                    <h6><a href="javascript:void(0);">Rafael</a></h6>
                                                    <p>Posted on : 13 Jan 2023</p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="blog-details.html"><span><i class='fa-solid fa-arrow-right'></i></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Blog -->

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Latest Blog -->

            <!-- News Letter -->
            <section class="news-letter-sec">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="news-heading" data-aos="fade-down" data-aos-duration="2000">
                                <h2>Sign Up for Our Newsletter</h2>
                                <p>Lorem ipsum dolor sit amet, consecte tur cing elit. Suspe ndisse suscipit sagittis</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="email-form" data-aos="fade-down" data-aos-duration="2000">
                                <form action="#">
                                    <input type="email" class="form-control" placeholder="Enter Email Address">
                                    <button class="btn-primary">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- News Letter -->
            

        @endsection
