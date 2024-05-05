{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')

    {{-- map --}}
    <div class="ms-2 map-position" style="margin-top: -25px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1012910.4346338012!2d79.23353424605882!3d7.389554877447044!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afd153d55c804ff%3A0x57355f14d97f87a5!2sYm%20Travels%20%26%20Tours%20Pvt%20Ltd!5e0!3m2!1sen!2slk!4v1714190419622!5m2!1sen!2slk" 
      width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>

    </div>

    {{-- Email contact form --}}
    <div class="d-flex justify-content-end pe-5" style="margin-right: 60px">
      <div class="contac-form p-3">

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Full Name">
          <label for="floatingInput">Full Name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Full Name">
          <label for="floatingInput">Subject</label>
        </div>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
          <label for="floatingTextarea2">Your Massage</label>
        </div>
  
        {{-- search button --}}
        <div class="d-grid gap-2 mt-3">
          <button type="button" class="btn btn-primary fw-bold fs-5">Send a Massage</button>
        </div>
        
      </div>
    </div>
    

    {{-- details section --}}
    <div class="mb-5" style="margin-top: 95px;">
      {{-- <h2 class="mt-5">Contac Us</h2> --}}
      <div class="d-flex justify-content-start gap-5">
        <ul>
          <li><h5>Address</h5></li>
          <li><address>A/24/2, St.Anna Road,Puttalam, Sri Lanka.</address></li>
        </ul>
    
        <ul>
          <li><h5>Customer Care</h5></li>
          <li>(+94)74 133 8008</li>
        </ul>
    
        <ul>
          <li><h5>Follow Us On Social MEadia</h5></li>
          <li>
            <img src="{{ asset('image/help-tools/socialMeadia icons.svg') }}" alt="socialMeadia icon">
          </li>
        </ul>

      </div>
    </div>
    
@endsection