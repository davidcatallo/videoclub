<?php

class Movie
{
    protected $id;
    protected $title;
    protected $release_date;
    protected $synopsis;
    protected $id_category;

    public function __construct($title, $release_date, $synopsis) {

        $this->id($id);
        $this->setTitle($title);
        $this->setReleaseDate($release_date);
        $this->setSynopsis($synopsis);
        $this->id_category($category);
    }

    public function id($id){
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setReleaseDate($release_date) {
        $this->release_date = $release_date;
    }

    public function setSynopsis($synopsis) {
        $this->synopsis = $synopsis;
    }

    public function id_category($id_category){
        $this->id_category = $id_category;
}

?>
