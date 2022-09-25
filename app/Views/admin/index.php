<?= $this->extend('templates/index') ?>

<?= $this->section('page-content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Hello <?= user()->username; ?></h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $id = 1 ?>
            <?php foreach ($users as $i) : ?>
                <tr>
                    <th scope="row"><?= $id++ ?></th>
                    <td><?= $i->username; ?></td>
                    <td><?= $i->email ?></td>
                    <td><?= $i->name ?></td>
                    <td>
                        <a href="<?= base_url('admin/' . $i->userid) ?>" class="btn-sm btn-info">detail</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>


</div>
<?= $this->endSection() ?>