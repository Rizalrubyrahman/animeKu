<div class="modal fade" id="author{{ $author->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
          <div class="modal-content">
               <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="float: left;">Hapus Author</h3>
                    
                    </button>
               </div>
               <div class="modal-body">
                    <form action="{{ url('/admin/author/'.$author->id) }}" method="POST" enctype="multipart/form-data">
                         @csrf
                         @method('delete')
                         Yakin mau di hapus ?
               </div>
               <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                         <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
               </div>
          </div>
     </div>
</div>