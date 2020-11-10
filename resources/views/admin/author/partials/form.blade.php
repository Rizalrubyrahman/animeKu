<div class="form-group">
     <label for="name">Nama</label>
     <input type="text" name="name" id="name" value="{{ old('name') ?? $author->name }}" class="form-control">
     @error('name')
         <div class="text-danger mt-2">
              {{ $message }}
         </div>
     @enderror
</div>

<div class="form-group">
     <label for="email">Email</label>
     <input type="email" name="email" id="email" value="{{ old('email') ?? $author->email }}" class="form-control">
     @error('email')
         <div class="text-danger mt-2">
              {{ $message }}
         </div>
     @enderror
</div>

<div class="form-group">
     <label for="description">Deskripsi</label>
     <textarea name="description" id="description" class="form-control" cols="30" placeholder="Masukan Deskripsi" rows="10">{{ old('description') ?? $author->description }}</textarea>
     @error('description')
         <div class="text-danger mt-2">
              {{ $message }}
         </div>
     @enderror
</div>

<div class="form-group">
     <label for="image">Gambar</label>
     <input type="file" name="image" id="image" value="{{ old('image') ?? $author->image }}" class="form-control">
    

     <div>
          <img style="margin-top:20px; height:250px; width:250px;" src="{{ $author->getImage() }}"> 
     </div>
</div>

