@if(session('success'))
  <div class="row">
    <div class="col-lg-12">
    <div class="flash-message">
        <div class="alert alert-info" style="text-align: center;">
            <span class="success-message"><big>{!! session()->get('success')!!}</big></span>
        </div>
    </div>
    </div>
  </div>
@endif
@if(session('error'))
  <div class="row">
    <div class="col-lg-12">
    <div class="flash-message">
        <div class="alert alert-danger" style="text-align: center;">
            <span class="success-message"><big>{{ session('error') }}</big></span>
        </div>
    </div>
    </div>
  </div>
@endif