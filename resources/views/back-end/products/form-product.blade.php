<div class="row">

    <div class="col-md-8">

        <div class="card">

            <div class="card-body">        

                <h4 class="mt-0 header-title">Create a new product</h4>

                <p class="text-muted mb-4">Warning !, all fields must be required<code class="highlighter-rouge"> Name Title pic description ...</code></p>

                {{-- start error message --}}

                @include('errors.error')

                {{-- end error message --}}

                <dl class="row mb-0">

                    <dt class="col-sm-3">Title</dt>

                    <dd class="col-sm-9">

                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $product->title ?? null) }}">

                        @error('title')

                            <span class="invalid-feedback" role="alert">

                                <strong class="h6">{{ $message }}</strong>

                            </span>

                        @enderror

                    </dd>

                    <dt class="col-sm-3">Category</dt>

                    <dd class="col-sm-9">

                        <select name="categorie_id" class="form-control @error('categorie_id') is-invalid @enderror">

                            @foreach ($categorys as $key => $category)

                                <option {{ old('categorie_id', $product->categorie_id ?? '' ) == $category->id ? 'selected': '' }} value="{{ $category->id }}" >{{ $category->name }}</option>



                            @endforeach

                        </select>

                        @error('categorie_id')

                            <span class="invalid-feedback" role="alert">

                                <strong class="h6">{{ $message }}</strong>

                            </span>

                        @enderror

                    </dd>

                    <dt class="col-sm-3">Description</dt>

                    <dd class="col-sm-9">

                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="8">{{ old('description', $product->description ?? null) }}</textarea>

                        @error('description')

                            <span class="invalid-feedback" role="alert">

                                <strong class="h6">{{ $message }}</strong>

                            </span>

                        @enderror

                    </dd>

        

                    <dt class="col-sm-3">Price</dt>

                    <dd class="col-sm-9">

                        <div class="input-group">

                            <div class="input-group-prepend">

                                <span class="input-group-text">{{ $currency }}</span>

                            </div>

                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder=".." value="{{ old('price', $product->price ?? null) }}">

                            @error('price')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror                                                   

                        </div>

                    </dd>

                    <dt class="col-sm-3 text-truncate">Sale</dt>

                    <dd class="col-sm-9">

                        <div class="input-group">

                            <div class="input-group-prepend">

                                <span class="input-group-text">{{ $currency }}</span>

                            </div>

                            <input type="text" name="sale" class="form-control @error('sale') is-invalid @enderror mr-3" value="{{ old('sale', $product->sale ?? null) }}">

                            @error('sale')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror

                            <br>

                            <div class="input-group-append">

                                <div class="switchToggle">

                                    <input type="checkbox" name="etat_sale" class="mt-1 @error('etat_sale') is-invalid @enderror" id="switch" {{ old('etat_sale', $product->etat_sale ?? null ) ? 'checked' : null }}>

                                    <label for="switch">Toggle</label>

                                </div>

                            </div>

                        </div>

                    </dd>

                </dl>        

            </div><!--end card-body-->

        </div>

    </div>

    <div class="col-md-4">

        <div class="card">

            @error('image')

                <span class="invalid-feedback" role="alert">

                    <strong class="h6">{{ $message }}</strong>

                </span>

            @enderror

            <div class="card-body">        

                Picture Product

                <input type="file" id="input-file-now-custom-2" name="image" class="dropify @error('image') is-invalid @enderror" data-default-file="{{ $product->LogoUrls ?? asset('back-end/assets/images/logo/product-logo.png') }}" data-height="326" />

            </div><!--end card-body-->

        </div>

    </div>

</div>

<a href="{{ route('admin.products.index') }}" class="btn btn-primary report-btn float-right mf-5"><i aria-hidden="true" class="fas fa-fast-backward"></i> &nbsp; Back to products</a>