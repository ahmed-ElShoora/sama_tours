@extends('layout.admin')

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>قائمة الرسائل</h1>
                    </div>

                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-4">
                <div class="card" style="overflow: auto">
                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center">الاسم</th>

                                <th scope="col" class="text-center">رقم الهاتف</th>
                                <th scope="col" class="text-center">الرساله</th>
                                <th scope="col" class="text-center">الصورة</th>
                                <th scope="col" class="text-center">حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $data_one)
                                <tr>
                                    <td class="text-center">{{$data_one->name}}</td>

                                    <td class="text-center">{{$data_one->phone}}</td>
                                    <td class="text-center">{{$data_one->msg}}</td>
                                    <td class="text-center">
                                        <img src="{{asset('/'.$data_one->media)}}">
                                    </td>
                                    <td class="text-center"><a href="{{URL('/dashboard/delete-contact-'.$data_one->id)}}" class="btn btn-sm btn-outline-danger">حذف</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>{{$data->links()}}</tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection
