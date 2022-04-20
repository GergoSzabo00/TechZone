@extends('layouts.admin')

@section('content')
<form method="POST" action="{{route('category.create')}}">
    @csrf
    <div class="my-3">
        <a class="text-decoration-none" href="{{route('categories')}}"><i class="fa fa-chevron-left"></i> {{__('Categories')}}</a>
        <div class="d-flex align-items-center">
            <h2 class="mt-4">{{ __('Add category') }}</h2>
            <button class="btn btn-primary rounded-pill ms-auto" type="submit"><i class="fa fa-plus"></i> {{__('Add category')}}</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <x-forms.input id="category_name" name="category_name" icon="rectangle-list" label="{{ __('Category name') }}" placeholder="{{ __('Category name') }}" />
        </div>
    </div>
</form>
@endsection