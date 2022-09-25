<?= $this->extend('templates/index') ?>
<?= $this->section('page-content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3 p-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>/img/<?= user()->user_image ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Username : <?= $user->username ?></h5>
                            <h5 class="card-title">Email : <?= $user->email ?></h5>
                            <h5 class="card-title">Role : <?= $user->name ?></h5>
                            <p class="card-text"><small class="text-muted">Bergabung pada : <?= $user->created_at ?></small></p>
                        </div>

                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
                    <a href="" class="btn btn-primary me-md-2" type="button">Edit</a>
                    <a href="<?= base_url() ?>/change_roll/<?= user()->id ?>" class="btn btn-primary ml-1" type="button">Jadikan admin</a>
                </div>

            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>