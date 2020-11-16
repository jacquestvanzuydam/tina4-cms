<?php
class Article extends \Tina4\ORM
{
    public $tableName="article";
    public $primaryKey="id"; //set for primary key
    //public $softDelete=true; //uncomment for soft deletes in crud
    
	public $id;
	public $publishedDate;
	public $title;
	public $description;
	public $keywords;
	public $image;
	public $content;
	public $author;
	public $isPublished=0;
    public $userId;
    public $slug;



}