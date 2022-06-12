<h1>RANKINGS</h1>
<table id="rankingtbl" class="table table-striped table-bordered hover" style="width:100%">
    <thead>
        <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Total Clicks(All)</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $conn = new mysqli('localhost', 'root', '', 'infoans');
            $sql4 = "SELECT SUM(clicks) AS click_sum, user_id, users.fname, users.lname FROM click INNER JOIN users ON click.user_id = users.id GROUP BY user_id";
            $result4 = $conn->query($sql4);
            $total = 0;
            while($row4 = mysqli_fetch_assoc($result4)){
                $total = $total+$row4['click_sum'];
            ?> 
        <tr>
            <td class= "text-bold"></td>
            <td><?php echo $row4['fname']." ".$row4['lname'];?></td>
            <td class="text-bold text-center"><?php echo $row4['click_sum'];?></td>
        </tr>
        
        <?php }?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        var t = $('#rankingtbl').DataTable( {
            "columnDefs": [ {
                "searchable": false,
                "orderable": false,
                "targets": [0,2]
            }, {
                "searchable": true,
                "orderable": false,
                "targets": 1
            }],
            "order": [[ 2, 'desc' ]]
        } );

        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    } );
</script>