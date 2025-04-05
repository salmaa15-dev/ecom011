@section('tinycme-header')
<script src="https://cdn.tiny.cloud/1/8qsclk0zltjrgt2xgsjp4rea4vpio06kxyp3twt8rrx52c5c/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Create a new page</h4>

                <p class="text-muted mb-4">Warning !, all fields must be required<code class="highlighter-rouge"> Name page and content required !</code></p> 
        
                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug', $page->slug ?? null) }}" placeholder="Name page">

                @error('slug')

                    <span class="invalid-feedback" role="alert">

                        <strong class="h6">{{ $message }}</strong>

                    </span>

                @enderror
            
                <label class="col-sm-3 mt-5">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" >{{ old('content', $page->content ?? null) }}</textarea>
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong class="h6">{{ $message }}</strong>
                    </span>
                @enderror
            </div><!--end card-body-->

        </div>
    </div>
</div>

<a href="{{ route('admin.pages.index') }}" class="btn btn-primary report-btn float-right mf-5"><i aria-hidden="true" class="fas fa-fast-backward"></i> &nbsp; Back to Pages</a>

@section('tinymce')

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'tetarea',
    plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
      // Try the most popular premium features until Dec 21, 2024:
      'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
      // Early access to document converters
      'importword', 'exportword', 'exportpdf'
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
  });
</script>
@endsection