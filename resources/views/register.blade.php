<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Open Business Account"</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/all.css">
  <script defer src="font-awesome/js/all.js"></script>
  <style>
      .banner{
    background: url('images/banner.jpg') center center;
    background-size: cover;
    height: 100px;
}
  </style>
</head>

<body>
  <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner"></div>
                
            </div>
        </div>
    </section>
  <div class="container pt-3">
    <div class="embed-responsive embed-responsive-4by3">
      <iframe class="embed-responsive-item" src="video/about.mp4"></iframe>
    </div>
  </div>
  <div class="container">
      <div class="mt-3"></div>
    @include('includes.flash')
    <form class="mt-3" method="POST" action="/register">
        @csrf
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text icon"><i class="fa fa-user"></i></span>
          <span class="input-group-text text-desc">Name</span>
        </div>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text icon"><i class="far fa-envelope"></i></span>
          <span class="input-group-text text-desc">Email</span>
        </div>
        <input type="text" class="form-control" name="email">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text icon"><i class="fas fa-mobile-alt"></i></span>
          <span class="input-group-text text-desc">Mobile No.</span>
        </div>
        <input type="number" class="form-control" name="phone" >
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text icon"><i class="fa fa-money-bill"></i></span>
          <span class="input-group-text text-desc">Monthly Salary</span>
        </div>
        <input type="number" class="form-control" name="salary">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text icon"><i class="far fa-flag"></i></span>
          <span class="input-group-text text-desc">Nationality</span>
        </div>
        {{-- <input type="text" class="form-control" > --}}
        <select class="form-control" name="country">
            <option value="none">Choose Country</option>
            @forelse ($countries as $data)
                <option value="{{$data}}">{{$data}}</option>
            @empty
                
            @endforelse
        </select>
      </div>
      <div class="pt-2 text-center">
        <p>By clicking on "VIEW CARDS", you agree to our <a href="#">Privacy Policy </a> & <a href="#">Terms of Use</a></p>
      </div>
      <div class="pt-5">
        <button class="btn btn-danger btn-block" type="submit">VIEW CARDS</button>
      </div>
    </form>
  </div>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>