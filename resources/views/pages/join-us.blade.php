@extends('components.public')

@section('addition_css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/css/join.css') }}">
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