<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store_search.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.SearchResponse</code>
 */
class SearchResponse extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>optional int64 total_hits = 1;</code>
     */
    private $total_hits = 0;
    private $has_total_hits = false;
    /**
     * Generated from protobuf field <code>repeated bytes rows = 2;</code>
     */
    private $rows;
    private $has_rows = false;
    /**
     * Generated from protobuf field <code>optional bool is_all_succeeded = 3;</code>
     */
    private $is_all_succeeded = false;
    private $has_is_all_succeeded = false;
    /**
     * Generated from protobuf field <code>optional bytes next_token = 6;</code>
     */
    private $next_token = '';
    private $has_next_token = false;

    public function __construct() {
        \GPBMetadata\TableStoreSearch::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>optional int64 total_hits = 1;</code>
     * @return int|string
     */
    public function getTotalHits()
    {
        return $this->total_hits;
    }

    /**
     * Generated from protobuf field <code>optional int64 total_hits = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalHits($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_hits = $var;
        $this->has_total_hits = true;

        return $this;
    }

    public function hasTotalHits()
    {
        return $this->has_total_hits;
    }

    /**
     * Generated from protobuf field <code>repeated bytes rows = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Generated from protobuf field <code>repeated bytes rows = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->rows = $arr;
        $this->has_rows = true;

        return $this;
    }

    public function hasRows()
    {
        return $this->has_rows;
    }

    /**
     * Generated from protobuf field <code>optional bool is_all_succeeded = 3;</code>
     * @return bool
     */
    public function getIsAllSucceeded()
    {
        return $this->is_all_succeeded;
    }

    /**
     * Generated from protobuf field <code>optional bool is_all_succeeded = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAllSucceeded($var)
    {
        GPBUtil::checkBool($var);
        $this->is_all_succeeded = $var;
        $this->has_is_all_succeeded = true;

        return $this;
    }

    public function hasIsAllSucceeded()
    {
        return $this->has_is_all_succeeded;
    }

    /**
     * Generated from protobuf field <code>optional bytes next_token = 6;</code>
     * @return string
     */
    public function getNextToken()
    {
        return $this->next_token;
    }

    /**
     * Generated from protobuf field <code>optional bytes next_token = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setNextToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->next_token = $var;
        $this->has_next_token = true;

        return $this;
    }

    public function hasNextToken()
    {
        return $this->has_next_token;
    }

}

