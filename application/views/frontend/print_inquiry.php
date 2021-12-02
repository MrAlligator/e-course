<div class="text-center"><h3>Data Produk</h3></div>
  <table border="0.1" id="tabel_inquiry" class="table table-primary table-striped" width="100%" cellspacing="0">
      <thead class="thead-dark text-primary">
        <tr>    
          <th scope="col">No</th>	
          <th scope="col">Permintaan</th>
          <th scope="col">Negara</th>		
          <th scope="col">Detail</th>
        </tr>
      </thead>
        <?php $i=1;
        foreach($inquiries as $inquiry):?>
        <tr>
          <td scope="row"><?=$i++?></td>
          <td><?=$inquiry->produk?></td>
          <td><?=$inquiry->negara?></td>
          <td><?=$inquiry->detail?></td>
        </tr>
        <?php endforeach?>
      </tbody>
    </table>