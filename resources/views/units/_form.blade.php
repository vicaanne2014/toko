@csrf
<div class="form-group">
    <label for="unit">Nama Satuan</label>
    <input type="text" name="unit" class="form-control {{ $errors->has('unit')? 'is-invalid' : '' }}" value="{{ old('unit', $unit->unit) }}" id="unit" placeholder="Tambah Satuan"/>
    
    @if($errors->has('unit'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('unit') }}</strong>
        </div>
    @endif
    
</div>
<div class="form-group">
    <button type="submit" class="btn btn-md btn-outline-success">{{ $buttonText }}</button>
</div>