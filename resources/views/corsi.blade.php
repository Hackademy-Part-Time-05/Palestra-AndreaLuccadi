<x-main>
    <div class="row">
        @foreach ($corsi as $corso)
        <div class="card" style="width: 18rem;">
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