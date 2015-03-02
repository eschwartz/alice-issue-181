<?php


namespace eschwartz\AliceIssue181\DataProvider;


use Doctrine\Common\Collections\ArrayCollection;
use eschwartz\AliceIssue181\Model\Book;

class MyProvider {

	public function ArrayCollection($var_objects) {
		$objects = func_get_args();
		return new ArrayCollection($objects);
	}

	public function BookOnTheFly($name){
		$book = new Book();
		$book->setName($name);

		return $book;
	}

}