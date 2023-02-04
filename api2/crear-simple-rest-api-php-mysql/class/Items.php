<?php
class Items{   
    
    private $itemsTable = "tbl_pacientes";      
    public $pac_id;
    public $pac_nombre;
    public $pac_dni;
    public $pac_altura;
    public $pac_peso;   
    public $pac_imc; 
	public $pac_resultado; 
    private $conn;
	
    public function __construct($db){
        $this->conn = $db;
    }	
	
	function read(){	
		if($this->pac_id) {
			$stmt = $this->conn->prepare("SELECT * FROM ".$this->itemsTable." WHERE id = ?");
			$stmt->bind_param("i", $this->pac_id);					
		} else {
			$stmt = $this->conn->prepare("SELECT * FROM ".$this->itemsTable);		
		}		
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
	
	function create(){
		
		$stmt = $this->conn->prepare("
			INSERT INTO ".$this->itemsTable."(`pac_nombre`, `pac_dni`, `pac_altura`, `pac_peso`, `pac_imc`, `pac_resultado`)
			VALUES(?,?,?,?,?,?)");
		
		$this->pac_nombre = htmlspecialchars(strip_tags($this->pac_nombre));
		$this->pac_dni = htmlspecialchars(strip_tags($this->pac_dni));
		$this->pac_altura = htmlspecialchars(strip_tags($this->pac_altura));
		$this->pac_peso = htmlspecialchars(strip_tags($this->pac_peso));
		$this->pac_imc = htmlspecialchars(strip_tags($this->pac_imc));
		$this->pac_resultado = htmlspecialchars(strip_tags($this->pac_resultado));
		
		
		$stmt->bind_param("ssiis", $this->pac_nombre, $this->pac_dni, $this->pac_altura, $this->pac_peso, $this->pac_imc, $this->pac_resultado);
		
		if($stmt->execute()){
			return true;
		}
	 
		return false;		 
	}
		
	function update(){
	 
		$stmt = $this->conn->prepare("
			UPDATE ".$this->itemsTable." 
			SET pac_nombre= ?, pac_dni= ?, pac_altura= ?, pac_peso= ?, pac_imc= ?, pac_resultado= ? 
			WHERE id = ?");
	 
		$this->pac_id = htmlspecialchars(strip_tags($this->pac_id));
		$this->pac_nombre = htmlspecialchars(strip_tags($this->pac_nombre));
		$this->pac_dni = htmlspecialchars(strip_tags($this->pac_dni));
		$this->pac_altura = htmlspecialchars(strip_tags($this->pac_altura));
		$this->pac_peso = htmlspecialchars(strip_tags($this->pac_peso));
		$this->pac_imc = htmlspecialchars(strip_tags($this->pac_imc));
		$this->pac_resultado = htmlspecialchars(strip_tags($this->pac_resultado));
	 
		$stmt->bind_param("ssiisi", $this->pac_nombre, $this->pac_dni, $this->pac_altura, $this->pac_peso, $this->pac_imc, $this->pac_resultado, $this->pac_id);
		
		if($stmt->execute()){
			return true;
		}
	 
		return false;
	}
	
	function delete(){
		
		$stmt = $this->conn->prepare("
			DELETE FROM ".$this->itemsTable." 
			WHERE id = ?");
			
		$this->pac_id = htmlspecialchars(strip_tags($this->pac_id));
	 
		$stmt->bind_param("i", $this->pac_id);
	 
		if($stmt->execute()){
			return true;
		}
	 
		return false;		 
	}
}
?>