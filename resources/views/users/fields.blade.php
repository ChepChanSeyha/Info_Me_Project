<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    <input class="form-control" name="password" type="password" id="password">
    @if(isset($user))
        <strong>Keep this field blank if you do not want to change password</strong>
    @endif
</div>

<div class="form-group col-sm-12">
    {!! Form::label('content', 'Content') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control textarea-rte', 'id' => 'page']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>
