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
.content-section {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 50px;

}
.goals{
    background-color: #fbfcf8;
    width: 80%;
    max-width: 900px;
    margin: auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}

.image {
    padding-left: 10%;
    width: 50%;
    display: flex;
    justify-content: center;
}

.image img {
    width: 100%;
    max-width: 300px;
    border-radius: 8px;
}


.title-left, .title-right {
    font-size: 40px;
    font-weight: bold;
    color: #333;
    position: absolute;
}

.title-left {
    top: 0;
    left: 15%;
    margin: 20px;
    font-size: 1PX;
}



.chart-container {
    display: flex;
    justify-content: center;

    margin-top: 50px;
    margin-bottom: 50px;
}

.chart-image {
    width: 100%;
    max-width: 600px;
    border: 1px solid #ddd;
    border-radius: 10px;
}

.diagram img{
    max-width: 80vw;
}
.text-mission{
    text-align: justify;
    position: relative;
    z-index: 1;
}

.chart-image {
    width: 80%; /* Atur sesuai kebutuhan, contoh ini membuat SVG sebesar 80% dari lebar kontainer */
    max-width: 1000px; /* Tentukan batas maksimal agar tidak terlalu besar */
    height: auto;
}
@media (max-width:576px) {
    .content-section{
        flex-direction: column;
        padding:0px;
    }
    .image{
        margin: 20px auto;
    }
    .text-mission{
        text-align: center;
    }
}
@endsection

@section('content')
<div id="banner">
    <img id="img-banner"src="https://ik.imagekit.io/ilv4crzq1/images/banner-about-us%20(1).svg?updatedAt=1730219921173">
    <div id="center">
        <h1 id="banner-text">About Us</h1>
    </div>
</div>
        <div class="team my-5 mx-5">
            <h2 style="color: #735e59">Our Team</h2>
            <div class="diagram mx-auto text-center">
                <img src="https://ik.imagekit.io/ilv4crzq1/images/diagram.svg?updatedAt=1730218681338" alt="">
            </div>
        </div>

        <div class="goals">
            <div class="goal text-center mx-auto">
                <h2 class="mb-5" style="color: #735e59">Our Mission</h2>
            </div>
            <div class="content-section">
                <div class="text-mission text-justify">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class="image">
                    <img src="https://ik.imagekit.io/ilv4crzq1/images/gambar_pohonTangan.jpg?updatedAt=1730219258332" alt="Hands holding puzzle pieces">
                </div>
            </div>
        </div>



@endsection