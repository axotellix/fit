
@extends('Layouts.admin.layout_admin')

@section('content')

    <livewire:crew-view :member="$crew_id" />
    <livewire:crew-edit :member="$crew_id" />

@endsection