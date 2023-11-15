<div class="container-fluid bg-dark text-light p-5">
    <div class="container bg-dark p-5">
        <h1 class="display-4">Hello
            <?= $data['datas']['name']; ?> (
            <?= $data['datas']['id']; ?> )
        </h1>
        <hr>
        <p>You're in
            <?= $data['datas']['class']; ?> class, and your phone number is
            <?= $data['datas']['phone']; ?>
        </p>
        <a href="<?= BASEURL; ?>/dummy" class="btn btn-primary">Back</a>
        <a href="<?= BASEURL; ?>/dummy/delete/<?= $data['datas']['id']; ?>" class="btn btn-danger mx-2">Delete</a>
        <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal">Update</a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> UPDATE DATA </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/dummy/update/<?= $data['datas']['id']; ?>" method="post">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?= $data['datas']['name']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="class" class="form-label">Class</label>
                        <input type="text" class="form-control" id="class" name="class"
                            value="<?= $data['datas']['class']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone"
                            value="<?= $data['datas']['phone']; ?>">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>