<?php namespace Lavoaster\LightBlog\Blog\Storage;

interface BlogPostInterface
{

    public function getTitle();

    public function setTitle($title);

    public function getContent();

    public function setContent($content);

    public function getAuthor();

    public function setAuthor($author);

    public function getPublishDate();

    public function setPublishDate($date);

    public function save();

}