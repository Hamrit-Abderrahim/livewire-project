@extends('dashboard.master')
@section('title' , 'Skills')
@section('skills-active', 'active')


@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="mb-3">
    <h4 class="fw-bold py-3 mb-4 d-inline">Skills </h4>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm mb-2 mx-3" data-bs-toggle="modal" data-bs-target="#creatModal">
      Add Skill
    </button>
    @livewire('Dashboard.skills.skills-creat')
  

  </div>




  <div class="card mb-4">
    <div class="card-body ">
      @livewire('dashboard.skills.skills-data')

    </div>
  </div>
  @livewire('dashboard.skills.skills-update')
  @livewire('dashboard.skills.skills-delete')
  @livewire('dashboard.skills.skills-show')

</div>
@endsection