<?php 

class QueryBuilder {
	protected $pdo;

	public function __construct(PDO $pdo){
		$this->pdo = $pdo;
	}

	public function selectAll($table){
		$statement=$this->pdo->prepare("select * from {$table}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);

	}
	public function insert($table, $parametars){
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(", ",array_keys($parametars)),
			':'.implode(', :',array_keys($parametars))
		);
		try {
		$statement = $this->pdo->prepare($sql);
		$statement->execute($parametars);
		return $this->pdo->lastInsertId();
		} catch (Exception $e) {
			die ('woops , wrong query');
		}

	}

	 public function inserttest($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
            return $this->pdo->lastInsertId();
        } catch (\Exception $e) {
            die ('woops , wrong query test');
        }
    }

	public function delete($table, $parametars){
		$sql = sprintf(
			'delete from %s where %s=%s',
			$table,
			implode(", ",array_keys($parametars)),
			':'.implode(', :',array_keys($parametars))
		);
		try {
		$statement = $this->pdo->prepare($sql);
		$statement->execute($parametars);
		} catch (Exception $e) {
			die (var_dump($e));
		}
	}

	public function selectone($table, $parametars){
			$sql = sprintf(
				'select * from %s where %s=%s',
				$table,
				implode(", ",array_keys($parametars)),
				':'.implode(', :',array_keys($parametars))

			);
			
			try {
			$statement = $this->pdo->prepare($sql);
			$statement->execute($parametars);
			return $statement->fetchAll(PDO::FETCH_CLASS);
			} catch (\Exception $e) {
				die ('woops , wrong query');
			}
	}
	public function selectwithlimit ($table, $parametars,$limit,$order){
				$sql = sprintf(
				'select * from %s where %s=%s ORDER BY %s DESC LIMIT %s',
				$table,
				implode(", ",array_keys($parametars)),
				':'.implode(', :',array_keys($parametars)),
				$order,
				$limit
				);

				try {
					$statement = $this->pdo->prepare($sql);
					$statement->execute($parametars);
					return $statement->fetchAll(PDO::FETCH_CLASS);
					} catch (\Exception $e) {
						die ('woops , wrong query');
					}
	}
	public function selectonewithmore($table,$parametars){

			$sql="SELECT * FROM {$table} WHERE ";
			$k=0;
			foreach ($parametars as $key => $value) {
				$k++;
				if ($k>1){
					$sql.="AND ";
				}
				$sql.="$key = :$key ";
			}
					try {
					$statement = $this->pdo->prepare($sql);
					$statement->execute($parametars);
					return $statement->fetchAll(PDO::FETCH_CLASS);
					} catch (\Exception $e) {
						die ('woops , wrong query');
					}
	}
	public function edit($table, $parametars,$id){
	
		$values="";
		$n=count($parametars);
		$k=0;
		foreach ($parametars as $key => $value){
			$k++;
			$values.=$key."=:".$key;
			if ($k!=$n)
				$values.=" , ";
		}
		$sql = sprintf(
			'UPDATE %s SET %s WHERE %s = %s',
			$table,
			$values,
			implode(", ",array_keys($id)),
			':'.implode(', :',array_keys($id))
		);
		
		try {
		$statement = $this->pdo->prepare($sql);
		foreach ($id as $key => $value) {
			$parametars[$key]=$value;
		}

		$statement->execute($parametars);
		return $this->pdo->lastInsertId();
		} catch (Exception $e) {
			die ('woops , wrong query');
		}

	}

	public function customquery($sql,$parametars){
		try {
	
		$statement = $this->pdo->prepare($sql);
		if (empty($parametars)){
			$statement->execute();
		}
		else
		$statement->execute($parametars);
		return $statement->fetchAll(PDO::FETCH_CLASS);
		} catch (Exception $e) {
			die ('woops , wrong query');
		}

	}
}

?>