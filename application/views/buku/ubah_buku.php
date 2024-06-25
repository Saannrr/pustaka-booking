<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="card-body">
        <form action="<?= base_url('buku/ubahBuku/' . $buku['id']); ?>" method="post">
            <input type="hidden" name="id" value="<?= $buku['id']; ?>">
            <div class="form-group">
                <label for="judul_buku">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Judul Buku" value="<?= $buku['judul_buku']; ?>">
                <?= form_error('judul_buku', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="id_kategori">Kategori</label>
                <select class="form-control" id="id_kategori" name="id_kategori">
                    <?php foreach ($kategori as $k) : ?>
                        <option value="<?= $k['id_kategori']; ?>" <?= $k['id_kategori'] == $buku['id_kategori'] ? 'selected' : ''; ?>><?= $k['kategori']; ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('id_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="pengarang">Nama Pengarang</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Nama Pengarang" value="<?= $buku['pengarang']; ?>">
                <?= form_error('pengarang', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="penerbit">Nama Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Nama Penerbit" value="<?= $buku['penerbit']; ?>">
                <?= form_error('penerbit', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun Terbit" value="<?= $buku['tahun']; ?>">
                <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="isbn">Nomor ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Nomor ISBN" value="<?= $buku['isbn']; ?>">
                <?= form_error('isbn', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok" value="<?= $buku['stok']; ?>">
                <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>