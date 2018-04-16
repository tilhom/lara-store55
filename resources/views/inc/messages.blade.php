    @if(count($errors) > 0)
      @foreach($errors->all() as $error)
        <div class="alert alert-danger">
          {{$error}}
        </div>
      @endforeach
    @endif

    @if(session('success_message'))
      <div class="alert alert-success">
        {{session('success_message')}}
      </div>
    @endif

    @if(session('error'))
      <div class="alert alert-danger">
        {{session('error')}}
      </div>
    @endif