<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: descriptor.proto

namespace Google\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes an enum type.
 *
 * Generated from protobuf message <code>google.protobuf.EnumDescriptorProto</code>
 */
class EnumDescriptorProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string name = 1;</code>
     */
    protected $name = null;
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.EnumValueDescriptorProto value = 2;</code>
     */
    private $value;
    /**
     * Generated from protobuf field <code>optional .google.protobuf.EnumOptions options = 3;</code>
     */
    protected $options = null;
    /**
     * Range of reserved numeric values. Reserved numeric values may not be used
     * by enum values in the same enum declaration. Reserved ranges may not
     * overlap.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.EnumDescriptorProto.EnumReservedRange reserved_range = 4;</code>
     */
    private $reserved_range;
    /**
     * Reserved enum value names, which may not be reused. A given name may only
     * be reserved once.
     *
     * Generated from protobuf field <code>repeated string reserved_name = 5;</code>
     */
    private $reserved_name;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type array<\Google\Protobuf\EnumValueDescriptorProto>|\Google\Protobuf\Internal\RepeatedField $value
     *     @type \Google\Protobuf\EnumOptions $options
     *     @type array<\Google\Protobuf\EnumDescriptorProto\EnumReservedRange>|\Google\Protobuf\Internal\RepeatedField $reserved_range
     *           Range of reserved numeric values. Reserved numeric values may not be used
     *           by enum values in the same enum declaration. Reserved ranges may not
     *           overlap.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $reserved_name
     *           Reserved enum value names, which may not be reused. A given name may only
     *           be reserved once.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Generated from protobuf field <code>optional string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.EnumValueDescriptorProto value = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.EnumValueDescriptorProto value = 2;</code>
     * @param array<\Google\Protobuf\EnumValueDescriptorProto>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValue($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\EnumValueDescriptorProto::class);
        $this->value = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.EnumOptions options = 3;</code>
     * @return \Google\Protobuf\EnumOptions|null
     */
    public function getOptions()
    {
        return $this->options;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.EnumOptions options = 3;</code>
     * @param \Google\Protobuf\EnumOptions $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\EnumOptions::class);
        $this->options = $var;

        return $this;
    }

    /**
     * Range of reserved numeric values. Reserved numeric values may not be used
     * by enum values in the same enum declaration. Reserved ranges may not
     * overlap.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.EnumDescriptorProto.EnumReservedRange reserved_range = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReservedRange()
    {
        return $this->reserved_range;
    }

    /**
     * Range of reserved numeric values. Reserved numeric values may not be used
     * by enum values in the same enum declaration. Reserved ranges may not
     * overlap.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.EnumDescriptorProto.EnumReservedRange reserved_range = 4;</code>
     * @param array<\Google\Protobuf\EnumDescriptorProto\EnumReservedRange>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReservedRange($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\EnumDescriptorProto\EnumReservedRange::class);
        $this->reserved_range = $arr;

        return $this;
    }

    /**
     * Reserved enum value names, which may not be reused. A given name may only
     * be reserved once.
     *
     * Generated from protobuf field <code>repeated string reserved_name = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReservedName()
    {
        return $this->reserved_name;
    }

    /**
     * Reserved enum value names, which may not be reused. A given name may only
     * be reserved once.
     *
     * Generated from protobuf field <code>repeated string reserved_name = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReservedName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->reserved_name = $arr;

        return $this;
    }

}

