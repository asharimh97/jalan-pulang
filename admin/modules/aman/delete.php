<?php 
	if(empty($id)){
		// error, redir to home
		alertGo("Forbidden!", "index.php?modules=$modules&&action=index") ;
	}else{
		// if there is an id do a selection
		$sel = $act->selectWhere("aman", "`id_tempat` = '".$id."'") ;
		
		if($sel->rowCount() == 0){
			alertGo("Data tidak ketemu!", "index.php?modules=$modules&&action=index") ;
		}else{
			// do delete
			$del = $act->delete("aman", "`id_tempat` = '".$id."'") ;
			
			if($del){
				alertGo("Berhasil Menghapus data!", "index.php?modules=$modules&&action=index") ;
			}else{
				alertGo("Erroe! Data tidak dapat dihapus!", "index.php?modules=$modules&&action=index") ;
			}
		}
	}
?>