@extends('dashboard.metronic')
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('index')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('hospitals.index')}}">الحجز</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title">تعديل الحجز </h3>

<form action="{{ route('bookings.update', $booking->id) }}" method="POST">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>اسم المريض</label>
            <input type="name" name="patient_name" class="form-control" placeholder="اسم المريض" required value="{{$booking->patient_name}}">

            <label>هاتف المريض</label>
            <input type="name" name="patient_phone" class="form-control" placeholder="هاتف المريض" required value="{{$booking->patient_phone}}">

            <label>تاريخ الحجز</label>
            <input type="date" name="date_of_booking" class="form-control" placeholder="تاريخ الحجز" required value="{{$booking->date_of_booking}}">

            <label>صاحب الحجز</label>
            <select name="user_id" id="" class="form-control">
                <option value="" selected>صاحب الحجز</option>
                @foreach ($users as $user)   
                    <option {{$booking->user_id == $user->id ? 'selected' : ''}} value="{{$user->id}}" >{{$user->name}}</option>
                @endforeach
            </select>

            <label>الالحجز</label>
            <select name="hospital_id" id="" class="form-control">
                <option value="" selected>الالحجز</option>
                @foreach ($hospitals as $hospital)   
                    <option {{$booking->hospital_id == $hospital->id ? 'selected' : ''}} value="{{$hospital->id}}" >{{$hospital->name}}</option>
                @endforeach
           </select>
     </div>
    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>

</form>

@endsection