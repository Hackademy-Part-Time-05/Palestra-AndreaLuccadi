<x-main>
    {{--carousel--}}
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="/image/5.jpg" class="d-block w-100" alt="palestra">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="/image/4.jpg" class="d-block w-100" alt="palestra">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="/image/6.jpg" class="d-block w-100" alt="palestra">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    {{--fine carousel--}}
    <div class="row m-5">
        @foreach ($corsi as $corso)
        <div class="card " style="width: 18rem;">
            <img src="{{$corso['cover']}}" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{route('dettaglicorso', ['id'=>$corso['id']])}}" class="text-decoration-none text-dark">
                    <h5 class="card-title">{{$corso['name']}}</h5>
                </a>
            </div>
          </div>               
        @endforeach
    </div>
</x-main>