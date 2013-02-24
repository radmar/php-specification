<?php
namespace Specification;

class NotSpecification extends CompositeSpecification {
    private $original;
    public function __construct($original) {
        $this->original = $original;
    }

    public function isSatisfiedBy($candidate) {
        return !$this->original->isSatisfiedBy($candidate);
    }
}
