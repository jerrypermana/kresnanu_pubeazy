
					
<?php
include_once "../../config/koneksi.php";

     $ret = array(
        'total'=>0,
        'rows'=>array()
    );
    header('Content-Type: application/json');

    $limit  = isset($_GET['limit']) ? $_GET['limit'] : 10;
    $offset = isset($_GET['offset']) ? $_GET['offset'] : 0;
    $search = (isset($_GET['search'])) ? $_GET['search'] : '';
    $sort   = (isset($_GET['sort'])) ? $_GET['sort'] : 'p.paper_id';
    $order  = (isset($_GET['order'])) ? $_GET['order'] : 'DESC';
    
   $SQL_BASE="SELECT p.paper_id,
   p.judul,pre.id_presenter,
   pre.member_id,
   pre.realname,pre.afiliasi, 
   p.v_akhir,
   loa.tanggal_verifikasi,
   loa.status 
   FROM paper as p 
   RIGHT JOIN presenter as pre ON p.id_presenter=pre.id_presenter
   RIGHT JOIN loa ON p.paper_id=loa.paper_id
   WHERE p.v_akhir=1 ";
    
    
//    $ret['rows'] = mysqli_fetch_array($result);
    
    if($search<>''){
			//get where
            $SQL_BASE.='AND ';
            $SQL_BASE.='p.judul like "%'.$search.'%" OR ';
            $SQL_BASE.='pre.member_id like "%'.$search.'%" OR ';
			$SQL_BASE.='pre.realname like "%'.$search.'%" ';
			$result = mysqli_query($konek, $SQL_BASE);
			$ret['total'] = mysqli_num_rows($result);
					
			//get where with limit
			$SQL=($sort) ? $SQL_BASE.' ORDER BY '.$sort.' '.$order : $SQL_BASE;
			$SQL.=' LIMIT '.$offset.','.$limit;
            $query=mysqli_query($konek, $SQL);
            //echo $SQL;	
			if($ret['total'] > 0){
                while($result_data = mysqli_fetch_object($query)){
                    $ret['rows'][] = $result_data;
                }
            }
		}else{
           
			//get all
			$result=mysqli_query($konek, $SQL_BASE);
			$ret['total'] = mysqli_num_rows($result);
			//get limit
			$SQL=($sort) ? $SQL_BASE.' ORDER BY '.$sort.' '.$order : $SQL_BASE;
			$SQL.=' LIMIT '.$offset.','.$limit;
            $query=mysqli_query($konek, $SQL);
             //echo $SQL;
			if($ret['total'] > 0){
                while($result_data = mysqli_fetch_object($query)){
                    $ret['rows'][] = $result_data;
                }
            }
		}
    
    echo json_encode($ret);

?>