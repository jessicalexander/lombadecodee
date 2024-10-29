<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://ik.imagekit.io/ilv4crzq1/images/logo.svg?updatedAt=1730218640235">
    <title>EcoFriend Nature</title>
    {{-- fonts --}}
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet">
    {{-- css --}}
    <link rel="stylesheet" type="text/css" href="https://ik.imagekit.io/ilv4crzq1/css/style.css?updatedAt=1730221416280">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    {{-- tambahan css --}}
    
</head>
<style>
  body{
    background-color: #f9fde6 !important;
    font-family: 'roboto condensed' !important;
    color: #191919;
    margin:0;
    overflow-x: hidden  ;
}
h1,h2,h3,h4,h5,h6{
    font-family: 'roboto'!important;
    font-weight: bold !important;
}
.lgreen{
    background-color: #81a83b !important;
}
/* scroll */
::-webkit-scrollbar {
  width: 10px;
}
::-webkit-scrollbar-track {
  background:#f9fde6;
  box-shadow: inset 0 0 5px #f9fde6; 
}
::-webkit-scrollbar-thumb {
  background: #81a83b;
  border-radius: 10px;
  opacity: 0.5;  
}
::-webkit-scrollbar-thumb:hover {
  background: #81a83b; 
}
/* loader */
.loader {
  z-index: 200;
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #f9fde6;
}

.loader--hidden{
  opacity: 0;
  visibility: hidden;
}
/* From Uiverse.io by NlghtM4re */ 
.trees {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.tree {
  position: relative;
  width: 50px;
  height: 50px;
  transform-style: preserve-3d;
  transform: rotateX(-20deg) rotateY(30deg);
  animation: treeAnimate 5s linear infinite;
}

@keyframes treeAnimate {
  0% {
    transform: rotateX(-20deg) rotateY(360deg);
  }

  100% {
    transform: rotateX(-20deg) rotateY(0deg);
  }
}

.tree div {
  position: absolute;
  top: -50px;
  left: 0;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  transform: translateY(calc(25px * var(--x))) translateZ(0px);
}

.tree div.branch span {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, #69c069, #77dd77);
  clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
  border-bottom: 5px solid #00000019;
  transform-origin: bottom;
  transform: rotateY(calc(90deg * var(--i))) rotateX(30deg) translateZ(28.5px);
}

.tree div.stem span {
  position: absolute;
  top: 110px;
 /* updated top value */
  left: calc(50% - 7.5px);
  width: 15px;
  height: 50%;
  background: linear-gradient(90deg, #bb4622, #df7214);
  border-bottom: 5px solid #00000019;
  transform-origin: bottom;
  transform: rotateY(calc(90deg * var(--i))) translateZ(7.5px);
}

.shadow {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.4);
  filter: blur(20px);
  transform-style: preserve-3d;
  transform: rotateX(90deg) translateZ(-65px);
}

/* navbar */
.ini-navigation{
    background-color: #fbfcf8!important;
    border-radius: 20px !important;
    width: 50%;
    left: 50%;        
    transform: translate(-50%);
    margin-top: 2vh;
    box-shadow:  0 4px 6px -2px #81a83b;
    z-index: 100 !important;
    position: fixed !important;
}
.logo-space{
    margin-right: -76% !important;;
}
/* contact us */
.main {
  display: flex;
  flex-direction: column;
  gap: 0.5em;
}

.up {
  display: flex;
  flex-direction: row;
  gap: 0.5em;
}

.down {
  display: flex;
  flex-direction: row;
  gap: 0.5em;
}

.card1 {
  width: 90px;
  height: 90px;
  outline: none;
  border: none;
  background: white;
  border-radius: 90px 5px 5px 5px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  transition: .2s ease-in-out;
}

.instagram {
  margin-top: 1.5em;
  margin-left: 1.2em;
  fill: #cc39a4;
}

.card2 {
  width: 90px;
  height: 90px;
  outline: none;
  border: none;
  background: white;
  border-radius: 5px 90px 5px 5px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  transition: .2s ease-in-out;
}

.facebook {
  margin-top: 1.5em;
  margin-left: -.9em;
  fill: #03A9F4;
}

.card3 {
  width: 90px;
  height: 90px;
  outline: none;
  border: none;
  background: white;
  border-radius: 5px 5px 5px 90px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  transition: .2s ease-in-out;
}

.whatsapp {
  margin-top: -.6em;
  margin-left: 1.2em;
  fill: #00ff00;
}

.card4 {
  width: 90px;
  height: 90px;
  outline: none;
  border: none;
  background: white;
  border-radius: 5px 5px 90px 5px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  transition: .2s ease-in-out;
}

.gmail {
  margin-top: -.9em;
  margin-left: -1.2em;
  fill: #f14336;
}

.card1:hover {
  cursor: pointer;
  scale: 1.1;
  background-color: #cc39a4;
}

.card1:hover .instagram {
  fill: white;
}

.card2:hover {
  cursor: pointer;
  scale: 1.1;
  background-color: #1877f2;
}

.card2:hover .facebook {
  fill: white;
}

.card3:hover {
  cursor: pointer;
  scale: 1.1;
  background-color: #00ff00;
}

.card3:hover .whatsapp {
  fill: white;
}

.card4:hover {
  cursor: pointer;
  scale: 1.1;
  background-color: #FF0004;
}

.card4:hover .gmail {
  fill: white;
}
.pop-up {
  display: none;
  overflow: hidden;
  position: fixed; /* Change to fixed for full-screen centering */
  top: 50%; /* Center vertically */
  left: 50%; /* Center horizontally */
  transform: translate(-50%, -50%); /* Adjust to center from element’s middle */
  text-align: center;
  border-radius: 0.5rem;
  max-width: 290px;
  padding: 30px; /* Optional padding for better aesthetics */
  z-index:101
}

.dismiss {
  position: absolute;
  right: 10px;
  top: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0.5rem 1rem;
  background-color: #fff;
  color: black;
  border: 2px solid #D1D5DB;
  font-size: 1rem;
  font-weight: 300;
  width: 30px;
  height: 30px;
  border-radius: 7px;
  transition: .3s ease;
}

.dismiss:hover {
  background-color: #ee0d0d;
  border: 2px solid #ee0d0d;
  color: #fff;
}
.join.lgreen {
  background-color: #81a83b; /* Initial color */
  color: #fbfcf8; /* Text color */
  border: none; /* Remove border if necessary */
}
.join.lgreen:hover{
  box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  color: #fbfcf8;
  background-color: #337b3c!important;
}
.header {
  padding: 1.25rem 1rem 1rem 1rem;
}

.image {
  display: flex;
  margin-left: auto;
  margin-right: auto;
  background-color: #e2feee;
  flex-shrink: 0;
  justify-content: center;
  align-items: center;
  width: 3rem;
  height: 3rem;
  border-radius: 9999px;
  animation: animate .6s linear alternate-reverse infinite;
  transition: .6s ease;
}

.image svg {
  color: #0afa2a;
  width: 2rem;
  height: 2rem;
}

.content {
  margin-top: 0.75rem;
  text-align: center;
}


@keyframes animate {
  from {
    transform: scale(1);
  }

  to {
    transform: scale(1.09);
  }
}

/* content */
#page-container {
    position: relative;
    min-height: 100vh;
  }
  
  #content-wrap {
    padding-bottom: 10vh;    /* Footer height */
  }
