<?PHP

/**
 * Class qui contient les attributs nécessaires pour la connexion à base de données.
 */
class MySQLDataSource
{
	private $servername;
	private $dbname;
	private $user;
	private $password;

	public function __construct($servername, $dbname, $user, $password)
	{
		$this->servername = $servername;
		$this->dbname = $dbname;
		$this->user = $user;
		$this->password = $password;
	}
	public function __setServername($servername)
	{
		$this->servername = $servername;
	}
	public function __setDbname($dbname)
	{
		$this->dbname = $dbname;
	}
	public function __setUser($user)
	{
		$this->user = $user;
	}
	public function __setPssword($password)
	{
		$this->password = $password;
	}
	public function __getServername()
	{
		return $this->servername;
	}
	public function __getDbname()
	{
		return $this->dbname;
	}
	public function __getUser()
	{
		return $this->user;
	}
	public function __getPassword()
	{
		return $this->password;
	}
}
