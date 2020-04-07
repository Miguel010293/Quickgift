<?php 
include("adminMenu.php");
include("headerPersona.php");
include("../dao/DAOinvitacion.php");
$resultado = DAOinvitado::listarPersonaNoAsiste();
?>

<div class="container">
    
    
    <div class="panel panel-primary filterable">

        <div class="panel-heading">
            <h3 class="panel-title">Personas Invitadas</h3>
            <div class="pull-right">
                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtrar</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="filters">

                    <th><center><input type="text" class="form-control" placeholder="                 Nombre" disabled></center></th>
                    <th><input type="text" class="form-control" placeholder="                  Confirmacion" disabled></th>
                    <th><input type="text" class="form-control" placeholder="                 Acompañantes" disabled></th>
                    <th><input type="text" class="form-control" placeholder="                   Regalo" disabled></th>
                    <th><input type="text" class="form-control" placeholder="               Regalo Opcional" disabled></th>
                    


                </tr>
            </thead>
            <?php foreach ($resultado as $data) { ?>
                <tbody>
                    <tr>

                        <td>
                            <center><strong><?php echo $data[0] ?></strong></center>
                        </td>
                        <td>
                            <center><strong><?php echo $data[1] ?></strong></center>
                        </td>
                        <td>
                            <center><strong><?php echo $data[2] ?></strong></center>
                        </td>
                        <td>
                            <center><strong><?php echo $data[3] ?></strong></center>
                        </td>
                        <td>
                            <center><strong><?php echo $data[4] ?></strong></center>
                        </td>

                    </tr>
                <?php } ?>
                </tbody>
        </table>
    </div>

</div>

<script type="text/javascript">
  
   

    /*
    Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
    */
    $(document).ready(function() {
        $('.filterable .btn-filter').click(function() {
            var $panel = $(this).parents('.filterable'),
                $filters = $panel.find('.filters input'),
                $tbody = $panel.find('.table tbody');
            if ($filters.prop('disabled') == true) {
                $filters.prop('disabled', false);
                $filters.first().focus();
            } else {
                $filters.val('').prop('disabled', true);
                $tbody.find('.no-result').remove();
                $tbody.find('tr').show();
            }
        });

        $('.filterable .filters input').keyup(function(e) {
            /* Ignore tab key */
            var code = e.keyCode || e.which;
            if (code == '9') return;
            /* Useful DOM data and selectors */
            var $input = $(this),
                inputContent = $input.val().toLowerCase(),
                $panel = $input.parents('.filterable'),
                column = $panel.find('.filters th').index($input.parents('th')),
                $table = $panel.find('.table'),
                $rows = $table.find('tbody tr');
            /* Dirtiest filter function ever ;) */
            var $filteredRows = $rows.filter(function() {
                var value = $(this).find('td').eq(column).text().toLowerCase();
                return value.indexOf(inputContent) === -1;
            });
            /* Clean previous no-result if exist */
            $table.find('tbody .no-result').remove();
            /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
            $rows.show();
            $filteredRows.hide();
            /* Prepend no-result row if all rows are filtered */
            if ($filteredRows.length === $rows.length) {
                $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="' + $table.find('.filters th').length + '">No se encuentra resultados</td></tr>'));
            }
        });
    });
</script>


</body>

</html>