@extends('components.public')
@section('addition_css')
#banner {
    position: relative;
    text-align: center;
}

#img-banner {
    object-fit: cover;
    height: 400px;
    width: 100%;
}

#banner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgb(129, 168, 59, 0.5); /* Green color with 50% opacity */
    z-index: 1; /* Ensure overlay is on top of the image */
}

#center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2; /* Ensure text appears above the overlay */
}

#banner-text {
    color: #191919;
    font-size: 2.5em;
}
.timeline{
    position: relative;
    max-width: 1200px;
    margin: 100px auto;
}
.cont {
    padding: 10px 50px;
    position: relative;
    width: 50%;
    opacity: 0; /* Start hidden */
    transform: translateY(-30px); /* Move up */
    transition: opacity 0.6s ease, transform 0.6s ease; /* Transition for opacity and transform */
}

.cont.animate {
    opacity: 1; /* Show the element */
    transform: translateY(0px); /* Move to original position */
}

@keyframes movedown{
    0%{
        opacity: 1;
        transform: translateY(-30px);
    }
    100%{
        opacity: 1;
        transform: translateY(0px);
    }
}
.cont:nth-child(1){
    animation-delay: 0s;
}
.cont:nth-child(2){
    animation-delay: s;
}
.cont:nth-child(3){
    animation-delay: 2s;
}
.cont:nth-child(4){
    animation-delay: 3s;
}
.cont:nth-child(5){
    animation-delay: 4s;
}
.text-box{
    padding: 20px 30px;
    background: #fbfcf8;
    position: relative;
    border-radius: 6px;
    font-size: 15px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}
.left-cont{
    left:0;
}
.right-cont{
    left:50%;
}
.cont img{
    position: absolute;
    width: 40px;
    border-radius: 50%;
    right: -20px;
    top: 32px; 
    z-index:10;
    background-color: #81a83b;
}
.right-cont img{
    left: -20px;
}
.timeline::after{
    content: '';
    position: absolute;
    width: 7px;
    background: #81a83b;
    top: 0;
    left: 50%;
    margin-left: -3px;
    z-index:-1;
    height: 100%;
    animation: moveline 6s linear forwards;
}
@keyframes moveline{
    0%{
        height: 0;
    }
    100%{
        height: 100%;
    }
}
.text-box h2{
    font-weight: 600;
}
.text-box small{
    display:inline-block;
    margin-bottom:15px;
}
.left-cont-arrow{
    height: 0;
    width: 0;
    position: absolute;
    top: 28px;
    z-index: 1;
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
    border-left: 15px solid #fbfcf8;
    right:-15px;
}
.right-cont-arrow{
    height: 0;
    width: 0;
    position: absolute;
    top: 28px;
    z-index: 1;
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
    border-right: 15px solid #fbfcf8;
    left: -15px;
}


@media screen and (max-width: 600px){
    .timeline{
        margin: 50px auto;
    }
    .timeline::after{
        left:31px
    }
    .cont{
        width: 100%;
        padding-left: 80px;
        padding-right: 25px;
    }
    .text-box{
        font-size: 13px;
    }
    .text-box small{
       margin-bottom: 10px;
    }
    .right-cont{
        left:0;
    }
    .left-cont img, .right-cont img{
        left: 10px;
    }
    .left-cont-arrow, .right-cont-arrow{
        border-right: 15px solid #fbfcf8;
        border-left: 0;
        left: -15px;
    }
}

@endsection
@section('content')
<div id="banner">
    <img id="img-banner"src="https://ik.imagekit.io/ilv4crzq1/images/banner-get-start.svg?updatedAt=1730218681578">
    <div id="center">
        <h1 style="color: #735e59" id="banner-text">Get Started</h1>
    </div>
