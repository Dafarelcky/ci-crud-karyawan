<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Karyawan</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('admin/update/'. $karyawan->id) ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $karyawan->Nama; ?>">
                </div>

                <div class="form-group">
                    <input type="hidden" name="id" value="<?= $karyawan->id; ?>">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>