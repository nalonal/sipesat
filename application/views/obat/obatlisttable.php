<?php defined('BASEPATH') OR exit('') ?>

<div class='col-sm-6'>
    <?= isset($range) && !empty($range) ? $range : ""; ?>
</div>

<div class='col-sm-6 text-right'><!--<b>Items Total Worth/Price:</b> &#8358;<?=$cum_total ? number_format($cum_total, 2) : '0.00'?>--></div>

<div class='col-xs-12'>
    <div class="panel panel-primary">
        <!-- Default panel contents -->
        <div class="panel-heading">Items</div>
        <?php if($allItems): ?>
        <div class="table table-responsive">
            <table class="table table-bordered table-striped" style="background-color: #f5f5f5">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kode Barang</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Minimal</th>
                        <!--
                        <th>Harga</th>
                        <th>Jumlah Pemakaian</th>
                        <th>Jumlah Pengeluaran</th>-->
                        <th>Keterangan</th>
                        <th>Update Data</th>
                        <!--<th>EDIT</th> -->
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 0;
                    foreach($allItems as $get): ?>
                    <tr>
                        <input type="hidden" value="<?=$get->id?>" class="curItemId">
                        <th class="itemSN"><?=$sn?>.</th>
                        <td><span id="itemName-<?=$get->id?>"><?=$get->name?></span></td>
                        <td><span id="itemCode-<?=$get->id?>"><?=$get->code?></td>
                        <td><span id="itemCode-<?=$get->id?>"><?=$get->kategori?></td>
                        <?php
                            if($get->quantity <= $get->minimal){
                                $kurang[$no] = $get->name;
                            }
                        ?>
                        <td class="<?=$get->quantity <= $get->minimal ? 'bg-danger' : ($get->quantity <= ($get->minimal + 10) ? 'bg-warning' : '')?>">
                            <span id="itemQuantity-<?=$get->id?>"><?=$get->quantity?></span>
                        </td>
                        <td><span id="itemMinimal-<?=$get->id?>"><?=$get->minimal?></td>
                        <!--
                        <td>&#8358;<span id="itemPrice-<?=$get->id?>"><?=number_format($get->unitPrice, 2)?></span></td>
                        <td><?=$this->genmod->gettablecol('transactions', 'SUM(quantity)', 'itemCode', $get->code)?></td>
                        <td>
                            &#8358;<?=number_format($this->genmod->gettablecol('transactions', 'SUM(totalPrice)', 'itemCode', $get->code), 2)?>
                        </td>
                        -->
                        <td>
                            <span id="itemDesc-<?=$get->id?>" data-toggle="tooltip" title="<?=$get->description?>" data-placement="auto">
                                <?=word_limiter($get->description, 15)?>
                            </span>
                        </td>
                        <td><a class="pointer updateStock" id="stock-<?=$get->id?>">Update Data</a></td>
                        <!--<td class="text-center text-primary">
                            <span class="editItem" id="edit-<?=$get->id?>"><i class="fa fa-pencil pointer"></i> </span>
                        </td>-->
                        <td class="text-center"><i class="fa fa-trash text-danger delItem pointer"></i></td>
                    </tr>
                    <?php 
                    $sn++; 
                    $no++;?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php if(isset($kurang)){ ?>
        <br>Terdapat Barang Yang Kurang Antara lain :
        <?php foreach($kurang as $data): ?>
            <ul><li><?php echo $data ?></li></ul>
        <?php endforeach; ?>
        <?php } ?>
        <!-- table div end-->
        <?php else: ?>
        <ul><li>No items</li></ul>
        <?php endif; ?>
    </div>
    <!--- panel end-->
</div>

<!---Pagination div-->
<div class="col-sm-12 text-center">
    <ul class="pagination">
        <?= isset($links) ? $links : "" ?>
    </ul>
</div>
