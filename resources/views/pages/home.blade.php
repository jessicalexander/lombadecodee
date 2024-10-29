@extends('components.public')

@section('addition_css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/css/home.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
@endsection

@section('content')
<div class="banner">
    <div class="banner-content d-flex justify-content-evenly">
        <div class="left-side d-flex flex-column">
            <div class="tags">
                <p class="tag lgreen-f">#saveourhome</p>
            </div>
            <div class="brown-f">
                <h1 class="title font-weight-italic">Help Us, <br>Help The
                    <span class="bounce">
                        <span class="dgreen-f">E</span>
                        <span class="lgreen-f">A</span>
                        <span class="dgreen-f">R</span>
                        <span class="lgreen-f">T</span>
                        <span class="dgreen-f">H</span>
                    </span> 
                </h1>
            </div>
            <div class="brief mt-3">
                <p class="brief-text text-justify">At EcoFriend Nature, we’re on a mission to combat climate change and restore ecosystems by planting trees that support cleaner air, healthier soil, and thriving wildlife. Join us in creating a greener, more sustainable future—one tree at a time.</p>
                <a class="get-start" href="{{route('get-started')}}"><button class="button-53" role="button">Get Started</button></a>
            </div>
        </div>
        <div class="right-side">
            <img class="graph-1" src="{{asset('assets/images/graph-1.gif')}}">
        </div>
    </div>
</div>

{{-- card --}}
<div class="header-card brown-f ms-5 mt-5">
    <h2>Why we need your help?</h2>
</div>
<div class="card-info">
    <div class="all-cards d-flex flex-row justify-content-around mt-5">
        <div class="deck text-center mx-4">
            <div class="content">
                <h3 class="stats dgreen-f">48</h3>
                <p class="sub lgreen-f">lbs</p>
                <p class="desc">of carbon could be absorbed by a single tree planted each year</p>
            </div>
        </div>
        <div class="deck text-center mx-4">
            <div class="content">
                <h3 class="stats dgreen-f">18</h3>
                <p class="sub lgreen-f">people</p>
                <p class="desc">can have an easire breather for every tree planted every year</p>
            </div>
        </div>
        <div class="deck text-center mx-4">
            <div class="content">
                <h3 class="stats dgreen-f">80%</h3>
                <p class="sub lgreen-f">of wildlife</p>
                <p class="desc">depends on forests as their home. It’s our home and their safety</p>
            </div>
        </div>
        <div class="deck text-center mx-4">
            <div class="content">
                <h3 class="stats dgreen-f">20,000</h3>
                <p class="sub lgreen-f">gallons of water</p>
                <p class="desc">are saved yearly by trees, preventing runoff and keeping our water clean</p>
            </div>
        </div>
    </div>
</div>

{{-- card khusus mobile --}}
<div class="crousel-mobile mx-auto d-flex justify-content-center">
    <div class="all-cards-mobile d-flex flex-column mb-3">
        <div class="deck text-center my-3">
            <div class="content">
                <h3 class="stats dgreen-f">48</h3>
                <p class="sub lgreen-f">lbs</p>
                <p class="desc">of carbon could be absorbed by a single tree planted each year</p>
            </div>
        </div>
        <div class="deck text-center my-3">
            <div class="content">
                <h3 class="stats dgreen-f">18</h3>
                <p class="sub lgreen-f">people</p>
                <p class="desc">can have an easier breather for every tree planted every year</p>
            </div>
        </div>
        <div class="deck text-center my-3">
            <div class="content">
                <h3 class="stats dgreen-f">80%</h3>
                <p class="sub lgreen-f">of wildlife</p>
                <p class="desc">depends on forests as their home. It’s our home and their safety</p>
            </div>
        </div>
        <div class="deck text-center my-3">
            <div class="content">
                <h3 class="stats dgreen-f">20,000</h3>
                <p class="sub lgreen-f">gallons of water</p>
                <p class="desc">are saved yearly by trees, preventing runoff and keeping our water clean</p>
            </div>
        </div>
    </div>
</div>


{{-- newsletter --}}
<div class="newsletter mt-5 d-flex justify-content-between align-items-center">
    <div class="ani-left">
        <img src="https://ik.imagekit.io/ilv4crzq1/images/left.gif?updatedAt=1730218670533" alt="left-trunk" width="100%">
    </div>
    <div class="news-sign text-center flex-column">
        <div class="header-card brown-f">
            <h2>Be The first to know what's going on</h2>
            <h2>Subscribe to our newsletter!</h2>
            <p class="subtitle dgreen-f">Stay up to date with our latest news.</p>
        </div>
        <div class="email-news">
            <form action="{{route('newsletter.store')}}" method="POST">
            @csrf
                <input name="email" type="email" placeholder="Enter your email..." class="email-news-input">
                <button type="submit" class="button-89"><img src="https://ik.imagekit.io/ilv4crzq1/images/send.svg?updatedAt=1730218644144" alt="send" width="20px"></button>
            </form>
        </div>
    </div>
    <div class="ani-right">
        <img src="https://ik.imagekit.io/ilv4crzq1/images/right.gif?updatedAt=1730218670046" alt="right-trunk" width="100%">
    </div>
</div>

{{-- news --}}

<div class="news">
    <div class="header-card brown-f ms-5 mt-5">
        <h2 class="news-title">Our<br>Latest News</h2>
        <hr>
    </div>
    <div class="ini-news mt-5">
        <section class="articles">
            <article>
              <div class="article-wrapper">
                <figure>
                  <img src="https://ik.imagekit.io/ilv4crzq1/images/trees-3294681_1920.webp?updatedAt=1730218646693" alt="" />
                </figure>
                <div class="article-body">
                  <h2>Billion Trees Initiative in the U.S.</h2>
                  <p>
                    The U.S. Department of Agriculture has announced a significant initiative to plant one billion trees over the next decade. This effort aims to address a reforestation backlog of 4.1 million acres, primarily damaged by wildfires and climate change.
                  </p>
                  <a href="https://www.smithsonianmag.com/smart-news/us-will-plant-1-billion-trees-to-combat-climate-change-180980485/" class="read-more">
                    Read more <span class="sr-only">about this is some title</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </div>
              </div>
            </article>
            <article>
          
              <div class="article-wrapper">
                <figure>
                  <img src="https://ik.imagekit.io/ilv4crzq1/images/small-green-seedling-replant-plant-growth-sustainable-resources-environment-earth-day_569725-15658.jpg?updatedAt=1730218644555" alt="" />
                </figure>
                <div class="article-body">
                  <h2>Tree Planting Grants for Disadvantaged Areas</h2>
                  <p>
                    Several Bay Area cities have received substantial federal grants aimed at increasing tree canopy coverage in disadvantaged neighborhoods. The initiative recognizes the correlation between tree cover and socioeconomic status, as wealthier areas typically have more trees. 
                  </p>
                  <a href="https://www.governing.com/community/bay-area-cities-to-get-millions-for-trees-in-disadvantaged-areas" class="read-more">
                    Read more <span class="sr-only">about this is some title</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </div>
              </div>
            </article>
            <article>
          
              <div class="article-wrapper">
                <figure>
                  <img src="https://ik.imagekit.io/ilv4crzq1/images/0206H1-1010-1800x1012.webp?updatedAt=1730218641240" alt="" />
                </figure>
                <div class="article-body">
                  <h2>Importance of Trees in Urban Environments</h2>
                  <p>
                    Research highlights the vital role of trees in urban settings, particularly in combatting heat waves and improving air quality. Trees provide shade, which can reduce energy consumption for cooling, and they play a significant role in sequestering carbon dioxide and removing pollutants.
                  </p>
                  <a href="https://www.governing.com/community/bay-area-cities-to-get-millions-for-trees-in-disadvantaged-areas" class="read-more">
                    Read more <span class="sr-only">about this is some title</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </div>
              </div>
            </article>
          </section>
    </div>
</div>
@endsection
@section('addition_js')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('pages/js/home.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector('form');
        
        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission from refreshing the page

            const formData = new FormData(form);

            fetch("{{ route('newsletter.store') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: data.success,
                        showConfirmButton: false,
                        timer: 2000
                    });
                    form.reset(); // Optionally reset the form after submission
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>

@endsection