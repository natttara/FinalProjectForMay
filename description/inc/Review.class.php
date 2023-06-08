<?php

class Review {
    private int $id_review;
    private string $reviewer_name;
    private string $comment;

    public function getReviewId() {
		return $this->id_review;
	}

	public  function getReviewer() {
		return $this->reviewer_name;
	}
	public  function getComment() {
		return $this->comment;
	}

    public function setComment(string $comment) {
		$this->comment = $comment;
	}
    public function setReviewer(string $review) {
		$this->reviewer_name = $review;
	}

}