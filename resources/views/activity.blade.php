@extends('layouts.app')

@section('container')
    <div class="card mt-3 justify-content-center" style="width: 18rem;" >
      <iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" frameborder="0"  allowfullscreen></iframe>
      @foreach($Activitys as $Activity)

      <div class="card-body">
        <h5 class="card-title">{{$Activity->questions}}</h5>
        <form  action="{{route('createactivity')}}" method="post">
          @csrf
          <input type="hidden" name="activity" value="{{$Activity->id}}">
          <div class="form-group">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" name="customRadio" class="custom-control-input" value="{{$Activity->OptionA}}"> 
              <label class="custom-control-label" for="customRadioInline1">{{$Activity->OptionA}}</label>
            </div>
          </div>
          <div class="form-group">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="customRadio" class="custom-control-input" value="{{$Activity->OptionB}}">
              <label class="custom-control-label" for="customRadioInline2">{{$Activity->OptionB}}</label>
            </div>        
          </div>
          <div class="form-group">
            <div class="custom-control custom-radio custom-control-inline">  
              <input type="radio" id="customRadioInline3" name="customRadio" class="custom-control-input" value=" {{$Activity->OptionC}}">
              <label class="custom-control-label" for="customRadioInline3"> {{$Activity->OptionC}}</label>
            </div>
          </div>
          <div class="form-group">
            <div class="custom-control custom-radio custom-control-inline">  
              <input type="radio" id="customRadioInline4" name="customRadio" class="custom-control-input" value=" {{$Activity->OptionD}}">
              <label class="custom-control-label" for="customRadioInline4"> {{$Activity->OptionD}}</label>
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary">Enviar</button>
          </div>
        </form>
        <!-- <div class="card-footer mt-3">
          <small class="text-muted">Tiempo: {{$Activity->time}} </small> 
        </div> -->
      </div>
      @endforeach

@endsection

 


