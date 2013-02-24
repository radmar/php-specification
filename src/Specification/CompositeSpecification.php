<?php
namespace Specification;

abstract class CompositeSpecification implements Specification {
    public function intersect($other) {
        return new AndSpecification($this, $other);
    }

    public function union($other) {
        return new OrSpecification($this, $other);
    }

    public function not() {
        return new NotSpecification($this);
    }
}
