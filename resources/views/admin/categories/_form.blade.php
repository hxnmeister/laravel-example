<div class="form-group">
    {!! Form::label('name', 'Category Name: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Category Description: ') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5]) !!}
</div>