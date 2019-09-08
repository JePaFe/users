<div class="form-group">
    {{ Form::label('name') }}
    {{ Form::text('name', null, ['class' => 'form-control ' . $errors->first('name', 'is-invalid')]) }}
    @error('name')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {{ Form::label('email') }}
    {{ Form::email('email', null, ['class' => 'form-control ' . $errors->first('email', 'is-invalid')]) }}
    @error('email')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {{ Form::label('password') }}
    {{ Form::password('password', ['class' => 'form-control ' . $errors->first('password', 'is-invalid')]) }}
    @error('password')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {{ Form::label('password_confirmation') }}
    {{ Form::password('password_confirmation', ['class' => 'form-control ' . $errors->first('password_confirmation', 'is-invalid')]) }}
    @error('password_confirmation')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>

@push('body')
    <script>
        let fields = document.querySelectorAll('.form-control')
        for (let field of Array.from(fields)) {
            field.addEventListener("focus", event => {
                if (event.target.className.includes('is-invalid')) {
                    event.target.classList.remove('is-invalid')
                }
            });
        }
    </script>
@endpush
