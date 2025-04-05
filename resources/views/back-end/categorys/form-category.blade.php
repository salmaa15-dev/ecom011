<div class="row">

    <div class="col-md-8">

        <div class="card">

            <div class="card-body">        

                <h4 class="mt-0 header-title">Create a new category</h4>

                <p class="text-muted mb-4">Warning !, all fields must be required<code class="highlighter-rouge"> Name category logo description</code></p> 

                <dl class="row mb-0">

                    <dt class="col-sm-3">View In Home</dt>

                    <dd class="col-sm-9">

                        <div class="switchToggle">

                            <input type="checkbox" name="etat" class="mt-1" id="switch" {{ old('etat', $category->etat ?? null ) ? 'checked' : null }}>

                            <label for="switch">Toggle</label>

                        </div>

                    </dd>

                    <dt class="col-sm-3">Category name</dt>

                    <dd class="col-sm-9">

                        <input type="text" required class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $category->name ?? null) }}">

                        @error('name')

                            <span class="invalid-feedback" role="alert">

                                <strong class="h6">{{ $message }}</strong>

                            </span>

                        @enderror

                    </dd>

    

                    <dt class="col-sm-3">Description</dt>

                    <dd class="col-sm-9">

                        <textarea required class="form-control @error('description') is-invalid @enderror" name="description" rows="5" >{{ old('name', $category->description ?? null) }}</textarea>

                        @error('description')

                            <span class="invalid-feedback" role="alert">

                                <strong class="h6">{{ $message }}</strong>

                            </span>

                        @enderror

                    </dd>

                </dl>

            </div><!--end card-body-->

        </div>

    </div>

    <div class="col-md-4">

        <div class="card">

            <div class="card-body">

                <h4 class="mt-0 header-title">Logo</h4>        

                <input type="file" id="input-file-now-custom-2" name="logo" class="dropify @error('logo') is-invalid @enderror" data-default-file="{{ $category->LogoUrls ?? asset('back-end/assets/images/logo/category-logo.jpg') }}" data-height="200" />

            </div>

        </div>

    </div>

</div>

<a href="{{ route('admin.categorys.index') }}" class="btn btn-primary report-btn float-right mf-5"><i aria-hidden="true" class="fas fa-fast-backward"></i> &nbsp; Back to categorys</a>