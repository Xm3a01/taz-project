@extends('dashboard.metronic')
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('dashboard.index')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('users.index')}}">الأدمن</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title">تعديل الأدمن </h3>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>العنوان</label>
        <input type="text" name="name" class="form-control" value="{{$user->name}}">
    </div>
    <div class="form-group">
        <label>الأيميل</label>
        <input type="email" name="email" class="form-control" value="{{$user->email}}" >
    </div>

    <div class="form-group">
        <label>كلمة المرور</label>
        <input type="password" name="password" class="form-control" >
    </div>
    @foreach($roles as $role)
        <div class="col-md-2"> <input  type="radio" name="role" id="" value ="{{$role->name}}"  {{ $role->name == $role1[0] ? 'checked' : ''}}> {{$role->name}} </div>
    @endforeach
    <div class="col-md-2"> <input  type="radio" name="role" id="" value =""> NULL </div>
    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>

</form>

@endsection