<?php
require_once ('/var/www/html/app/model/connect.php');
$conn = dbConnect();
if ($conn) {
$sql = "SELECT * FROM EMM_ZOO.SANICAR ORDER BY CARID ASC";
$stmt = dbQuery($conn,$sql);
while ($row = dbFetchArray($conn,$stmt)) {
print "\t<tr><td>$row[0]</td><td>$row[1]</td>
<td>&nbsp;&nbsp;<a class='modal-trigger' href='#delete$row[0]'><i class='small material-icons'>delete</i></a></td>
<td><a class='modal-trigger' href='#edit$row[0]'><i class='small material-icons'>edit</i></a></td></tr>\n";

        
        // Edit Modal Structure
        print "<div id='edit$row[0]' class='modal bottom-sheet'>";
        print "<form method ='post' name='edit_carplate_form'>";
        print "<div class='modal-content'>";
        print "<h4>Edit Car Plate No</h4>";
        print "<div class='row'>";
        
        print "<div class='input-field col s12 m12'>";
        print "<i class='material-icons prefix'>account_box</i>";
        print "<input value='$row[1]' name='edit_carplate' id='name' type='text' class='validate' maxlength='6' required/>";
        print "<label for='name'>Car Plate No</label>";
        print "</div>";
        
        print "</div>"; // row
        print "</div>"; // modal-content
        
        print "<div class='modal-footer'>";
        print "<input type='hidden' value='$row[0]' name='update_carid'>";
        print "<button href='#!' class='modal-action modal-close cyan darken-1 btn' type='submit' name='submit_edit_carplate'><i class='material-icons'>edit</i> Save</button>";
        print "</div>"; //modal-footer
        print "</form>";
        print "</div>"; //modal

// Delete Modal Structure
        print " <div id='delete$row[0]' class='modal'>";
        print " <div class='modal-content'>";
        print " <h4>Delete Confirm</h4>";
        print " <p>Are you sure do you want do delete?</p>";
        print " </div>";
        print " <div class='modal-footer'>";
        print " <form action='deleteCar.php' method ='get'>";
        print " <input type='hidden' value='$row[0]' name='delete_id'>";
        print " <button class='modal-action modal-close btn red darken-3 waves-effect waves-light' type='submit' name='action_delete'>Delete</button>";
        print " &nbsp;&nbsp;&nbsp;<a href='#!' class='modal-action modal-close btn-flat waves-effect waves-light'>Close</a>";
        print " </form></div></div>";

}
db2_free_stmt($stmt);
db2_close($conn);
}
else {
echo "Connection failed" .db2_conn_errormsg($conn);
}
?>