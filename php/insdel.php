<?php
extract($_POST);
//$con = mysql_connect('localhost', 'root', '');
$con = mysql_connect('bigyellowcat.cs.binghamton.edu', 'naik', 'naik3010');
if (!$con) {
    die('Could not connect: ' . mysql_error($con));
}
//mysql_select_db("ripal");
mysql_select_db("test");
//$sql = "SELECT * FROM user WHERE id = '" . $q . "'";
if ($action == 'add') {

    $sql = "INSERT INTO myform(name,ssn,date,income)VALUES('" . mysql_real_escape_string($name) . "','" . mysql_real_escape_string($ssn) . "','" . mysql_real_escape_string($date) . "','" . mysql_real_escape_string($currency) . "')";
//  echo $sql;
    mysql_query($sql);
    echo mysql_insert_id();
} else if ($action == 'fetch') {
    $sql = "select * from myform";
//  echo $sql;
    $result = mysql_query($sql);
    $str = '<form name="myForm">
                <table width="page">
                    <tr>
                        <td align="center">delete</td>
                        <td align="center">Name</td>
                        <td align="center">SSN</td>
                        <td align="center">Data of Birth</td>
                        <td align="center">Monthly Income</td>
                        <td></td>
                    </tr>';
    if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_array($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $ssn = $row['ssn'];
            $date = $row['date'];
            $currency = $row['income'];
            $str.='<tr>
                        <td><input  type="radio" id="' . $id . '" name="del" onclick="deleteRecord(this.id);"></td>
                        <td><input readonly type="text" value="' . $name . '" id="name1" name="name"></td>
                        <td><input readonly type="text"  value="' . $ssn . '" id="ssn1" name="ssn"></td>
                        <td><input readonly type="text" value="' . $date . '" id="birth1" name="birth"></td>
                        <td><input readonly type="text" value="' . $currency . '" id="xxxx1" name="xxxx"><input type="hidden" name="random1" id="random1"></td>
                    </tr>';
        }
    }
    $str.='  <tr>
                        <td colspan="5" id="scrollCount" align="center" style="padding-top:10px;">&nbsp;</td>
                    </tr>
                </table>
            </form>';
    if (mysql_num_rows($result) == 0) {
        echo 'No data in Our Database please add one or more';
    } else {
        echo $str;
    }
} else if ($action = 'delete') {
    $sql = "DELETE from myform WHERE id=$id";
//  echo $sql;
    $result = mysql_query($sql);
    echo $result;
}

mysql_close($con);
