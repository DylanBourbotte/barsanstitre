<?php include('includes/header.php');

//ACTIVATION DES ERREURS
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <?php
//connection a la base de donnée
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=bar-sans-titre;charset=utf8', 'root', 'philippe');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
$retour = $bdd->prepare("SELECT COUNT(*) AS total FROM contacts");
$retour->execute();

$contactsparpage=15;
$reponse=$retour->fetch(PDO::FETCH_ASSOC);
$totaldescontacts=$reponse['total'];
$nombredepage=ceil($totaldescontacts/$contactsparpage);
var_dump($nombredepage);
if (isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $nombredepage)
{
        $page=intval($_GET['page']);
}
else
{
        $page=1;
}
 
$premierarticleafficher=$page*$contactsparpage-$contactsparpage;
$retour->closeCursor(); 

$response = $bdd->prepare('SELECT * FROM contacts ORDER BY id LIMIT :limit OFFSET :offset');
$response->bindValue(':limit', (int) $contactsparpage, PDO::PARAM_INT);
$response->bindValue(':offset', (int) $premierarticleafficher, PDO::PARAM_INT);
$response->execute();

?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Contact</h3>
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
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">Sujet</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending">message</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($donnees = $response->fetch()) {
                    echo '<tr role="row" class="odd">
                            <td class="sorting_1">'.$donnees['nom'].'</td>
                            <td>'.$donnees['email'].'</td>
                            <td>'.$donnees['sujet'].'</td>
                            <td>'.$donnees['messages'].'</td>
                            <td>'.$donnees['date'].'</td>
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
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">Sujet</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending">message</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">Date</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing <?= $premierarticleafficher + 1 ?> to <?= (($premierarticleafficher + $contactsparpage) > $totaldescontacts ) ? $totaldescontacts : $premierarticleafficher + $contactsparpage ?>
                            of <?= $totaldescontacts ?> </div>
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

<?php include('includes/footer.php'); ?>