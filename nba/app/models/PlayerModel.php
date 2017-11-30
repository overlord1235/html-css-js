<?php 

namespace App\Models;
use App\Core\App;

class PlayerModel {
	
	public static function selectAll($table){
		return App::get('database')->selectAll($table);
	}
	public static function insert($table,$vars = [],$file){
		if (!empty($file['picture']['name'])){
			$vars['picture']=$file['picture']['name'];
			$target_dir = "public/images/players/";
		$target_file = $target_dir . basename($file["picture"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		    if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
			}
			if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		} else {
		    if (move_uploaded_file($file["picture"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $file["picture"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		}
		else {
				$vars['picture']="default.png";
		}
		return App::get('database')->insert($table, $vars);
	}

	public static function insertvideo($table,$vars= []){
		App::get('database')->insert($table,$vars);
	}
	public static function selectone($table,$vars = []){
	    return App::get('database')->selectone($table, $vars);
	}
	public static function selectonewithmore($table,$vars = []){
	    return App::get('database')->selectonewithmore($table, $vars);
	}
	public static function delete($table,$vars = []){
		App::get('database')->delete($table,$vars);
	}

	public static function edit($table, $vars = [],$id=[],$file){

		if ($file['picture']['error'] === UPLOAD_ERR_OK) { 
			$vars['picture']=$file['picture']['name'];
			$target_dir = "public/images/teams/";
			$target_file = $target_dir . basename($file["picture"]["name"]);
			move_uploaded_file($file["picture"]["tmp_name"], $target_file);
		}

		App::get('database')->edit($table, $vars,$id);
	}

	public static function selectwithlimit ($table,$vars = [],$limit,$order){
		 return App::get('database')->selectwithlimit($table, $vars,$limit,$order);
	}

	public static function deleteplayer ($table,$vars = []) {
		$player=App::get('database')->selectone($table, $vars);
		if ($player[0]->picture != "default.png") {
			$file=realpath("public/images/players/");
			$file.="/".$player[0]->picture;
			unlink($file);
		}
		 App::get('database')->delete("ytvideos", $vars);
		 App::get('database')->delete($table, $vars);
		

	}
	public static function deleteteam ($table,$vars = []){
		 $par['id_team']=0;
		 App::get('database')->edit($table,$par,$vars);
		 $team=App::get('database')->selectone($table, $vars);
		 $file=realpath("public/images/teams/");
		 $file.="/".$team[0]->team_logo;
		 unlink($file);
		 App::get('database')->delete($table, $vars);
	}
	public static function customquery($sql,$vars=[]){
		return App::get('database')->customquery($sql,$vars);
	}

}