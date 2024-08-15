<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  </head>
  <body>
    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('logo.jpg') }}" alt="" style="height: 80px; clip-path: circle()">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="header m-auto text-light">
                <h3>Weather</h3>
              </div>
            <ul  style="list-style: none;">
              <li>
                <a class="text-light mx-3" href="{{ route('home') }}">Home</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">

        <div class="row my-3">
            <div class="col-md-6">
                <h5>Select City</h5>
                <form action="{{ route('home') }}" method="POST" class="d-flex"> 
                    @csrf
                    <select name="city" class="form-select" style="cursor: pointer">
                        <option value="-1">Select City</option>
                        <option value="Karachi">Karachi</option>
                        <option value="Lahore">Lahore</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Quetta">Quetta</option>
                        <option value="Faisalabad">Faisalabad</option>
                        <option value="Rawalpindi">Rawalpindi</option>
                        <option value="Gujranwala">Gujranwala</option>
                        <option value="Peshawar">Peshawar</option>
                        <option value="Multan">Multan</option>
                    </select>
                    <button type='submit' class="btn btn-primary mx-2">Search</button>
                </form>

            </div>
        </div>

        <div class="row mt-4" >
            <div class="col-md-12">
                <div class="card w-50 m-auto">
                    <div class="card-body">
                       @if($data['weather'][0]['main'] && $data['weather'][0]['main'] === "Haze")
                        <img src='{{ asset('weather_images/haze.png ') }}'  
                        style="height:150px;display:block;margin:auto;">

                        @elseif($data['weather'][0]['main'] && $data['weather'][0]['main'] === "Rain")
                        <img src='{{ asset('weather_images/rain.png ') }}'  
                        style="height:150px;display:block;margin:auto;">

                        
                        @elseif($data['weather'][0]['main'] && $data['weather'][0]['main'] === "Clear")
                        <img src='{{ asset('weather_images/clear.png ') }}'  
                        style="height:150px;display:block;margin:auto;">
                        

                        @elseif($data['weather'][0]['main'] && $data['weather'][0]['main'] === "Thunderstorm")
                        <img src='{{ asset('weather_images/thunderstrom.jpg ') }}'  
                        style="height:150px;display:block;margin:auto;">

                        @else
                       @endif
                    </div>
                </div>
            </div>
        </div>
        
      <div class="row mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <p>Country: 
                        <b> 
                            @isset($data['sys']['country']) {{ $data['sys']['country'] }} @endisset 
                        </b> 
                    </p>

                    <p>City: 
                        <b> 
                            @isset($data['name']) {{ $data['name'] }} @endisset 
                        </b> 
                    </p>

                    <p>temp:
                         <b> 
                            @isset($data['main']['temp']) {{ $data['main']['temp'] }} @endisset 
                        </b> 
                    </p>

                    <p>feels_like: 
                    <b> 
                        @isset($data['main']['feels_like']) {{ $data['main']['feels_like'] }}@endisset 
                    </b> 
                    </p>

                    <p>temp_min: 
                    <b> 
                        @isset($data['main']['temp_min']) {{ $data['main']['temp_min'] }} @endisset
                     </b> 
                    </p>

                    <p>temp_max: 
                        <b> 
                            @isset($data['main']['temp_max']) {{ $data['main']['temp_max'] }} @endisset
                        </b> 
                    </p>


                </div>
            </div>
        </div>

        <div class="col-md-6">
           
            <div class="card">
                <div class="card-body">
                  
                <p>pressure: 
                    <b> 
                        @isset($data['main']['pressure']) {{ $data['main']['pressure'] }} @endisset
                    </b> 
                </p>

                <p>humidity: 
                    <b> 
                        @isset($data['main']['humidity']) {{ $data['main']['humidity'] }} @endisset
                    </b> 
                </p>

                <p>Speed: 
                    <b> 
                        @isset($data['wind']['speed']) {{ $data['wind']['speed'] }} @endisset
                    </b> 
                </p>

                <p>deg: 
                    <b> 
                        @isset($data['wind']['deg']) {{ $data['wind']['deg'] }} @endisset
                    </b> 
                </p>

                <p>sunrise: 
                    <b> 
                        @isset($data['sys']['sunrise']) {{ $data['sys']['sunrise'] }} @endisset
                    </b> 
                </p>
                
                <p>sunset: 
                    <b> 
                        @isset($data['sys']['sunset']) {{ $data['sys']['sunset'] }} @endisset
                    </b> 
                </p>
                 
                </div>
            </div>
    </div>

      </div>

      </div>

</body>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</html>