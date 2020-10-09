<div class="form-group">
     <label for="name">Name</label>
     <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $kategori->name }}">
     @error('name')
          <div class="text-danger mr-2">{{ $message }}</div>   
     @enderror
</div>