/* footer */
  #footer {
    position: absolute;
    /* bottom: 0; */
    width: 100%;
  }
  .footer-container{
    color:#fbfcf8;
    text-align: center;
    background-color: #735e59;
    height: 10vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }
/* tablet */
@media (min-width:576px) and (max-width:768px) {
    .ini-navigation{
        width: 95%;
    }
}
/* mobile */
@media (max-width:576px) {
    .ini-navigation{
        width: 95%;
    }
    .logo-space{
      margin-right: -100% !important;;
  }
}

/* navbar toggler custom */
.navbar-toggler{
    width:25px !important;
    height:25px!important;
    position: relative!important;
    transition: .5s ease-in-out!important;
}
.navbar-toggler, .navbar-toggler:focus, .navbar-toggler:active, .navbar-toggler-icon:focus {
    outline: none !important;
    box-shadow: none !important;
    border: 0 !important;
}
.navbar-toggler span{
  margin:0 !important;
  padding:0 !important;
}
.toggler-icon{
  display: block !important;
  position: absolute !important;
  height: 3px !important;
  width: 100% !important;
  background: #337b3c !important;
  border-radius: 1px;
  opacity: 1 !important;
  left:0;
  transform:rotate(0deg);
  transition: .25s ease-in-out;
}
.middle-bar{
  margin-top: 0px!important;
}
/* when clicked */
.navbar-toggler .top-bar{
  margin-top: 0px!important;
  transform:rotate(135deg)!important;
}
.navbar-toggler .middle-bar{
  opacity: 0!important;
  filter: alpha(opacity=0)!important;
}
.navbar-toggler .bottom-bar{
  margin-top: 0px!important;
  transform:rotate(-135deg)!important;
}
/* collapsed navbar */
.navbar-toggler.collapsed .top-bar{
  margin-top: -20px!important;
  transform:rotate(0deg)!important;
}
.navbar-toggler.collapsed .middle-bar{
  opacity: 1!important;
  filter: alpha(opacity=100)!important;
}
.navbar-toggler.collapsed .bottom-bar{
  margin-top: 20px!important;
  transform:rotate(0deg)!important;
}
@yield('addition_css')
</style>
<body>
    <div class="loader">
        <div class="trees">
            <div class="tree">
              <div class="branch" style="--x:0">
                <span style="--i:0;"></span>
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
              </div>
              <div class="branch" style="--x:1">
                <span style="--i:0;"></span>
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
              </div>
              <div class="branch" style="--x:2">
                <span style="--i:0;"></span>
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
              </div>
              <div class="branch" style="--x:3">
                <span style="--i:0;"></span>
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
              </div>
              <div class="stem">
                <span style="--i:0;"></span>
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
              </div>
              <span class="shadow"></span>
            </div>
          </div>
    </div>
    {{-- navbar --}}
    <div class="ini-navigation">
            <nav class="navbar navbar-expand-lg">
            <div class="container-fluid ">
            <a class="navbar-brand logo-space" href="{{route('home')}}"><img src="https://ik.imagekit.io/ilv4crzq1/images/logo.svg?updatedAt=1730218640235" alt="logo" style="width:10%"></a>
            <button class="collapsed navbar-toggler d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse flex-container" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item" style="align-self: center">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item" style="align-self: center">
                    <a class="nav-link" href="{{route('about-us')}}">About Us</a>
                </li>
                <li class="nav-item" style="align-self: center">
                    <a class="nav-link" id="openPopup" href="#">Contact Us</a>
                </li>
                <li class="nav-item" style="align-self: center">
                    <a class="nav-link" href="{{route('join-us')}}"><button type="button" class="btn join lgreen">Join Us</button></a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </div>

    {{-- contact us --}}
    <div class="pop-up" id="popupOverlay"> 
        <button id="closePopup"class="dismiss" type="button">×</button> 
        <div class="main">
            <div class="up">
              <button class="card1">
                <a href="https://www.instagram.com/" target="_blank">
                <svg class="instagram" fill-rule="nonzero" height="30px" width="30px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero"><g transform="scale(8,8)"><path d="M11.46875,5c-3.55078,0 -6.46875,2.91406 -6.46875,6.46875v9.0625c0,3.55078 2.91406,6.46875 6.46875,6.46875h9.0625c3.55078,0 6.46875,-2.91406 6.46875,-6.46875v-9.0625c0,-3.55078 -2.91406,-6.46875 -6.46875,-6.46875zM11.46875,7h9.0625c2.47266,0 4.46875,1.99609 4.46875,4.46875v9.0625c0,2.47266 -1.99609,4.46875 -4.46875,4.46875h-9.0625c-2.47266,0 -4.46875,-1.99609 -4.46875,-4.46875v-9.0625c0,-2.47266 1.99609,-4.46875 4.46875,-4.46875zM21.90625,9.1875c-0.50391,0 -0.90625,0.40234 -0.90625,0.90625c0,0.50391 0.40234,0.90625 0.90625,0.90625c0.50391,0 0.90625,-0.40234 0.90625,-0.90625c0,-0.50391 -0.40234,-0.90625 -0.90625,-0.90625zM16,10c-3.30078,0 -6,2.69922 -6,6c0,3.30078 2.69922,6 6,6c3.30078,0 6,-2.69922 6,-6c0,-3.30078 -2.69922,-6 -6,-6zM16,12c2.22266,0 4,1.77734 4,4c0,2.22266 -1.77734,4 -4,4c-2.22266,0 -4,-1.77734 -4,-4c0,-2.22266 1.77734,-4 4,-4z"></path></g></g></svg>
                </a>
            </button>
              <button class="card2">
                <a href="https://www.facebook.com/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24" class="facebook" width="24">
                  <path d="M9.19795 21.5H13.198V13.4901H16.8021L17.198 9.50977H13.198V7.5C13.198 6.94772 13.6457 6.5 14.198 6.5H17.198V2.5H14.198C11.4365 2.5 9.19795 4.73858 9.19795 7.5V9.50977H7.19795L6.80206 13.4901H9.19795V21.5Z"></path>
                </svg>
                </a>
              </button>
            </div>
            <div class="down">
              <button class="card3">
                <a href="https://www.whatsapp.com/" target="_blank">
                <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="whatsapp">
                  <path d="M19.001 4.908A9.817 9.817 0 0 0 11.992 2C6.534 2 2.085 6.448 2.08 11.908c0 1.748.458 3.45 1.321 4.956L2 22l5.255-1.377a9.916 9.916 0 0 0 4.737 1.206h.005c5.46 0 9.908-4.448 9.913-9.913A9.872 9.872 0 0 0 19 4.908h.001ZM11.992 20.15A8.216 8.216 0 0 1 7.797 19l-.3-.18-3.117.818.833-3.041-.196-.314a8.2 8.2 0 0 1-1.258-4.381c0-4.533 3.696-8.23 8.239-8.23a8.2 8.2 0 0 1 5.825 2.413 8.196 8.196 0 0 1 2.41 5.825c-.006 4.55-3.702 8.24-8.24 8.24Zm4.52-6.167c-.247-.124-1.463-.723-1.692-.808-.228-.08-.394-.123-.556.124-.166.246-.641.808-.784.969-.143.166-.29.185-.537.062-.247-.125-1.045-.385-1.99-1.23-.738-.657-1.232-1.47-1.38-1.716-.142-.247-.013-.38.11-.504.11-.11.247-.29.37-.432.126-.143.167-.248.248-.413.082-.167.043-.31-.018-.433-.063-.124-.557-1.345-.765-1.838-.2-.486-.404-.419-.557-.425-.142-.009-.309-.009-.475-.009a.911.911 0 0 0-.661.31c-.228.247-.864.845-.864 2.067 0 1.22.888 2.395 1.013 2.56.122.167 1.742 2.666 4.229 3.74.587.257 1.05.408 1.41.523.595.19 1.13.162 1.558.1.475-.072 1.464-.6 1.673-1.178.205-.58.205-1.075.142-1.18-.061-.104-.227-.165-.475-.29Z"></path>
                </svg>
                </a>
              </button>
              <button class="card4">
                <a href="mailto:example@example.com" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24" class="gmail" width="24">
                  <path d="M6 12C6 15.3137 8.68629 18 12 18C14.6124 18 16.8349 16.3304 17.6586 14H12V10H21.8047V14H21.8C20.8734 18.5645 16.8379 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C15.445 2 18.4831 3.742 20.2815 6.39318L17.0039 8.68815C15.9296 7.06812 14.0895 6 12 6C8.68629 6 6 8.68629 6 12Z"></path> 
                </svg>
                </a>
            </button>
            </div>
          </div>
        
    </div>


    {{-- content start --}}
    <div class="page-container">
        <div class="content-wrap">
            @yield('content')
        </div>
    </div>


    {{-- footer --}}
    <footer id="footer">
        <div class="footer-ani">
            <div class="d-flex flex-row justify-content-evenly align-self-end">
                <img src="https://ik.imagekit.io/ilv4crzq1/images/tree.gif?updatedAt=1730218659016" alt="tree" style="width: 20%">
                <img src="https://ik.imagekit.io/ilv4crzq1/images/tree.gif?updatedAt=1730218659016" alt="tree" style="width: 20%">
                <img src="https://ik.imagekit.io/ilv4crzq1/images/tree.gif?updatedAt=1730218659016" alt="tree" style="width: 20%">
                <img src="https://ik.imagekit.io/ilv4crzq1/images/tree.gif?updatedAt=1730218659016" alt="tree" style="width: 20%">
            </div>
        </div>
        <div class="footer-container">
                <p>&copy; 2024 EcoFriend Nature</p>
        </div>
    </footer>

    </div>
    {{-- js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      // Get elements
const openPopup = document.getElementById("openPopup");
const popupOverlay = document.getElementById("popupOverlay");
const closePopup = document.getElementById("closePopup");

// Show popup on link click
openPopup.addEventListener("click", (e) => {
  e.preventDefault(); // Prevent default link behavior
  popupOverlay.style.display = "flex"; // Show popup overlay
});

// Hide popup on close button click
closePopup.addEventListener("click", () => {
  popupOverlay.style.display = "none"; // Hide popup overlay
});

// Optional: Hide popup when clicking outside the content box
popupOverlay.addEventListener("click", (e) => {
  if (e.target === popupOverlay) {
    popupOverlay.style.display = "none";
  }
});
window.addEventListener("load", () => {
    const loader =document.querySelector('.loader')
    loader.classList.add("loader--hidden") ;

    loader.addEventListener('transitioned', () => {
        document.body.removeChild(loader);
    })
});
</script>
    {{-- tambah js --}}
    @yield('addition_js')
</body>
</html>