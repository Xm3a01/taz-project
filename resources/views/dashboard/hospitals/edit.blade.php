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
            <a href="{{route('hospitals.index')}}">مشفى</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title">تعديل مشفى </h3>

<form action="{{ route('hospitals.update', $hospital->id) }}" method="POST">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>الاسم</label>
        <input type="text" name="name" class="form-control" value="{{$hospital->name}}">
    </div>
    <div class="form-group">
        <label>الدوام</label>
        <select name="duity" id="" class="form-control">
            <option value="">الدوام</option>
            <option {{$hospital->duity ? '' : 'selected'}} value="0" >صباح</option>
            <option {{$hospital->duity ? 'selected' : ''}} value="1" >مساء</option>
        </select>
    </div>
    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>

</form>

@endsection