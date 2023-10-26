<div class="form-group">
    {!! Form::label('name', 'Product Name: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Product Price: ') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('quantity', 'Product Amount: ') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control', 'min' => 0, 'step' => 1]) !!}
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Product Category: ') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('image', 'Image: ') !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
</div>