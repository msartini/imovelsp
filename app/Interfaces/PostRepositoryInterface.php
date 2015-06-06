<?php namespace App\Interfaces;

interface PostRepositoryInterface
{
    public function all();
    public function findCommentByPostId($id);
    public function findById($id);
    public function findByTitle($title);
}
