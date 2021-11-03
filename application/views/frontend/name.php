    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <form action="<?= base_url('profile/changeName') ?>" method="post">
                <div class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md">
                            <div class="row g-3">
                                <div class="col">
                                    <input type="text" name="oldName" id="oldName" class="form-control" placeholder="First name" aria-label="First name" value="<?= $user['nama'] ?>">
                                </div>
                                <div class="col">
                                    <input type="text" name="newName" id="newName" class="form-control" placeholder="Last name" aria-label="Last name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>

    </section>