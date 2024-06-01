<?php
require_once 'Image.php';

class Product{
    public int $id;
    public string $name;
    public int $upvotes = 0;
    public int $downvotes = 0;
    public ?Image $image = null;

    public function getImage(): ?string {
        return $this->image ? $this->image->getSrc() : null;
    }
}