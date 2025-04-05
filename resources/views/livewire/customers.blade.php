@section('select2-style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection
<div>
    <div class="card">
        <div class="card-body">
            <h4 class="mt-0 header-title d-inline">Search..</h4>
            <button id="all" wire:click="all" class="btn-sm btn-info float-right mb-3"><i class="fas fa-redo-alt"></i> all</button>
            <div class="form-row mt-3" wire:ignore>
                <select multiple id="customer" class="form-control" wire:model="type">
                    @foreach(Constant::customerByType as $item)
                        <option  value="{{$item['customer']}}">
                            {{$item['customer']}}
                        </option>
                     @endforeach
                </select>
              </div>
        </div><!--end card-body-->
    </div>
    @forelse ($customers as $customer)
        <div class="card alert mt-3 alert  {{ $customer->properties['color'] ?? '' }}" role="alert">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="badge badge-pill badge-success float-right mr-2">Order Date &nbsp;{{ $customer->created_at->diffForHumans() }}</h6>
                    <h6 class="badge badge-pill badge-dark float-right mr-2">Qty: {{ $qty = $customer->orders->sum('pivot.qty') }} piece{{ $qty > 1 ? 's' : '' }}</h6>
                    <h6 class="badge badge-pill badge-danger float-right mr-2">{{ $customer->properties['customer'] ?? '' }}</h6>
                </div>
            </div>
        
            <div class="card-body">
                <div class="dropdown d-inline-block float-right">
                    <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop2" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fas fa-ellipsis-v text-dark"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop2">
                        <a class="dropdown-item" href="{{ route('admin.order', ['id' => $customer->id, 'name' => $customer->name]) }}"> <i class="fas fa-eye text-info"></i> Détails de la commande</a>
                        <form 
                            id="remove" 
                            action="{{ route('admin.destroy_customer', ['id' => $customer->id]) }}" 
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to remove this customer {{ $customer->name }}')"><i class="ti-trash text-danger"></i> Supprimer customer</button>
                        </form>
                        <div class="container" style="cursor: pointer;">
                            @foreach (Constant::customerByType as $item)
                                <span class="bg-lg badge {{ $item['color'] }} d-block mt-1" wire:click="change({{ $customer->id}}, {{json_encode($item)}})">
                                    {{ $item['customer'] }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div><!--end dropdown-->
                <span class="font-weight-bold">{{ $customer->name }}</span>
                <br>
                <span class="font-weight-bold">Total orders: {{ int_to_decimal($customer->total_order) }} {{ $currency }}<i class="mdi mdi-cart-outline"></i></span>
                <div class="row justify-content-center">
                    <div class="col-md-12 align-self-center">
                        <ul class="list-inline mb-0"> 
                            <li class="list-item d-inline-block mr-2">
                                Mobile: <span class="font-weight-bold"> {{ $customer->mobile }}</span>
                            </li>
                            <li class="list-item d-inline-block mr-2">
                                Email: <span class="font-weight-bold"> {{ $customer->email }}</span>
                            </li>
                            <li class="list-item d-inline-block mr-2">
                                Adresse de livraison: <span class="font-weight-bold"> {{ $customer->address }}</span>
                            </li>
                             <li class="list-item">
                                City:   <span class="font-weight-bold"> {{ $customer->city }}</span>
                            </li>
                            <li class="list-item">
                                Country:   <span class="font-weight-bold"> {{ $customer->country }}</span>
                            </li>
                           
                        </ul>
                    </div><!--end col-->
                    <div class="col-12 align-self-center img-group">
                        @foreach ($customer->orders as $item)
                            <a class="user-avatar user-avatar-group float-right" href="#">
                                <img src="{{ $item->logo_urls }}" alt="user" class="rounded-circle">
                            </a>
                        @endforeach
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-->
        </div>
    @empty
        <h3 class="text-center">NO CUSTOMERS YET</h3>
    @endforelse
</div>

@section('select2-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#customer').select2();
        $('#customer').on('change', function(){
            @this.type = $(this).val();
        });

        $('#all').click(function() {
            $('#customer').val(null).trigger('change');
        });
    });
</script>
@endsection