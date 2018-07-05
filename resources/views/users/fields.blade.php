
{{ csrf_field() }}
{{ method_field('post') }}
<!-- Submit Field -->
<div class="form-group col-sm-12">
	<div class="row">
        <br>
    		{!! Form::hidden('id', null, ['class' => 'form-control']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre: ') !!}
    		{!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo: ') !!}
    		{!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Clave: ') !!}
            {!! Form::password('password', null, ['class' => 'form-control','value'=>'']) !!}
        </div>
    </div>
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>
