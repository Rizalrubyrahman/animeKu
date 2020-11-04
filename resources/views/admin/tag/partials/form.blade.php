<div class="form-group">
     <label for="name">Nama Tag</label>
     <input type="text" name="name" id="name" value="{{ old('name') ?? $tag->name }}" class="form-control" placeholder="Masukan nama tag">
     @error('name')
         <div class="text-danger mt-2">
              {{ $message }}
         </div>
     @enderror
</div>

<div class="form-group">
     <label for="category_id">Kategori</label>
     <select class="form-control" name="category_id">
          <option selected disabled>--Pilih--</option>
          @foreach ($categories as $category)
              <option {{ ($category->id == $tag->category_id) ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
     </select>
     @error('category')
         <div class="text-danger mt-2">
              {{ $message }}
         </div>
     @enderror
</div>