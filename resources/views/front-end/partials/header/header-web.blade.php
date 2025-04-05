
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                 @foreach ($packs->take(1)->get() as $key => $item)
                    <div class="carousel-item {{ $key == 0 ? 'active' : ''}}" onclick="location.href='{{ route('details', ['slug' => $item->slug]) }}'">
                        <img class="image-fluid" style="height: 300px;object-fit: cover;" src="{{ asset(Constant::Storage.$item->logo_urls) }}" alt="{{$item->title}}">
                    </div>
                 @endforeach
                </div>
              </div>
        </div>
 