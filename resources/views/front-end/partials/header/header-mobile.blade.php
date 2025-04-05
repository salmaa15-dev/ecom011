<div id="featured" class="carousel slide carousel" data-ride="carousel" data-interval="800">

    <!--dots navigate-->

    <ol class="carousel-indicators top-indicator">

        <li data-target="#featured" data-slide-to="0" class="active"></li>

        <li data-target="#featured" data-slide-to="1"></li>

        <li data-target="#featured" data-slide-to="2"></li>

    </ol>

    

    <!--carousel inner-->

    <div class="carousel-inner">

        <!--Item slider-->

        @foreach ($packs->take(3)->get() as $key => $pack)

            <!--Item slider-->
            <div class="carousel-item {{ $key === 0 ? 'active': '' }}">

                <div class="card border-0 rounded-0  overflow zoom">

                    <div class="position-relative">

                        <!--thumbnail img-->

                        <div class="ratio_left-cover-1 image-wrapper">

                            <a href="{{ route('details', ['slug' => $pack->slug]) }}">

                                <img class="img-fluid w-100"

                                    src=""

                                    alt="{{$pack->slug}}">

                            </a>

                        </div>

                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow font-weight-bold">

                            <!--title-->

                            <a href="{{ route('details', ['slug' => $pack->slug]) }}">
                                @dump($pack->name)
                                <strong class="p-1 badge badge-danger post-title my-1">{{ int_to_decimal($pack->price)}} {{ $currency }}</strong>

                            </a>

                            <!-- meta title -->

                            <div class="news-meta">

                                <strong class="text-black">{{ $pack->title_limit }}</strong>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        <!--end item slider-->

        @endforeach 

    </div>

    <!--end carousel inner-->

</div>

@if($packs->count() > 3)

    <div id="packs" class="float-right mr-10">

        <a href="{{ route('packs') }}">voir plus offres <i class="fas fa-arrow-circle-right text-warning"></i></a>

    </div>

@endif