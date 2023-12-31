@extends('layout.admin')


@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <h5 class="mb-4">انشاء مقالة جديد</h5>


                    <div class="card mb-4">
                        <div class="card-body">
                        <form method="post" action="{{URL('/admin/post-edite')}}" enctype="multipart/form-data">
                            @csrf
                            <input name="id" hidden value="{{$id}}">
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الصورة الرئيسية</label>
                                    <input name="old_image" required hidden value="{{$data->image}}">
                                    <input name="image" id="Name" type="file" class="form-control" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم بالعربية</label>
                                    <input name="title_ar" required value="{{$data->title_ar}}" id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم بالانجليزية</label>
                                    <input name="title_en" required value="{{$data->title_en}}" id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم بالعبري</label>
                                    <input name="title_heb" required value="{{$data->title_heb}}" id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <h5 class="">النص عربي</h5>
                                    <textarea name="text_ar" id="summernote" class="form-control" required>{{$data->text_ar}}</textarea>
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <h5 class="">النص انجليزي</h5>
                                    <textarea name="text_en" id="summernote2" class="form-control" required>{{$data->text_en}}</textarea>
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <h5 class="">النص بالعبري</h5>
                                    <textarea name="text_heb" id="summernote3" class="form-control" required>{{$data->text_heb}}</textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-5" type="submit">تاكيد</button>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@section('script')


    <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
      $('#summernote2').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
      $('#summernote3').summernote({
          placeholder: 'Hello stand alone ui',
          tabsize: 2,
          height: 120,
          toolbar: [
              ['style', ['style']],
              ['font', ['bold', 'underline', 'clear']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['table', ['table']],
              ['insert', ['link', 'picture', 'video']],
              ['view', ['fullscreen', 'codeview', 'help']]
          ]
      });
    </script>

@endsection
