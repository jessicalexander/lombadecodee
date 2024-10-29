@extends('components.public')

@section('addition_css')
#banner {
    position: relative;
    text-align: center;
}

#img-banner {
    object-fit: cover;
    height: 100vh;
    width: 100vw;
}

#banner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgb(115, 94, 89, 0.5); /* Green color with 50% opacity */
    z-index: 1; /* Ensure overlay is on top of the image */
}

#center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2; /* Ensure text appears above the overlay */
}
.ini-navigation, footer{
    display: none;
}


/* form */
.cont {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
  }
  
  .form_area {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #f9fde6;
    height: auto;
    width: auto;
    border: 2px solid #264143;
    border-radius: 20px;
    box-shadow: 3px 4px 0px 1px #81a83b;
  }
  
  .title {
    color: #735e59;
    font-weight: 900;
    font-size: 1.5em;
    margin-top: 20px;
    margin-bottom:0px;
  }
  
  .sub_title {
    font-weight: 600;
    margin: 5px 0;
  }
  
  .form_group {
    display: flex;
    flex-direction: column;
    align-items: baseline;
    margin: 10px;
  }
  
  .form_style {
    outline: none;
    border: 2px solid #264143;
    box-shadow: 3px 4px 0px 1px #81a83b;
    width: 290px;
    padding: 12px 10px;
    border-radius: 4px;
    font-size: 15px;
  }
  
  .form_style:focus, .btn:focus {
    transform: translateY(4px);
    box-shadow: 1px 2px 0px 0px #81a83b;
  }
  
  .btn {
    padding: 15px;
    margin: 25px 0px;
    width: 290px;
    font-size: 15px;
    background: #337b3c;
    border-radius: 10px;
    font-weight: 800;
    box-shadow: 3px 3px 0px 0px #81a83b;
    color: #fbfcf8;
  }
  
  .btn:hover {
    opacity: .9;
  }
  
  .link {
    font-weight: 800;
    color: #264143;
    padding: 5px;
  }

/* back button */
.back{
  position: absolute;
  top: 20px;
  left: 20px;
  cursor: pointer;
}
@endsection

@section('content')
<div id="banner">
    <img id="img-banner"src="https://ik.imagekit.io/ilv4crzq1/images/greenary%20(1).svg?updatedAt=1730219506709">
    <div id="center">
    <div class="cont">
    <div class="form_area">
        <p class="title">Join Us</p>
        <p class="sub-title">We are always looking for new members</p>
        <form action="{{ route('form.store') }}" method="POST" id="joinForm">
            @csrf
            <div class="form_group">
                <label class="sub_title" for="name">Full Name</label>
                <input placeholder="Enter your full name" id="name" name="name" class="form_style" type="text" required>
            </div>
            <div class="form_group">
                <label class="sub_title" for="email">Email</label>
                <input placeholder="Enter your email" id="email" name="email" class="form_style" type="email" required>
            </div>
            <div class="form_group">
                <label class="sub_title" for="phone">Phone No.</label>
                <input placeholder="Enter your Phone No." id="phone" name="phone" class="form_style" type="tel" required>
            </div>
            <div class="form_group">
                <label class="sub_title" for="address">Address</label>
                <textarea placeholder="Your Adress..." id="address" name="address" class="form_style" type="text" required></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Join</button>
        </form>
    </div>
    </div>
    </div>
    <div class="back">
        <a onclick="window.history.back()"><img src="https://ik.imagekit.io/ilv4crzq1/images/back.svg?updatedAt=1730218640064" alt="" width='20px'></a>
    </div>
</div>

@endsection

@section('addition_js')
<script src="{{ asset('pages/js/join.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector('form');
        
        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission from refreshing the page

            const formData = new FormData(form);

            fetch("{{ route('form.store') }}", {
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
                        timer: 5000
                    });
                    form.reset(); // Optionally reset the form after submission
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>

@endsection