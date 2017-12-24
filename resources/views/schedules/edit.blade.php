@extends('schedules.create') 

@section('editId','/'.$item->id)
@section('editWeekday',$item->dag)
@section('editTime',$item->tid)


@section('editMethod')
	{{method_field('PUT')}}
@endsection