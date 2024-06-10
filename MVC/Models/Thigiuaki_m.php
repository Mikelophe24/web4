<?php 
class Thigiuaki_m extends connectDB{
    public function thi_ins($id,$mamon,$tenmon,$sotinchi){
        $sql="INSERT INTO mon_hoc VALUES ('$id','$mamon','$tenmon','$sotinchi')";
        return mysqli_query($this->con,$sql);
    }
    public function thi_all(){
        $sql="Select * From mon_hoc";
        return mysqli_query($this->con,$sql);
    }
    function checktrungmaid($id){
        $sql="Select * From mon_hoc Where id='$id'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;  //trùng mã
        }
        return $kq;
    }
    public function thi_find($mamon,$tenmon){
        $sql="SELECT * FROM mon_hoc WHERE mamon like '%$mamon%' 
        AND tenmon like '%$tenmon%'";
        return mysqli_query($this->con,$sql);
    }
    public function thi_find1($id){
        $sql="SELECT * FROM mon_hoc WHERE id like '%$id%'";
        return mysqli_query($this->con,$sql);
    }
    function thi_del($id){
        $sql="DELETE FROM mon_hoc WHERE id = '$id'";
        return mysqli_query($this->con,$sql);
    }
    function thi_upd($id,$mamon,$tenmon,$sotinchi){
        $sql="UPDATE mon_hoc SET mamon='$mamon',tenmon='$tenmon',sotinchi='$sotinchi'
        WHERE id='$id'";
        return mysqli_query($this->con,$sql);
    }
}
?>