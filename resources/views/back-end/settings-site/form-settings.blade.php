<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">        
                <h4 class="mt-0 header-title">Settings Site</h4>
                <p class="text-muted mb-4">Warning !, all fields must be required<code class="highlighter-rouge"> email, phone, inta..</code></p>

                <dl class="row mb-0">
                    <dt class="col-sm-3">Title</dt>
                    <dd class="col-sm-9">
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $setting->title ?? null) }}">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong class="h6">{{ $message }}</strong>
                            </span>
                        @enderror
                    </dd>
                    <dt class="col-sm-3">Email</dt>
                    <dd class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $setting->email ?? null) }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="h6">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </dd>
                    <dt class="col-sm-3">Phone</dt>
                    <dd class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-phone-square"></i>
                                </span>
                            </div>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $setting->phone ?? null) }}">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="h6">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </dd>
        
                    <dt class="col-sm-3">Facebook</dt>
                    <dd class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fab fa-facebook-f"></i>
                                </span>
                            </div>
                            <input type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror" placeholder=".." value="{{ old('facebook', $setting->facebook ?? null) }}">
                            @error('facebook')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="h6">{{ $message }}</strong>
                                </span>
                            @enderror                                                   
                        </div>
                    </dd>
                    <dt class="col-sm-3 text-truncate">Instagram</dt>
                    <dd class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fab fa-instagram"></i>
                                </span>
                            </div>
                            <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror mr-3" value="{{ old('instagram', $setting->instagram ?? null) }}">
                            @error('instagram')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="h6">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </dd>
                    <dt class="col-sm-3 text-truncate">map</dt>
                    <dd class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                            </div>
                            <textarea type="text" name="map" class="form-control @error('map') is-invalid @enderror mr-3" rows="10">{{ old('map', $setting->map ?? null) }}</textarea>
                            @error('map')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="h6">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </dd>
                    
                    <dt class="col-sm-3 text-truncate">Description</dt>
                    <dd class="col-sm-9">
                        <div class="input-group">
                            <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror mr-3" rows="8">{{ old('description', $setting->description ?? null) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="h6">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </dd>

                    <dt class="col-sm-3 text-truncate">Adresse</dt>
                    <dd class="col-sm-9">
                        <div class="input-group">
                            <textarea type="text" name="adresse" class="form-control @error('adresse') is-invalid @enderror mr-3" rows="5">{{ old('adresse', $setting->adresse ?? null) }}</textarea>
                            @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="h6">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </dd>
                </dl>        
            </div><!--end card-body-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">        
                Logo nav top
                <input type="file" id="input-file-now-custom-1" name="logo_top" class="dropify" data-default-file="{{ $setting->logo_navBar_site ?? '' }}" data-height="150">
            </div>
            <!--end card-body-->
        </div>

        <div class="card">
            <div class="card-body">        
                Logo footer
            <input type="file" id="input-file-now-custom-2" name="logo_footer" class="dropify" data-default-file="{{ $setting->logo_footer_site ?? '' }}" data-height="150">          
        </div>
            <!--end card-body-->
        </div>
    </div>
</div>
<a href="{{ route('admin.settings.index') }}" class="btn btn-primary report-btn float-right mf-5"><i aria-hidden="true" class="fas fa-fast-backward"></i> &nbsp; Back to settings</a>