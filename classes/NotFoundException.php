<?php
/**
 * Thrown when some operation involving finding something fails.
 *
 * It's explicitly *not* for range/bounds exceptions (e.g. access beyond an array's bounds).
 * In these circumstances use an OutOfRangeException or an OutOfBoundsException from the SPL.
 */
class NotFoundException extends LogicException {}
