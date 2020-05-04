<div class="container-fluid">
      <h4>Keranjang Belanja</h4>

      <table class="table table-border table-striped table-hover">
            <tr>
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Subtotal</th>
            </tr>

            <?php $no=1; 
            foreach ($this->cart->contents() as $items) : ?>

                  <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $items['name'] ?> </td>
                        <td><?php echo $items['qty'] ?> </td>
                        <td>Rp <?php echo number_format($items['price'],0,',','.') ?> </td>
                        <td>Rp <?php echo number_format($items['subtotal'],0,',','.') ?> </td>
                  </tr>

            <?php endforeach; ?>
                  <tr>  
                        <td colspan="4" align="center">Total</td>
                        <td><?php echo number_format($this->cart->total(),0,',','.')  ?> </td>
                  </tr>
      
      </table>

</div>