@extends('layouts.app')

@section('container')
<div class="row">
  <div class="card mt-3" style="width: 30rem;" >
    <iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" frameborder="0"  allowfullscreen></iframe>
    @foreach($Activitys as $Activity)

    <div class="card-body">
      <h5 class="card-title text-center"><strong>{{$Activity->questions}}</strong></h5>
      <form  action="{{route('createactivity')}}" method="post">
        @csrf
        <input type="hidden" name="activity" value="{{$Activity->id}}">
        <div class="display-inline">
          <div class="inline-block d-flex justify-content-center">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" name="customRadio" class="custom-control-input" value="{{$Activity->OptionA}}"> 
              <label class="custom-control-label " for="customRadioInline1">{{$Activity->OptionA}}</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline ">  
              <input type="radio" id="customRadioInline3" name="customRadio" class="custom-control-input" value=" {{$Activity->OptionC}}">
              <label class="custom-control-label" for="customRadioInline3"> {{$Activity->OptionC}}</label>
            </div>
          </div>
          <div class="block d-flex justify-content-center">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="customRadio" class="custom-control-input" value="{{$Activity->OptionB}}">
              <label class="custom-control-label" for="customRadioInline2">{{$Activity->OptionB}}</label>
            </div> 
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline4" name="customRadio" class="custom-control-input" value=" {{$Activity->OptionD}}">
              <label class="custom-control-label" for="customRadioInline4"> {{$Activity->OptionD}}</label>
            </div>
          </div>
          <div class="form-group d-flex justify-content-center">
            <button class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  @endforeach
@endsection
<!-- <div class="card-footer mt-3">
  <small class="text-muted">Tiempo: {{$Activity->time}} </small> 
</div> -->