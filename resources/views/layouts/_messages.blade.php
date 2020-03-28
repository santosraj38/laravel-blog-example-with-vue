@if (Session::has('success'))
  <div class="ui success positive message" role="alert">
    <i class="close icon"></i>
    <div class="header">
        Success
    </div>
    <p>{{Session::get('success')}}</p>
  </div>
@endif
@if (Session::has('error'))
  <div class="ui negative message" role="alert">
    <i class="close icon"></i>
    <div class="header">
        Problem
    </div>
    <p>{{Session::get('error')}}</p>
  </div>
@endif
@if (Session::has('warning'))
  <div class="ui warning message" role="alert">
    <i class="close icon"></i>
    <div class="header">
        Warning
    </div>
    <p>{{Session::get('warning')}}</p>
  </div>
@endif

@if (count($errors) >0)
  <div class="ui negative message" role="alert">
    <strong>Errors:</strong>
    <ul>
      @foreach ($errors->all() as $error)
        <li>
          {{ $error }}
        </li>
      @endforeach
    </ul>
  </div>
@endif

@section('scripts')
  <script type="text/javascript">
  $('.message .close')
    .on('click', function() {
      $(this)
        .closest('.message')
        .transition('fade')
      ;
    })
  ;
  </script>
@endsection