</div>
<div class="timeline">
    <div class="cont left-cont">
        <img src="https://ik.imagekit.io/ilv4crzq1/images/leaf.gif?updatedAt=1730218670105" alt="" class="icon">
        <div class="text-box">
            <h2 style="color: #735e59">Step 1</h2>
            <small  style="color: #337b3c">Join a community</small>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis eaque ullam beatae at pariatur dignissimos cumque labore, ducimus, eum aperiam similique enim laborum accusantium corrupti dolor rem. Alias, obcaecati repellendus!</p>
            <span class="left-cont-arrow"></span>
        </div>
    </div>
    <div class="cont right-cont">
        <img src="https://ik.imagekit.io/ilv4crzq1/images/leaf.gif?updatedAt=1730218670105" alt="" class="icon">
        <div class="text-box">
            <h2 style="color: #735e59">Step 2</h2>
            <small style="color: #337b3c">Do what you can</small>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis eaque ullam beatae at pariatur dignissimos cumque labore, ducimus, eum aperiam similique enim laborum accusantium corrupti dolor rem. Alias, obcaecati repellendus!</p>
            <span class="right-cont-arrow"></span>
        </div>
    </div>
    <div class="cont left-cont">
        <img src="https://ik.imagekit.io/ilv4crzq1/images/leaf.gif?updatedAt=1730218670105" alt="" class="icon">
        <div class="text-box">
            <h2 style="color: #735e59">Step 3</h2>
            <small style="color: #337b3c">Plant some plants</small>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis eaque ullam beatae at pariatur dignissimos cumque labore, ducimus, eum aperiam similique enim laborum accusantium corrupti dolor rem. Alias, obcaecati repellendus!</p>
            <span class="left-cont-arrow"></span>
        </div>
    </div>
    <div class="cont right-cont">
        <img src="https://ik.imagekit.io/ilv4crzq1/images/leaf.gif?updatedAt=1730218670105" alt="" class="icon">
        <div class="text-box">
            <h2 style="color: #735e59">Step 4</h2>
            <small  style="color: #337b3c">Plant trees</small>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis eaque ullam beatae at pariatur dignissimos cumque labore, ducimus, eum aperiam similique enim laborum accusantium corrupti dolor rem. Alias, obcaecati repellendus!</p>
            <span class="right-cont-arrow"></span>
        </div>
    </div>
    <div class="cont left-cont">
        <img src="https://ik.imagekit.io/ilv4crzq1/images/leaf.gif?updatedAt=1730218670105" alt="" class="icon">
        <div class="text-box">
            <h2 style="color: #735e59">Step 5</h2>
            <small  style="color: #337b3c">Join Us!!</small>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis eaque ullam beatae at pariatur dignissimos cumque labore, ducimus, eum aperiam similique enim laborum accusantium corrupti dolor rem. Alias, obcaecati repellendus!</p>
            <span class="left-cont-arrow"></span>
        </div>
    </div>
</div>
@endsection
@section('addition_js')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const options = {
        root: null, // Use the viewport
        rootMargin: '0px',
        threshold: 0.1 // Trigger when 10% of the element is visible
    };

    const callback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate'); // Add class to trigger animation for items
                observer.unobserve(entry.target); // Stop observing after adding the class
            }
        });
    };

    const observer = new IntersectionObserver(callback, options);
    const timelineItems = document.querySelectorAll('.cont');
    const timeline = document.querySelector('.timeline'); // Select the timeline

    // Observe each timeline item
    timelineItems.forEach(item => {
        observer.observe(item);
    });

    let scrollTimeout; // Timeout variable to detect scrolling stop

    window.addEventListener('scroll', () => {
        // Clear the timeout if it's already set
        clearTimeout(scrollTimeout);

        // Set a new timeout to detect when scrolling has stopped
        scrollTimeout = setTimeout(() => {
            // Check visibility of timeline items and add animation if needed
            let itemsVisible = false; // Flag to check if any items are visible

            timelineItems.forEach(item => {
                const rect = item.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom >= 0) {
                    item.classList.add('animate'); // Add animation class if visible
                    itemsVisible = true; // At least one item is visible
                } else {
                    item.classList.remove('animate'); // Remove animation class if not visible
                }
            });

            // Trigger line animation if any items are visible
            if (itemsVisible) {
                timeline.classList.add('animate-line'); // Add class to trigger line animation
            } else {
                timeline.classList.remove('animate-line'); // Remove class if no items are visible
            }
        }, 100); // Adjust this delay as necessary
    });
});
</script>
@endsection