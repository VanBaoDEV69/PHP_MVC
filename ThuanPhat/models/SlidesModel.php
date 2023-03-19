<?php
class SlidesModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllSlides() {
        $stmt = $this->db->prepare("SELECT * FROM slides");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllSlidesHome() {
        $stmt = $this->db->prepare("SELECT * FROM slides WHERE map = 'home'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getSlidesById($id) {
        $stmt = $this->db->prepare("SELECT * FROM slides WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

    public function createSlides($img, $caption, $content,$map) {
        $stmt = $this->db->prepare("INSERT INTO slides (img, caption, content, map) VALUES (:img, :caption, :content, :map)");
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':caption', $caption);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':map', $map);
        $stmt->execute();
    }

    public function updateSlides($id, $img, $caption, $content,$map) {
        $stmt = $this->db->prepare("UPDATE slides SET img = :img, caption = :caption, content = :content , map = :map WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':caption', $caption);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':map', $map);
        $stmt->execute();
    }

    public function deleteSlides($id) {
        $stmt = $this->db->prepare("DELETE FROM slides WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
