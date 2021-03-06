@extends('admin.manage.mbCharges.panel')

@push('breadcrumb')
	<li>
		{{ link_to_route('admin.manage.mb_charges.edit',
				trans('admin.breadcrumb.edit'),
				[$mbCharge]) }}
	</li>
@endpush

@section('panel')
	{{ Form::model($mbCharge, [ 'method' => 'put',
			'route' => ['admin.manage.mb-charges.update', $mbCharge]
	]) }}

		@include('admin.manage.mbCharges.form', [
			'submitLabel' => trans('admin.manage.mbCharges.edit.submitButton'),
		])

	{{ Form::close() }}
@endsection
