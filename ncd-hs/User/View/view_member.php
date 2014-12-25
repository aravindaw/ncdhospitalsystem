<?php
if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    require_once '../model/member.php';
    $obj_member = new member();
    $results = $obj_member->get_member_by_id($user_id);
    $row = mysql_fetch_assoc($results);
}

?>
<table>
    <tr>
        <th colspan="2">
    <h2>Member Details</h2>
    </th>
    </tr>
    <tr>
        <td>First Name</td>
        <td>: <?php echo $row['fname'];?></td>
    </tr>
    <tr>
        <td>last Name</td>
        <td>: <?php echo $row['lname'];?></td>
    </tr>
    <tr>
        <td>DOB</td>
        <td>: <?php echo $row['dob'];?></td>
    </tr>
    <tr>
        <td>NIC</td>
        <td>:<?php echo $row['nic'];?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>: <?php echo $row['email'];?></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>: <?php echo $row['phone'];?></td>
    </tr>
    <tr>
        <td>Pic</td>
        <td><img src ="images/user_image/<?php echo $row['pic']; ?>"width="100" height="100"</td>
    </tr>
    <tr>
        <td colspan="2"><h3>Login Details</h3></td>
        <td></td>
    </tr>
    <tr>
        <td>User Name</td>
        <td>: <?php echo $row['user_name'];?></td>
    </tr>
    <tr>
        <td>User Role</td>
        <td>: <?php echo $row['role_type'];?></td>
    </tr>
</table>
