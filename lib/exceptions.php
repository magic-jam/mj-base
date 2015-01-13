<?php
/**
 * Thrown when an object is requested to take some action that its
 * current state does not support.
 */
class IllegalStateException extends DomainException {}

/**
 * Represents any sort of IO error
 */
class IOException extends RuntimeException {}

/**
 * Thrown when some operation involving finding something fails.
 *
 * It's explicitly *not* for range/bounds exceptions (e.g. access beyond an array's bounds).
 * In these circumstances use an OutOfRangeException or an OutOfBoundsException from the SPL.
 */
class NotFoundException extends LogicException {}

class SecurityException extends Exception {}

class SyntaxException extends Exception {}

class UnsupportedOperationException extends RuntimeException {}
