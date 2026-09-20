<?php require 'helpers.php'; $courses=get_all_courses(); ?>
<!DOCTYPE html><html><body>
<h1>KursusKu - 6 Kursus</h1>
<?php foreach($courses as $c): $akhir=calculate_fee($c['harga'],$c['diskon']); $st=get_status_kursus($c['sisa']); ?>
<div><b><?=$c['nama']?></b> - <?=format_rupiah($akhir)?> - <?=$st?></div>
<?php endforeach; ?>
<p><?=server_time_wib()?></p>
</body></html>