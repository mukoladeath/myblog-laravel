@extends('admin.layouts.app_admin')
@section('content')
  <div class="container">
    @component('admin.components.breadcrumb')
      @slot('title') Edit user @endslot
      @slot('parent') Main @endslot
      @slot('active') User @endslot
    @endcomponent

<hr>
<form class="form-horizontal" action="{{route('admin.user_managment.user.update', $user)}}" method="post">
  {{-- <input type="hidden" name="_method" value="put"> --}}
  {{ method_field('PUT') }}
  {{ csrf_field() }}
  @include('admin.user_managment.users.partials.form')

  {{-- <input type="hidden" name="modified_by" value="{{Auth::id()}}"> --}}
</form>
  </div>
@endsection
