@extends('dashboard.metronic')
@section('title', ' جدول الحجوزات')
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('index')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('bookings.index')}}">الحجوزات</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title"> الحجوزات </h3>

<!-- BEGIN DATATABLE -->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span class="caption-subject font-green bold uppercase">جدول الحجوزات</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button data-toggle="modal" class="btn sbold green" href="#add_admin"> أضافة حجز
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
                        <th>اسم المريض</th>
                        <th>هاتف المريض</th>
                        <th>اسم المشفى</th>
                        <th>صاحب الحجز</th>
                        <th>تاريخ الحجز</th>
                        <th>الدوام</th>
                        <th>العمليات</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{$booking->id}}</td>
                        <td>{{$booking->patient_name}}</td>
                        <td>{{$booking->patient_phone}}</td>
                        <td>{{$booking->hospital->name}}</td>
                        <td>{{$booking->user->name}}</td>
                        <td>{{$booking->date_of_booking}}</td>
                        <td>{{$booking->hospital->duity ? 'مساء' : 'صباح'}}</td>
                        <td>
                            <form action="{{route('bookings.destroy', $booking->id)}}" method="POST">
                                @csrf {{ method_field('DELETE') }}
                                <a href="{{route('bookings.edit', $booking->id)}}"
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
                <form action="{{ route('bookings.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>الأسم</label>
                        <input type="name" name="patient_name" class="form-control" placeholder="اسم المريض" required>

                        <label>هاتف المريض</label>
                        <input type="name" name="patient_phone" class="form-control" placeholder="هاتف المريض" required>

                        <label>الأسم</label>
                        <input type="date" name="date_of_booking" class="form-control" placeholder="تاريخ الحجز" required>

                        <label>صاحب الحجز</label>
                        <select name="user_id" id="" class="form-control">
                            <option value="" selected>صاحب الحجز</option>
                            @foreach ($users as $user)   
                              <option value="{{$user->id}}" >{{$user->name}}</option>
                            @endforeach
                        </select>

                        <label>المشفى</label>
                        <select name="hospital_id" id="" class="form-control">
                            <option value="" selected>المشفى</option>
                            @foreach ($hospitals as $hospital)   
                              <option value="{{$hospital->id}}" >{{$hospital->name}}</option>
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
    