<div class="container-fluid">
      <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                  <div class="btn btn-sm btn-danger">
                        <?php $grand_total = 0;
                        if ($keranjang = $this->cart->contents()) 
                        {
                              foreach ($keranjang as $item)
                              {
                                    $grand_total = $grand_total + $item['subtotal'];
                              }
                        echo "<h5>Total Belanja Anda : Rp. ". number_format($grand_total,0,',','.');
                        
                         ?>
                  </div>

                  <h3 class="mt-3">Input Alamat pengiriman dan Pembayaran</h3>
                  <form method="post" action="<?php echo base_url('Dashboard/proses_pesanan') ?>">

                        <div class="form-group">
                              <label for="">Nama Lengkap</label>
                              <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                        </div>

                        <div class="form-group">
                              <label for="">Alamat Lengkap</label>
                              <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                        </div>

                        <div class="form-group">
                              <label for="">Nomor Telepon</label>
                              <input type="text" name="no_tlp" placeholder="Nomor Telepon Anda" class="form-control">
                        </div>

                        <div class="form-group">
                              <label for="">Kurir</label>
                              <select class="form-control">
                                    <option value="">JNE</option>
                                    <option value="">Tiki</option>
                                    <option value="">SiCepat</option>
                                    <option value="">NinjaXpress</option>
                              </select>
                        </div>

                        <div class="form-group">
                              <label for="">Bank Transfer</label>
                              <select class="form-control">
                                    <option value="">BCA - XXXXX</option>
                                    <option value="">BNI - XXXXX</option>
                                    <option value="">Mandiri - XXXXX</option>
                              </select>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
                        
                  </form>
                  <?php 
                  }else {
                        echo "Keranjang masih kosong";
                  }
                  ?>
                  </div>
            </div>

            <div class="col-md-2"></div>
      </div>

</div>