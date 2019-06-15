@include('include.header')

<h2>Laravel Newsletter Tutorial With Example</h2><br/>
<form method="post" action="{{url('newsletter')}}">
  @csrf
  </div>
  <div class="row">
    <div class="col-md-4"></div>
      <div class="form-group col-md-2">
        <label for="Email">Email:</label>
        <input type="text" class="form-control" name="email">
      </div>
    </div>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
      <button type="submit" class="btn btn-success">Subscribe</button>
    </div>
  </div>
</form>
</div>
@include('include.footer')
</body>
</html>