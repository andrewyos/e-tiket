<div class="col-12 mt-4">
    <div class="card">
      <div class="card-header">
        <b><i class="fa fa-users"></i> Data User Petix <?= date('d/m/Y') ?></b>
      </div>
      <hr class="m-0 p-0">
      <div class="card-body">
        <table class="table table-sm table-hover">
          <tr class="bg-info text-white">
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Role</th>
            <th>Action</th>
          </tr>
          <?php foreach($user as $key => $u): ?>
          <tr>
            <td><?= ++$key; ?></td>
            <td><?= $u['nama'] ?></td>
            <td><?= $u['username'] ?></td>
            <td><span class="badge <?= $u['id_level'] == 1 ? 'badge-primary' : 'badge-success text-white' ?>"><?= $u['nama_level'] ?></span></td>
            <td>
              <a href="#" class="btn btn-sm pt-0 pb-0 btn-info"><i class="fa fa-edit"></i></a>
              <a href="#" class="btn btn-sm pt-0 pb-0 btn-danger"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
</div>
