@extends('dashboard.metronic')
@section('title', ' جدول الأدمن')
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('index')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('patients.index')}}">الأدمن</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title"> الأدمن </h3>

<!-- BEGIN DATATABLE -->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span class="caption-subject font-green bold uppercase">جدول الأدمن</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button data-toggle="modal" class="btn sbold green" href="#add_admin"> أضافة مستخدم
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN TABLE -->
        <div class="">
            <table id="admins-table" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>الأسم</th>
                        <th>الأيميل</th>
                        <th>العمر</th>
                        <th>العمليات</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($patients as $patient)
                    <tr>
                        <td>{{$patient->id}}</td>
                        <td>{{$patient->name}}</td>
                        <td>{{$patient->phone}}</td>
                        <td>{{$patient->age}}</td>
                        <td>
                            <form action="{{route('patients.destroy', $patient->id)}}" method="POST">
                                @csrf {{ method_field('DELETE') }}
                                <a href="{{route('patients.edit', $patient->id)}}"
                                    class="btn dark btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-edit"> تعديل </i>
                                </a>
                                <button type="submit" class="btn red btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-edit">حذف</i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END TABLE -->
    </div>
</div>
<!-- END DATATABLE -->

<!-- BEGIN ADD_admin MODEL -->
<div class="modal fade in" id="add_admin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">أضافة مشروع</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>الأسم</label>
                        <input type="name" name="name" class="form-control" placeholder="الأسم" required>

                        <label>الأيميل</label>
                        <input type="text" name="phone" class="form-control" placeholder="phone" required>

                        <label>كلمة المرور</label>
                        <input type="text" name="age" class="form-control" required>

                        <label>الاسم</label>
                        <select class="form-control" name="user_id">
                            <option value="">Select name</option>
                            @foreach ($users as $user)    
                               <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                       
                       </div>
                    <div class="row">
                
                    <div class="margin-top-10">
                        <button type="submit" class="btn btn-outline sbold green">أضافة</button>
                        <button type="button" class="btn btn-outline sbold red" data-dismiss="modal">أغلاق</button>
                    </div>
                </form>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- BEGIN ADD_admin MODEL -->

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{ asset('vendor/js/datatable.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>
        //Datatable
        $(document).ready(function () {
            $('#admins-table').DataTable();
        });
    
    </script>
    @endsection
    <!-- END SCRIPTS -->
    