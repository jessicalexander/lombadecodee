@extends('components.public')

@section('addition_css')
a:link, a:visited, a:hover, a:active {
    text-decoration: none !important;
    color:#191919 !important;
    font-weight: normal!important;
}
.lgreen-f{
    color: #81a83b!important;
}
.dgreen-f{
    color: #337b3c !important;
}
.brown-f{
    color: #735e59 !important;
}
.banner {
    background-image: url('https://ik.imagekit.io/ilv4crzq1/images/banner.svg?updatedAt=1730218641074');
    background-size: cover;
    background-position: center;
    width: 100vw;
    max-height: 100vh;
}
.banner-content{
    padding-top: 20vh;
    
}
.left-side{
    display: flex;
    justify-content: center;
    margin-left: 10vw;
    margin-right: auto;
    width: 40vw;
    
}
.right-side{
    margin-right: 5vw;
}
.tag{
    font-size: 1vw!important;
    border: 1px solid #81a83b!important;
    max-width: fit-content !important;
    border-radius: 20px !important;
    padding: 1vh !important;
}
.title{
    font-size: 3.5vw!important;
    font-family: "Finger Paint"!important;
}

.brief-text{
    font-size: 1.5vw!important;
    padding-right: 1vw;
}
.bounce span {
    position: relative;
    display: inline-block;
    animation: bounce 1s infinite alternate;
}

/* Keyframes for the bounce effect */
@keyframes bounce {
    0% {
        top: 0;
    }
    100% {
        top: -1vh; /* Bounce up */
    }
}

/* Add progressive animation delays */
.bounce span:nth-child(1) {
    animation-delay: 0s; /* Start immediately */
}
.bounce span:nth-child(2) {
    animation-delay: 0.2s;
}
.bounce span:nth-child(3) {
    animation-delay: 0.4s;
}
.bounce span:nth-child(4) {
    animation-delay: 0.6s;
}
.bounce span:nth-child(5) {
    animation-delay: 0.8s;
}
.graph-1{
    height: auto;
    max-width: 40vw; 
}

/* get start button */
.button-53 {
    background-color: #81a83b;
    border: 0 solid #fbfcf8;
    box-sizing: border-box;
    color: #191919;
    display: flex;
    font-weight: 700;
    justify-content: center;
    line-height: 1.75rem;
    padding: .75rem 1.65rem;
    position: relative;
    text-align: center;
    text-decoration: none #191919 solid;
    text-decoration-thickness: auto;
    width: 100%;
    max-width: 200px;
    position: relative;
    cursor: pointer;
    transform: rotate(-2deg);
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
  }
  
  .button-53:focus {
    outline: 0;
  }
  
  .button-53:after {
    content: '';
    position: absolute;
    border: 1px solid #191919;
    bottom: 4px;
    left: 4px;
    width: calc(100% - 1px);
    height: calc(100% - 1px);
  }
  
  .button-53:hover:after {
    bottom: 2px;
    left: 2px;
  }
  
  @media (min-width: 768px) {
    .button-53 {
      padding: .75rem 3rem;
      font-size: 1.25rem;
    }
  }

/* cards why */
.all-cards-mobile{
    display: none!important;
}
.deck{
    background-color: #fbfcf8!important;
    border-radius: 20px !important;
    top:100vh;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}
.content{
    padding:10px;
}
.sub{
    margin-top: -2vh;;
}
/* newsletter */
.newsletter {
    width: 100vw;
    display: flex;
    justify-content: space-between;
}

.ani-left, .ani-right {
    flex: 0 0 20%; /* Take 20% of the width each for the images */
    max-width: 20%;
}
.news-sign {
    flex: 1; /* Remaining space for the center content */
    text-align: center;
}
.email-news-input{
    width: 40vw;
    max-width: 100%;
    padding: 10px;
    border: 2px solid #81a83b;
    border-radius: 5px;
}
.email-news-input::placeholder{
    color: #81a83b;
}
/* newsletter button */
.button-89 {
    --b: 3px;   /* border thickness */
    --s: .25em; /* size of the corner */
    --color: #81a83b;
    margin-left: 10px;

    padding: calc(.25em + var(--s)) calc(.5em + var(--s)); /* Adjusted padding for smaller button */
    color: var(--color);
    --_p: var(--s);
    background:
      conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--color) 0)
      var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
    transition: .3s linear, color 0s, background-color 0s;
    outline: var(--b) solid #0000;
    outline-offset: .6em;
    font-size: 14px; /* Reduced font size */
    border: 0;

    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
}

.button-89:hover,
.button-89:focus-visible {
    --_p: 0px;
    outline-color: var(--color);
    outline-offset: .05em;
}

