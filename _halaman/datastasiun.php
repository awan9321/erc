<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<?php
    $title="Data Stasiun";
    $judul="Data Stasiun";
    $url='datastasiun';
if(isset($_GET['tambah']) OR isset($_GET['ubah'])){
    $id_stasiun="";
    $nama_stasiun="";
    $latitude="";
    $longitude="";
    $alamat="";
    $jenis="";
    if(isset($_GET['ubah']) AND isset($_GET['id'])){
        $id=$_GET['id'];
        $db->where('id_stasiun',$id);
        $row=$db->ObjectBuilder()->getOne('meta_site');
        if($db->count>0){
            $id_stasiun=$row->id_stasiun;
            $nama_stasiun=$row->nama_stasiun;
            $latitude=$row->latitude;
            $longitude=$row->longitude;
            $alamat=$row->alamat;
            $jenis=$row->jenis;
        }
    }
?>
 
<?=content_open('Form Pengisian Data Stasiun')?>
        <form method="post">
            <div class="form-group">
                <label>ID Stasiun</label>
                <?=input_text('id_stasiun',$id_stasiun)?>
            <div class="form-group">
                <label>Nama Stasiun</label>
                <?=input_text('nama_stasiun',$nama_stasiun)?>
            </div>
            <div class="form-group">
                <label>Latitude</label>
                <?=input_text('nama_stasiun',$latitude)?>
            </div>
            <div class="form-group">
                <label>Latitude</label>
                <?=input_text('longitude',$longitude)?>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <?=input_text('alamat',$alamat)?>
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <?=input_text('jenis',$jenis)?>
            </div>
            <div class="form-group">
                <button type="submit" name="simpan" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
                <a href="<?=url($url)?>" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
            </div>
        </form>
<?=content_close()?>

<?php } else { ?>

<?=content_open('Tabel Data Stasiun')?>
<a href="<?=url($url.'&tambah')?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a> <br></br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>NAMA STASIUN</th>
            <th>LATITUDE</th>
            <th>LONGITUDE</th>
            <th>ALAMAT</th>
            <th>KODE_POS</th>
            <th>JENIS</th>
            <th>UBAH/HAPUS</th>
        </tr>
    </thead>

    <tbody>
        <?php
            $no=1;
            $getdata=$db->ObjectBuilder()->get('meta_site');
            foreach ($getdata as $row){
                ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$row->id_stasiun?></td>
                    <td><?=$row->nama_stasiun?></td>
                    <td><?=$row->latitude?></td>
                    <td><?=$row->longitude?></td>
                    <td><?=$row->alamat?></td>
                    <td><?=$row->kodepos?></td>
                    <td><?=$row->jenis?></td>
                    <td>
                        <span><a href="<?=url($url.'&ubah&id='.$row->id_stasiun)?>" class="btn btn-info"><i class="fa fa-edit"></i></a></span>
                        <span><a href="<?=url($url.'&hapus&id='.$row->id_stasiun)?>" class="btn btn-danger" onclick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i></a></span>
                    </td>
                </tr>
                <?php
                $no++;
            }
        ?>
    </tbody>
</table>
<?=content_close()?>
<?php } ?>
</div>
<?php
include '_layouts/footer.php';
?>