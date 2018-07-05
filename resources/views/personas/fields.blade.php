    <div class="col-md-6 mb-3">
      <label for="validation1">First name</label>
      <input type="text" class="form-control" id="validation1" placeholder="First name" value="Jhon" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validation2">Last name</label>
      <input type="text" class="form-control" id="validation2" placeholder="Last name" value="Doe" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validation3">City</label>
      <input type="text" class="form-control" id="validation3" placeholder="City" required>
      <div class="invalid-feedback">
        Enter city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validation4">State</label>
      <input type="text" class="form-control" id="validation4" placeholder="State" required>
      <div class="invalid-feedback">
        Enter state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validation5">Zip</label>
      <input type="text" class="form-control" id="validation5" placeholder="Zip" required>
      <div class="invalid-feedback">
        Enter zip code.
      </div>
    </div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personas.index') !!}" class="btn btn-default">Cancel</a>
</div>
