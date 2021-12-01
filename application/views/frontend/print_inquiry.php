<!DOCTYPE html>
<html><head></head><body>
<div class="table-responsive">
  <table id="tabel_inquiry" class="table table-bordered table-striped" width="100%" cellspacing="0">
      <thead class="thead-dark text-primary">
        <tr>    
          <th>No</th>	
          <th>Permintaan</th>
          <th>Negara</th>		
          <th>Detail</th>
        </tr>
      </thead>
        <?php $i=1;
        foreach($inquiries as $inquiry):?>
        <tr>
          <td><?=$i++?></td>
          <td><?=$inquiry->produk?></td>
          <td><?=$inquiry->negara?></td>
          <td><?=$inquiry->detail?></td>
        </tr>
        <?php endforeach?>
      </tbody>
    </table>
  </div>
</body></html>