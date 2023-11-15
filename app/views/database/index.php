<div class="container-fluid bg-dark text-light p-5">
    <div class="container bg-dark p-5">

        <?php Flasher::flash(); ?>

        <div class="row justify-content-between align-items-center mb-3">
            <div class="col-8">
                <h1 class="display-4">Dummy Database</h1>
            </div>
            <div class="col-4">
                <form action="<?= BASEURL; ?>/dummy/search" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search data here..." name="keyword"
                            id="keyword" autocomplete="off">
                        <button class="btn btn-primary" type="submit" id="searchButton">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <hr>

        <ul class="list-group">
            <?php foreach ($data['datas'] as $dat): ?>

                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <?= $dat['name']; ?>
                    <a href="<?= BASEURL; ?>/dummy/detail/<?= $dat['id']; ?>"
                        class="badge bg-success rounded-pill py-2">Detail</a>
                </li>

            <?php endforeach ?>
        </ul>

        <br><br>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertModal">
            Insert Data
        </button>

    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> INSERT DATA </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/dummy/insert" method="post">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="class" class="form-label">Class</label>
                        <input type="text" class="form-control" id="class" name="class">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Insert</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>