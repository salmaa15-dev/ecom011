<div class="row">

    <div class="col-md-12">

        <div class="card">

            @error('image')

                <span class="invalid-feedback" role="alert">

                    <strong class="h6">{{ $message }}</strong>

                </span>

            @enderror

            <div class="card-body">        

                Picture Pack

                <input type="file" id="input-file-now-custom-2" name="image" class="dropify @error('image') is-invalid @enderror" data-default-file="{{ $pack->LogoUrls ?? asset('back-end/assets/images/logo/pack-logo.png') }}" data-height="326" />

            </div><!--end card-body-->

        </div>

    </div>

    <div class="col-md-12">

        <div class="card">

            <div class="card-body">        

                <h4 class="mt-0 header-title">Create a new pack</h4>

                <p class="text-muted mb-4">Warning !, all fields must be required<code class="highlighter-rouge"> Name Title picteur description ...</code></p>

                <dl class="row mb-0">

                    <dt class="col-sm-3">Title</dt>

                    <dd class="col-sm-9">

                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $pack->title ?? null) }}">

                        @error('title')

                            <span class="invalid-feedback" role="alert">

                                <strong class="h6">{{ $message }}</strong>

                            </span>

                        @enderror

                    </dd>

                    <dt class="col-sm-3">Description</dt>

                    <dd class="col-sm-9">

                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="8">{{ old('description', $pack->description ?? null) }}</textarea>

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

                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder=".." value="{{ old('price', $pack->price ?? null) }}">

                            @error('price')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror                                                   

                        </div>

                    </dd>

                    <dt class="col-sm-3 text-truncate">Available </dt>

                    <dd class="col-sm-9">

                        <div class="input-group-append">

                            <div class="switchToggle">

                                <input type="checkbox" name="available_pack" class="mt-1 @error('available_pack') is-invalid @enderror" id="switch" {{ old('available_pack', $pack->available_pack ?? 'checked' ) ? 'checked' : null }}>

                                <label for="switch">Toggle</label>

                            </div>

                        </div>

                    </dd>

                </dl>        

            </div><!--end card-body-->

        </div>

    </div>

</div>

<a href="{{ route('admin.packs.index') }}" class="btn btn-primary report-btn float-right mf-5"><i aria-hidden="true" class="fas fa-fast-backward"></i> &nbsp; Back to packs</a>