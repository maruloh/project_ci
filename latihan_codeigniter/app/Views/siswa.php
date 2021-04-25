<?= $this->extend("layouts/template"); ?>

<?= $this->section("content"); ?>

<h3>Data Siswa</h3>
<table class="table-bordered table-striped">
    <tr>
        <th>Nama</th>
        <th>NIS</th>
        <th>Tanggal Lahir</th>
    </tr>
    <tr>
        <td>Andi Saputra</td>
        <td>101</td>
        <td>2003-12-22</td>
    </tr>
    <tr>
        <td>Maruloh</td>
        <td>128</td>
        <td>1988-12-28</td>
    </tr>
</table>

<?= $this->endSection(); ?>