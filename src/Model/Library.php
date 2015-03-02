<?php


namespace eschwartz\AliceIssue181\Model;


use Doctrine\Common\Collections\ArrayCollection;

class Library {
	/** @var ArrayCollection */
	private $books;

	public function __construct() {
		$this->books = new ArrayCollection();
	}

	public function setBooks(ArrayCollection $books) {
		$this->books = $books;
   }

	public function addBook(Book $book) {
		$this->books[] = $book;
	}
}