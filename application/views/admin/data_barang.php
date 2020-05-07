<div class="container-fluid">
      <button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#tambahData"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

      <table class="table table-border">
            <tr>
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Keterangan</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th colspan="3" >Aksi</th>
            </tr>

            <?php
            $no="1";
            foreach ($barang as $brg) : ?>
            
            <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $brg->nama_barang ?></td>
                  <td><?php echo $brg->keterangan ?></td>
                  <td><?php echo $brg->kategori ?></td>
                  <td><?php echo $brg->harga ?></td>
                  <td><?php echo $brg->stok ?></td>
                  <td><?php echo anchor('admin/Data_barang/detail_admin/' .$brg->id_barang,'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?></td>
                  <td><?php echo anchor('admin/Data_barang/edit/' .$brg->id_barang,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
                  <td><?php echo anchor('admin/Data_barang/hapus/' .$brg->id_barang,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
            </tr>

            <?php endforeach; ?>
      </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/Data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">  
            <div class="form-group">
                  <label for="">Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control">
            </div>

            <div class="form-group">
                  <label for="">Keterangan</label>
                  <input type="text" name="keterangan" class="form-control">
            </div>

            <div class="form-group">
                  <label for="">Kategori</label>
                  <select class="form-control" name="kategori">
                        <option>Elektronik</option>
                        <option>Pakaian Pria</option>
                        <option>Pakaian Wanita</option>
                        <option>Pakaian Anak-Anak</option>
                        <option>Peralatan Olahraga</option>
                  </select>
            </div>

            <div class="form-group">
                  <label for="">Harga</label>
                  <input type="text" name="harga" class="form-control">
            </div>

            <div class="form-group">
                  <label for="">Stok</label>
                  <input type="text" name="stok" class="form-control">
            </div>

            <div class="form-group">
                  <label for="">Gambar Produk</label><br>
                  <input type="file" name="gambar" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>