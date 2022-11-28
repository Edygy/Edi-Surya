<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
<div class="col-lg">
<!-- pesan eror -->
    <?php if (validation_errors()) : ?>
        <div class="alert alert-success" role="alert">
            <?php validation_errors(); ?>
        </div>
        <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
    <!-- akhir pesan eror -->

    <!-- //tombol tambah -->
<a href="" class="btn btn-primary mb-3" class="btn btn-primary" data-toggle="modal"
data-target="#logoutModal">ADD SUBMENU</a>
<!-- tabel -->
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">TITLE</th>
            <th scope="col">MENU</th>
            <th scope="col">URL</th>
            <th scope="col">ICON</th>
            <th scope="col">ACTIVE</th>
            <th scope="col">ACTION</th> 

    
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($subMenu as $Sm) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $Sm['title']; ?></td>
                <td><?= $Sm['menu']; ?></td>
                <td><?= $Sm['url']; ?></td>
                <td><?= $Sm['icon']; ?></td>
                <td><?= $Sm['is_active']; ?></td>
                <td>            
                    <a href="" class="badge badge-success" data-toggle="modal" data-target="#exampleModalsubedit<?= $Sm['id']; ?>">EDIT</a>  
                    <a href="<?= base_url('menu/hapus/'); ?><?= $Sm['id'];?>"
                    class="badge badge-danger" onclick="return confirm('YAKIN DECK!?');">DELETE</a>
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

<!-- MODAL -->

<div class="modal fade" id="logoutModal" tabindex="-1" aria-labellebdy="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">ADD NEW SUBMENU</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                    </div>
                    <div class="form-group">
                        <select name="Submenu_id" id="Submenu_id" class="form-control">
                            <?php foreach ($Submenu as $sm) : ?>
                                <option value="<?= $sm['id']; ?>"><?= $sm['submenu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                    </div>
                    <div class="form group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" aria-label="Checkbox fot following text input" checked>
                        <label for="is_active" class="form_check_label">Aktif</label>
                        </div>
                    </div>
                </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
            <button type="submit" class="btn btn-primary" >ADD</button>
        </div>
        </form>
        </div>
    </div>
</div>



<!-- Modal edit -->

<?php foreach($subMenu as $Sm) : ?>

<div class="modal fade" id="exampleModalsubedit<?= $Sm['id']; ?>" tabindex="-1" aria-labellebdy="exampleModalsubeditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalsubeditLabel">EDIT SUBMENU </h5>
               
                <span aria-hidden="true">&times;</span>
            </div>
            <form action="<?= base_url('menu/submenuedit'); ?>" method="post">
                <div class="modal-body">
                    <div class="form group">
                        <input type="text" value="<?= $Sm['title'] ?>" class="form-control" id="title" name="title" placeholder="Submenu title">
                    </div>
                    <div class="form group">
                        <input type="hidden" class="form-control" id="id" name="id" readonly value="<?= $Sm['id'] ?>">


                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                        <option value="<?= $Sm['menu_id']; ?>"><?= $Sm['menu']; ?></option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form group">
                        <input type="text" value="<?= $Sm['url']?>" class="form-control" id="url" name="url" placeholder="Submenu url">
                    </div>
                    <div class="form group">
                        <input type="text" value="<?= $Sm['icon']?>" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" aria-label="Checkbox fot following text input" checked>
                        <label for="is_active" class="form_check_label">Aktif</label>
                        </div>
                    </div>
                </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
            <button type="submit" class="btn btn-primary" >CHANGE</button>
        </div>
        </form>
        </div>
    </div>
</div>

<?php endforeach; ?>