.button-89:active {
    background: var(--color);
    color: #fff;
}

/* news */
.news-title{
    line-height: 0.75;
}
hr{
    border: 2px solid #735e59;
    width: 7vw;
    margin: -1px;
}
/* card */
article {
    --img-scale: 1.001;
    --title-color: #735e59;
    --link-icon-translate: -20px;
    --link-icon-opacity: 0;
    position: relative;
    border-radius: 16px;
    box-shadow: none;
    background: #fbfcf8;
    transform-origin: center;
    transition: all 0.4s ease-in-out;
    overflow: hidden;
  }
  
  article a::after {
    position: absolute;
    inset-block: 0;
    inset-inline: 0;
    cursor: pointer;
    content: "";
  }
  
  /* basic article elements styling */
  article h2 {
    margin: 0 0 18px 0;
    font-family: "Bebas Neue", cursive;
    font-size: 1.9rem;
    letter-spacing: 0.06em;
    color: var(--title-color);
    transition: color 0.3s ease-out;
  }
  
  figure {
    margin: 0;
    padding: 0;
    aspect-ratio: 16 / 9;
    overflow: hidden;
  }
  
  article img {
    max-width: 100%;
    transform-origin: center;
    transform: scale(var(--img-scale));
    transition: transform 0.4s ease-in-out;
  }
  
  .article-body {
    padding: 24px;
  }
  
  article a {
    display: inline-flex;
    align-items: center;
    text-decoration: none;
    color: #337b3c!important;
  }
  
  article a:focus {
    outline: 1px dotted #337b3c!important;
  }
  
  article a .icon {
    min-width: 24px;
    width: 24px;
    height: 24px;
    margin-left: 5px;
    transform: translateX(var(--link-icon-translate));
    opacity: var(--link-icon-opacity);
    transition: all 0.3s;
  }
  
  /* using the has() relational pseudo selector to update our custom properties */
  article:has(:hover, :focus) {
    --img-scale: 1.1;
    --title-color: #337b3c;
    --link-icon-translate: 0;
    --link-icon-opacity: 1;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
  }
  
  
  .articles {
    display: grid;
    max-width: 1200px;
    margin-inline: auto;
    padding-inline: 24px;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 24px;
  }
  
  @media screen and (max-width: 960px) {
    article {
      container: card/inline-size;
    }
    .article-body p {
      display: none;
    }
  }
  
  @container card (min-width: 380px) {
    .article-wrapper {
      display: grid;
      grid-template-columns: 100px 1fr;
      gap: 16px;
    }
    .article-body {
      padding-left: 0;
    }
    figure {
      width: 100%;
      height: 100%;
      overflow: hidden;
    }
    figure img {
      height: 100%;
      aspect-ratio: 1;
      object-fit: cover;
    }
  }
  
  .sr-only:not(:focus):not(:active) {
    clip: rect(0 0 0 0); 
    clip-path: inset(50%);
    height: 1px;
    overflow: hidden;
    position: absolute;
    white-space: nowrap; 
    width: 1px;
  }
/* tablet */
@media (min-width:576px) and (max-width:768px) {
    .brief-text{
        font-size: 2vw!important;
    
    }
    .title{
        font-size: 4vw!important;
        font-family: "Finger Paint"!important;
    }
    .deck{
        margin-left: 5px!important;
        margin-right: 5px!important;
    }
    .all-cards-mobile{
        display: none!important;
    }
}
/* mobile */
@media (max-width:576px) {
    .brief-text{
        font-size: 3vw!important;
    
    }
    .title{
        font-size: 5vw!important;
        font-family: "Finger Paint"!important;
    }
    .tags{
        text-align: center!important;
        margin-left: auto!important;
        margin-right:auto!important; ;
    }
    .tag{
        margin-top: 5vh!important;
        font-size: 1.5vh!important;
    }
    .banner-content{
        flex-direction: column-reverse;
        text-align: center;
        justify-content: center;

    }
    .left-side{
        margin-right: auto;
        margin-left: auto;
        width: 80vw;
    }
    .brief-text{
        padding-right: auto!important;
    }
    .card-info{
        margin-top: 15vh!important;
    }
    .card-info{
        display: none!important;
    }
    .header-card{
        margin-left: 2vw!important;
    }
    .all-cards-mobile{
        display: block!important;
    }
    
    .carousel-mobile{
        
        display: flex;
        align-items: center;
    }
    .header-card{
        margin-top: 100px !important;;
    }
    .deck{
        max-width: 50vw!important;
    }
    .button-53{
        margin-right: auto;
        margin-left: auto;
    }
}
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