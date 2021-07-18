<?PHP
class showbranchid extends getbranchid{
        public function showbid(){
            $datas = $this->getbid();
            foreach($datas as $data){
                
                echo '<option >'.$data['branch_id'].'</option>';

            }
        }
    }



?>