@extends('layouts.app')

@section('content')
<section id="jumbo" class="justify-content-around">
  <div style="margin-top: 150px;" class="container-full">
    <div class="title text-center height-center">
        <h1> SCEGLI DOVE ANDARE</h1>
    </div>
    <div class="d-flex flex-row">
      <form class="container" action="{{ route('search')}}" method="post">
        @csrf
        @method('GET')
        <div class="form-group d-flex flex-row align-items-center">
          <div class="aa-input-container" id="aa-input-container">
            <input  type="search" id="aa-search-input" class="aa-input-search"
                    placeholder="Search for players or teams..." name="search" autocomplete="off" />
          </div>
          <div class="search-button">
            <button type="submit" class="btn btn-primary">
              CERCA
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<section class="">
  <div class="container-full">
    <div class="title text-center">
      <h3>Appartamenti in evidenza</h3>
    </div>
    <div class="container-full d-xs-flex flex-column">
      <div class="row justify-content-center justify-content-md-around">
        @foreach ($data_property as $d_p)
          <div class="card-body d-flex flex-column">
            <h5 class="card-title text-center">{{ $d_p-> name }}</h5>
            <p class="card-text">{{ $d_p-> description }}</p>
            <p class="card-text">{{ $d_p-> address }}</p>
            <a href="{{ route('prop.show', $d_p -> id) }}" class="btn btn-primary align-self-center">SCOPRI</a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection
