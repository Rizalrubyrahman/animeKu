<div class="form-group">
     <label for="name">Nama Tag</label>
     <input type="text" name="name" id="name" value="{{ old('name') ?? $tag->name }}" class="form-control" placeholder="Masukan nama tag">
     @error('name')
         <div class="text-danger mt-2">
              {{ $message }}
         </div>
     @enderror
</div>