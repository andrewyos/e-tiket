<div class="col-lg-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Film</h4>
                                <div class="table-responsive">
                                    <table class="table header-border table-hover verticle-middle">
                                    <?= $this->session->flashdata('notif'); ?>
            
                                        <thead>
                                            <tr style="background-color: #7571f9; color: white;">
                                                <th scope="col">#</th>
                                                <th scope="col">Film</th>
                                                <th scope="col">Genre</th>
                                                <th scope="col">Durasi</th>
                                                <th scope="col" class="text-center">Rating</th>
                                                <th scope="col">Sutradara</th>
                                                <th scope="col">Popularity</th>
                                                <th scope="col">Sales</th>
                                                <th scope="col" class="text-center">Sales</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($film->result_array()as $f):
                                                $nama_film = $f['nama_film'];
                                                $gambar = $f['gambar'];
                                                $genre = $f['genre'];
                                                $durasi = $f['durasi'];
                                                $sutradara = $f['sutradara'];
                                                $rating = $f['rating'];

                                            ?>
                                            <tr>
                                                <th><?= $no++; ?></th>
                                                <td style="color: black;"><b><?= $nama_film; ?></b></td>
                                                <th><?= $genre; ?></th>
                                                <th><?= $durasi; ?></th>
                                                <th class="text-center"><h5 class="label gradient-3 btn-rounded"><?= $rating; ?></h5></th>
                                                <th><?= $sutradara; ?></th>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-1" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-1 btn-rounded">70%</span>
                                                </td>
                                                <th class="text-center">
                                                    <a href="" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-trash"></i> Update</a>
                                                    <a href="<?= base_url('admin/delete_film') ?>/<?= $f['id_film']; ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apa anda yakin?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                                                </th>
                                            </tr>
                                            <?php endforeach; ?>
                                            <!-- <tr>
                                                <th>2</th>
                                                <td>Textiles</td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-3" style="width: 40%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label btn-rounded gradient-2">70%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Milk Powder</td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-3" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label btn-rounded gradient-3">70%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td>Vehicles</td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-8" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-8 btn-rounded">70%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <td>Boats</td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-1" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-1 btn-rounded">70%</span>
                                                </td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <button class="btn btn-block btn-info" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Add New Data</button>
                        </div>
                    </div>

                   
<!-- MODAL TAMBAH -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Film</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('admin/add_film'); ?>" method="post">
             <i class="fa fa-film btn btn-info btn-sm btn-block"> Nama Film</i>
             <input type="text" name="nama" class="form-control" placeholder="Nama Film" required><br>
             <i class="fa fa-film btn btn-info btn-sm btn-block"> Poster Gambar</i>
             <input type="file" name="gambar" class="form-control" placeholder="Gambar" required><br>
             <i class="fa fa-map-marker btn btn-info btn-sm btn-block"> Genre</i>
             <select name="genre" class="form-control" required>
                    <option value="">--Pilih--</option>
                    <option value="Horror">Horror</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Romantic">Romantic</option>
                    <option value="Drama">Drama</option>
                    <option value="Comedy">Comedy</option>
             </select><br>
             <i class="fa fa-film btn btn-info btn-sm btn-block"> Durasi</i>
             <input type="text" name="durasi" class="form-control" placeholder="... Jam ... Menit" required><br>
             <i class="fa fa-film btn btn-info btn-sm btn-block"> Rating</i>
             <select name="rating" class="form-control" required>
                    <option value="">--Pilih--</option>
                    <option value="SU">SU</option>
                    <option value="D17+">D17+</option>
                    <option value="R">R</option>
                    <option value="RBO">RBO</option>
             </select><br>
             <i class="fa fa-film btn btn-info btn-sm btn-block"> Sutradara</i>
             <input type="text" name="sutradara" class="form-control" placeholder="Sutradara" required><br>
     
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      
      </form>
      </div>
    </div>
  </div>
</div>