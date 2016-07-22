<!-- Data Table -->
    <div class="col-lg-12"> 
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Phone</th>    
                    <th>Address</th>
                    <th>Package</th>
                    <th>Adult</th>
                    <th>Child</th>
                    <th>Action</th>
                </thead>

                <tbody>

            <?php
                include "../../../connect/connect.php";

                $select = mysql_query("SELECT * FROM tbl_booking_manu ORDER BY bookDateReserve DESC");
                $sum = mysql_num_rows($select);
                if ($sum > 0) {
                    while($row = mysql_fetch_array($select)) {
                        echo "
                            <tr>
                                <td hidden>$row[id_booking]</td>
                                <td>$row[bookName]</td>
                                <td>$row[bookEmail]</td>
                                <td>$row[bookDateReserve]</td>
                                <td>$row[bookPhone]</td>
                                <td>$row[bookAddress]</td>
                                <td>$row[bookPackage]</td>
                                <td>$row[bookAdult]</td>
                                <td>$row[bookChild]</td>
                                <td><a href='#'><i class='fa fa-trash-o' title='Delete'></i></a></td>
                            </tr>
                        ";
                    }
                }
                else {
                    echo "Data Kosong";
                }
            ?>
<!--                 
                    <tr>
                        <td>Admin</td>
                        <td>ad_manu@gmail.com</td>
                        <td>08/07/2016</td>
                        <td>081999333222</td>
                        <td>Jl Diponegoro No.02</td>
                        <td>A</td>
                        <td>2</td>
                        <td>1</td>
                        <td><a href="#"><i class="fa fa-trash-o" title="Delete"></i></a></td>
                    </tr>
                </tbody> -->
            </table>
        </div>
    </div>