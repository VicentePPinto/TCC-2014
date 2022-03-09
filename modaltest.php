<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 15/02/14
 * Time: 02:16
 */
$in=@$_GET["ifIn"];
$out=@$_GET["ifOut"];
$total=@$_GET["result"];

?>


<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
<!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Incluindo o JavaScript do Bootstrap -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Cabeçalho do modal</h3>
            </div>
            <div class="modal-body">
                <p>Um corpo fino …</p>
            </div>
            <div class="modal-footer ">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
        </div>
    </div>
</div>

<!-- sometime later, probably inside your on load event callback -->
<script>
    $("#myModal").on("show", function() {    // wire up the OK button to dismiss the modal when shown
        $("#myModal a.btn").on("click", function(e) {
            console.log("button pressed");   // just as an example...
            $("#myModal").modal('hide');     // dismiss the dialog
        });
    });

    $("#myModal").on("hide", function() {    // remove the event listeners when the dialog is dismissed
        $("#myModal a.btn").off("click");
    });

    $("#myModal").on("hidden", function() {  // remove the actual elements from the DOM when fully hidden
        $("#myModal").remove();
    });

    $("#myModal").modal({
                      // wire up the actual modal functionality and show the dialog
        "backdrop"  : "static",
        "keyboard"  : true,
        "show"      : true                     // ensure the modal is shown immediately
    });
</script>
<?php
include "Mascara.php";

$msc="Mascara";
$mascara= new $msc;
$result= $mascara->AllMascara();
$n=0;
while($dados = mysql_fetch_array($result))
{ $masc = new Mascara();
$masc->setDescricao($dados[1]);
?><div class="checkbox">
        <label class="checkbox-inline">
            <input type="checkbox" id="checkbox" name="checkbox<?php echo $n?>"
                   value="<?php echo $masc->getDescricao();?>"> <?php echo $masc->getDescricao();?>
        </label>
    </div>
<?php}?>