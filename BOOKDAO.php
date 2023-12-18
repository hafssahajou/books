
<?php
require_once "database.php";
require_once "book.php";

class BookDao {
    private $db;
    public function __construct() {
        $this -> db = Database::getInstance()->getConnection();
    }

    public function getAllBooks(){
        // $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
        // $stmt->execute();
        // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt = $this->db->prepare("SELECT * From Book");
        $stmt->execute();
        $books= [];
        $results = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $results = $stmt->FetchAll();
        foreach($results as $result)
            $books[] = new Book($result["ISBN"],$result["Title"],$result["Genra"],$result["Price"],$result["NbrofPages"],$result["Author"]);
        return ($books);
    }

    public function insertBook($book){
        // $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
        // $stmt->execute();
        // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt = $this->db->prepare("INSERT INTO `book`(`ISBN`, `Title`, `Genra`, `Price`, `NbrofPages`, `Author`) VALUES ('".$book->getISBN()."','".$book->getTitle()."','".$book->getGenra()."','".$book->getPrice()."','".$book->getNbrofpages()."','".$book->getAuhor()."')");
        $stmt->execute();
        
    }
    public function updatetBook($book){
        // $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
        // $stmt->execute();
        // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $sql = "UPDATE `book` SET `Title`='".$book->getTitle()."',`Genra`='".$book->getGenra()."',`Price`=".$book->getPrice().",`NbrofPages`=".$book->getNbrofpages().",`Author`='".$book->getAuhor()."' WHERE `ISBN`='".$book->getISBN()."'"; 
        echo " ".$sql." ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
    }
    public function deleteBook($ISBN){
        // $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
        // $stmt->execute();
        // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $sql = "DELETE FROM `book` WHERE ISBN='".$ISBN."'"; 
        echo " ".$sql." ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

}
}




// $bookDAO = new BookDao();
// $book = new book("hmama33","hmama9009","genre",12.11,6,"hayat");
// $bookDAO->insertBook($book);
// // print_r($bookDAO->getAllBooks());




$bookDAO = new BookDao();
$bookDAO->deleteBook("hmama33");



