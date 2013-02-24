<?php
namespace Specification;

interface Specification {
    public function isSatisfiedBy($candidate);
    public function intersect($other);
    public function union($other);
    public function not();
}
