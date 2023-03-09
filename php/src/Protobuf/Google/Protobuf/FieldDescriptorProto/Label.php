<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: descriptor.proto

namespace Google\Protobuf\FieldDescriptorProto;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.protobuf.FieldDescriptorProto.Label</code>
 */
class Label
{
    /**
     * 0 is reserved for errors
     *
     * Generated from protobuf enum <code>LABEL_UNKNOWN = 0;</code>
     */
    const LABEL_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>LABEL_OPTIONAL = 1;</code>
     */
    const LABEL_OPTIONAL = 1;
    /**
     * Generated from protobuf enum <code>LABEL_REQUIRED = 2;</code>
     */
    const LABEL_REQUIRED = 2;
    /**
     * Generated from protobuf enum <code>LABEL_REPEATED = 3;</code>
     */
    const LABEL_REPEATED = 3;

    private static $valueToName = [
        self::LABEL_UNKNOWN => 'LABEL_UNKNOWN',
        self::LABEL_OPTIONAL => 'LABEL_OPTIONAL',
        self::LABEL_REQUIRED => 'LABEL_REQUIRED',
        self::LABEL_REPEATED => 'LABEL_REPEATED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Label::class, \Google\Protobuf\FieldDescriptorProto_Label::class);

