<head>
    <title>Home</title>
    <style>
        ::selection {
  color: black;
  background: slategray;
}

    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
       <body class="bg-dark" style="font-family: 'Karla', sans-serif;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Register</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    <div class="row">
    @foreach ($posts as $post)
    <div class="col-sm-3">
    <div class="card bg-dark text-light border-warning" style="width:18rem; margin:5px;">
        <img src="https://source.unsplash.com/random/700x700/?{{$post->title}}" class="card-img-top" alt="..." style="">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{substr($post->body,0,20)}}...</p>
          <a href="{{url('/show',$post->id)}}" class="btn btn-info">Read post</a>
        </div>
      </div>
    </div>
    @endforeach
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>