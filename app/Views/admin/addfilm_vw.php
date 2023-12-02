<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>General Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Pengisian</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Pengisian Film</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="<?= base_url('admin/addfilm/tambahfilm'); ?>" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judu Film</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Judul Film" name="judul">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Poster Film</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Deskripsi</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Deskripsi Film" name="deskripsi">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>

                        <div class="dropdown">
                            <form >
                                <label for="cars">Genre Film</label>
                                <select name="cars" id="cars">
                                <?php foreach ($list as $kat => $baris) { ?>
                                    <option ><?=$baris['nama_kategori']; ?></option>
                                    <?php }?>
                                </select>
                                
                            </form>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a type="submit" class="btn btn-primary" href="addfilm/tambahfilm">Submit</a>
                        </div>
                    </form>