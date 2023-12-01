<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
    <div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Karyawan</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('/admin/create'); ?>" class="btn btn-info">Tambah</a>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Divisi</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($karyawan as $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->id; ?></td>
                        <td><?= $row->Nama; ?></td>
                        <td><?= $row->Umur; ?></td>
                        <td><?= $row->Divisi; ?></td>
                        <td>
                            <a title="Edit" href="<?= base_url("/admin/edit/$row->id"); ?>" class="btn btn-warning">Edit</a>
                            <a title="Delete" href="<?= base_url("/admin/delete/$row->id") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>