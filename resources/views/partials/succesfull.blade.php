@if($errors->has())
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          @foreach($errors->all() as $error)
              {{ $error }}
          @endforeach
  </div>
@endif
