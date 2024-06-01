<?php
class Image{
    public string $id;
    public string $file_name;
    public string $alt;

        public function getSrc(): string{
        return "/uploads/img/{$this->file_name}";
    }
}