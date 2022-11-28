<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
<div class="col-lg-6">
<!-- pesan eror -->
    <?= form_error(
        'menu',
        '<div class="alert alert-success" role="alert">
        </div>'
    ); ?>
    <?= $this->session->flashdata('message'); ?>
    <!-- akhir pesan eror -->

    <!-- //tombol tambah -->
<a href="" class="btn btn-primary mb-3" class="btn btn-primary" data-toggle="modal"
data-target="#logoutModal">ADD MENU</a>
<!-- tabel -->
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">MENU</th>
            <th scope="col">ACTION</th>
    
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($menu as $m) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $m['menu']; ?></td>
                <td>
                    <a href="#" class="badge badge-success badge-sm" data-toggle="modal" data-popup="tooltip" data-placement="top" title="Edit" data-target="#newModalLabel<?= $m['id']; ?>">EDIT</a>
                    <a onclick="return confirm('YAKIN DECK!?')" href="<?= base_url('menu/hapusmenu/') . $m['id']; ?>" class="badge badge-danger badge-sm tombol-hapus">DELETE</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
    </tbody>
</table>
<!-- Akhir tabel -->

</div>

</div>

<!-- misal eroor tinggal aktifkan divnya-->
        <!-- </div> -->
</div>

<!-- Modal -->

<div class="modal fade" id="logoutModal" tabindex="-1" aria-labellebdy="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">ADD NEW MENU</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu Nama">
                    </div>
                </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
            <button type="button" class="btn btn-primary" >ADD</button>
        </div>
        </form>
        </div>
    </div>
</div>


<!-- Modal Edit -->

<?php foreach($menu as $m) : ?>
<div class="modal fade" id="newModalLabel<?= $m['id']; ?>" tabindex="-1" role="document"
aria-labelledby="exampleModalLabeledit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newModalLabel">EDIT MENU</h5>
                <button type="button" class="close"
                data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form action="<?= base_url('menu/menuedit'); ?>" method="post">
                <div class="form-group">
                <input type="hidden" class="form-control" readonly value="<?= $m['id']; ?>" name="id" id="id">  
                </div>
                <div class="form-group">
                <input type="text" class="form-control" value="<?= $m['menu']; ?>" name="menu" id="menu">  
                </div>
                     <div class="modal-foooter">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                        <button type="submit" name="edit" class="btn btn-primary">
                        <i class="fas fa-fw fa-pencil-alt fa-sm"></i>EDIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>