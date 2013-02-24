<?php
namespace Specification;

class AndSpecification extends CompositeSpecification {
    private $left;
    private $right;

    public function __construct($left, $right) {
        $this->left = $left;
        $this->right = $right;
    }

    public function isSatisfiedBy($candidate) {
        return $this->left->isSatisfiedBy($candidate)
            && $this->right->isSatisfiedBy($candidate);
    }
}
