



<?php 
// <div class="content-wrapper">
include_once('./includes/config.php');

include('includes/header.php');

error_reporting(E_ALL);
ini_set("display_errors", 1);

$retour = $bdd->prepare("SELECT COUNT(*) AS total FROM reservation");
$retour->execute();

$reservationparpage=15;
$reponse=$retour->fetch(PDO::FETCH_ASSOC);
$totaldesreservation=$reponse['total'];
$nombredepage=ceil($totaldesreservation/$reservationparpage);
// var_dump($nombredepage);
if (isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $nombredepage)
{
	$page=intval($_GET['page']);
}
else
{
	$page=1;
}
 
$premierarticleafficher=$page*$reservationparpage-$reservationparpage;
$retour->closeCursor(); 

$response = $bdd->prepare('SELECT * FROM reservation ORDER BY id LIMIT :limit OFFSET :offset');
$response->bindValue(':limit', (int) $reservationparpage, PDO::PARAM_INT);
$response->bindValue(':offset', (int) $premierarticleafficher, PDO::PARAM_INT);
$response->execute();

?>
    <div class="box content-wrapper">
        <div class="box-header">
            <h3 class="box-title">reservations</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                            aria-describedby="example2_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">Nom</th>

                                    <th class="sorting" tabindex="0" aria-controls="Email" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending">Email</th>

                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending">heure de début</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">heure de fin</th>
									<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">nombre de personne</th>
									<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">description</th>	
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($donnees = $response->fetch()) {
                    echo '<tr role="row" class="odd">
                            <td class="sorting_1">'.$donnees['nom'].'</td>
                            <td>'.$donnees['email'].'</td>
                            <td>'.$donnees['start_time'].'</td>
							<td>'.$donnees['end_time'].'</td>
							<td>'.$donnees['nb_personnes'].'</td>
							<td>'.$donnees['description'].'</td>
                        </tr>';
                }
                $response->closeCursor(); 
                ?>
                            </tbody>
                            <tfoot>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">Nom</th>
                                    <th class="sorting" tabindex="0" aria-controls="Email" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending">Email</th>

                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending">heure de début</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">heure de fin</th>
									<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">nombre de personne</th>
									<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">déscription</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing <?= $premierarticleafficher + 1 ?> to <?= (($premierarticleafficher + $reservationparpage) > $totaldesreservation ) ? $totaldesreservation : $premierarticleafficher + $reservationparpage ?>
                            of <?= $totaldesreservation ?> </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous <?= ($page == 1) ? 'disabled'  : '' ?>" id="example2_previous"><a href="?page=<?= ($page == 1) ? $page : $page - 1 ?>"
                                        aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li>
                                <?php for ($i=1; $i <= $nombredepage; $i++) { 
                                    echo ' <li class="paginate_button active"><a href="?page='.$i.'" aria-controls="example2" data-dt-idx="'.$i.'"
                                    tabindex="0">'.$i.'</a></li>';
                                }
                                ?>
                               
                                
                                <li class="paginate_button next <?= ($nombredepage == $page) ? 'disabled'  : '' ?>" id="example2_next"><a href="?page=<?= ($nombredepage == $page) ? $page : $page + 1 ?>" aria-controls="example2"
                                        data-dt-idx="7" tabindex="0">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>

    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php
include_once('includes/header.php');

function build_calendar($month, $year) {
	$daysOfWeek = array('Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi');
	$firstDayOfMonth = mktime(0,0,0,$month,1,$year);
	$numberDays = date('t',$firstDayOfMonth);
	$dateComponents = getdate($firstDayOfMonth);
	$monthName = $dateComponents['month'];
	$dayOfWeek = $dateComponents['wday'];
	$calendar = "<table class='calendar table table-condensed table-bordered'>";
	$calendar .= "<h2>$monthName $year</h2>";
	$calendar .= "<tr>";
	foreach($daysOfWeek as $day) {
		$calendar .= "<th class='header'>$day</th>";
	}
	$currentDay = 1;
	$calendar .= "</tr><tr>";	
	if ($dayOfWeek > 0) {
		$calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
	}
	$month = str_pad($month, 2, "0", STR_PAD_LEFT);
	while($currentDay <= $numberDays){
		if($dayOfWeek == 7){
			$dayOfWeek = 0;
			$calendar .= "</tr><tr>";
		}
		$currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
		$date = "$year-$month-$currentDayRel";
		// Is this today?
		if(date('Y-m-d') == $date) {
			$calendar .= "<td class='day success' rel='$date'><b>$currentDay</b></td>";
		} else {
			$calendar .= "<td class='day card' rel='$date'>$currentDay</td>";
		}
		$currentDay++;
		$dayOfWeek++;
	}
	if($dayOfWeek != 7){
		$remainingDays = 7 - $dayOfWeek;
		$calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";
	}
	$calendar .= "</tr>";
	$calendar .= "</table>";
	return $calendar;
}
 
$calendar = build_calendar(date('m'), date('Y'));
$calendar = '<div>' . $calendar . '</div>';
$calendar .= '<style type="text/css">table tbody tr td, table tbody tr th { text-align: center; }</style>';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
				<?php print $calendar; ?>
</div>

<?php
include_once('includes/footer.php');
?>
