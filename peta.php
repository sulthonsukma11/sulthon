<?php
$title = "PETA BOYOLALI";
include_once "header.php";
?>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div class="panel-heading">
              <h2 class="panel-title"><strong> - TAMPILAN PETA BOYOLALI - </strong></h2>
            </div>
            

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

<div class="page-header">
    <h1>Peta SIG</h1>
    <iframe src="webgiskuh\index.html"
width="1350" height="400" frameborder="0" style="border:5"></iframe>
</div>
<div id="map" style="height: 500px;"></div>

            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
<?php include_once "footer.php"; ?>