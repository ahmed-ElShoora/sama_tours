@extends('layout.admin')


@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <h5 class="mb-4">انشاء قسم جديد</h5>


                    <div class="card mb-4">
                        <div class="card-body">
                        <form method="post" action="{{URL('/dashboard/category-create')}}">
                            @csrf
                            <div class="error-l-100 position-relative form-group">
                                <label>اللوجو</label>
                                <input name="image" type="file" class="form-control" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم بالعربي</label>
                                    <input name="title_ar" required="" id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم بالانجليزي</label>
                                    <input name="title_en" required="" id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم بالعبري</label>
                                    <input name="title_heb" required="" id="Name" type="text" class="form-control">
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
