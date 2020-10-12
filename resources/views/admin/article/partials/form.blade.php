<div class="form-group">
     <label for="title">Judul</label>
     <input type="text" name="title" id="title" value="{{ old('title') ?? $artikel->title }}" placeholder="Masukan Judul" class="form-control">
     @error('title')
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
              <option {{ ($category->id == $artikel->category_id) ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
     </select>
     @error('category')
         <div class="text-danger mt-2">
              {{ $message }}
         </div>
     @enderror
</div>

<div class="form-group">
     <label for="tag">Tag</label>
     <select class="form-control js-example-basic-multiple" name="tag[]" multiple>
          @foreach ($artikel->tags as $tag)
              <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
          @endforeach
          @foreach ($tags as $tag)
              <option value="{{ $tag->id }}">{{ $tag->name }}</option>
          @endforeach
     </select>
     @error('category')
         <div class="text-danger mt-2">
              {{ $message }}
         </div>
     @enderror
</div>

<div class="form-group">
     <label for="image">Gambar</label>
     <input type="file" name="image" id="image" value="{{ old('image') ?? $artikel->image }}" class="form-control">
     @error('image')
         <div class="text-danger mt-2">
              {{ $message }}
         </div>
     @enderror
</div>

<div class="form-group">
     <label for="body">Deskripsi</label>
     <textarea name="body" id="body" class="form-control" cols="30" placeholder="Masukan Deskripsi" rows="10">{{ old('body') ?? $artikel->body }}</textarea>
     @error('body')
         <div class="text-danger mt-2">
              {{ $message }}
         </div>
     @enderror
</div>