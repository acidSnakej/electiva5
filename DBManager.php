<?php
class DB_mysqli{
		/* Variables de conexión */
		private $db;
		private $server;
		private $user;
		private $pass;
		private $conx;

		/* Método Constructor: La primera función que se ejecuta */
		function __construct()
		{
			$this->server = "localhost";
			$this->user = "root";
			$this->pass = "";
			$this->db = "electiva";

			$this->connect();
		}

		function connect()
		{
			$this->conx = new mysqli ($this->server,$this->user,$this->pass);
			if($this->conx->connect_error)
				die("Conexion fallida");
			else
				$this->bd = mysqli_select_db($this->conx,$this->db);
		}

		function insert($table,$values)
		{
			$sql = "INSERT INTO {$table} VALUES ({$values})";
			$query = mysqli_query($this->conx, $sql);
			return $query;

		}

		function lastid($table)
		{
			$sql = "SELECT id +1 FROM pqrsdf.{$table} ORDER BY id DESC LIMIT 1";
			$query = mysqli_query($this->conx,$sql);
			$row = mysqli_fetch_array($query);
			$id = $row[0];
			return $id;
		}

		function linkupMensaje($conditions = null)
		{
			$sql= "SELECT p.Nombre, p.Apellido,  m.Asunto, pq.Descripcion, m.fecha_envio, p.Correo, p.Tipo_user,  m.id
							FROM mensaje m INNER JOIN personas p ON p.id = m.Personas_id
									INNER JOIN PQRS pq ON pq.id = m.PQRS_id";
			if (!is_null($conditions)):

				$sql.=" WHERE m.id = {$conditions}";

			endif;
			$sql.=" ORDER BY fecha_envio DESC";
			$query = mysqli_query($this->conx,$sql);
			return $query;
		}

		function query($table, $cols, $conditions = null)
		{
			$sql = "SELECT {$cols} FROM {$table}";
			if (!is_null($conditions)) $sql .= " WHERE $conditions";

			$query = mysqli_query($this->conx, $sql);
			return $query;
		}

		function __destruct()
		{
			mysqli_close($this->conx);
		}

}

$miConexion = new DB_mysqli();