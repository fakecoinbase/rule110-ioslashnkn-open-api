<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protobuf/protos/transaction.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protos.UnsignedTx</code>
 */
class UnsignedTx extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protos.Payload payload = 1;</code>
     */
    protected $payload = null;
    /**
     * Generated from protobuf field <code>uint64 nonce = 2;</code>
     */
    protected $nonce = 0;
    /**
     * Generated from protobuf field <code>int64 fee = 3;</code>
     */
    protected $fee = 0;
    /**
     * Generated from protobuf field <code>bytes attributes = 4;</code>
     */
    protected $attributes = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Protos\Payload $payload
     *     @type int|string $nonce
     *     @type int|string $fee
     *     @type string $attributes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protobuf\Protos\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.protos.Payload payload = 1;</code>
     * @return \Protos\Payload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>.protos.Payload payload = 1;</code>
     * @param \Protos\Payload $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Protos\Payload::class);
        $this->payload = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 nonce = 2;</code>
     * @return int|string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * Generated from protobuf field <code>uint64 nonce = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkUint64($var);
        $this->nonce = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 3;</code>
     * @return int|string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes attributes = 4;</code>
     * @return string
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Generated from protobuf field <code>bytes attributes = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAttributes($var)
    {
        GPBUtil::checkString($var, False);
        $this->attributes = $var;

        return $this;
    }

}

