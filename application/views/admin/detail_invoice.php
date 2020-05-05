<div class="container-fluid">

      <h4>Detail Pesanan <div class="btn btn-sm btn-success">No Invoice : <?php echo $invoice->id ?></div></h4>

      <table class="table table-bordered table-hover table-striped">

            <tr>
                  <th>ID Barang</th>
                  <th>Nama Produk</th>
                  <th>Jumlah Pesanan</th>
                  <th>Harga Satuan</th>
                  <th>Subtotal</th>
            </tr>

            <?php 
                  $total =0;
                  foreach ($pesanan as $p) : 
                        $subtotal = $p->jumlah * $p->harga;
                        $total += $subtotal; 
            ?>

            <tr>
                  <td><?php echo $p->id_barang ?></td>
                  <td><?php echo $p->nama_barang ?></td>
                  <td><?php echo $p->jumlah ?></td>
                  <td>Rp. <?php echo number_format($p->harga,0,',','.') ?></td>
                  <td>Rp. <?php echo number_format($subtotal,0,',','.') ?></td>
            </tr>

            <?php endforeach; ?>

            <tr>
                  <td colspan="4" align="center">Total</td>
                  <td>Rp. <?php echo number_format($total,0,',','.') ?></td>
            </tr>
            
      </table>

      <a href="<?php echo base_url('admin/Invoice/index/') ?>"><div class="btn btn-sm btn-danger">Back</div></a>

</div>