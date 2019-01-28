<?php
// Category.php
class Category extends Db {
    /**
     * Attributs
     */
    protected $id;
    protected $title;
    protected $description;
    protected $bdd;
    /**
     * Méthodes magiques
     */
    public function __construct($title, $description) {
        $this->setTitle($title);
        $this->setDescription($description);
    }
    /**
     * Getters
     */
    public function id() {
        return $this->id;
    }
    public function title() {
        return $this->title;
    }
    public function description() {
        return $this->description;
    }
    /**
     * Setters
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }
    /**
     * Methods
     */
    public function save() {
        $this->id = $this->dbCreate("Category", [
            "title"         => $this->title(),
            "description"   => $this->description()
        ]);
        return $this;
        var_dump($this);
    }
    public function delete() {
        $this->id = $this->dbDestroy("Category", $this->id);
    }
}