@extends('layouts.back.master')

@section('content')
@livewire('editdata', ['id' => $id])
@endsection

