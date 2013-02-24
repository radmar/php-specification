<?php
namespace Specification;

class ConjuctionSpecification extends CompositeSpecification {
    private $specs;

    public function __construct() {
        $this->specs = func_get_args();
    }

    public function isSatisfiedBy($candidate) {
        foreach ($this->specs as $spec) {
            if (!$spec->isSatisfiedBy($candidate)) {
                return false;
            }
        }

        return true;
    }
}
