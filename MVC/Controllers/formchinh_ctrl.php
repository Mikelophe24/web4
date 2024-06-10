<?php 
class formchinh_ctrl extends controller{
    private $ds;
    function __construct()
    {
        $this->ds=$this->model('Thigiuaki_m');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'formchinh_v'
        ]);
    }
    function timkiem(){
        if(isset($_POST['btnTimkiem'])){
            $mamon=$_POST['txtMaMonHoc'];
            $tenmon=$_POST['txtTenMonHoc'];
            $sotinchi=isset($_POST['txtSoTinChi']) ? isset($_POST['txtSoTinChi']) : '';
            $dulieu=$this->ds->thi_find($mamon,$tenmon);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout',[
                'page'=>'formchinh_v',
                'dulieu'=>$dulieu,
                'mamon'=>$mamon,
                'tenmon'=>$tenmon,
                'sotinchi'=>$sotinchi
            ]);
        }
    }
    function timkiem1(){
        
        $mamon='';
        $tenmon='';
        $sotinchi=isset($_POST['txtSoTinChi']) ? isset($_POST['txtSoTinChi']) : '';
        $dulieu=$this->ds->thi_find($mamon,$tenmon);
        //Gọi lại giao diện và truyền $dulieu ra
        $this->view('Masterlayout',[
            'page'=>'formchinh_v',
            'dulieu'=>$dulieu,
            'mamon'=>$mamon,
            'tenmon'=>$tenmon,
            'sotinchi'=>$sotinchi
        ]);
    
}
    function xoa($id){
        $kq=$this->ds->thi_del($id);
        if($kq)
            echo "<script>alert('Xóa thành công!')</script>";
        else
            echo "<script>alert('Xóa thất bại!')</script>";
        $mamon=isset($_POST['txtMaMonHoc']) ? isset($_POST['txtMaMonHoc']) : '' ;
        $tenmon=isset($_POST['txtTenMonHoc']) ? isset($_POST['txtTenMonHoc']) : '';
        $sotinchi=isset($_POST['txtSoTinChi']) ? isset($_POST['txtSoTinChi']) : '';
        $dulieu=$this->ds->thi_find($mamon,$tenmon);
        //Gọi lại giao diện và truyền $dulieu ra
        $this->view('Masterlayout',[
            'page'=>'formchinh_v',
            'dulieu'=>$dulieu,
            'mamon'=>$mamon,
            'tenmon'=>$tenmon,
            'sotinchi'=>$sotinchi

        ]);
    }
    function sua($id){
        $this->view('Masterlayout',[
            'page'=>'formsua_v',
            'dulieu'=>$this->ds->thi_find1($id)
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $id=$_POST['txtIDMonHoc'];
            $mamon=$_POST['txtMaMonHoc'];
            $tenmon=$_POST['txtTenMonHoc'];
            $sotinchi = $_POST['txtSoTinChi'];
            //gọi hàm sủa dl tacgia_udp trong model
            $kq=$this->ds->thi_upd($id,$mamon,$tenmon,$sotinchi);
            
            if($kq){
                echo "<script>alert('Sửa thành công!')</script>";
            }
            else
                echo "<script>alert('Sửa thất bại!')</script>";
           
            //Gọi lại giao diện và truyền $dulieu ra
            $mamon=$_POST['txtMaMonHoc'];
            $tenmon=$_POST['txtTenMonHoc'];
            $sotinchi = $_POST['txtSoTinChi'];
            $dulieu=$this->ds->thi_find($mamon,$tenmon);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout',[
                'page'=>'formchinh_v',
                'dulieu'=>$dulieu,
                'mamon'=>$mamon,
                'tenmon'=>$tenmon,
                'sotinchi'=>$sotinchi
            ]);
                
        }
    }
}
?>
