<?php
    require("connect.php");
    
    if(isset($_POST['salary'])){
        $salary = $_POST['salary'];
        $bonus = $_POST['bonus'];
        $income= $_POST['income'];
        
        $sql = "INSERT INTO info (id,salary,bonus,income)VALUES(null,'$salary','$bonus','$income')";
        
        if(mysqli_query($conn, $sql)) {
            echo "บันทึกข้อมูลเสร็จสิ้น";
            echo "<br><a href='index.php'>ตรวจสอบข้อมูล</a>";
        }else{
            echo"Error: ".$sql."<br>".mysqli_error($conn);
        }
    }

    if(isset($_POST['edit_form_id'])){
        $salary = $_POST['edit_salary'];
        $bonus = $_POST['edit_bonus'];
        $income= $_POST['edit_income'];
        
        $id = $_POST['edit_form_id'];
        
        $sql = "UPDATE info SET salary='$salary',bonus='$bonus',income='$income' WHERE id=$id";
        
        if(mysqli_query($conn, $sql)) {
            echo "<br>บันทึกข้อมูลเสร็จสิ้น";
            echo "<br><a href='index.php'>ตรวจสอบข้อมูล</a>";
        }else{
            echo"Error: ".$sql."<br>".mysqli_error($conn);
        }
    }
    
        
        if(isset($_GET['delete_id'])){
            $id = $_GET['delete_id'];
            
            $sql = "DELETE FROM info WHERE id=$id";
            
            if(mysqli_query($conn, $sql)){
                echo "<br>ลบเรียบร้อย" ;
                echo "<br><a href='index.php'>ตรวจสอบข้อมูล</a>";
            }else{
            echo"Error: ".$sql."<br>".mysqli_error($conn);
        }
            
        }
        

