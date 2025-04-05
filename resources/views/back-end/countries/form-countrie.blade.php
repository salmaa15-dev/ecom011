<div class="row">

    <div class="col-md-12">

        <div class="card">

            <div class="card-body">        

                <p class="text-muted mb-4">Warning !, all fields must be required<code class="highlighter-rouge"> ville ...</code></p> 

                <dl class="row mb-0">

                    <dt class="col-sm-3">Ville</dt>

                    <dd class="col-sm-9">

                        <div class="switchToggle">

                            <input type="text" name="country" class="form-control" id="switch" value="{{ old('country', $country->country ?? null) }}">

                        </div>

                    </dd>

                    <dt class="col-sm-3">View In Home</dt>

                    <dd class="col-sm-9">

                        <div class="switchToggle">

                            <input type="checkbox" class="mt-1" id="etat" name="active"  {{ old('active', $country->active ?? null ) ? 'checked' : null }}>

                            <label for="etat">Toggle</label> 

                        </div>

                    </dd>

                </dl>

            </div><!--end card-body-->

        </div>

    </div>

</div>

<a href="{{ route('admin.countries.index') }}" class="btn btn-primary report-btn float-right  m-2"><i aria-hidden="true" class="fas fa-fast-backward"></i> &nbsp; Back to countires</a>