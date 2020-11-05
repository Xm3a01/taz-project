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
            <a href="{{route('doctors.index')}}">الاطباء</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title">تعديل الاطباء </h3>

<form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>الأسم</label>
        <input type="name" name="name" class="form-control" placeholder="الأسم" required value="{{$doctor->name}}">

        <label>الهاتف</label>
        <input type="text" name="phone_number" class="form-control" placeholder="الهاتف" required value="{{$doctor->phone_number}}">

        <label> مكان العمل</label>
        <select name="hospital_id" id="" class="form-control">
            <option  value="">مكان العمل</option>
            @foreach ($hospitals as $hospital)  
              <option {{$doctor->hospital_id == $hospital->id ? 'selected' : ''}} value="{{$hospital->id}}">{{$hospital->name}}</option>
            @endforeach
        </select>

        <label> الجنس</label>
        <select name="gender" id="" class="form-control">
            <option value="">الجنس</option>
            <option {{$doctor->gender ? '' : 'selected'}} value="0">ذكر</option>
            <option {{$doctor->gender ? 'selected' : ''}} value="1">أنثى</option>
        </select>
    </div>
    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>

</form>

@endsection