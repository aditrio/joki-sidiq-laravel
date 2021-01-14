<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" id="form-edit" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="kelas-edit">Mata Pelajaran</label>
                  <input type="text" class="form-control" id="kelas-edit"   name="kelas" placeholder="Mata Pelajaran">
                  
                </div>
                <div class="form-group">
                  <label for="nim">Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" id="tanggal-edit"  placeholder="Tanggal">
                </div>
                
                
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal delete-->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" id="form-delete" method="post">
                {{method_field('DELETE')}}
                @csrf
            <p>Data akan dihapus secara permanen</p>         
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Nilai-->
<div class="modal fade" id="storeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Modul</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{route('store.modul')}}" id="form-store-modul" enctype="multipart/form-data" method="POST">
              @method('POST')
              @csrf
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" required name="judul"  class="form-control judul-store"  placeholder="Judul">
                
              </div>
              <div class="form-group">
                <label for="desc">Deskripsi</label>
                <input type="text" required name="desc"  class="form-control desc-store"  placeholder="Deskripsi modul">
             
              </div>

              <div class="form-group">
                <label for="nilai">File</label>
                <input type="file" required name="file" class="form-control file-store" placeholder="">
                {{-- <input type="text" hidden class="nilai-input" name="nilai" value=""> --}}

              </div>
              
              
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>